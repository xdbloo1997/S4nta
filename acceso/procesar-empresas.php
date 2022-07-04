<?php 
	session_start();

	if(isset($_SESSION['usr'])){
        header('Location: panel-empresarial.php');
    }

    include_once('../Config/MySQL.php');

    if(isset($_POST['pass']) && !empty($_POST['pass'])){
    	$password = $_POST['pass'];

    	$sql = "SELECT * FROM users_panel WHERE passpanel='".htmlspecialchars($_POST['pass'])."' AND tipo=1";
	    $db = new MySQL();
	    $query = $db -> getRowData($sql);
	    
	    echo $sql;

	    if($query == 1 ){
			$_SESSION['usr'] = 'true';
			//echo "Si existe el usuario";
	    	header('Location: panel-empresarial.php');
	    }else{
			//echo "No existe el usuario";
	    	header('Location: login-empresarial.php');	
	    }

	    
    }else{
    	header('Location: index.php');
    }




?>