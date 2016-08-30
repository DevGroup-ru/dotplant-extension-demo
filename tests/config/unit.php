<?php

use yii\helpers\ArrayHelper;

$commonConfig = require_once(__DIR__ . DIRECTORY_SEPARATOR . 'common.php');
$config = [
    'id' => 'unit-tests',
    'basePath' => dirname(__DIR__),
];
$localName = 'unit-local.php';
if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . $localName)) {
    $localConfig = require(__DIR__ . DIRECTORY_SEPARATOR . $localName);
    $config = ArrayHelper::merge($config, $localConfig);
}
return ArrayHelper::merge($commonConfig, $config);