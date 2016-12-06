<?php
/**
 * asset-packagist.dev
 *
 * @link      http://asset-packagist.org/
 * @package   asset-packagist.dev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

if (!defined('HISITE_VENDOR_DIR')) {
    foreach ([dirname(dirname(__DIR__)) . '/vendor', dirname(dirname(dirname(dirname(__DIR__))))] as $dir) {
        if (file_exists($dir . '/autoload.php')) {
            define('HISITE_VENDOR_DIR', $dir);
            break;
        }
    }

    if (!defined('HISITE_VENDOR_DIR')) {
        fwrite(STDERR, "Run composer to set up dependencies!\n");
        exit(1);
    }

    require_once __DIR__ . '/defines.php';
    require_once HISITE_VENDOR_DIR . '/autoload.php';
    require_once HISITE_VENDOR_DIR . '/yiisoft/yii2/Yii.php';

    Yii::setAlias('@root', dirname(dirname(__DIR__)));
    Yii::setAlias('@vendor', HISITE_VENDOR_DIR);
    Yii::setAlias('@hiqdev/sites/assetpackagistdev', dirname(__DIR__));
}
