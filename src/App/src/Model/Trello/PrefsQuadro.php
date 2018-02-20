<?php
namespace App\Model;

use JMS\Serializer\Annotation\Type;

class PrefsQuadro
{
    /**
     * @var boolean
     * @Type("boolean")
     */
    private $defaultLabels;

    /**
     * @var boolean
     * @Type("boolean")
     */
    private $defaultLists;

    /**
     * @var string
     * @Type("string")
     */
    private $desc;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $idOrganization;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $idBoardSource;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $keepFromSource;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $powerUps;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_permissionLevel;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_voting;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_comments;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_invitations;
    
    /**
     * @var boolean
     * @Type("boolean")
     */
    private $prefs_selfJoin;
    
    /**
     * @var boolean
     * @Type("boolean")
     */
    private $prefs_cardCovers;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_background;

    /**
     * @var string
     * @Type("string")
     */
    private $prefs_cardAging;

    public function getDefaultLabels()
    {
        return $this->defaultLabels;
    }

    public function getDefaultLists()
    {
        return $this->defaultLists;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function getIdOrganization()
    {
        return $this->idOrganization;
    }

    public function getIdBoardSource()
    {
        return $this->idBoardSource;
    }

    public function getKeepFromSource()
    {
        return $this->keepFromSource;
    }

    public function getPowerUps()
    {
        return $this->powerUps;
    }

    public function getPrefs_permissionLevel()
    {
        return $this->prefs_permissionLevel;
    }

    public function getPrefs_voting()
    {
        return $this->prefs_voting;
    }

    public function getPrefs_comments()
    {
        return $this->prefs_comments;
    }

    public function getPrefs_invitations()
    {
        return $this->prefs_invitations;
    }

    public function getPrefs_selfJoin()
    {
        return $this->prefs_selfJoin;
    }

    public function getPrefs_cardCovers()
    {
        return $this->prefs_cardCovers;
    }

    public function getPrefs_background()
    {
        return $this->prefs_background;
    }

    public function getPrefs_cardAging()
    {
        return $this->prefs_cardAging;
    }

    public function setDefaultLabels($defaultLabels = true)
    {
        $this->defaultLabels = $defaultLabels;
        return $this;
    }

    public function setDefaultLists($defaultLists = true)
    {
        $this->defaultLists = $defaultLists;
        return $this;
    }

    public function setDesc($desc)
    {
        $this->desc = $desc;
        return $this;
    }

    public function setIdOrganization($idOrganization)
    {
        $this->idOrganization = $idOrganization;
        return $this;
    }

    public function setIdBoardSource($idBoardSource)
    {
        $this->idBoardSource = $idBoardSource;
        return $this;
    }

    public function setKeepFromSource($keepFromSource = 'cards')
    {
        $this->keepFromSource = $keepFromSource;
        return $this;
    }

    public function setPowerUps($powerUps)
    {
        $this->powerUps = $powerUps;
        return $this;
    }

    public function setPrefs_permissionLevel($prefs_permissionLevel = 'org')
    {
        $this->prefs_permissionLevel = $prefs_permissionLevel;
        return $this;
    }

    public function setPrefs_voting($prefs_voting = 'disabled')
    {
        $this->prefs_voting = $prefs_voting;
        return $this;
    }

    public function setPrefs_comments($prefs_comments = 'members')
    {
        $this->prefs_comments = $prefs_comments;
        return $this;
    }

    public function setPrefs_invitations($prefs_invitations = 'members')
    {
        $this->prefs_invitations = $prefs_invitations;
        return $this;
    }

    public function setPrefs_selfJoin($prefs_selfJoin = true)
    {
        $this->prefs_selfJoin = $prefs_selfJoin;
        return $this;
    }

    public function setPrefs_cardCovers($prefs_cardCovers = true)
    {
        $this->prefs_cardCovers = $prefs_cardCovers;
        return $this;
    }

    public function setPrefs_background($prefs_background = 'blue')
    {
        $this->prefs_background = $prefs_background;
        return $this;
    }

    public function setPrefs_cardAging($prefs_cardAging = 'regular')
    {
        $this->prefs_cardAging = $prefs_cardAging;
        return $this;
    }
}