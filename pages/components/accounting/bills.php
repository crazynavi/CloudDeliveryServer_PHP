<div class="body">
    <div class="cont">





        <link rel="stylesheet" type="text/css" href="css/epoch_styles.css">
        <script type="text/javascript" src="js/epoch_classes.js"></script>
        <script type="text/javascript">
            /*You can also place this code in a separate file and link to it like epoch_classes.js*/
            var bas_cal, dp_cal2, dp_cal3, dp_cal4, dp_cal5;
            window.onload = function () {

                dp_cal = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container'));
                dp_cal2 = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container2'));
                dp_cal3 = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container3'));
                dp_cal4 = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container4'));

            };
        </script>

        <h1>Mis Facturas</h1>


        <div class="toolbar">
            <div class="toolbar-item-form right">
                <form action="panel.php" enctype="multipart/form-data" method="post">
                    <input name="buscar" type="text" class="buscador" value="" placeholder="No. factura"
                        autocomplete="off">
                    <input type="submit" value="Buscar" class="blue">


                    <input type="hidden" name="OPTIONS" value="60" readonly="YES">
                    <input type="hidden" name="MENU" value="Menu" readonly="YES">
                    <input type="hidden" name="MENU1" value="" readonly="YES">
                    <input type="hidden" name="IDMENU" value="65" readonly="YES">
                    <input type="hidden" name="AX" value="5" readonly="YES">

                </form>


            </div>
        </div>

        <form>
            Filtar por fecha desde <input type="date" id="popup_container" name="fecha_desde" style="width:150px;"
                value="2023-03-10" s=""> hasta <input type="date" id="popup_container2" name="fecha_hasta"
                style="width:150px;" value="2023-03-10">
            <input type="submit" name="Submit2" value="Generar Reporte" class="blue boton ">

            <input type="hidden" name="OPTIONS" value="60" readonly="YES">
            <input type="hidden" name="MENU" value="Menu" readonly="YES">
            <input type="hidden" name="MENU1" value="" readonly="YES">
            <input type="hidden" name="IDMENU" value="65" readonly="YES">
            <input type="hidden" name="AX" value="5" readonly="YES">
        </form>
        <br>

        <table class="list">

            <tbody>
                <tr title="">
                    <th align="center" valign="top"> </th>
                    <th align="center" valign="top">Factura</th>
                    <th align="center" valign="top">Cliente </th>
                    <th align="center" valign="top">Oficina</th>
                    <th align="center" valign="top"><strong>Estatus</strong></th>
                    <th align="center" valign="top">Fecha</th>
                    <th align="center" valign="top">Tipo</th>
                    <th align="center" valign="top"> Total a pagar</th>
                    <th align="center" valign="top">Reembolso</th>
                    <th align="center" valign="top">&nbsp;</th>
                </tr>



                <tr>
                    <td colspan="10" align="left" valign="top">*** No hay facturas pendientes. . </td>
                </tr>


            </tbody>
        </table>
        <table class="list">

            <tbody>
                <tr>
                    <td valign="top">&nbsp;</td>
                    <td valign="top"><strong>Resumen General</strong>
                        <table class="list">
                            <tbody>
                                <tr>
                                    <td>Consolidado</td>
                                    <td>0.00&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Expreso</td>
                                    <td>0.00&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Gestión Aduanal</td>
                                    <td>0.00&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td valign="top"><strong>Detalles de Totales</strong>
                        <table width="100%" border="0">
                            <tbody>
                                <tr>
                                    <td>Total a pagar</td>
                                    <td>0.00&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Total Reembolso</td>
                                    <td>0.00&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Total general</td>
                                    <td>0.00 </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>

        <br>


        <br>
        <table width="100%" border="0">
            <tbody>
                <tr>
                    <th colspan="3" align="center">CUADRE DE CAJA CONTABLE </th>
                </tr>
                <tr>
                    <th>SIPCO</th>
                    <th>Fecha desde : </th>
                    <th>Fecha hasta : </th>
                </tr>
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </tbody>
        </table>
        <h2> TIPO : CONSOLIDADO </h2>
        <table class="list">
            <tbody>
                <tr>
                    <th>&nbsp;</th>
                    <th>RNC o Cedula</th>
                    <th>Factura</th>
                    <th>NCF</th>
                    <th>Nombre </th>
                    <th>Gravado</th>
                    <th>Excento</th>
                    <th>Itbis</th>
                    <th>Total Neto</th>
                    <th>Monto Total</th>
                    <th>Fecha</th>
                    <th>Forma de Pago</th>
                    <th>Estatus</th>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td align="right">0.00&nbsp;</td>
                    <td align="right">0.00&nbsp;</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <br>

        <h2> TIPO : EXPRESO </h2>


        <table class="list">
            <tbody>
                <tr>
                    <th>&nbsp;</th>
                    <th>RNC o Cedula</th>
                    <th>Factura</th>
                    <th>NCF</th>
                    <th>Nombre </th>
                    <th>Gravado</th>
                    <th>Excento</th>
                    <th>Itbis</th>
                    <th>Total Neto</th>
                    <th>Monto Total</th>
                    <th>Fecha</th>
                    <th>Forma de Pago</th>
                    <th>Estatus</th>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td align="right">0.00&nbsp;</td>
                    <td align="right">0.00&nbsp;</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>
        <br>

        <br>

        <h2> TIPO : GESTION </h2>



        <table class="list">
            <tbody>
                <tr>
                    <th>&nbsp;</th>
                    <th>RNC o Cedula</th>
                    <th>Factura</th>
                    <th>NCF</th>
                    <th>Nombre </th>
                    <th>Gravado</th>
                    <th>Excento</th>
                    <th>Itbis</th>
                    <th>Total Neto</th>
                    <th>Monto Total</th>
                    <th>Fecha</th>
                    <th>Forma de Pago</th>
                    <th>Estatus</th>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td align="right">0.00&nbsp;</td>
                    <td align="right">0.00&nbsp;</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
            </tbody>
        </table>

        <br>


        <table class="list">
            <tbody>
                <tr>
                    <th colspan="5" align="center"><strong>Resumen en General de Caja</strong></th>
                </tr>
                <tr>
                    <th width="3%">&nbsp;</th>
                    <th width="30%">Tipo Factura</th>
                    <th width="25%">Total Neto</th>
                    <th width="13%">Itebis</th>
                    <th width="29%">Monto Neto</th>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Consolidado</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Expreso</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>Gestión Aduanal</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp; </td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                    <td align="right">0.00</td>
                </tr>
            </tbody>
        </table>

    </div>








</div>