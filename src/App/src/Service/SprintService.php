<?php
namespace App\Service;

use App\Exception;

class SistemaService
{
    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $entityManager;

    /**
     * @var \Doctrine\ORM\EntityRepository
     */
    private $repository;

    /**
     * @var \App\Validation\ValidationInterface
     */
    private $validator;

    /**
     * @var TrelloService
     */
    private $trelloService;

    public function __construct(\Doctrine\ORM\EntityManager $entityManager, TrelloService $trelloService)
    {
        $this->entityManager = $entityManager;
        $this->repository = $entityManager->getRepository(\App\Entity\SprintQuadro::class);

        $this->validator = new \App\Validation\SprintValidation();
        $this->trelloService = $trelloService;
    }

    public function trazerTodos()
    {

    }

    public function trazer($id)
    {
        
    }

    public function criar($idsistema, \App\Model\EntradaCriarSprint $dados)
    {
        $this->validator->validar($dados);

        $sistemaTime = $this->entityManager->find(\App\Entity\SistemaTime::class, $idsistema);

        $this->trelloService->criarQuadro();

        $sprintQuadro = new \App\Entity\SprintQuadro();
        $sprintQuadro
            ->setSprintId($dados->getIdsprint())
            ->setSistemaTime($sistemaTime)
            ->setQuadroId($quadroId);

//        $this->validator->validar($dados);
//
//        $times = $this->trelloService->getTimes();
//        $nomeTime = $dados->getIdtrello();
//        $time = $this->getTimeEscolhido($times, $nomeTime);
//
//        try {
//            $sistemaTime = new \App\Entity\SistemaTime();
//            $sistemaTime
//                ->setNome($time->getDisplayName())
//                ->setSistemaId($dados->getIdsistema())
//                ->setTimeId($dados->getIdtrello());
//
//            $this->entityManager->persist($sistemaTime);
//            $this->entityManager->flush();
//        } catch (\Doctrine\DBAL\Exception\UniqueConstraintViolationException $e) {
//            throw new Exception\UniqueConstraintViolationException('Sistema já existe');
//        }
    }

    public function editar(\App\Entity\SistemaTime $sistema)
    {

    }

    public function excluir($id)
    {

    }

    private function getTimeEscolhido(array $times, string $nomeTime) {
        $timeEscolhido = null;

        foreach ($times as $time) {
            /* @var $time \App\Model\Trello\Time */
            if ($time->getName() === $nomeTime) {
                $timeEscolhido = $time;
                break;
            }
        }

        if ($timeEscolhido === null) {
            throw new Exception\NotFoundException('Time não encontrado');
        }

        return $timeEscolhido;
    }
}