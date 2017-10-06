<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'determineRouteBeforeAppMiddleware' => false,
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
		'db' => [
            'driver' => 'mysql',
            'host' => 'localhost',
            'database' => 'database',
            'username' => 'aissani',
            'password' => 'iphone3GPS3',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
        ],
        
        /*'mysql' => [
			'read' => [
				'host' => '127.0.0.1',
			],
			'write' => [
				'host' => '127.0.0.2'
			],
			'driver'    => 'mysql',
			'database'  => 'carDB',
			'username'  => 'aissani',
			'password'  => '',
			'charset'   => 'utf8',
			'collation' => 'utf8_unicode_ci',
			'prefix'    => '',
		],*/
        
        //database settings
       /* 'sqlsrv' => [
         'driver' => 'sqlsrv',
   		 'host' => env('DB_HOST', 'localhost'),
   		 'database' => env('DB_DATABASE', 'carDB'),
   		 'username' => env('DB_USERNAME', 'aissani@127.0.0.1'),
   		 'password' => env('DB_PASSWORD', 'iphone3GPS3'),
   		 'charset' => 'utf8',
   		 'prefix' => '',
        ],*/
     
        
        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
    ],
];
