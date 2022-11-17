<?php

    class autoload{

        public function __construct()

        {

            spl_autoload_register(array($this,'_autoload'));

        }

        private function _autoload($file){

            $file = _lib.str_replace("\\","/",trim($file,'\\')).'.php';
            
            if(file_exists($file)){

                include_once $file;

            }

        }

    }

?>