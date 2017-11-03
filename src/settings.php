<?php
return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production
        'determineRouteBeforeAppMiddleware' => false,
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header
		'db' => [
            'driver' => 'mysql',
            'host' => '127.0.0.1',
            'database' => 'carDB',
            'username' => 'rojat',
            'password' => 'Pc8M7wwgc',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => '',
            'strict' => false,
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
