<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 *
 *
 * @ORM\Table(name="mode_clim_chauffage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Mode_clim_chauffageRepository")

 *
 */
class Mode_clim_chauffage
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
     * @ORM\Column(name="temp_max", type="float",nullable=true)
     */

    private $temp_max;

    /**
     *
     * @ORM\Column(name="temp_min", type="float",nullable=true)
     */

    private $temp_min;

    /**
     * @ORM\OneToMany(targetEntity="Clim_chauffage", mappedBy="mode")
     */
    private $clim_chauffages;

    /**
     * @ORM\OneToMany(targetEntity="Scenario", mappedBy="mode")
     */
    private $scenarios;


    public function __toString()
    {
        return (string) $this->getNom();
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->clim_chauffages = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * @return Mode_clim_chauffage
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
     * Set tempMax
     *
     * @param float $tempMax
     *
     * @return Mode_clim_chauffage
     */
    public function setTempMax($tempMax)
    {
        $this->temp_max = $tempMax;

        return $this;
    }

    /**
     * Get tempMax
     *
     * @return float
     */
    public function getTempMax()
    {
        return $this->temp_max;
    }

    /**
     * Set tempMin
     *
     * @param float $tempMin
     *
     * @return Mode_clim_chauffage
     */
    public function setTempMin($tempMin)
    {
        $this->temp_min = $tempMin;

        return $this;
    }

    /**
     * Get tempMin
     *
     * @return float
     */
    public function getTempMin()
    {
        return $this->temp_min;
    }


    /**
     * Add climChauffage
     *
     * @param \AppBundle\Entity\Clim_chauffage $climChauffage
     *
     * @return Mode_clim_chauffage
     */
    public function addClimChauffage(\AppBundle\Entity\Clim_chauffage $climChauffage)
    {
        $this->clim_chauffages[] = $climChauffage;

        return $this;
    }

    /**
     * Remove climChauffage
     *
     * @param \AppBundle\Entity\Clim_chauffage $climChauffage
     */
    public function removeClimChauffage(\AppBundle\Entity\Clim_chauffage $climChauffage)
    {
        $this->clim_chauffages->removeElement($climChauffage);
    }

    /**
     * Get climChauffages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClimChauffages()
    {
        return $this->clim_chauffages;
    }

    /**
     * Add scenario
     *
     * @param \AppBundle\Entity\Senario $scenario
     *
     * @return Mode_clim_chauffage
     */
    public function addScenario(\AppBundle\Entity\Scenario $scenario)
    {
        $this->scenarios[] = $scenario;

        return $this;
    }

    /**
     * Remove scenario
     *
     * @param \AppBundle\Entity\Senario $scenario
     */
    public function removeScenario(\AppBundle\Entity\Scenario $scenario)
    {
        $this->scenarios->removeElement($scenario);
    }

    /**
     * Get scenarios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getScenarios()
    {
        return $this->scenarios;
    }
}
