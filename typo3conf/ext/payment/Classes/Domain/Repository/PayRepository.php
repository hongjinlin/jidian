<?php
namespace NGOOS\Payment\Domain\Repository;


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
 * The repository for Pays
 */
class PayRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

    public function findAll($keyword = '', $arguments=array())
    {

        $query = $this->createQuery();
        $condition = array();
        if ($keyword != '') {
            $condition[] = $query->logicalOr(array(
                $query->like('title', '%' . $keyword . '%'),
                $query->like('name', '%' . $keyword . '%'),
                $query->like('comment', '%' . $keyword . '%'),
                $query->like('email', '%' . $keyword . '%'),
                $query->like('telephone', '%' . $keyword . '%'),
                $query->like('module', '%' . $keyword . '%'),
                $query->like('payment', '%' . $keyword . '%'),
                $query->like('ordernumber', '%' . $keyword . '%')
            ));
        }

        //search by fe
        if(!empty($arguments)){
            foreach($arguments as $key=>$val){
                if($val){
                    preg_match("/^pay\-(.*)$/is", $key, $matches);
                    if(isset($matches[1])){
                        $key = $matches[1];
                        switch($key){
                            case 'money';
                                $condition[] = $query->greaterThanOrEqual($key, $val);
                                break;
                            case 'time-start';
                                $condition[] = $query->greaterThanOrEqual('crdate', strtotime($val));
                                break;
                            case 'time-end';
                                $condition[] = $query->lessThanOrEqual('crdate', strtotime($val)+86400);
                                break;
                            case 'name':
                            case 'payment':
                                $condition[] = $query->like($key, $val.'%');
                                break;
                            default:
                                break;
                        }
                    }
                }
            }
        }

        if(!empty($condition)){
            $query->matching($query->logicalAnd($condition));
        }

        /*$query->setOrderings(array(
            'crdate' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_DESCENDING,
        ));*/

        $result = $query->execute();
        return $result;
    }

}