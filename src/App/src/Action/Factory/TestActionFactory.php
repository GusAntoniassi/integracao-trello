<?php
namespace App\Action\Factory;

use App\Action\TestAction;
use Psr\Container\ContainerInterface;

class TestActionFactory
{

    public function __invoke(ContainerInterface $container)
    {
        $em = $container->get('doctrine.entity_manager.orm_default');

        return new TestAction($em);
    }
}