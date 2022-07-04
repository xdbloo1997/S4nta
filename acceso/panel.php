<?php
session_start();

/*session_start();
    if(!isset($_SESSION['usr'])){
        header('Location: login.php');
    }
	include_once('../Config/MySQL.php');
	date_default_timezone_set("America/Mexico_City");*/
?>

<!DOCTYPE html>
<html>

<head>
    <title>°P4NEL-INTER4CTIVO°</title>
</head>

<body>

    <center>
        <table style="width: 500px;display:table;border:1px solid #c1c1c1;margin:0 auto;margin-top: 100px;text-align: center;">
            <tr>
                <td>
                    <a style="text-decoration: none;" href="login-personal.php" target="_blank">Ir al Panel Personal</a>
                </td>
                <td>
                    <a style="text-decoration: none;" href="login-empresarial.php" target="_blank">Ir al Panel Empresarial</a>
                </td>
            </tr>
        </table>
    </center>

</body>

</html>