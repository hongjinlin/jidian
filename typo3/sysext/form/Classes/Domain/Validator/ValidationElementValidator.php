<?php
namespace TYPO3\CMS\Form\Domain\Validator;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\Validation\Validator\ValidatorInterface;

/**
 * A generic object validator which allows for specifying property validators
 */
class ValidationElementValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator implements \TYPO3\CMS\Extbase\Validation\Validator\ObjectValidatorInterface
{
    /**
     * @var \SplObjectStorage[]
     */
    protected $propertyValidators = array();

    /**
     * @var \TYPO3\CMS\Form\Utility\SessionUtility
     */
    protected $sessionUtility;

    /**
     * @param \TYPO3\CMS\Form\Utility\SessionUtility $sessionUtility
     */
    public function injectSessionUtility(\TYPO3\CMS\Form\Utility\SessionUtility $sessionUtility)
    {
        $this->sessionUtility = $sessionUtility;
    }

    /**
     * Checks if the given value is valid according to the validator, and returns
     * the Error Messages object which occurred.
     *
     * @param mixed $value The value that should be validated
     * @return \TYPO3\CMS\Extbase\Error\Result
     * @api
     */
    public function validate($value)
    {
        $this->result = new \TYPO3\CMS\Extbase\Error\Result();
        if ($this->acceptsEmptyValues === false || $this->isEmpty($value) === false) {
            if (!is_object($value)) {
                $this->addError('Object expected, %1$s given.', 1241099149, array(gettype($value)));
            } elseif ($this->isValidatedAlready($value) === false) {
                $this->isValid($value);
            }
        }

        return $this->result;
    }

    /**
     * Load the property value to be used for validation.
     *
     * In case the object is a doctrine proxy, we need to load the real instance first.
     *
     * @param \TYPO3\CMS\Form\Domain\Model\ValidationElement $validationElement
     * @param string $propertyName
     * @return mixed
     */
    protected function getPropertyValue(\TYPO3\CMS\Form\Domain\Model\ValidationElement $validationElement, $propertyName)
    {
        /**
         * If a confirmation page is set and a fileupload was done before
         * there is no incoming data if the process action is called.
         * The data is only in the session at this time.
         * This results in a negative validation (if a validation is set).
         * Therefore, look first in the session.
         */
        if ($this->sessionUtility->getSessionData($propertyName)) {
            $propertyValue = $this->sessionUtility->getSessionData($propertyName);
        } else {
            $propertyValue = $validationElement->getIncomingField($propertyName);
        }
        return $propertyValue;
    }

    /**
     * Checks if the specified property of the given object is valid, and adds
     * found errors to the $messages object.
     *
     * @param mixed $value The value to be validated
     * @param \Traversable $validators The validators to be called on the value
     * @param string $propertyName Name of ther property to check
     * @return void
     */
    protected function checkProperty($value, $validators, $propertyName)
    {
        /** @var \TYPO3\CMS\Extbase\Error\Result $result */
        $result = null;
        foreach ($validators as $validator) {
            if ($validator instanceof ObjectValidatorInterface) {
                $validator->setValidatedInstancesContainer($this->validatedInstancesContainer);
            }

            /**
             * File upload validation.
             *
             * If a $_FILES array is found in the request data,
             * iterate over all requested files and validate each
             * single file.
             */
            if (
                isset($value[0]['name'])
                && isset($value[0]['type'])
                && isset($value[0]['tmp_name'])
                && isset($value[0]['size'])
            ) {
                foreach ($value as $file) {
                    $currentResult = $validator->validate($file);
                    if ($currentResult->hasMessages()) {
                        if ($result == null) {
                            $result = $currentResult;
                        } else {
                            $result->merge($currentResult);
                        }
                    }
                }
            } else {
                $currentResult = $validator->validate($value);
                if ($currentResult->hasMessages()) {
                    if ($result == null) {
                        $result = $currentResult;
                    } else {
                        $result->merge($currentResult);
                    }
                }
            }
        }
        if ($result != null) {
            $this->result->forProperty($propertyName)->merge($result);
        }
    }

    /**
     * Checks if the given value is valid according to the property validators.
     *
     * @param mixed $object The value that should be validated
     * @return void
     * @api
     */
    protected function isValid($object)
    {
        foreach ($this->propertyValidators as $propertyName => $validators) {
            $propertyValue = $this->getPropertyValue($object, $propertyName);
            $this->checkProperty($propertyValue, $validators, $propertyName);
        }
    }

    /**
     * Checks the given object can be validated by the validator implementation
     *
     * @param mixed $object The object to be checked
     * @return bool TRUE if the given value can be validated
     * @api
     */
    public function canValidate($object)
    {
        if (
            is_object($object)
            && $object instanceof \TYPO3\CMS\Form\Domain\Model\ValidationElement
        ) {
            return true;
        }
        return false;
    }

    /**
     * Adds the given validator for validation of the specified property.
     *
     * @param string $propertyName Name of the property to validate
     * @param ValidatorInterface $validator The property validator
     * @return void
     * @api
     */
    public function addPropertyValidator($propertyName, ValidatorInterface $validator)
    {
        if (!isset($this->propertyValidators[$propertyName])) {
            $this->propertyValidators[$propertyName] = new \SplObjectStorage();
        }
        $this->propertyValidators[$propertyName]->attach($validator);
    }

    /**
     * @param object $object
     * @return bool
     */
    protected function isValidatedAlready($object)
    {
        if ($this->validatedInstancesContainer === null) {
            $this->validatedInstancesContainer = new \SplObjectStorage();
        }
        if ($this->validatedInstancesContainer->contains($object)) {
            return true;
        } else {
            $this->validatedInstancesContainer->attach($object);

            return false;
        }
    }

    /**
     * Returns all property validators - or only validators of the specified property
     *
     * @param string $propertyName Name of the property to return validators for
     * @return array An array of validators
     */
    public function getPropertyValidators($propertyName = null)
    {
        if ($propertyName !== null) {
            return (isset($this->propertyValidators[$propertyName])) ? $this->propertyValidators[$propertyName] : array();
        } else {
            return $this->propertyValidators;
        }
    }

    /**
     * @return int
     */
    public function countPropertyValidators()
    {
        $count = 0;
        foreach ($this->propertyValidators as $propertyValidators) {
            $count += $propertyValidators->count();
        }
        return $count;
    }

    /**
     * @var \SplObjectStorage
     */
    protected $validatedInstancesContainer;

    /**
     * Allows to set a container to keep track of validated instances.
     *
     * @param \SplObjectStorage $validatedInstancesContainer A container to keep track of validated instances
     * @return void
     * @api
     */
    public function setValidatedInstancesContainer(\SplObjectStorage $validatedInstancesContainer)
    {
        $this->validatedInstancesContainer = $validatedInstancesContainer;
    }
}
