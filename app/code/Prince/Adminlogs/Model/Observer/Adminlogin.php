<?php

namespace Prince\Adminlogs\Model\Observer;
 
use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
 
class Adminlogin implements ObserverInterface
{
    
    protected $_authSession;

    protected $_adminLogsModel;

    protected $_ipAddress;

    public function __construct(
        \Magento\Backend\Model\Auth\Session $authSession,
        \Prince\Adminlogs\Model\AdminlogsFactory $adminLogsModel,
        \Magento\Framework\HTTP\PhpEnvironment\RemoteAddress $ipAddress
    )
    {
        $this->_authSession = $authSession;
        $this->_adminLogsModel = $adminLogsModel;
        $this->_ipAddress = $ipAddress;
    }

    public function execute(Observer $observer)
    {   

        $user = $this->_authSession->getUser();
        $ipAddress = $this->_ipAddress->getRemoteAddress();
        $model = $this->_adminLogsModel->create();

        $model->setUsername($user->getUsername());
        $model->setIpaddress($ipAddress);
        $model->setStatus(1);
        $model->setDate(date('Y-m-d H:i:s'));
        $model->save();

    }
 
}