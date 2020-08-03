<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Newsletter\Test\Constraint;

use Magento\Newsletter\Test\Fixture\Template;
use Magento\Newsletter\Test\Page\Adminhtml\TemplateIndex;
use Magento\Mtf\Constraint\AbstractConstraint;

/**
 * Class AssertNewsletterInGrid
 *
 * @package Magento\Newsletter\Test\Constraint
 */
class AssertNewsletterInGrid extends AbstractConstraint
{
    /* tags */
    const SEVERITY = 'low';
    /* end tags */

    /**
     *  Assert that newsletter templates is present in grid
     *
     * @param TemplateIndex $templateIndex
     * @param Template $template
     * @return void
     */
    public function processAssert(
        TemplateIndex $templateIndex,
        Template $template
    ) {
        $templateIndex->open();
        $filter = ['code' => $template->getCode()];
        \PHPUnit\Framework\Assert::assertTrue(
            $templateIndex->getNewsletterTemplateGrid()->isRowVisible($filter),
            'Newsletter \'' . $template->getCode() . '\'is absent in newsletter templates grid.'
        );
    }

    /**
     * Success assert of newsletter templates in grid.
     *
     * @return string
     */
    public function toString()
    {
        return 'Newsletter templates is present in grid.';
    }
}
