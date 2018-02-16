<?php
namespace App\Model;

use JMS\Serializer\Annotation\Type;

class EntradaCriarSistema
{
    /**
     * @var integer
     * @Type("integer")
     */
    private $idsistema;

    /**
     * @var string
     * @Type("string")
     */
    private $idtrello;

    public function getIdsistema()
    {
        return $this->idsistema;
    }

    public function getIdtrello()
    {
        return $this->idtrello;
    }

    public function setIdsistema($idsistema)
    {
        $this->idsistema = $idsistema;
        return $this;
    }

    public function setIdtrello($nome)
    {
        $this->idtrello = $nome;
        return $this;
    }
}