<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'System Informacji o Mediach',

	// preloading 'log' component
	'preload'=>array(
                         'log',
                         // to enable bootstrap uncomment below
                         'bootstrap',
        ),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
        'application.extensions.mpdf.*', // pdf
	),

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Sim2013!',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			//'ipFilters'=>array('127.0.0.1','::1'),
                        // to enable bootstrap uncomment below
                        'generatorPaths'=>array('bootstrap.gii'),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
                        'class'=>'WebUser',
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
		'urlManager'=>array(
			'urlFormat'=>'path',
                        'caseSensitive'=>true,
                        'showScriptName'=>false, // ukrywanie index.php
			'rules'=>array(
				//'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				//'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
                                '/login'=>'site/login',
                                '/logout'=>'site/logout',
                                '/changePassword'=>'site/changePassword',
                                //'<controller:\w+>/<id:\d+>'=>'<controller>/index',
                                'countersReadings/<cid:\d+>'=>'countersReadings/index',
                                'invoicesData/<iid:\d+>'=>'invoicesData/index',
                                'countersReadings/<action:\w+>/<cid:\d+>/<id:\d+>'=>'<controller>/<action>',
                                'invoicesData/<action:\w+>/<iid:\d+>/<id:\d+>'=>'<controller>/<action>',
                                '<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>', //default route
			),
		),
		
		/*'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),*/
		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=***',
			'emulatePrepare' => true,
			'username' => '***',
			'password' => '***',
			'charset' => 'utf8',
		),
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
                'authManager'=>array(
                        'class'=>'CDbAuthManager',
                        'connectionID'=>'db',
                ),
                // to enable bootstrap uncomment below
                'bootstrap'=>array(
                        'class'=>'ext.bootstrap.components.Bootstrap',
                ),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);