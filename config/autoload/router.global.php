<?php

return [
    'dependencies' => [
        'invokables' => [
//            RouterInterface::class => Zend\Expressive\Router\FastRouteRouter::class,
        ],
        'factories' => [
            \Zend\Expressive\Router\RouterInterface::class => Zend\Expressive\Router\FastRouteRouterFactory::class,

            App\Action\TestAction::class => App\Action\Factory\TestActionFactory::class,
            App\Action\Sistema\ListarSistemasAction::class => App\Action\Sistema\Factory\ListarSistemasFactory::class,
            App\Action\Sistema\CriarSistemaAction::class => App\Action\Sistema\Factory\CriarSistemaFactory::class
        ],
    ],
    'routes' => [
        [
            'name'            => 'teste',
            'path'            => '/teste',
            'middleware'      => App\Action\TestAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name'            => 'sistemas',
            'path'            => '/sistemas',
            'middleware'      => App\Action\Sistema\ListarSistemasAction::class,
            'allowed_methods' => ['GET'],
        ],
        [
            'name'            => 'sistemas',
            'path'            => '/sistemas',
            'middleware'      => App\Action\Sistema\CriarSistemaAction::class,
            'allowed_methods' => ['POST'],
        ],
    ]
];