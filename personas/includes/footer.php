
<div class="container foot">
    <a href="https://www.santander.com.mx/index.html" class="logo-footer"></a>
    <div class="flexFooter">
        <div>
            <p class="accordion">Acerca del Banco</p>
            <div class="panel">
                <a href="https://www.santander.com.mx/ir/home/">Inversionistas</a>
                <a href="https://www.santander.com.mx/ceb/sala_prensa_2019.html">Sala de Comunicaci&oacute;n</a>
                <a href="https://www.santander.com.mx/personas/acerca-del-banco/responsabilidad-social.html">Banca Responsable</a>
                <a href="https://www.santander.com.mx/NuevaVersion/modal/educacion-financiera/index.html"  onclick="utag.link({interaction_category:'Footer',interaction_action:'Acerca del Banco',interaction_label:'Educacion Financiera'});">Educaci&oacute;n Financiera</a>
                <a href="https://www.santander.com.mx/personas/acerca-del-banco/radar.html">Radar</a>
            </div>
        </div>
        <div>
            <p class="accordion">Regulaci&oacute;n</p>
            <div class="panel">
                <a href="https://www.santander.com.mx/legales/index.htm">Aviso legal</a>
                <a href="https://www.santander.com.mx/PDF/personas/AvisoPrivacidad.pdf">Aviso de Privacidad</a>
                <a href="https://www.santander.com.mx/personas/regulacion/transparencia.html">Transparencia</a>
            </div>
        </div>
        <div>
            <p class="accordion">Ayuda</p>
            <div class="panel">
                <a href="https://www.santander.com.mx/personas/ayuda/quejas-sugerencias.html">Quejas, sugerencias</a>
                <a href="https://www.santander.com.mx/personas/regulacion/transparencia.html#anc-1">UNE Santander</a>
                <a href="https://www.santander.com.mx/personas/regulacion/transparencia.html#anc-5">Bur&oacute; Entidades Financiera</a>
                <a href="https://www.santander.com.mx/personas/ayuda/tips-seguridad.html">Tips de Seguridad</a>
                <!--<a href="https://www.santander.com.mx/personas/ayuda/mapa-sitio.html">Mapa del sitio</a>-->
            </div>
        </div>
        <div>
            <p class="accordion">S&iacute;guenos</p>
            <div class="panel">
                <a href="https://www.facebook.com/SantanderMex" target="_blank"><i class="ico-redsocial1" ></i> Facebook</a>
                <a href="https://www.instagram.com/santander_mex/" target="_blank"><i class="ico-redsocial2"></i> Instagram</a>
                <a href="https://www.twitter.com/SantanderMx" target="_blank"><i class="ico-redsocial3"></i> Twitter</a>
                <a href="https://www.linkedin.com/company/banco-santander-mexico/" target="_blank"><i class="ico-redsocial4"></i> Linkedin</a>
                <a href="https://www.youtube.com/user/SantanderMex" target="_blank"><i class="ico-redsocial5"></i> Youtube</a>
            </div>
        </div>
    </div>
</div>
<div class="container footSec">
    <div class="row">
        <div class="col-12 col-md-6">
            <div class="flex">
                <a href="https://www.buro.gob.mx"><div class="logo-buro"></div></a>
                <a href="https://www.ibm.com/security/trusteer/landing-page/es/santander-mexico-supernet-personas/" target="_blank"><div class="logo-trustter"></div></a>

            </div>
        </div>
        <div class="col-12 col-md-6">
            <a class="txtCost" href="https://www.santander.com.mx/personas/regulacion/tabla-comisiones.html">Consulta los Costos y las Comisiones de nuestros productos</a>
            <a class="txtCost" href="https://www.santander.com.mx/personas/regulacion/contratos.html">Contratos y Formatos</a>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function() {
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight){
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            }
        }
    });

</script>