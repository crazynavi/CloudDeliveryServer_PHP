<div class="body">
    <div class="cont">



        <div class="mainContDato">



            <h1>Reporte NCF-606
                <div class="right">
                    <a class="boton gree  "
                        href="panel.php?OPTIONS=77&amp;AX=5&amp;IDMENU=197&amp;EDIT=Y&amp;MENU_SISTEMA=">+Registrar
                        Gasto</a>
                </div>

            </h1>

            <h1>
                <div class="center">

                    <form action="panel.php" method="post">
                        <select name="nombrecomercial" id="nombrecomercial" style="width:300px;">
                            <option value="">--Suplidor --&gt;</option>
                        </select>
                        <input type="date" name="fecha_desde">
                        <input type="date" name="fecha_hasta">
                        <input type="submit" name="buscar">

                        <input type="hidden" name="OPTIONS" value="77">
                        <input type="hidden" name="AX" value="5">
                        <input type="hidden" name="IDMENU" value="197">
                        <input type="hidden" name="MENU_SISTEMA" value="">

                    </form>


                </div>

            </h1>
            <div class="toolbar">

            </div>
            <input type="hidden" name="OPTIONS" value="77" readonly="YES">
            <input type="hidden" name="MENU" value="Menu" readonly="YES">
            <input type="hidden" name="MENU1" value="" readonly="YES">
            <input type="hidden" name="IDMENU" value="197" readonly="YES">
            <input type="hidden" name="AX" value="5" readonly="YES">
            <input type="hidden" name="EDIT" value="" readonly="YES">



            <link rel="stylesheet" type="text/css" href="css/example.css">
            <script type="text/javascript" src="js/sortable.js"></script>



            <table width="98%" border="0" align="center" class="list  sortable" id="anyid">
                <tbody>
                    <tr>
                        <th valign="top">&nbsp;</th>
                        <th valign="top">ID</th>
                        <th valign="top">Nombre Comercial</th>
                        <th valign="top">RNC </th>
                        <th valign="top">Tipo servicio </th>
                        <th valign="top">NCF </th>
                        <th valign="top">Fecha </th>
                        <th valign="top">Itbis Fac. </th>
                        <th valign="top">Monto</th>
                        <th valign="top">Itbis Retenido </th>
                        <th valign="top"> </th>
                    </tr>


                    <tr>
                        <td colspan="8">*** No hay registrados encontrados. </td>
                    </tr>
                </tbody>
            </table>
            <form action="expexcel.php" method="post" enctype="multipart/form-data" target="_blank" id="my_form_xls">
                <textarea name="EXPhml"
                    style="width:0px; height:0px; background:#FFFFFF; border:#FFFFFF 0px; visibility:hidden; ">&lt;table width="98%" border="0" align="center"   &gt;
     &lt;tr&gt;
       &lt;th width="3%" rowspan="2" valign="top" bgcolor="#FFFFFF"&gt;&nbsp;&lt;/th&gt;
       &lt;th colspan="13" valign="top" bgcolor="#008500"&gt;Detalle&lt;/th&gt;
     &lt;/tr&gt;
     &lt;tr bgcolor="#008500"&gt;
       &lt;th width="6%"  valign="top"&gt;1&lt;/th&gt;
       &lt;th width="10%"   valign="top"&gt;2&lt;/th&gt;
       &lt;th width="15%"   valign="top"&gt;3&lt;/th&gt;
       &lt;th width="10%"   valign="top"&gt;4&lt;/th&gt;
       &lt;th width="13%"   valign="top"&gt;5&lt;/th&gt;
       &lt;th colspan="2"   valign="top"&gt;6&lt;/th&gt;
       &lt;th colspan="2"  valign="top"&gt;7&lt;/th&gt;
       &lt;th width="7%"   valign="top"&gt;8&lt;/th&gt;
       &lt;th width="6%"   valign="top"&gt;9&lt;/th&gt;
       &lt;th width="8%"   valign="top"&gt;10&lt;/th&gt;
       &lt;th width="7%"   valign="top"&gt;11&lt;/th&gt;
     &lt;/tr&gt;
     &lt;tr bgcolor="#008500"&gt;
       &lt;th valign="top"&gt;Lineas&lt;/th&gt;
       &lt;th  valign="top"&gt;RNC o Cedula&lt;/th&gt;
       &lt;th   valign="top"&gt;Tipo Id &lt;/th&gt;
       &lt;th   valign="top"&gt;Tipo Bienes y Servicios Comprados&lt;/th&gt;
       &lt;th   valign="top"&gt;NCF&lt;/th&gt;
       &lt;th   valign="top"&gt;NCF o Documento Modificado &lt;/th&gt;
       &lt;th colspan="2"   valign="top"&gt;Fecha Comprobante&lt;/th&gt;
       &lt;th colspan="2"  valign="top"&gt;Fecha pago&lt;/th&gt;
       &lt;th   valign="top"&gt;Itbis Facturado &lt;/th&gt;
       &lt;th   valign="top"&gt;Itbis Retenido&lt;/th&gt;
       &lt;th   valign="top"&gt;Monto Facturado&lt;/th&gt;
       &lt;th   valign="top"&gt;Retencion renta&lt;/th&gt;
     &lt;/tr&gt;
 &lt;/table&gt;</textarea>
                <input type="hidden" value="" name="texto">
                <input type="hidden" value="" name="empresa">
                <input type="hidden" value="0.3" name="TextAlpha">
                <input type="hidden" value="" name="AXXION">
                <input type="hidden" value="CUSTOM" name="OPTIONS">
                <input type="hidden" value="AXXION" name="XLS_">
                <input type="submit" name="enviar" value="Expor XLS" class="center button green">
            </form>


        </div>

    </div>
</div>