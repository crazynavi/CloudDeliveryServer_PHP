<div class="body">
    <div class="cont">





        <h1> Reporte de facturas Oficinas</h1>


        <link rel="stylesheet" type="text/css" href="css/epoch_styles.css">
        <script type="text/javascript" src="js/epoch_classes.js"></script>
        <script type="text/javascript">
            /*You can also place this code in a separate file and link to it like epoch_classes.js*/
            var bas_cal, dp_cal2, dp_cal3, dp_cal4, dp_cal5;
            window.onload = function () {

                dp_cal = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container'));
                dp_cal2 = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container2'));

            };
        </script>

        <form action="panel.php" enctype="multipart/form-data" method="get">
            <table class="list ">

                <tbody>
                    <tr>
                        <th colspan="5" align="left" valign="top" bgcolor="#F9F9F9">Criterios de busqueda </th>
                    </tr>
                    <tr>
                        <td width="20%" align="left" valign="top">
                            <strong>Oficina</strong>
                            <select name="idoficina">
                                <option value="">-- Oficinas --&gt;</option>
                                <option value="6">ARROYO HONDO</option>
                                <option value="11">INDEPENDENCIA</option>
                                <option value="7">JULIETA MORALES</option>
                                <option value="12">LA VEGA</option>
                                <option value="3">OPS HAITI</option>
                                <option value="4">OPS MIAMI DROPSHIPPING</option>
                                <option value="5">OPS SANTIAGO DE LOS CABALLEROS RD</option>
                                <option value="1">OPS SANTO DOMINGO </option>
                                <option value="8">PLAN COURRIER</option>
                                <option value="9">PLAN FREIGHT FORWARDER</option>
                                <option value="10">PLAN STORAGE (ALMACENAMIENTO)</option>
                                <option value="2">SAN FRANCISCO DE MACORIS</option>
                            </select>


                        </td>
                        <td align="left" valign="top"><strong>Desde</strong><br>
                            <input type="date" id="popup_container" value="" name="fecha_desde" style="width:150px;">
                        </td>
                        <td valign="top"><strong>Hasta</strong><br>
                            <input id="popup_container2" type="date" value="" name="fecha_hasta" style="width:150px;">
                            &nbsp;
                        </td>
                        <td valign="top"><strong>Estatus</strong>
                            <select name="estatus">
                                <option value="">-- Todos --&gt;</option>
                                <option value="PENDIENTE">PENDIENTE</option>
                                <option value="SALDADO">SALDADO</option>
                            </select>
                        </td>
                        <td align="center" valign="top">
                            <input name="boton" type="submit" id="boton" value="Generar salida">
                            <input type="hidden" name="OPTIONS" value="8" readonly="YES">
                            <input type="hidden" name="MENU" value="Menu" readonly="YES">
                            <input type="hidden" name="MENU1" value="" readonly="YES">
                            <input type="hidden" name="IDMENU" value="187" readonly="YES">
                            <input type="hidden" name="AX" value="15" readonly="YES">
                            <input type="hidden" name="EDIT" value="" readonly="YES">
                            <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">

                            <input type="hidden" name="codigo" value="" readonly="YES">
                            <input type="hidden" name="chk1[]" value="0" readonly="YES">
                            <input type="hidden" name="chk2[]" value="0" readonly="YES">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
        <h2>Facturas
            <span class="right"> <a
                    href="print.php?SESSION=0983782KD8S&amp;UT0283JS87^&amp;IUD=9282JDJSH&amp;VIEW=DETFACOFICINA&amp;idoficina=&amp;fecha_hasta=&amp;fecha_desde=2023-03-10&amp;estatus="
                    class="boton gree" target="_new">Imprimir</a> </span>

        </h2>
        <table class="list">
            <tbody>
                <tr title="">
                    <th align="center" valign="top"># </th>
                    <th align="center" valign="top">Factura</th>
                    <th align="center" valign="top"> Oficina</th>
                    <th colspan="2" align="center" valign="top">Peso</th>
                    <th align="center" valign="top">Fecha</th>
                    <th align="center" valign="top"><strong>Estatus</strong></th>
                    <th align="center" valign="top">Gestion</th>
                    <th align="center" valign="top">Total pagar</th>
                    <th align="center" valign="top">&nbsp;</th>
                </tr>



                <tr>
                    <td colspan="10" align="left" valign="top">*** No hay facturas. </td>
                </tr>


            </tbody>
        </table>












    </div>
</div>