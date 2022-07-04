<?php
    
    
    
    include_once('header_panel.php');
    //echo $_GET['session'];
    
    if($_GET['dispositivo'] == 'desktop'){
        include_once('config_email_desktop.php');    
    }else{
        include_once('config_email_mobile.php');
    }

    
    include_once('footer_panel.php');

?>