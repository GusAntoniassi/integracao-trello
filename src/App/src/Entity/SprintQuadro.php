<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Exclude;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="sprint_quadro")
 */
class SprintQuadro
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
     * @ORM\Column(name="sprint_id", type="integer")
     */
    private $sprintId;

    /**
     * @var string
     * @Type("string")
     * @ORM\Column(name="quadro_id", type="string")
     */
    private $quadroId;

    /**
     * @var ArrayCollection
     * @Type("ArrayCollection<App\Entity\EstoriaCartao>")
     * @ORM\OneToMany(targetEntity="EstoriaCartao", mappedBy="sprintQuadro", cascade={"ALL"})
     */
    private $estoriaCartoes;

    /**
     * @var \App\Entity\SistemaTime
     * @Type("App\Entity\SistemaTime")
     * @Exclude()
     * @ORM\ManyToOne(targetEntity="App\Entity\SistemaTime", inversedBy="sprintQuadros", cascade={"ALL"})
     * @ORM\JoinColumn(name="sistema_time_id", referencedColumnName="id")
     */
    private $sistemaTime;
    
    public function getId()
    {
        return $this->id;
    }

    public function getSprintId()
    {
        return $this->sprintId;
    }

    public function getQuadroId()
    {
        return $this->quadroId;
    }

    public function getEstoriaCartoes(): ArrayCollection
    {
        return $this->estoriaCartoes;
    }

    public function getSistemaTime(): \App\Entity\SistemaTime
    {
        return $this->sistemaTime;
    }
    
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setSprintId($sprintId)
    {
        $this->sprintId = $sprintId;
        return $this;
    }

    public function setQuadroId($quadroId)
    {
        $this->quadroId = $quadroId;
        return $this;
    }

    public function setEstoriaCartoes(ArrayCollection $estoriaCartoes)
    {
        $this->estoriaCartoes = $estoriaCartoes;
        return $this;
    }

    public function setSistemaTime(\App\Entity\SistemaTime $sprintQuadro)
    {
        $this->sistemaTime = $sprintQuadro;
        return $this;
    }
}