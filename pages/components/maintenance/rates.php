<div class="body">
    <div class="cont">



        <div class="mainContDato">


            <h1> Tarifas <a class="boton gree right"
                    href="panel.php?OPTIONS=1&amp;MENU=Mantenimiento&amp;MENU1=&amp;IDMENU=1&amp;EDIT=N&amp;AX=16&amp;EDIT=Y&amp;usuario=&amp;control_oficina=&amp;oficina=&amp;idrol=&amp;rol=&amp;idtipo_oficina=&amp;idtipo_tarifa=&amp;menu_sistema=">Crear
                    perfil</a>
            </h1>

            <div class="module-menu">



                <div class="menu">
                    <h2>Tipo perfil</h2>
                    <div class="nav-v">
                        <ul>
                            <li><a href="panel.php?OPTIONS=1&amp;AX=16&amp;IDMENU=97&amp;MENU=Mantenimiento&amp;idtipo_tarifa=67&amp;descripcion=TARIFA GENERAL"
                                    class="flaticon-dollar179">Tarifa General</a></li>


                        </ul>


                    </div>

                </div>

            </div>

            <div class="all-cont">
                <div class="toolbar">
                    <div class="nav-h left">
                        <ul>
                            <li><a class="flaticon-back57"
                                    href="panel.php?OPTIONS=1&amp;AX=16&amp;IDMENU=97&amp;menu_sistema=">Retornar
                                    atras</a></li>
                        </ul>
                    </div>

                </div>

                <h2>
                    Tasa=55 * 1 | Itbis=0.18</h2>



                <h1>Mantenimiento </h1>
                <table width="100%" border="1">
                    <tbody>
                        <tr>
                            <td>
                                <form action="run.php" enctype="multipart/form-data" method="post">
                                    <table width="100%" class="list">
                                        <tbody>
                                            <tr>
                                                <td width="23%"> Crear Perfil </td>
                                                <td width="77%"><input name="registrar" type="text" id="registrar"
                                                        value="" required=""></td>
                                            </tr>
                                            <tr>
                                                <td>Moneda</td>
                                                <td><input name="moneda" type="radio" value="1" checked="checked">
                                                    RD$
                                                    <input name="moneda" type="radio" value="2"> US$
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>&nbsp;</td>
                                                <td> <input type="submit" name="Submit" value="Grabar"
                                                        class="item-block-list ">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>




                                    <input type="hidden" name="caja[]" id="caja[]" value="0">
                                    <input type="hidden" name="cajatexto[]" id="cajatexto[]" value="0">
                                    <input type="hidden" name="EJECUTE" value="2" readonly="YES">
                                    <input type="hidden" name="id_empresa" value="" readonly="YES">
                                    <input type="hidden" name="OPTIONS" value="1" readonly="YES">
                                    <input type="hidden" name="MENU" value="Menu" readonly="YES">
                                    <input type="hidden" name="MENU1" value="" readonly="YES">
                                    <input type="hidden" name="IDMENU" value="97" readonly="YES">
                                    <input type="hidden" name="AX" value="8b" readonly="YES">
                                    <input type="hidden" name="EDIT" value="" readonly="YES">
                                    <input type="hidden" name="oficina" value="" readonly="YES">
                                    <input type="hidden" name="control_oficina" value="" readonly="YES">
                                    <input type="hidden" name="tipo_envio" value="AEREO" readonly="YES">
                                    <input type="hidden" name="tipo_tarifa" value="" readonly="YES">
                                    <input type="hidden" name="MENU_SISTEM" value="" readonly="YES">
                                </form>
                                <hr>
                                Resumen de cargos
                                adicionales
                                <table width="100%" border="0" class="list">
                                    <tbody>
                                        <tr>
                                            <th>#</th>
                                            <th>Tipo de Cargo </th>
                                            <th> US$ </th>
                                            <th> RD$</th>
                                        </tr>
                                        <tr>
                                            <td align="center" bgcolor="#FCFDFE">1</td>
                                            <td bgcolor="#FCFDFE"><input type="hidden" value="155" name="id_cargo[]"
                                                    readonly="readonly">
                                                Airport Fee</td>
                                            <td align="center" bgcolor="#FCFDFE">0.06 &nbsp;</td>
                                            <td align="center" bgcolor="#FCFDFE">3.30</td>
                                        </tr>
                                        <tr>
                                            <td align="center" bgcolor="#FCFDFE">2</td>
                                            <td bgcolor="#FCFDFE"><input type="hidden" value="156" name="id_cargo[]"
                                                    readonly="readonly">
                                                DGA</td>
                                            <td align="center" bgcolor="#FCFDFE">0.12 &nbsp;</td>
                                            <td align="center" bgcolor="#FCFDFE">6.60</td>
                                        </tr>
                                        <tr>
                                            <td align="center" bgcolor="#FCFDFE">3</td>
                                            <td bgcolor="#FCFDFE"><input type="hidden" value="157" name="id_cargo[]"
                                                    readonly="readonly">
                                                Cargo Combustible</td>
                                            <td align="center" bgcolor="#FCFDFE">0.60 &nbsp;</td>
                                            <td align="center" bgcolor="#FCFDFE">33.00</td>
                                        </tr>
                                        <tr>
                                            <td align="center" bgcolor="#FCFDFE">4</td>
                                            <td bgcolor="#FCFDFE"><input type="hidden" value="158" name="id_cargo[]"
                                                    readonly="readonly">
                                                Seguro %</td>
                                            <td align="center" bgcolor="#FCFDFE">35.00 &nbsp;</td>
                                            <td align="center" bgcolor="#FCFDFE">1,925.00</td>
                                        </tr>
                                        <tr>
                                            <th colspan="2" bgcolor="#FCFDFE">&nbsp;</th>
                                            <th align="center" bgcolor="#FCFDFE">35.78</th>
                                            <th align="center" bgcolor="#FCFDFE"> 1967.9</th>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td valign="top">
                            </td>
                        </tr>
                    </tbody>
                </table>









            </div>

        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/app.js"></script>




</div>