<?php
// NOTE: Make sure this file is not accessible when deployed to production
if (!in_array(@$_SERVER['REMOTE_ADDR'], ['127.0.0.1', '::1'])) {
    die('You are not allowed to access this file.');
}
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'test');
require_once(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'vendor', 'autoload.php']));
require_once(implode(
    DIRECTORY_SEPARATOR,
    [__DIR__, '..', 'vendor', 'yiisoft', 'yii2', 'Yii.php']
));

$config = require(implode(DIRECTORY_SEPARATOR, [__DIR__, '..', 'config', 'common.php']));
(new yii\web\Application($config))->run();
