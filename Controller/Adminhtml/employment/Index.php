<?php

namespace OrviSoft\Employment\Controller\Adminhtml\employment;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPagee;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('OrviSoft_Employment::employment');
        $resultPage->addBreadcrumb(__('OrviSoft'), __('OrviSoft'));
        $resultPage->addBreadcrumb(__('Manage item'), __('Manage Employment'));
        $resultPage->getConfig()->getTitle()->prepend(__('Manage Employment'));

        return $resultPage;
    }
}
?>