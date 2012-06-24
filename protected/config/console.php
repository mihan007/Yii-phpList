<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Console Application',
	// application components
	'components'=>array(
        'db'=>array(
            'connectionString' => 'mysql:host=localhost;dbname=yiiPhpList',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
	),
    'commandMap' => array(
        'mailing' => array(
            'class' => 'application.components.mailing.MailingCommand',
            'phpListPath' => 'http://yii-phplist/lists'
        )
    )
);