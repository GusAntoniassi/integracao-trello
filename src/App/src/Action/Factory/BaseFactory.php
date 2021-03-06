<?php

namespace App\Action\Factory;


class BaseFactory
{
    /**
     * @var \JMS\Serializer\Serializer
     */
    protected $serializer;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    protected $entityManager;

    public function setUp(\Interop\Container\ContainerInterface $container)
    {
        $this->serializer = $container->get(\JMS\Serializer\Serializer::class);
        $this->entityManager = $container->get('doctrine.entity_manager.orm_default');
        $this->client = $container->get('client.default');
    }
}