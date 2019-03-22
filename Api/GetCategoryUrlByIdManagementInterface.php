<?php
/**
 * Copyright © Magefan (support@magefan.com). All rights reserved.
 * Please visit Magefan.com for license details (https://magefan.com/end-user-license-agreement).
 */

namespace Magefan\UrlWebapi\Api;

/**
 * Interface GetCategoryUrlByIdManagementInterface
 * @package Magefan\UrlWebapi\Api
 */
interface GetCategoryUrlByIdManagementInterface
{

    /**
     * GET for getCategoryUrlById api
     * @param int $categoryId
     * @param int $storeId
     * @return string
     */
    public function getCategoryUrlById($categoryId, $storeId);
}
