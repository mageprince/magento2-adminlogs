<?php


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
