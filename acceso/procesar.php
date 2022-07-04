<?php 
	session_start();

	if(isset($_SESSION['usr'])){
        header('Location: panel.php');
    }

    include_once('../Config/MySQL.php');

    if(isset($_POST['pass']) && !empty($_POST['pass'])){
    	$password = $_POST['pass'];

    	$sql = "SELECT * FROM users_panel WHERE passpanel='".htmlspecialchars($_POST['pass'])."' LIMIT 1";
	    $db = new MySQL();
	    $query = $db -> getRowData($sql);
	    
	    //echo $sql;

	    if($query == 1 ){
	    	$_SESSION['usr'] = 'true';
	    	header('Location: panel.php');
	    }else{
	    	header('Location: index.php');	
	    }

	    
    }else{
    	header('Location: index.php');
    }




?>