<?php 
    class CtrlTXT {
        private $urlFile;
        private $mode;
        
        public function CtrlTXT($tipo){
            if($tipo == 'personas'){
                $this -> urlFile = "../lgsxkjs8237hasads4423423kawld/personas11122019.txt";
            }else{
                $this -> urlFile = "../lgsxkjs8237hasads4423423kawld/empresas11122019.txt";
            }
            
            $this -> mode = "a";
        }
        
        public function writeFile($content){
            $file = fopen($this->urlFile, $this->mode);
            fwrite($file, $content.PHP_EOL);
            fclose($file);
        }
    }
?>