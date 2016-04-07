<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                    /*'except' => [
                        'yii\web\HttpException:404',
                    ],*/
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'material' => 'admin/default/index',
                //'site/index?name=Андрей' => 'site/index',
                [
                    'pattern' => 'CongratulationsAndrew',
                    'route' => 'site/index',
                    'defaults' => ['name' => 'Андрей'],
                    'suffix' => '.thelongestformatintheworld',
                ],
            ],
        ],
        
    ],
    'params' => $params,

    'modules' => [
        'admin' => [
            'class' => 'frontend\modules\admin\Module',
        ],
    ],
    // 'defaultRoute' => 'admin/default/index',
    // 'catchAll' => ['admin/default/index'],
];
