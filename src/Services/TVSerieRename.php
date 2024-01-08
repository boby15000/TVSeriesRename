<?php
/**
 * Class permettant d'effectuer le renommage
 * Version 1.0
 */

 namespace App\Services;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isNull;
use function PHPUnit\Framework\throwException;

class TVSerieRename
{
    private array $_Files;


    public function __construct(string $folder, string $modele)
    {
        if ( empty($folder) ) throw new \Exception("Le dossier n'est pas précisé");
        if ( !file_exists($folder) ) throw new \Exception("Le dossier n'existe pas");
        $this->ScanDirectory($folder);

    }

    /**
     * Récupére tous les fichiers du Dossier et sous Dossier transmit en paramètre 
     *
     * @param string $Directory
     * @return void
     */    
    private function ScanDirectory(string $Directory)
    {
        $MyDirectory = opendir($Directory) or die('Erreur');
            while($Entry = @readdir($MyDirectory)) {
                if(is_dir($Directory.'/'.$Entry)&& $Entry != '.' && $Entry != '..') 
                {
                    $this->ScanDirectory($Directory.'/'.$Entry);
                }
                elseif($Entry != '.' && $Entry != '..' and preg_match("#\.(avi|mp4|mkv)$#i", $Entry)) 
                {
                    //$file =  new \SplFileInfo($Entry) ;
                    $this->_Files[] = new \SplFileInfo($Entry) ;
                }
            }
        closedir($MyDirectory);
    }



}