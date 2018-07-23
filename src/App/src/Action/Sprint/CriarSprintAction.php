<?php
namespace App\Action\Sprint;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Exception;

class CriarSprintAction implements MiddlewareInterface
{
    /**
     * @var \App\Service\SprintService
     */
    private $sprintService;

    /**
     * @var \JMS\Serializer\Serializer
     */
    private $serializer;

    public function __construct(\App\Service\SprintService $sprintService, \JMS\Serializer\Serializer $serializer)
    {
        $this->sprintService = $sprintService;
        $this->serializer = $serializer;
    }
    public function process(ServerRequestInterface $request, DelegateInterface $delegate): ResponseInterface
    {
        $idsprint = $request->getAttribute('idsistema') ?: 0;
        try {
            $dados = $this->serializer->deserialize($request->getBody()->getContents(), \App\Model\EntradaCriarSprint::class, 'json');
        } catch (\Exception $e) {
            throw new Exception\InvalidArgumentException();
        }

        $this->sprintService->criar($idsprint, $dados);

        return new \App\Response\SuccessResponse('Sprint criada com sucesso');
    }
}