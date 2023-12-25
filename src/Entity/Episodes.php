<?php

namespace App\Entity;

use App\Entity\Episode;
use Countable;

/**
 * Class définissant une collection d'épisode
 * Version 1.0
 */
class Episodes implements Countable
{
    private ?array $_Episodes;
    
    /**
     * Retourne le Nombre d'épisode de la collection
     * Fonction implementé par Countable
     *
     * @return integer
     */
    public function count(): int
    {
        return count($this->_Episodes);
    }
    
    /**
     * Retourne la collection d'épisode
     * 
     * @return array
     */ 
    public function get_Episodes() :array
    {
        return $this->_Episodes;
    }

    /**
     * Ajoute un épisode à la collection
     *
     * @param Episode $_Episode
     * @return void
     */
    public function set_Episodes(Episode $_Episode)
    {
        if (is_object($_Episode)) $this->_Episodes[] = $_Episode;
        return $this;
    }
}