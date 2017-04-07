<?php

namespace Prince\Adminlogs\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    protected $_authSession;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Backend\Model\Auth\Session $authSession
    )
    {
        $this->_authSession = $authSession;
        parent::__construct($context);
    }

    public function getUser()
    {
        return $this->_authSession->getUser();

    }
}