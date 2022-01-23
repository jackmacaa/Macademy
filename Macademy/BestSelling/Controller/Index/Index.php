<?php
namespace Macademy\BestSelling\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\Action\HttpGetActionInterface;
use Magento\Framework\App\ProductMetadataInterface;
use Magento\Framework\Controller\Result\RawFactory as RawResponseFactory;

class Index extends Action implements HttpGetActionInterface
{
    public function execute()
    {
        die('best selling');
    }
}
