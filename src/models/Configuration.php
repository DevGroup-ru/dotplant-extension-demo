<?php

namespace VendorNameSpace\ExtensionNameSpace\models;

use VendorNameSpace\ExtensionNameSpace\Module;
use DevGroup\ExtensionsManager\models\BaseConfigurationModel;
use Yii;

class Configuration extends BaseConfigurationModel
{
    /**
     * @param array $config
     */
    public function __construct($config = [])
    {
        $attributes = [
            'someProperty'
        ];

        parent::__construct($attributes, $config);
        /** @var Module $module */
        $module = Module::module();
        $this->someProperty = $module->someProperty;
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['someProperty'], 'boolean'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'someProperty' => Yii::t('my-awesome-dotplant-extension', 'Some property'),
        ];
    }

    /**
     * @inheritdoc
     */
    public function webApplicationAttributes()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function consoleApplicationAttributes()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function commonApplicationAttributes()
    {
        return [
            'components' => [
                'i18n' => [
                    'translations' => [
                        'my-awesome-dotplant-extension' => [
                            'class' => 'yii\i18n\PhpMessageSource',
                            'basePath' => dirname(__DIR__) . DIRECTORY_SEPARATOR . 'messages',
                        ]
                    ]
                ],
            ],
            'modules' => [
                'moduleName' => [
                    'class' => Module::class,
                    'someProperty' => (bool) $this->someProperty
                ]
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function appParams()
    {
        return [];
    }

    /**
     * @inheritdoc
     */
    public function aliases()
    {
        return [
            '@VendorNameSpace/ExtensionNameSpace' => realpath(dirname(__DIR__)),
        ];
    }
}
