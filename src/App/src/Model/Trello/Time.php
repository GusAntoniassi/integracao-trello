<?php
namespace App\Model\Trello;

use JMS\Serializer\Annotation\Type;

class Time
{
    /**
     * @var string
     * @Type("string")
     */
    private $id;
    
    /**
     * @var string
     * @Type("string")
     */
    private $name;

    /**
     * @var string
     * @Type("string")
     */
    private $displayName;

    /**
     * @var string
     * @Type("string")
     */
    private $desc;

    /**
     * @var array
     * @Type("array")
     */
    private $idBoards;

    /**
     * @var string
     * @Type("string")
     */
    private $url;

    /**
     * @var string
     * @Type("string")
     */
    private $logoHash;

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function getIdBoards()
    {
        return $this->idBoards;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getLogoHash()
    {
        return $this->logoHash;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
        return $this;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }

    public function setIdBoards($idBoards)
    {
        $this->idBoards = $idBoards;
        return $this;
    }

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function setLogoHash($logoHash)
    {
        $this->logoHash = $logoHash;
        return $this;
    }
}