<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Exclude;

/**
 * @ORM\Entity
 * @ORM\Table(name="tarefa_checkitem")
 */
class TarefaCheckItem
{
    /**
     * @var integer
     * @Type("integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var integer
     * @Type("integer")
     * @ORM\Column(name="tarefa_id", type="integer")
     */
    private $tarefaId;

    /**
     * @var string
     * @Type("string")
     * @ORM\Column(name="checkitem_id", type="string")
     */
    private $checkitemId;

    /**
     * @var \App\Entity\EstoriaCartao
     * @Type("App\Entity\EstoriaCartao")
     * @Exclude()
     * @ORM\ManyToOne(targetEntity="App\Entity\EstoriaCartao", inversedBy="tarefaCheckItens", cascade={"ALL"})
     * @ORM\JoinColumn(name="estoria_cartao_id", referencedColumnName="id")
     */
    private $estoriaCartao;

    public function getId()
    {
        return $this->id;
    }

    public function getTarefaId()
    {
        return $this->tarefaId;
    }

    public function getCheckitemId()
    {
        return $this->checkitemId;
    }

    public function getEstoriaCartao(): \App\Entity\EstoriaCartao
    {
        return $this->estoriaCartao;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setTarefaId($tarefaId)
    {
        $this->tarefaId = $tarefaId;
        return $this;
    }

    public function setCheckitemId($checkitemId)
    {
        $this->checkitemId = $checkitemId;
        return $this;
    }

    public function setEstoriaCartao(\App\Entity\EstoriaCartao $estoriaCartao)
    {
        $this->estoriaCartao = $estoriaCartao;
        return $this;
    }
}