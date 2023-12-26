<?php

namespace App\Services;

/**
 * Class définissant les ressources Internet
 * Version 1.0
 */
class Internet
{

        public function IsConnected()
        {
            try {
                return fsockopen("www.google.com", 80, $errno, $errstr, 3);
            } catch (\Throwable $th) {
                return false;
            }
        }

}