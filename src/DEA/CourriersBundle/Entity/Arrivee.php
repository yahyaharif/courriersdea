<?php

namespace DEA\CourriersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Arrivee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DEA\CourriersBundle\Repository\ArriveeRepository")
 */
class Arrivee
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
     * @ORM\Column(name="dateentree", type="datetime")
     */
    private $dateentree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateboc", type="datetime")
     */
    private $dateboc;

    /**
     * @var string
     *
     * @ORM\Column(name="refexp", type="string", length=50)
     */
    private $refexp;

    /**
     * @var string
     *
     * @ORM\Column(name="exp", type="string", length=50)
     */
    private $exp;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateexp", type="datetime")
     */
    private $dateexp;

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
     * @ORM\Column(name="flagvalide", type="boolean")
     */
    private $flagvalide;

    /**
     * @var boolean
     *
     * @ORM\Column(name="flagtraite", type="boolean")
     */
    private $flagtraite;

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
     * @return Arrivee
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
     * @return Arrivee
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
     * @return Arrivee
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
     * @return Arrivee
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
     * Set dateentree
     *
     * @param \DateTime $dateentree
     *
     * @return Arrivee
     */
    public function setDateentree($dateentree)
    {
        $this->dateentree = $dateentree;

        return $this;
    }

    /**
     * Get dateentree
     *
     * @return \DateTime
     */
    public function getDateentree()
    {
        return $this->dateentree;
    }

    /**
     * Set dateboc
     *
     * @param \DateTime $dateboc
     *
     * @return Arrivee
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
     * Set refexp
     *
     * @param string $refexp
     *
     * @return Arrivee
     */
    public function setRefexp($refexp)
    {
        $this->refexp = $refexp;

        return $this;
    }

    /**
     * Get refexp
     *
     * @return string
     */
    public function getRefexp()
    {
        return $this->refexp;
    }

    /**
     * Set exp
     *
     * @param string $exp
     *
     * @return Arrivee
     */
    public function setExp($exp)
    {
        $this->exp = $exp;

        return $this;
    }

    /**
     * Get exp
     *
     * @return string
     */
    public function getExp()
    {
        return $this->exp;
    }

    /**
     * Set dateexp
     *
     * @param \DateTime $dateexp
     *
     * @return Arrivee
     */
    public function setDateexp($dateexp)
    {
        $this->dateexp = $dateexp;

        return $this;
    }

    /**
     * Get dateexp
     *
     * @return \DateTime
     */
    public function getDateexp()
    {
        return $this->dateexp;
    }

    /**
     * Set objet
     *
     * @param string $objet
     *
     * @return Arrivee
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
     * @return Arrivee
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
     * @return Arrivee
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
     * Set flagvalide
     *
     * @param boolean $flagvalide
     *
     * @return Arrivee
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
     * Set flagtraite
     *
     * @param boolean $flagtraite
     *
     * @return Arrivee
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
     * Set flagretard
     *
     * @param boolean $flagretard
     *
     * @return Arrivee
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
     * @return Arrivee
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
     * @return Arrivee
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
