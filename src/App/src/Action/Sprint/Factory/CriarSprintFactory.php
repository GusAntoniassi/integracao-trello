<?php

namespace App\Action\Sistema\Factory;

use App\Action\Factory\BaseFactory;

class CriarSprintFactory extends BaseFactory
{
    public function __invoke(\Interop\Container\ContainerInterface $container)
    {
        parent::setUp($container);

        $client = $container->get('client.default');
        $trelloConfig = $container->get('config')['trello'];

        $trelloService = new \App\Service\TrelloService($client, $this->serializer, $trelloConfig);
        $sistemaService = new \App\Service\SistemaService($this->entityManager, $trelloService);

        return new \App\Action\Sistema\CriarSistemaAction($sistemaService, $this->serializer);
    }
}