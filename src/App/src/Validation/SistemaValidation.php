<?php
namespace App\Validation;

use Respect\Validation\Validator;

class SistemaValidation implements ValidationInterface
{
    /**
     * @var \App\Model\EntradaCriarSistema
     */
    private $dados;

    public function validar($dados)
    {
        $this->dados = $dados;

        $this->validaIdsistema();
        $this->validaIdtrello();
    }

    private function validaIdsistema()
    {
        if (Validator::min(1)->validate($this->dados->getIdsistema())) {
            return true;
        }

        throw new \InvalidArgumentException('Idsistema deve ser um número maior que 0');
    }

    private function validaIdtrello()
    {
        if (Validator::notEmpty()->validate($this->dados->getIdtrello())) {
            return true;
        }

        throw new \InvalidArgumentException('Idtrello não pode ser vazio');
    }
}