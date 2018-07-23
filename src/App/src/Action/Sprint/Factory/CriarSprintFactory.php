<?php

namespace App\Action\Sprint\Factory;

use App\Action\Factory\BaseFactory;

class CriarSprintFactory extends BaseFactory
{
    public function __invoke(\Interop\Container\ContainerInterface $container)
    {
        parent::setUp($container);

        $client = $container->get('client.default');
        $trelloConfig = $container->get('config')['trello'];

        $trelloService = new \App\Service\TrelloService($client, $this->serializer, $trelloConfig);
        $sprintService = new \App\Service\SprintService($this->entityManager, $trelloService);

        return new \App\Action\Sprint\CriarSprintAction($sprintService, $this->serializer);
    }
}