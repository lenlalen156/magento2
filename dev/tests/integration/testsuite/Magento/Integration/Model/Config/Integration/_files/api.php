<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
return [
    'TestIntegration1' => [
        'source' => [
            'Magento_Customer::manage',
            'Magento_Customer::online',
            'Magento_Sales::capture',
            'Magento_SalesRule::quote',
        ],
    ],
    'TestIntegration2' => [
        'source' => ['Magento_Catalog::product_read', 'Magento_SalesRule::config_promo'],
    ],
    'TestIntegration3' => [
        'source' => ['Magento_Catalog::product_read', 'Magento_Sales::create', 'Magento_SalesRule::quote'],
    ]
];
