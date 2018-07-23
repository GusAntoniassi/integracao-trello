<?php
namespace App\Model\Trello;

use JMS\Serializer\Annotation\Type;

class PrefsQuadro
{
    /**
     * @var boolean
     * @Type("boolean")
     */
    private $defaultLabels = true;

    /**
     * @var boolean
     * @Type("boolean")
     */
    private $defaultLists = true;

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
    private $keepFromSource = 'cards';
    
    /**
     * @var string 
     * @Type("string")
     */
    private $powerUps;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_permissionLevel = 'org';
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_voting = 'disabled';
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_comments = 'members';
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_invitations = 'members';
    
    /**
     * @var boolean
     * @Type("boolean")
     */
    private $prefs_selfJoin = true;
    
    /**
     * @var boolean
     * @Type("boolean")
     */
    private $prefs_cardCovers = true;
    
    /**
     * @var string 
     * @Type("string")
     */
    private $prefs_background = 'blue';

    /**
     * @var string
     * @Type("string")
     */
    private $prefs_cardAging = 'regular';

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

    public function setDefaultLabels($defaultLabels)
    {
        $this->defaultLabels = $defaultLabels;
        return $this;
    }

    public function setDefaultLists($defaultLists)
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

    public function setKeepFromSource($keepFromSource)
    {
        $this->keepFromSource = $keepFromSource;
        return $this;
    }

    public function setPowerUps($powerUps)
    {
        $this->powerUps = $powerUps;
        return $this;
    }

    public function setPrefs_permissionLevel($prefs_permissionLevel)
    {
        $this->prefs_permissionLevel = $prefs_permissionLevel;
        return $this;
    }

    public function setPrefs_voting($prefs_voting)
    {
        $this->prefs_voting = $prefs_voting;
        return $this;
    }

    public function setPrefs_comments($prefs_comments)
    {
        $this->prefs_comments = $prefs_comments;
        return $this;
    }

    public function setPrefs_invitations($prefs_invitations)
    {
        $this->prefs_invitations = $prefs_invitations;
        return $this;
    }

    public function setPrefs_selfJoin($prefs_selfJoin)
    {
        $this->prefs_selfJoin = $prefs_selfJoin;
        return $this;
    }

    public function setPrefs_cardCovers($prefs_cardCovers)
    {
        $this->prefs_cardCovers = $prefs_cardCovers;
        return $this;
    }

    public function setPrefs_background($prefs_background)
    {
        $this->prefs_background = $prefs_background;
        return $this;
    }

    public function setPrefs_cardAging($prefs_cardAging)
    {
        $this->prefs_cardAging = $prefs_cardAging;
        return $this;
    }
}