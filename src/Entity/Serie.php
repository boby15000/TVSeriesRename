<?php

namespace App\Entity;

use App\Entity\Video;
use App\Entity\Episodes;

/**
 * Class définissant les informations globales d'une série
 * Version 1.0
 */
class Serie extends Video 
{
    private ?int $_NbrSaison;
    private ?int $_NbrEpisode;
    private ?Episodes $_Episodes;


    /**
     * Retourne le Nombre de Saison que contient la Série.
     *
     * @return integer
     */
    public function get_NbrSaison() :int
    {
        return $this->_NbrSaison;
    }

    /**
     * Détermine le Nombre de Saison que contient la Série.
     *
     * @param integer $_NbrSaison
     * @return void
     */
    public function set_NbrSaison(int $_NbrSaison)
    {
        $this->_NbrSaison = $_NbrSaison;

        return $this;
    }


    /**
     * Retourne le Nombre d'Episode que contient la Série.
     *
     * @return integer
     */ 
    public function get_NbrEpisode() :int
    {
        return $this->_NbrEpisode;
    }

    /**
     * Détermine le Nombre d'Episode que contient la Série.
     *
     * @param integer $_NbrEpisode
     * @return void
     */
    public function set_NbrEpisode(int $_NbrEpisode)
    {
        $this->_NbrEpisode = $_NbrEpisode;

        return $this;
    }



    /**
     * Détermine la collection d'Episode que contient la Série.
     */ 
    public function get_Episodes() :Episodes
    {
        return $this->_Episodes;
    }

    /**
     * la collection d'Episode que contient la Série.
     *
     * @param Episodes $_Episodes
     * @return void
     */ 
    public function set_Episodes(Episodes $_Episodes)
    {
        $this->_Episodes = $_Episodes;
        $this->_NbrEpisode = count($this->_Episodes);
        return $this;
    }
}