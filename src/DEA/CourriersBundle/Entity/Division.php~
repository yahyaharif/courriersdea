<?php

namespace DEA\CourriersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Division
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Division
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50)
     */
    private $nom;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="resp", type="object")
     */
    private $resp;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Division
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set resp
     *
     * @param \stdClass $resp
     *
     * @return Division
     */
    public function setResp($resp)
    {
        $this->resp = $resp;

        return $this;
    }

    /**
     * Get resp
     *
     * @return \stdClass
     */
    public function getResp()
    {
        return $this->resp;
    }
}
