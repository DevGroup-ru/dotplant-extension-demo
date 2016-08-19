<?php

namespace VendorNameSpace\ExtensionNameSpace\controllers;

use DevGroup\AdminUtils\controllers\BaseController;
use VendorNameSpace\ExtensionNameSpace\assets\ExtensionAsset;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

/**
 * Class PagesManageController
 */
class ExampleController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::class,
                'actions' => [
                    'delete' => ['POST'],
                ],
            ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        ExtensionAsset::register($this->view);
    }

    public function actionTest()
    {
        $this->render('test');
    }
}
