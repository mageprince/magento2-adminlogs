<?php

/**
 * MagePrince
 * Copyright (C) 2018 Mageprince
 *
 * NOTICE OF LICENSE
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see http://opensource.org/licenses/gpl-3.0.html
 *
 * @category MagePrince
 * @package Prince_Adminlogs
 * @copyright Copyright (c) 2018 MagePrince
 * @license http://opensource.org/licenses/gpl-3.0.html GNU General Public License,version 3 (GPL-3.0)
 * @author MagePrince
 */

namespace Prince\Adminlogs\Model;

use Prince\Adminlogs\Api\Data\AdminlogsInterface;

class Adminlogs extends \Magento\Framework\Model\AbstractModel implements AdminlogsInterface
{

    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Prince\Adminlogs\Model\ResourceModel\Adminlogs');
    }

    /**
     * Get adminlogs_id
     * @return string
     */
    public function getAdminlogsId()
    {
        return $this->getData(self::ADMINLOGS_ID);
    }

    /**
     * Set adminlogs_id
     * @param string $adminlogsId
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    public function setAdminlogsId($adminlogsId)
    {
        return $this->setData(self::ADMINLOGS_ID, $adminlogsId);
    }

    /**
     * Get username
     * @return string
     */
    public function getUsername()
    {
        return $this->getData(self::USERNAME);
    }

    /**
     * Set username
     * @param string $username
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    public function setUsername($username)
    {
        return $this->setData(self::USERNAME, $username);
    }

    /**
     * Get ipaddress
     * @return string
     */
    public function getIpaddress()
    {
        return $this->getData(self::IPADDRESS);
    }

    /**
     * Set ipaddress
     * @param string $ipaddress
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    public function setIpaddress($ipaddress)
    {
        return $this->setData(self::IPADDRESS, $ipaddress);
    }

    /**
     * Get status
     * @return string
     */
    public function getStatus()
    {
        return $this->getData(self::STATUS);
    }

    /**
     * Set status
     * @param string $status
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }

    /**
     * Get date
     * @return string
     */
    public function getDate()
    {
        return $this->getData(self::DATE);
    }

    /**
     * Set date
     * @param string $date
     * @return Prince\Adminlogs\Api\Data\AdminlogsInterface
     */
    public function setDate($date)
    {
        return $this->setData(self::DATE, $date);
    }
}
