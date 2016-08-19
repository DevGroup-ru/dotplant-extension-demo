<?php

namespace VendorNameSpace\ExtensionNameSpace\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;

class ExtensionAsset extends AssetBundle
{
    /**
     * @inheritdoc
     */
    public $sourcePath = '@VendorNameSpace/ExtensionNameSpace/assets/dist';

    /**
     * @inheritdoc
     */
    public $js = [
        'js/extension.js'
    ];

    /**
     * @inheritdoc
     */
    public $css = [
        'css/extension.css'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        JqueryAsset::class,
    ];
}