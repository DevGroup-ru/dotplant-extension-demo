<?php

use yii\helpers\ArrayHelper;

$commonConfig = require(__DIR__ . DIRECTORY_SEPARATOR . 'common.php');
$config = [
    'id' => 'functional-tests',
    'basePath' => dirname(__DIR__),
];
$localName = 'functional-local.php';
if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . $localName)) {
    $localConfig = require(__DIR__ . DIRECTORY_SEPARATOR . $localName);
    $config = ArrayHelper::merge($config, $localConfig);
}

return ArrayHelper::merge($commonConfig, $config);