<?php

namespace App\Entity;

use App\Entity\Video;

/**
 * Class définissant les informations globales d'un episode
 * Version 1.0
 */
class Episode extends Video 
{
    private ?int $_Saison;
    private ?int $_Episode;


    /**
     * Retourne le Numéro de la Saison de l'Episode
     * 
     * @return int
     */ 
    public function get_Saison() :int
    {
        return $this->_Saison;
    }

    /**
     * Détermine le Numéro de la Saison de l'Episode
     *
     * @param int $_Saison
     * @return void
     */
    public function set_Saison(int $_Saison)
    {
        $this->_Saison = $_Saison;

        return $this;
    }

    /**
     * Retourne le Numéro de l'Episode
     * 
     * @return int
     */ 
    public function get_Episode() :int
    {
        return $this->_Episode;
    }

    /**
     * Détermine le Numéro de l'Episode
     *
     * @param integer $_Episode
     * @return void
     */
    public function set_Episode(int $_Episode)
    {
        $this->_Episode = $_Episode;

        return $this;
    }
}