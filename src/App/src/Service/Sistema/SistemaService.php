<?php
namespace App\Service\Sistema;

class SistemaService
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function trazerTodos() {
        
    }

    public function trazer($id) {

    }

    public function criar() {

    }

    public function editar(\App\Entity\SistemaTime $sistema) {

    }

    public function excluir($id) {
        
    }
}