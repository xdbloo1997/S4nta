<?php
    //include_once('config.php');

    class MySQL{
        
           private $server = "localhost";
        private $user = "root";
        private $pass = "rootmx";
        private $db = "santander_db";
        
        private $cx;
        
        public function MySQL(){
            MySQL::conectDB();
        }
        
        public function conectDB(){
            $this->cx = mysqli_connect($this->server, $this->user, $this->pass, $this->db);
            if(!$this->cx){
                echo "Fallo al conectar: ".mysqli_connect_error(); 
            }
        }

        

        public function insertHistory($sql){
            $query = mysqli_query($this->cx, $sql);
            if($query){
                return true;
            }else{
                return false;
            }
            MySQL::closeDB();
        }

        public function getRowLogoScam($sql){
            $r = array();
            $query = mysqli_query($this->cx, $sql);
            while($row = mysqli_fetch_array($query)){
                $r[] = $row;
            }
            MySQL::closeDB();
            return json_encode($r);
        }
        
        

        public function getRowData($sql){
            $r = "";
            $query = mysqli_query($this->cx, $sql);
            while($row = mysqli_fetch_array($query)){
                $r = $row[0];
            }
            MySQL::closeDB();
            return $r;
        }
        
        public function insertDB($sql){
            $query = mysqli_query($this->cx, $sql);
            if($query){
                return true;
            }else{
                return false;
            }
            MySQL::closeDB();
        }

        public function numRowsTable($table){
            $sql = "SELECT * FROM ".$table;
            $query = mysqli_query($this->cx, $sql);
            $rows = mysqli_num_rows($query);
            return $rows;
            
            //return $sql;
        }

        public function queryStandar($sql){
            $r = array();
            $query = mysqli_query($this->cx, $sql);
            MySQL::closeDB();
            return $query;
        }
        
        public function closeDB(){
            mysqli_close($this->cx);
        }
    }
?>