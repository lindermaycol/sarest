<?php
$tns = "  (DESCRIPTION =(ADDRESS_LIST =(ADDRESS = (PROTOCOL = TCP)(HOST = 172.16.30.22)(PORT = 1521)))(CONNECT_DATA =(SERVICE_NAME = SENCICO)))";
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'oci:dbname='.$tns,
            'username' => 'CONVENIOS',
            'password' => 'vgjg8brh',
            'charset' => 'utf8',
            
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
