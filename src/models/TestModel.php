<?php

namespace VendorNameSpace\ExtensionNameSpace\models;

use yii\db\ActiveRecord;

/**
 * Class TestModel
 */
class TestModel extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%test_model}}';
    }
}
