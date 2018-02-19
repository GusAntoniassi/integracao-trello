<?php
namespace App\Action\Sistema;

use Interop\Http\ServerMiddleware\DelegateInterface;
use Interop\Http\ServerMiddleware\MiddlewareInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use App\Exception;

class CriarSistemaAction implements MiddlewareInterface
{
    /**
     * @var \App\Service\SistemaService
     */
    private $sistemaService;

    /**
     * @var \JMS\Serializer\Serializer
     */
    private $serializer;

    public function __construct(\App\Service\SistemaService $sistemaService, \JMS\Serializer\Serializer $serializer)
    {
        $this->sistemaService = $sistemaService;
        $this->serializer = $serializer;
    }
    public function process(ServerRequestInterface $request, DelegateInterface $delegate): ResponseInterface
    {
        try {
            $dados = $this->serializer->deserialize($request->getBody()->getContents(), \App\Model\EntradaCriarSistema::class, 'json');
        } catch (\Exception $e) {
            throw new Exception\InvalidArgumentException();
        }

        $this->sistemaService->criar($dados);

        return new \App\Response\SuccessResponse('Time criado com sucesso');
    }
}