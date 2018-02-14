<?php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Exclude;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="sistema_time")
 */
class SistemaTime
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
     * @var string
     * @Type("string")
     * @ORM\Column(type="string")
     */
    private $nome;

    /**
     * @var integer
     * @Type("integer")
     * @ORM\Column(name="sistema_id", type="integer")
     */
    private $sistemaId;

    /**
     * @var string
     * @Type("string")
     * @ORM\Column(name="time_id", type="string")
     */
    private $timeId;

    /**
     * @var ArrayCollection
     * @Type("ArrayCollection<App\Entity\SprintQuadro>")
     * @ORM\OneToMany(targetEntity="SprintQuadro", mappedBy="sistemaTime", cascade={"ALL"})
     */
    private $sprintQuadros;

    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getSistemaId()
    {
        return $this->sistemaId;
    }

    public function getTimeId()
    {
        return $this->timeId;
    }

    public function getSprintQuadros(): ArrayCollection
    {
        return $this->sprintQuadros;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function setSistemaId($sistemaId)
    {
        $this->sistemaId = $sistemaId;
        return $this;
    }

    public function setTimeId($timeId)
    {
        $this->timeId = $timeId;
        return $this;
    }

    public function setSprintQuadros(ArrayCollection $sprintQuadros)
    {
        $this->sprintQuadros = $sprintQuadros;
        return $this;
    }
}