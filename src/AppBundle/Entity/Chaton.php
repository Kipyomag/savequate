<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chaton
 *
 * @ORM\Table(name="chaton")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ChatonRepository")
 */
class Chaton
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
     * @var string
     *
     * @ORM\Column(name="Nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="couleur", type="string", length=255)
     */
    private $couleur;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite1", type="string", length=255)
     */
    private $qualite1;

    /**
     * @var string
     *
     * @ORM\Column(name="qualite2", type="string", length=255)
     */
    private $qualite2;

    /**
     * @var string
     *
     * @ORM\Column(name="defaut", type="string", length=255)
     */
    private $defaut;

    /**
     * @var string
     *
     * @ORM\Column(name="marque_croquette", type="string", length=255)
     */
    private $marqueCroquette;

    /**
     * @var bool
     *
     * @ORM\Column(name="dispo", type="boolean")
     */
    private $dispo;


    /**
     * Get id
     *
     * @return int
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
     * @return Chaton
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
     * Set couleur
     *
     * @param string $couleur
     *
     * @return Chaton
     */
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get couleur
     *
     * @return string
     */
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set qualite1
     *
     * @param string $qualite1
     *
     * @return Chaton
     */
    public function setQualite1($qualite1)
    {
        $this->qualite1 = $qualite1;

        return $this;
    }

    /**
     * Get qualite1
     *
     * @return string
     */
    public function getQualite1()
    {
        return $this->qualite1;
    }

    /**
     * Set qualite2
     *
     * @param string $qualite2
     *
     * @return Chaton
     */
    public function setQualite2($qualite2)
    {
        $this->qualite2 = $qualite2;

        return $this;
    }

    /**
     * Get qualite2
     *
     * @return string
     */
    public function getQualite2()
    {
        return $this->qualite2;
    }

    /**
     * Set defaut
     *
     * @param string $defaut
     *
     * @return Chaton
     */
    public function setDefaut($defaut)
    {
        $this->defaut = $defaut;

        return $this;
    }

    /**
     * Get defaut
     *
     * @return string
     */
    public function getDefaut()
    {
        return $this->defaut;
    }

    /**
     * Set marqueCroquette
     *
     * @param string $marqueCroquette
     *
     * @return Chaton
     */
    public function setMarqueCroquette($marqueCroquette)
    {
        $this->marqueCroquette = $marqueCroquette;

        return $this;
    }

    /**
     * Get marqueCroquette
     *
     * @return string
     */
    public function getMarqueCroquette()
    {
        return $this->marqueCroquette;
    }

    /**
     * Set dispo
     *
     * @param boolean $dispo
     *
     * @return Chaton
     */
    public function setDispo($dispo)
    {
        $this->dispo = $dispo;

        return $this;
    }

    /**
     * Get dispo
     *
     * @return bool
     */
    public function getDispo()
    {
        return $this->dispo;
    }
}

