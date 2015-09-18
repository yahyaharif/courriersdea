<?php

namespace DEA\CourriersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Depart
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DEA\CourriersBundle\Repository\DepartRepository")
 */
class Depart
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="dea", type="integer")
     */
    private $dea;

    /**
     * @var integer
     *
     * @ORM\Column(name="centrale", type="integer")
     */
    private $centrale;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=50)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="refint", type="string", length=50)
     */
    private $refint;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="refintpre", type="object")
     */
    private $refintpre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateenvoi", type="datetime")
     */
    private $dateenvoi;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateboc", type="datetime")
     */
    private $dateboc;

    /**
     * @var string
     *
     * @ORM\Column(name="refdest", type="string", length=50)
     */
    private $refdest;

    /**
     * @var string
     *
     * @ORM\Column(name="dest", type="string", length=50)
     */
    private $dest;

    /**
     * @var string
     *
     * @ORM\Column(name="objet", type="string", length=50)
     */
    private $objet;

    /**
     * @var string
     *
     * @ORM\Column(name="com", type="text")
     */
    private $com;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagaffect", type="boolean")
     */
    private $flagaffect;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagtraite", type="boolean")
     */
    private $flagtraite;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagvalide", type="boolean")
     */
    private $flagvalide;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagretard", type="boolean")
     */
    private $flagretard;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagarchive", type="boolean")
     */
    private $flagarchive;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dea
     *
     * @param integer $dea
     *
     * @return Depart
     */
    public function setDea($dea)
    {
        $this->dea = $dea;

        return $this;
    }

    /**
     * Get dea
     *
     * @return integer
     */
    public function getDea()
    {
        return $this->dea;
    }

    /**
     * Set centrale
     *
     * @param integer $centrale
     *
     * @return Depart
     */
    public function setCentrale($centrale)
    {
        $this->centrale = $centrale;

        return $this;
    }

    /**
     * Get centrale
     *
     * @return integer
     */
    public function getCentrale()
    {
        return $this->centrale;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Depart
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set refint
     *
     * @param string $refint
     *
     * @return Depart
     */
    public function setRefint($refint)
    {
        $this->refint = $refint;

        return $this;
    }

    /**
     * Get refint
     *
     * @return string
     */
    public function getRefint()
    {
        return $this->refint;
    }

    /**
     * Set dateenvoi
     *
     * @param \DateTime $dateenvoi
     *
     * @return Depart
     */
    public function setDateenvoi($dateenvoi)
    {
        $this->dateenvoi = $dateenvoi;

        return $this;
    }

    /**
     * Get dateenvoi
     *
     * @return \DateTime
     */
    public function getDateenvoi()
    {
        return $this->dateenvoi;
    }

    /**
     * Set dateboc
     *
     * @param \DateTime $dateboc
     *
     * @return Depart
     */
    public function setDateboc($dateboc)
    {
        $this->dateboc = $dateboc;

        return $this;
    }

    /**
     * Get dateboc
     *
     * @return \DateTime
     */
    public function getDateboc()
    {
        return $this->dateboc;
    }

    /**
     * Set refdest
     *
     * @param string $refdest
     *
     * @return Depart
     */
    public function setRefdest($refdest)
    {
        $this->refdest = $refdest;

        return $this;
    }

    /**
     * Get refdest
     *
     * @return string
     */
    public function getRefdest()
    {
        return $this->refdest;
    }

    /**
     * Set dest
     *
     * @param string $dest
     *
     * @return Depart
     */
    public function setDest($dest)
    {
        $this->dest = $dest;

        return $this;
    }

    /**
     * Get dest
     *
     * @return string
     */
    public function getDest()
    {
        return $this->dest;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Depart
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set com
     *
     * @param string $com
     *
     * @return Depart
     */
    public function setCom($com)
    {
        $this->com = $com;

        return $this;
    }

    /**
     * Get com
     *
     * @return string
     */
    public function getCom()
    {
        return $this->com;
    }

    /**
     * Set flagaffect
     *
     * @param boolean $flagaffect
     *
     * @return Depart
     */
    public function setFlagaffect($flagaffect)
    {
        $this->flagaffect = $flagaffect;

        return $this;
    }

    /**
     * Get flagaffect
     *
     * @return boolean
     */
    public function getFlagaffect()
    {
        return $this->flagaffect;
    }

    /**
     * Set flagtraite
     *
     * @param boolean $flagtraite
     *
     * @return Depart
     */
    public function setFlagtraite($flagtraite)
    {
        $this->flagtraite = $flagtraite;

        return $this;
    }

    /**
     * Get flagtraite
     *
     * @return boolean
     */
    public function getFlagtraite()
    {
        return $this->flagtraite;
    }

    /**
     * Set flagvalide
     *
     * @param boolean $flagvalide
     *
     * @return Depart
     */
    public function setFlagvalide($flagvalide)
    {
        $this->flagvalide = $flagvalide;

        return $this;
    }

    /**
     * Get flagvalide
     *
     * @return boolean
     */
    public function getFlagvalide()
    {
        return $this->flagvalide;
    }

    /**
     * Set flagretard
     *
     * @param boolean $flagretard
     *
     * @return Depart
     */
    public function setFlagretard($flagretard)
    {
        $this->flagretard = $flagretard;

        return $this;
    }

    /**
     * Get flagretard
     *
     * @return boolean
     */
    public function getFlagretard()
    {
        return $this->flagretard;
    }

    /**
     * Set flagarchive
     *
     * @param boolean $flagarchive
     *
     * @return Depart
     */
    public function setFlagarchive($flagarchive)
    {
        $this->flagarchive = $flagarchive;

        return $this;
    }

    /**
     * Get flagarchive
     *
     * @return boolean
     */
    public function getFlagarchive()
    {
        return $this->flagarchive;
    }

    /**
     * Set refintpre
     *
     * @param \stdClass $refintpre
     *
     * @return Depart
     */
    public function setRefintpre($refintpre)
    {
        $this->refintpre = $refintpre;

        return $this;
    }

    /**
     * Get refintpre
     *
     * @return \stdClass
     */
    public function getRefintpre()
    {
        return $this->refintpre;
    }
}
