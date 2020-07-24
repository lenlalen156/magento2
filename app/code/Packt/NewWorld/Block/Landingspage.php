<?php
namespace Packt\NewWorld\Block;
use Magento\Framework\View\Element\Template;
class Landingspage extends Template
{
    public function getLandingsUrl()
    {
        return $this->getUrl('newworld');
    }

    public function getRedirectUrl()
    {
        return $this->getUrl('newworld/index/redirect');
    }
}