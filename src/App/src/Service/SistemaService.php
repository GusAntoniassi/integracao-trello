<?php
namespace App\Service;

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
        $this->repository = $entityManager->getRepository(\App\Entity\SistemaTime::class);
        
        $this->validator = new \App\Validation\SistemaValidation();
        $this->trelloService = $trelloService;
    }

    public function trazerTodos()
    {
        
    }

    public function trazer($id)
    {

    }

    public function criar(\App\Model\EntradaCriarSistema $dados)
    {
        $this->validator->validar($dados);

        /**
         * - Cadastrar um novo time no sistema
            O usuário deverá adicionar o "CCG Bot" ao time
            Depois fazer um POST em /times com os dados
                    {
                            "idsistema": 21,
                            "nome": "gazintimeb2b"
                    }
            O nome do time está disponível na URL da página do time no trello (ex: https://trello.com/gazintimeb2b)
            O sistema buscará todos os times que o usuário "CCG Bot" está cadastrado, percorrerá todos eles para encontrar o time com nome igual ao passado
            Quando achar o time, gravará um registro na tabela sistema_time com os seguintes dados:
                    id: auto inc.
                    nome: displayName no trello
                    sistema_id: idsistema passado
                    time_id: id no trello (ex: 59e0e4421e07fa94aae0de7e)
         */
        
        $times = $this->trelloService->getTimes();
        $nomeTime = $dados->getIdtrello();
        $timeEscolhido = null;

        foreach ($times as $time) {
            /* @var $time \App\Model\Trello\Time */
            if ($time->getName() === $nomeTime) {
                $timeEscolhido = $time;
                break;
            }
        }

        if ($timeEscolhido === null) {
            /**
             * @TODO: Melhorar essa exceção
             */
            throw new \Exception('Time não encontrado');
        }

        $sistemaTime = new \App\Entity\SistemaTime();
        $sistemaTime
            ->setNome($time->getDisplayName())
            ->setSistemaId($dados->getIdsistema())
            ->setTimeId($dados->getIdtrello());

        $this->entityManager->persist($sistemaTime);
        $this->entityManager->flush();
    }

    public function editar(\App\Entity\SistemaTime $sistema)
    {

    }

    public function excluir($id)
    {
        
    }
}