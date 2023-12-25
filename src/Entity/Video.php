<?php

namespace App\Entity;

/**
 * Class définissant les informations globales d'une vidéo
 * Version 1.0
 */
class Video
{

    private ?string $_Titre;
    private ?string $_Producteurs;
    private ?string $_Acteurs;
    private ?string $_Synopsis;
    private ?int $_Duree; // durée en secondes
    private ?string $_Langage;


    /**
     * Retourne le Titre de la vidéo.
     *
     * @return string
     */
    public function get_Titre() :string
    {
        return $this->_Titre;
    }

    /**
     * Détermine le Titre de la vidéo.
     *
     * @param string $_Titre
     * @return void
     */
    public function set_Titre(string $_Titre)
    {
        $this->_Titre = $_Titre;

        return $this;
    }
 

    /**
     * Retourne le(s) Producteur(s) de la vidéo.
     *
     * @return string
     */ 
    public function get_Producteurs()
    {
        return $this->_Producteurs;
    }

    /**
     * Détermine le(s) Producteur(s) de la vidéo.
     *
     * @param string $_Titre
     * @return void
     */
    public function set_Producteurs(string $_Producteurs)
    {
        $this->_Producteurs = $_Producteurs;

        return $this;
    }


    /**
     * Retourne le(s) Acteur(s) de la vidéo.
     *
     * @return string
     */ 
    public function get_Acteurs()
    {
        return $this->_Acteurs;
    }

   /**
     * Détermine le(s) Acteur(s) de la vidéo.
     *
     * @param string $_Titre
     * @return void
     */ 
    public function set_Acteurs(string $_Acteurs)
    {
        $this->_Acteurs = $_Acteurs;

        return $this;
    }


     /**
     * Retourne la Synopsis de la vidéo.
     *
     * @return string
     */ 
    public function get_Synopsis()
    {
        return $this->_Synopsis;
    }

   /**
     * Détermine la Synopsis de la vidéo.
     *
     * @param string $_Titre
     * @return void
     */ 
    public function set_Synopsis(string $_Synopsis)
    {
        $this->_Synopsis = $_Synopsis;

        return $this;
    }


    /**
     * Retourne la Durée de la vidéo.
     *
     * @return integer
     */ 
    public function get_Duree()
    {
        return $this->_Duree;
    }

    /**
     * Détermine la Durée de la vidéo.
     *
     * @param integer $_Duree
     * @return void
     */
    public function set_Duree(int $_Duree)
    {
        $this->_Duree = $_Duree;

        return $this;
    }


    /**
     * Retourne le Langage de la vidéo.
     *
     * @return string
     */ 
    public function get_Langage()
    {
        return $this->_Langage;
    }

     /**
     * Détermine le Languge de la vidéo.
     *
     * @param string $_Titre
     * @return void
     */ 
    public function set_Langage(string $_Langage)
    {
        $this->_Langage = $_Langage;

        return $this;
    }
}