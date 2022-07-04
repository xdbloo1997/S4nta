<?php 
    session_start();
    if(!isset($_SESSION['usr'])){
        header('Location: login-personal.php');
    }
    include_once('../Config/MySQL.php');
    date_default_timezone_set("America/Mexico_City");
    
    //$idCliente = base64_decode($_GET['id']);
    $idCliente = $_GET['id'];

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminPANEL | Panel</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script type="text/javascript" src="archivos/jquery-1.9.1.js"></script>

    <script>
        $(document).ready(function(){
            var position = $(window).height() - $('#pos').height();
            var section=$('#enlaceposition').attr("href");
            $("body, html").animate({
                scrollTop:$(section).offset().top - position
            }, 750);
        });
    </script>
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->

<body class="hold-transition skin-blue layout-top-nav">


<style>
    ul{
        list-style: none;
    }

    li{
        display: list-item;
    }
</style>


    <div class="row">
        <div class="col-xs-12">

            <ul>
                
                    <!--<i class="fa fa-user bg-aqua"></i>-->

                    <div class="row row-xs-12">
                        <!--<div class="col-xs-1">
                            
                        </div>-->
                        <a id="enlaceposition" href="#pos"></a>
                        <div class="col-xs-12" id="pos">
                            
                            <?php 

                                $sql = "SELECT * FROM history_request WHERE id_session='".$idCliente."' ORDER BY id_history ASC";
                                $db = new MySQL();
                                $data = $db->queryStandar($sql);

                                while ($r = mysqli_fetch_array($data)) {
                                    //echo $r[0]." ".$r[1]." ".$r[2]." ".$r[3]." ".$r[4];
                                    
                                    if($r[3] == 1){
                            ?>
                                <li>
                                    <p class="text-muted" style="margin:1px!important;color:#000">
                                        <span class="time" style="margin-right: 20px;">
                                            <i class="fa fa-clock-o"></i>
                                            <?=$r[1]?>
                                        </span>
                                        <?=$r[2]?>
                                    </p>
                            <?php
                                    }else{
                            ?>
                                    <p class="text-green" style="margin:1px!important;color:green">
                                        <span class="time" style="margin-right: 20px;">
                                            <i class="fa fa-clock-o"></i>
                                            <?=$r[1]?>
                                        </span>
                                        <?=$r[2]?>
                                    </p>
                                </li>
                            <?php
                                    }
                                }
                            ?>

                        </div>

                        <div>
                            
                        </div>



                    </div>
                
            </ul>


        </div>
    </div>










</body>

</html>




<script type="text/javascript">
    var int = self.setInterval("refresh()", 5000);

    function refresh() {
        location.reload(true);
    }

</script>
