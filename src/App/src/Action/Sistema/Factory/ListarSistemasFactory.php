<?php

namespace App\Action\Sistema\Factory;

use App\Action\Factory\BaseFactory;

class ListarSistemasFactory extends BaseFactory
{
    public function __invoke(\Interop\Container\ContainerInterface $container)
    {
        parent::setUp($container);

        return new \App\Action\Sistema\ListarSistemasAction();
    }
}