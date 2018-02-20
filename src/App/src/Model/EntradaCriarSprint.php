<?php
namespace App\Model;

use JMS\Serializer\Annotation\Type;

class EntradaCriarSprint
{
    /**
     * @var integer
     * @Type("integer")
     */
    private $idsprint;

    /**
     * @var string
     * @Type("string")
     */
    private $nome;

    /**
     * @var mixed
     * @Type("App\Model\Trello\PrefsQuadro")
     */
    private $prefs;

    public function getIdsprint()
    {
        return $this->idsprint;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getPrefs()
    {
        return $this->prefs;
    }

    public function setIdsprint($idsprint)
    {
        $this->idsprint = $idsprint;
        return $this;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function setPrefs($prefs)
    {
        $this->prefs = $prefs;
        return $this;
    }
}