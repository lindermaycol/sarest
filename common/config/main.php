<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'ldap' => [
	        'class'=>'Edvlerblog\Ldap',
	        'options'=> [
	                'domain_controllers'    => array('sanborja.sencico.gob.pe'),
	                'account_suffix' =>  '@sencico.gob.pe',
	                'base_dn' => "DC=sencico,DC=gob,DC=pe",
	                // for basic functionality this could be a standard, non privileged domain user (required)
	                'admin_username' => 'MCORRO',
	                'admin_password' => 'LinderMaycol2016'
	            ],
	            //Connect on Adldap instance creation (default). If you don't want to set password via main.php you can
	            //set autoConnect => false and set the admin_username and admin_password with
	        //\Yii::$app->ldap->connect('admin_username', 'admin_password');
	        //See function connect() in https://github.com/Adldap2/Adldap2/blob/v5.2/src/Adldap.php

	        'autoConnect' => true
	    ]
    ],
];
