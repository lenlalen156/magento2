<?php
namespace Packt\NewWorld\Controller\Index;
class Redirect extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->_forward('NewWorld/Controller/Index/Index');
    }
}