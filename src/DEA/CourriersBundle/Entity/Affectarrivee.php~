<?php

namespace DEA\CourriersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Affectarrivee
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="DEA\CourriersBundle\Repository\AffectarriveeRepository")
 */
class Affectarrivee
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateaff", type="datetime")
     */
    private $dateaff;

    /**
     * @var boolean
     *
     * @ORM\Column(name="lastaff", type="boolean")
     */
    private $lastaff;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rep", type="boolean")
     */
    private $rep;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="daterep", type="datetime")
     */
    private $daterep;

    /**
     * @var string
     *
     * @ORM\Column(name="traitement", type="string", length=50)
     */
    private $traitement;

    /**
     * @var boolean
     *
     * @ORM\Column(name="urgent", type="boolean")
     */
    private $urgent;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="arrivee", type="object")
     */
    private $arrivee;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="division", type="object")
     */
    private $division;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="user", type="object")
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="annotation", type="text")
     */
    private $annotation;


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
     * Set dateaff
     *
     * @param \DateTime $dateaff
     *
     * @return Affectarrivee
     */
    public function setDateaff($dateaff)
    {
        $this->dateaff = $dateaff;

        return $this;
    }

    /**
     * Get dateaff
     *
     * @return \DateTime
     */
    public function getDateaff()
    {
        return $this->dateaff;
    }

    /**
     * Set lastaff
     *
     * @param boolean $lastaff
     *
     * @return Affectarrivee
     */
    public function setLastaff($lastaff)
    {
        $this->lastaff = $lastaff;

        return $this;
    }

    /**
     * Get lastaff
     *
     * @return boolean
     */
    public function getLastaff()
    {
        return $this->lastaff;
    }

    /**
     * Set rep
     *
     * @param boolean $rep
     *
     * @return Affectarrivee
     */
    public function setRep($rep)
    {
        $this->rep = $rep;

        return $this;
    }

    /**
     * Get rep
     *
     * @return boolean
     */
    public function getRep()
    {
        return $this->rep;
    }

    /**
     * Set daterep
     *
     * @param \DateTime $daterep
     *
     * @return Affectarrivee
     */
    public function setDaterep($daterep)
    {
        $this->daterep = $daterep;

        return $this;
    }

    /**
     * Get daterep
     *
     * @return \DateTime
     */
    public function getDaterep()
    {
        return $this->daterep;
    }

    /**
     * Set traitement
     *
     * @param string $traitement
     *
     * @return Affectarrivee
     */
    public function setTraitement($traitement)
    {
        $this->traitement = $traitement;

        return $this;
    }

    /**
     * Get traitement
     *
     * @return string
     */
    public function getTraitement()
    {
        return $this->traitement;
    }

    /**
     * Set urgent
     *
     * @param boolean $urgent
     *
     * @return Affectarrivee
     */
    public function setUrgent($urgent)
    {
        $this->urgent = $urgent;

        return $this;
    }

    /**
     * Get urgent
     *
     * @return boolean
     */
    public function getUrgent()
    {
        return $this->urgent;
    }

    /**
     * Set arrivee
     *
     * @param \stdClass $arrivee
     *
     * @return Affectarrivee
     */
    public function setArrivee($arrivee)
    {
        $this->arrivee = $arrivee;

        return $this;
    }

    /**
     * Get arrivee
     *
     * @return \stdClass
     */
    public function getArrivee()
    {
        return $this->arrivee;
    }

    /**
     * Set division
     *
     * @param \stdClass $division
     *
     * @return Affectarrivee
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return \stdClass
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set user
     *
     * @param \stdClass $user
     *
     * @return Affectarrivee
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \stdClass
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set annotation
     *
     * @param string $annotation
     *
     * @return Affectarrivee
     */
    public function setAnnotation($annotation)
    {
        $this->annotation = $annotation;

        return $this;
    }

    /**
     * Get annotation
     *
     * @return string
     */
    public function getAnnotation()
    {
        return $this->annotation;
    }
}
