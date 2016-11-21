<?php
 
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php')
    //require(__DIR__ . '/params-local.php')
);
 
return [
    'id' => 'app-apipradsis',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'modules' => [
        'v1' => [
            'basePath' => '@app/modules/v1',
            'class' => 'apipradsis\modules\v1\Module'   // here is our v1 modules
        ]
    ],
    'components' => [
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => false,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'enableStrictParsing' => true,
            'showScriptName' => false,
            'rules' => [
                [
                    //'pluralize'=>false,
                    'class' => 'yii\rest\UrlRule',
                    'controller' => 'v1/project',   // our project api rule,
                    //'except' => ['delete', 'create', 'update'],
                    //'extraPatterns' => ['GET search' => 'search'],

                    /*'tokens' => [
                        '{id}' => '<id:\\w+>'
                    ]*/

                    'patterns'=>['GET search' => 'search', 'GET,HEAD'=>'list','GET,HEAD {id}' => 'view'],
                ],
                /*'<controller:\w+>/<id:\d+>' => '<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
				'<controller:\w+>/<action:\w+>' => '<controller>/<action>',*/
            ],

        ],
        'request' => [
        	'enableCsrfValidation'=>true,
        	'enableCookieValidation'=>true,
        	'cookieValidationKey' => 'sjjd8jksjw02kdkjsk',
            'parsers' => ['application/json' => 'yii\web\JsonParser',]
        ],
        /*'response' => [
                        //'format' => api\components\web\Response::FORMAT_JSON,
                        'charset' => 'UTF-8',
                        'formatters' => [
                                'json' => '\api\components\web\PrettyJsonResponseFormatter',
                        ],
                ],*/
    ],
    'params' => $params,
];