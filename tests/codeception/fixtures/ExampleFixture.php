<?php


namespace tests\codeception\fixtures;


use yii\test\ActiveFixture;

class ExampleFixture extends ActiveFixture
{
    public $modelClass = 'VendorNameSpace\ExtensionNameSpace\models\TestModel';
    public $dataFile = '@tests/codeception/fixtures/data/user.php';
}