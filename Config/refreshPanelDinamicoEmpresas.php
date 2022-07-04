<?php
    session_start();
    date_default_timezone_set("America/Mexico_City");
    include_once('MySQL.php');

    if(isset($_POST['request']) && !empty($_POST['request'])){
        
        $sql = "SELECT last_conection FROM logos_santander_empresas WHERE id=".$_POST['session'];
        $query = new MYSQL();
        $data = $query->getRowData($sql);

        /*$data_arr['status'] = 'ok';
        $data_arr['hora_system'] = strtotime($data);;
        $data_arr['hora_actual'] = strtotime(date('h:i:s', strtotime('-10 second')));
        
        echo json_encode($data_arr);*/
        
        
        $hora_cliente = $data;
        $hora_actual = date('h:i:s', strtotime('-4 second'));

        $hora1 = strtotime($hora_cliente);
        $hora2 = strtotime($hora_actual);

        //echo $hora_cliente." - ".$hora_actual;

        if( $hora1 > $hora2 ) {
            echo 'Online'; 
            /*$data_arr['class'] = 'online';
            $data_arr['status'] = 'En Linea';
            echo json_encode($data_arr);*/
        
        } else {
            echo 'Offline'; 
            /*$data_arr['class'] = 'offline';
            $data_arr['status'] = 'Fuera de Linea';
            echo json_encode($data_arr);*/
        }
        //echo $hora1.">".$hora2;
        //echo $statusOnline;

          
    }



    

?>


