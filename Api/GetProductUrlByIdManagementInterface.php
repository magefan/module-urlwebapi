<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\UrlWebapi\Api;

/**
 * Interface GetProductUrlByIdManagementInterface
 * @package Magefan\UrlWebapi\Api
 */
interface GetProductUrlByIdManagementInterface
{

    /**
     * GET for getProductUrlById api
     * @param int $productId
     * @param int $storeId
     * @return string
     */
    public function getProductUrlById($productId, $storeId);
}
