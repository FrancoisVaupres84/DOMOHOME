<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;



/**
 *
 *
 * @ORM\Table(name="scenario")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ScenarioRepository")
 * @UniqueEntity(
 *     fields={"nom"},
 *     message="Ce nom est déjà utilisé, veuillez en choisir un autre."
 *
 *
 * )


 *
 */
class Scenario
{

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     *
     * @ORM\Column(name="nom", type="string")
     */

    private $nom;

    /**
     *
     * @ORM\Column(name="saison", type="string")
     */

    private $saison;

    /**
     *
     * @ORM\Column(name="lumiere", type="integer")
     */

    private $lumiere;

    /**
     *
     * @ORM\Column(name="volet", type="integer")
     */

    private $volet;


    /**
     * @ORM\ManyToOne(targetEntity="Mode_clim_chauffage", inversedBy="scenarios")
     * @ORM\JoinColumn(name="mode_clim_chauffage_id", referencedColumnName="id")
     */
    private $mode;

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
     * @return Scenario
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
     * Set lumiere
     *
     * @param integer $lumiere
     *
     * @return Scenario
     */
    public function setLumiere($lumiere)
    {
        $this->lumiere = $lumiere;

        return $this;
    }

    /**
     * Get lumiere
     *
     * @return integer
     */
    public function getLumiere()
    {
        return $this->lumiere;
    }

    /**
     * Set volet
     *
     * @param integer $volet
     *
     * @return Scenario
     */
    public function setVolet($volet)
    {
        $this->volet = $volet;

        return $this;
    }

    /**
     * Get volet
     *
     * @return integer
     */
    public function getVolet()
    {
        return $this->volet;
    }

    /**
     * Set mode
     *
     * @param \AppBundle\Entity\Mode_clim_chauffage $mode
     *
     * @return Scenario
     */
    public function setMode(\AppBundle\Entity\Mode_clim_chauffage $mode = null)
    {
        $this->mode = $mode;

        return $this;
    }

    /**
     * Get mode
     *
     * @return \AppBundle\Entity\Mode_clim_chauffage
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Set saison
     *
     * @param string $saison
     *
     * @return Scenario
     */
    public function setSaison($saison)
    {
        $this->saison = $saison;

        return $this;
    }

    /**
     * Get saison
     *
     * @return string
     */
    public function getSaison()
    {
        return $this->saison;
    }
}
