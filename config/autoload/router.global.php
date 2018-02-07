<?php

use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Router\ZendRouter;

return [
    'dependencies' => [
        'invokables' => [
//            RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
        ],
        'factories' => [
            RouterInterface::class => Zend\Expressive\Router\FastRouteRouterFactory::class,

            \App\Action\TestAction::class => App\Action\Factory\TestActionFactory::class
        ],
    ],
    'routes' => [
        [
            'name'            => 'home',
            'path'            => '/',
            'middleware'      => App\Action\HomePageAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name'            => 'api.ping',
            'path'            => '/api/ping',
            'middleware'      => App\Action\PingAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name'            => 'home',
            'path'            => '/teste',
            'middleware'      => App\Action\TestAction::class,
            'allowed_methods' => ['GET'],
        ],
    ]
];