<?php

/*
 * asset-packagist.dev
 *
 * @link      http://asset-packagist.org/
 * @package   asset-packagist.dev
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2016, HiQDev (http://hiqdev.com/)
 */

require __DIR__ . '/../src/config/defines.php';
require __DIR__ . '/../src/config/bootstrap.php';

$config = require __DIR__ . '/../src/config/web.php';

(new yii\web\Application($config))->run();
