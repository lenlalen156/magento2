<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Backend\Test\Block;

use Magento\Mtf\Block\Block;
use Magento\Mtf\Client\Locator;

/**
 * Class Denied
 * Access Denied Index
 *
 */
class Denied extends Block
{
    /**
     * Index with "Access Denied Text"
     *
     * @var string
     */
    protected $accessDeniedText = ".page-heading";

    /**
     * Get comments history
     *
     * @return string
     */
    public function getTextFromAccessDeniedBlock()
    {
        return $this->_rootElement->find($this->accessDeniedText, Locator::SELECTOR_CSS)->getText();
    }
}
