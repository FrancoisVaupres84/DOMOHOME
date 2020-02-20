<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;

/**
 *
 *
 * @ORM\Table(name="clim_chauffage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\Clim_chauffageRepository")

 *
 */
class Clim_chauffage
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
     * @ORM\ManyToOne(targetEntity="Mode_clim_chauffage", inversedBy="clim_chauffages")
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
     * Set etat
     *
     * @param boolean $etat
     *
     * @return Clim_chauffage
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return boolean
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set mode
     *
     * @param \AppBundle\Entity\Mode_clim_chauffage $mode
     *
     * @return Clim_chauffage
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
}
