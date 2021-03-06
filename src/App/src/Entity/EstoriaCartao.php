<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Exclude;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="estoria_cartao", uniqueConstraints={
 *      @ORM\UniqueConstraint(name="estoria_cartao_checklist_constraint", columns={"estoria_id", "cartao_id", "checklist_id"})
 * })
 */
class EstoriaCartao
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
     * @ORM\Column(name="estoria_id", type="integer")
     */
    private $estoriaId;

    /**
     * @var string
     * @Type("string")
     * @ORM\Column(name="cartao_id", type="string")
     */
    private $cartaoId;

    /**
     * @var string
     * @Type("string")
     * @ORM\Column(name="checklist_id", type="string")
     */
    private $checklistId;

    /**
     * @var \App\Entity\SprintQuadro
     * @Type("App\Entity\SprintQuadro")
     * @Exclude()
     * @ORM\ManyToOne(targetEntity="App\Entity\SprintQuadro", inversedBy="estoriaCartoes", cascade={"ALL"})
     * @ORM\JoinColumn(name="sprint_quadro_id", referencedColumnName="id")
     */
    private $sprintQuadro;

    /**
     * @var ArrayCollection
     * @Type("ArrayCollection<App\Entity\TarefaCheckItem>")
     * @ORM\OneToMany(targetEntity="TarefaCheckItem", mappedBy="estoriaCartao", cascade={"ALL"})
     */
    private $tarefaCheckItems;

    public function getId()
    {
        return $this->id;
    }

    public function getEstoriaId()
    {
        return $this->estoriaId;
    }

    public function getCartaoId()
    {
        return $this->cartaoId;
    }

    public function getChecklistId()
    {
        return $this->checklistId;
    }

    public function getSprintQuadro(): \App\Entity\SprintQuadro
    {
        return $this->sprintQuadro;
    }

    public function getTarefaCheckItems(): ArrayCollection
    {
        return $this->tarefaCheckItems;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setEstoriaId($estoriaId)
    {
        $this->estoriaId = $estoriaId;
        return $this;
    }

    public function setCartaoId($cartaoId)
    {
        $this->cartaoId = $cartaoId;
        return $this;
    }

    public function setChecklistId($checklistId)
    {
        $this->checklistId = $checklistId;
        return $this;
    }

    public function setSprintQuadro(\App\Entity\SprintQuadro $sprintQuadro)
    {
        $this->sprintQuadro = $sprintQuadro;
        return $this;
    }

    public function setTarefaCheckItems(ArrayCollection $tarefaCheckItems)
    {
        $this->tarefaCheckItems = $tarefaCheckItems;
        return $this;
    }
}