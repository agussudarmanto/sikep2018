<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);

return [
    'id'                  => 'app-backend',
    'basePath'            => dirname(__DIR__),
    'homeUrl'             => '/sikepdev/yii2-app-advanced/',
    'controllerNamespace' => 'backend\controllers',
    'bootstrap'           => ['log'],
    'modules'             => [
        'absensi'             => ['class' => 'app\modules\absensi\Module'],
        'admin'               => ['class' => 'app\modules\admin\Module'],
        'administrasipegawai' => ['class' => 'app\modules\administrasipegawai\Module'],
        'bantuan'             => ['class' => 'app\modules\bantuan\Module'],
        'collaboration'       => ['class' => 'app\modules\collaboration\Module'],
        'datarefmanagement'   => ['class' => 'app\modules\datarefmanagement\Module'],
        'documentmanagement'  => ['class' => 'app\modules\documentmanagement\Module'],
        'ess'                 => ['class' => 'app\modules\ess\Module'],
        'organisasi'          => ['class' => 'app\modules\organisasi\Module'],
        'pajak'               => ['class' => 'app\modules\pajak\Module'],
        'payroll'             => ['class' => 'app\modules\payroll\Module'],
        'rekrutmen'           => ['class' => 'app\modules\rekrutmen\Module'],
        'reporting'           => ['class' => 'app\modules\reporting\Module'],
    ],
    'components'          => [
        'request'      => [
            'csrfParam' => '_csrf-backend',
        ],
        'user'         => [
            'identityClass'   => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie'  => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session'      => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log'          => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets'    => [
                [
                    'class'  => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [],
        ],
    ],
    'params'              => $params,
];
