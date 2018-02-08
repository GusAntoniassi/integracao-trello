<?php

namespace App\Action;

use Doctrine\ORM\EntityManager;
use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface as ServerMiddlewareInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response\JsonResponse;

class TestAction implements ServerMiddlewareInterface
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function process(ServerRequestInterface $request, DelegateInterface $delegate)
    {
//        $sprintQuadro = new \App\Entity\SprintQuadro();
//        $sprintQuadro
//            ->setSprintId(1)
//            ->setQuadroId('whoop');
//
//        $estoriaCartao = new \App\Entity\EstoriaCartao();
//        $estoriaCartao
//            ->setCartaoId('wew')
//            ->setChecklistId(1)
//            ->setEstoriaId(2)
//            ->setSprintQuadro($sprintQuadro);
//
//
//        $sprintQuadro->setEstoriaCartoes(new \Doctrine\Common\Collections\ArrayCollection([$estoriaCartao]));
//
//        $tarefaCheckItem = new \App\Entity\TarefaCheckItem();
//
//        $tarefaCheckItem
//            ->setCheckitemId('abb')
//            ->setTarefaId(1)
//            ->setEstoriaCartao($estoriaCartao);
//
//        $estoriaCartao->setTarefaCheckItems(new \Doctrine\Common\Collections\ArrayCollection([$tarefaCheckItem]));
//
//        $this->entityManager->persist($tarefaCheckItem);
//        $this->entityManager->flush();

        die('end');
    }
}
