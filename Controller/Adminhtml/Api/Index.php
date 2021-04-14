<?php

declare(strict_types=1);

namespace ComradeYanis\WeatherApi\Controller\Adminhtml\Api;

use Magento\Backend\App\Action;
use Magento\Backend\App\Action\Context;
use Magento\Backend\Model\View\Result\Page;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\View\Result\PageFactory;

/**
 * Class Index
 * ComradeYanis\WeatherApi\Controller\Adminhtml\Api
 */
class Index extends Action implements HttpGetActionInterface
{

    /**
     * @var PageFactory
     */
    private $pageFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param PageFactory $pageFactory
     */
    public function __construct(
        Context $context,
        PageFactory $pageFactory
    ) {
        parent::__construct($context);
        $this->pageFactory = $pageFactory;
    }

    /**
     * @return Page
     */
    public function execute()
    {
        /** @var Page $resultPage */
        $resultPage = $this->pageFactory->create();
        $resultPage->setActiveMenu('ComradeYanis_WeatherApi::weather_api')
            ->addBreadcrumb(__('Weather API'), __('Weather API'))
            ->getConfig()->getTitle()->prepend(__('Weather API'));

        return $resultPage;
    }
}
