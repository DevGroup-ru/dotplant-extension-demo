<?php
new yii\web\Application(
    require(dirname(__DIR__) . DIRECTORY_SEPARATOR . implode(
            DIRECTORY_SEPARATOR,
            ['..', 'config', 'acceptance.php']
        ))
);