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
