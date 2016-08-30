<?php

use yii\helpers\ArrayHelper;

$config = [
    'id' => 'tests',
    'basePath' => dirname(__DIR__),
];
$localName = 'common-local.php';
if (file_exists(__DIR__ . DIRECTORY_SEPARATOR . $localName)) {
    $localConfig = require(__DIR__ . DIRECTORY_SEPARATOR . $localName);
    $config = ArrayHelper::merge($config, $localConfig);
}

return $config;