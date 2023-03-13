<div class="body">
    <div class="cont">



        <div class="mainContDato">

            <h1>Mantenimiento Tasa </h1>


            <form action="run.php" enctype="multipart/form-data" method="post">

                <div class="row div">
                    <div class="col2">

                        <h2>Mantenimiento de Tasa del dolar</h2>
                        <div class="row-line">
                            <span class="label">Tasa</span>
                            <span class="details">
                                <input name="tasa" type="text" id="tasa" required="" value="55">
                                <input name="tasaold" type="hidden" id="tasaold" value="55">
                                <input type="submit" name="boton" value="Grabar"> </span>
                        </div>


                        <div class="row-line">

                            <img src="http://www.aduanas.gob.do/_catalogs/masterpage/images/dga_Logo2.png" width="150">

                        </div>


                    </div>
                    <div class="col2">

                        <div class="row">
                            <h2>Historial Tasa del dolar</h2>


                            <div class="row-line">

                                <table width="400" border="0" align="center" class="list">
                                    <tbody>
                                        <tr>
                                            <th width="29" align="center" valign="top">#</th>
                                            <th width="93" align="center" valign="top">Tasa US$ </th>
                                            <th width="151" align="center" valign="top">Fecha incio </th>
                                            <th width="109" align="center" valign="top">Fecha fin </th>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">&nbsp;</td>
                                            <td align="center" valign="top">53.5</td>
                                            <td align="left" valign="top">2019-12-03 20:05:54 &nbsp;</td>
                                            <td align="left" valign="top">2020-04-23 &nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">&nbsp;</td>
                                            <td align="center" valign="top">49</td>
                                            <td align="left" valign="top">2018-02-23 13:29:05 &nbsp;</td>
                                            <td align="left" valign="top">2019-12-03 &nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">&nbsp;</td>
                                            <td align="center" valign="top">48</td>
                                            <td align="left" valign="top">2018-02-17 13:52:40 &nbsp;</td>
                                            <td align="left" valign="top">2018-02-23 &nbsp;</td>
                                        </tr>
                                        <tr>
                                            <td align="center" valign="top">&nbsp;</td>
                                            <td align="center" valign="top">48.5</td>
                                            <td align="left" valign="top">2018-02-17 13:50:15 &nbsp;</td>
                                            <td align="left" valign="top">2018-02-23 &nbsp;</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div align="center">
                        <input type="hidden" name="EJECUTE" value="2" readonly="YES">
                        <input type="hidden" name="id_empresa" value="" readonly="YES">
                        <input type="hidden" name="OPTIONS" value="104" readonly="YES">
                        <input type="hidden" name="MENU" value="Menu" readonly="YES">
                        <input type="hidden" name="MENU1" value="" readonly="YES">
                        <input type="hidden" name="IDMENU" value="34" readonly="YES">
                        <input type="hidden" name="AX" value="4" readonly="YES">
                        <input type="hidden" name="EDIT" value="" readonly="YES">
                        <input type="hidden" name="oficina" value="" readonly="YES">
                        <input type="hidden" name="RETORNO" value="" readonly="YES">
                        <input type="hidden" name="VIEW" value="" readonly="YES">


                        <input type="hidden" name="control_oficina" value="" readonly="YES">
                        <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">

                    </div>



                    <a href="http://www.aduanas.gob.do/historial-tasa-cambio" target="_blank" class="boton gree">
                    </a>



                </div>
            </form>

        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/app.js"></script>




</div>