<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\UrlWebapi\Api;

/**
 * Interface GetProductUrlBySkuManagementInterface
 * @package Magefan\UrlWebapi\Api
 */
interface GetProductUrlBySkuManagementInterface
{

    /**
     * GET for getProductUrlBySku api
     * @param string $productSku
     * @param int $storeId
     * @return string
     */
    public function getProductUrlBySku($productSku, $storeId);
}
