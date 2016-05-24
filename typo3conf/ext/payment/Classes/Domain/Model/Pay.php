<?php
namespace NGOOS\Payment\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 王者 <it.support@qq.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Pay
 */
class Pay extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

    /**
     * @var boolean
     */
    protected $hidden;

    /**
     * @var integer
     */
    protected $crdate;

	/**
	 * 付款金额
	 *
	 * @var float
	 * @validate NotEmpty
	 */
	protected $money = 0.0;

	/**
	 * 付款人的姓名
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * 付款人的邮箱
	 *
	 * @var string
	 */
	protected $email = '';

	/**
	 * 付款人的电话
	 *
	 * @var string
	 */
	protected $telephone = '';

	/**
	 * 赠言
	 *
	 * @var string
	 */
	protected $comment = '';

	/**
	 * 付款所属模块
	 *
	 * @var string
	 */
	protected $module = '';

	/**
	 * 页面标题
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * 付款所在模块的数据ID
	 *
	 * @var integer
	 */
	protected $datauid = 0;

	/**
	 * 付款页面的链接
	 *
	 * @var string
	 */
	protected $url = '';

	/**
	 * 付款平台返回的订单编号
	 *
	 * @var string
	 */
	protected $ordernumber = '';

	/**
	 * 支付方式, 微信/支付宝
	 *
	 * @var string
	 */
	protected $payment = '';

	/**
	 * 电子证书的编号
	 *
	 * @var string
	 */
	protected $certnumber = '';

	/**
	 * 传播分享人的ID
	 *
	 * @var integer
	 */
	protected $spreadshareuserid = 0;

	/**
	 * Returns the money
	 *
	 * @return float $money
	 */
	public function getMoney() {
		return $this->money;
	}

	/**
	 * Sets the money
	 *
	 * @param float $money
	 * @return void
	 */
	public function setMoney($money) {
		$this->money = $money;
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the telephone
	 *
	 * @return string $telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Sets the telephone
	 *
	 * @param string $telephone
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}

	/**
	 * Returns the comment
	 *
	 * @return string $comment
	 */
	public function getComment() {
		return $this->comment;
	}

	/**
	 * Sets the comment
	 *
	 * @param string $comment
	 * @return void
	 */
	public function setComment($comment) {
		$this->comment = $comment;
	}

	/**
	 * Returns the module
	 *
	 * @return string $module
	 */
	public function getModule() {
		return $this->module;
	}

	/**
	 * Sets the module
	 *
	 * @param string $module
	 * @return void
	 */
	public function setModule($module) {
		$this->module = $module;
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the datauid
	 *
	 * @return integer $datauid
	 */
	public function getDatauid() {
		return $this->datauid;
	}

	/**
	 * Sets the datauid
	 *
	 * @param integer $datauid
	 * @return void
	 */
	public function setDatauid($datauid) {
		$this->datauid = $datauid;
	}

	/**
	 * Returns the url
	 *
	 * @return string $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the url
	 *
	 * @param string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

	/**
	 * Returns the ordernumber
	 *
	 * @return string $ordernumber
	 */
	public function getOrdernumber() {
		return $this->ordernumber;
	}

	/**
	 * Sets the ordernumber
	 *
	 * @param string $ordernumber
	 * @return void
	 */
	public function setOrdernumber($ordernumber) {
		$this->ordernumber = $ordernumber;
	}

	/**
	 * Returns the payment
	 *
	 * @return string $payment
	 */
	public function getPayment() {
		return $this->payment;
	}

	/**
	 * Sets the payment
	 *
	 * @param string $payment
	 * @return void
	 */
	public function setPayment($payment) {
		$this->payment = $payment;
	}

	/**
	 * Returns the certnumber
	 *
	 * @return string $certnumber
	 */
	public function getCertnumber() {
		return $this->certnumber;
	}

	/**
	 * Sets the certnumber
	 *
	 * @param string $certnumber
	 * @return void
	 */
	public function setCertnumber($certnumber) {
		$this->certnumber = $certnumber;
	}

	/**
	 * Returns the spreadshareuserid
	 *
	 * @return integer $spreadshareuserid
	 */
	public function getSpreadshareuserid() {
		return $this->spreadshareuserid;
	}

	/**
	 * Sets the spreadshareuserid
	 *
	 * @param integer $spreadshareuserid
	 * @return void
	 */
	public function setSpreadshareuserid($spreadshareuserid) {
		$this->spreadshareuserid = $spreadshareuserid;
	}

    /**
     * Set hidden flag
     *
     * @param integer $hidden hidden flag
     * @return void
     */
    public function setHidden($hidden) {
        $this->hidden = $hidden;
    }

    /**
     * Set creation date
     *
     * @return integer
     */
    public function setCrdate($crdate) {
        $this->crdate = $crdate;
    }

    /**
     * Get creation date
     *
     * @return integer
     */
    public function getCrdate() {
        return $this->crdate;
    }

}