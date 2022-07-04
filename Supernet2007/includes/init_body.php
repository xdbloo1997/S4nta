<body id="supernet" style="background: rgb(213, 214, 216);" bgproperties="fixed">

<style>
        #divEmailConfirm {
            width: 40%;
            left: 30%;
            top: 2em;
            z-index: 10002;
            position: absolute;
            display: none;
            margin: 0 auto!important;
        }


        #backmodal {
            padding: 0;
            margin: 0;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            width: 100%;
            height: 100%;
            background: #595959 url(spacer.gif) center center;
            z-index: 1001;
            -moz-opacity: 0.8;
            opacity: 0.80;
            filter: alpha(opacity=80);
            display: none;
        }

        @media (min-width: 1200px){
            #divEmailConfirm {
                width: 40%;
                left: 30%;
                top: 2em;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px){
            #divEmailConfirm {
                width: 60%;
                left: 30%;
                top: 3em;
            }
        }

        @media (min-width: 268px) and (max-width: 991px){
            #divEmailConfirm {
                width: 90%;
                left: 5%;
                top: 1em;
            }
        }
    </style>

    <div id="backmodal"></div>

    <div class="" id="divEmailConfirm" style="">
        <div id="cnt">
            <iframe id="iframeEmail" style="width: 100%; height: 550px" src=""></iframe>
            
        </div>
    </div>

<link rel="stylesheet" type="text/css" href="css/nuevosEstilos.css">

<div id="divWin" style="position:relative;left:0px;top:0px;width:500;height:500;display:NONE;z-index:2000;"></div>
<div id="jbscreen" class="layer" style="position: absolute; left: 0px; top: 0px; width: 1280px; height: 800px; z-index: 10000; display: block;"></div>
<div id="jbscreenAlert" class="layer" style="position: absolute; left: 0px; top: 0px; width: 1280px; height: 800px; z-index: 10000;"></div>
<div id="jbscreenLoading" class="layer" style="position: absolute; left: 0px; top: 0px; width: 1280px; height: 800px; display: none; z-index: 10000;"></div>