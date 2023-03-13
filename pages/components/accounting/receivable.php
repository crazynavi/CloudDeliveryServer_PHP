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

            };
        </script>
        <h1>Cuentas por cobrar</h1>
        <form action="panel.php" method="get">
            <a href="print.php?SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;oiw=9283D2d2PoIjshd762&amp;us=kdjDADusas&amp;js=JqiV,uXYG6UvGXVCqnvv91&amp;VIEW=DETCCPCON&amp;cliente=aODD&amp;ESTADO=&amp;fecha_hasta=2023-03-10&amp;fecha_desde=2023-03-10"
                class="boton right blue left" target="new">Imprimir Resultado</a>
            <span class="right">

                <input id="popup_container" value="" name="fecha_desde" style="width:200px;" type="date">
                / <input id="popup_container2" value="" name="fecha_hasta" style="width:200px;" type="date">
                <input name="boton" type="submit" id="boton" value="Generar Reporte">
            </span>


            <input type="hidden" name="OPTIONS" value="60" readonly="YES">
            <input type="hidden" name="MENU" value="Menu" readonly="YES">
            <input type="hidden" name="MENU" value="" readonly="YES">
            <input type="hidden" name="IDMENU" value="64" readonly="YES">
            <input type="hidden" name="AX" value="1" readonly="YES">
            <input type="hidden" name="EDIT" value="" readonly="YES">
            <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
            <input type="hidden" name="codigo" value="" readonly="YES">

            <input type="hidden" name="EDIT" value="" readonly="YES">
            <input type="hidden" name="cliente" value="" readonly="YES">
            <input type="hidden" name="ESTADO" value="" readonly="YES">

        </form>


        <br><br>


        <div align="center" style="font-size:25px;">

            Rango de fecha
            <br> 2023-03-10 a 2023-03-10
        </div>
        <table class="list" border="1px solid;">
            <tbody>
                <tr>
                    <th align="center" valign="top"> #</th>
                    <th align="center" valign="top">Factura</th>
                    <th align="center" valign="top">Cliente</th>
                    <th align="center" valign="top">Fecha</th>

                    <th align="center" valign="top">Oficina</th>
                    <th align="center" valign="top"><strong>Estatus</strong></th>
                    <th align="center" valign="top">Dias</th>
                    <th align="center" valign="top"> Total a pagar </th>
                    <th align="center" valign="top"> Abonado </th>
                    <th align="center" valign="top">Pendiente</th>
                </tr>

                <tr>
                    <td colspan="10" align="left" valign="top">*** No hay facturas pendientes. </td>
                </tr>
            </tbody>
        </table>

        <form action="expexcel.php" method="post" target="_blank">

            <span class="right">

                <input name="boton" type="submit" id="boton" value="Export a Excel" class="boton gree">
                <input type="hidden" name="OPTIONS" value="60" readonly="YES">
                <textarea name="EXPhml" readonly="readonly"
                    style="width:0px; height:0px; background:#FFF; visibility:hidden;">&lt;table class="list" border="1px solid;"&gt;
    &lt;tr &gt;
      &lt;th align="center" valign="top"&gt; #&lt;/th&gt;
      &lt;th   align="center" valign="top"&gt;Factura&lt;/th&gt;
      &lt;th   align="center" valign="top"&gt;Cliente&lt;/th&gt;
      &lt;th   align="center" valign="top"&gt;Fecha&lt;/th&gt;
    
      &lt;th   align="center" valign="top"&gt;Oficina&lt;/th&gt;
      &lt;th align="center" valign="top"&gt;&lt;strong&gt;Estatus&lt;/strong&gt;&lt;/th&gt;
      &lt;th align="center" valign="top"&gt;Dias&lt;/th&gt;
      &lt;th align="center" valign="top"&gt; Total a pagar &lt;/th&gt;
      &lt;th align="center" valign="top"&gt; Abonado &lt;/th&gt;
      &lt;th   align="center" valign="top"&gt;Pendiente&lt;/th&gt;
  &lt;/tr&gt; 
 
&lt;tr&gt;
      &lt;td colspan="10" align="left" valign="top"&gt;*** No hay facturas pendientes. &lt;/td&gt;
  &lt;/tr&gt; 
&lt;/table&gt; </textarea>
                <input type="hidden" name="MENU" value="ccp" readonly="YES">

                <input type="hidden" name="IDMENU" value="64" readonly="YES">
                <input type="hidden" name="AX" value="1" readonly="YES">
                <input type="hidden" name="EDIT" value="" readonly="YES">
                <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                <input type="hidden" name="codigo" value="" readonly="YES">

                <input type="hidden" name="EDIT" value="" readonly="YES">
                <input type="hidden" name="cliente" value="" readonly="YES">
                <input type="hidden" name="ESTADO" value="" readonly="YES">





                <form action="MODULO/mpdf60/LIBREP/basic_html.php" method="post" target="_blank">

                    <span class="right">

                        <input name="boton" type="hidden" id="boton" value="Export a PDF" class="boton red">
                        <input type="hidden" name="OPTIONS" value="60" readonly="YES">
                        <textarea name="HTML" readonly="readonly"
                            style="width:0px; height:0px; background:#FFF; visibility:hidden;">&lt;div align="center" style="font-size:25px;"&gt;
   
 Rango de fecha
 &lt;br /&gt; 2023-03-10  a 2023-03-10
  &lt;/div&gt;
&lt;table class="list" border="1px solid;"&gt;
    &lt;tr &gt;
      &lt;th align="center" valign="top"&gt; #&lt;/th&gt;
      &lt;th   align="center" valign="top"&gt;Factura&lt;/th&gt;
      &lt;th   align="center" valign="top"&gt;Cliente&lt;/th&gt;
      &lt;th   align="center" valign="top"&gt;Fecha&lt;/th&gt;
    
      &lt;th   align="center" valign="top"&gt;Oficina&lt;/th&gt;
      &lt;th align="center" valign="top"&gt;&lt;strong&gt;Estatus&lt;/strong&gt;&lt;/th&gt;
      &lt;th align="center" valign="top"&gt;Dias&lt;/th&gt;
      &lt;th align="center" valign="top"&gt; Total a pagar &lt;/th&gt;
      &lt;th align="center" valign="top"&gt; Abonado &lt;/th&gt;
      &lt;th   align="center" valign="top"&gt;Pendiente&lt;/th&gt;
  &lt;/tr&gt; 
 
&lt;tr&gt;
      &lt;td colspan="10" align="left" valign="top"&gt;*** No hay facturas pendientes. &lt;/td&gt;
  &lt;/tr&gt; 
&lt;/table&gt; </textarea>
                        <input type="hidden" name="MENU" value="ccp" readonly="YES">
                        <input type="hidden" name="IDMENU" value="64" readonly="YES">
                        <input type="hidden" name="AX" value="1" readonly="YES">
                        <input type="hidden" name="EDIT" value="" readonly="YES">
                        <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                        <input type="hidden" name="codigo" value="" readonly="YES">

                        <input type="hidden" name="EDIT" value="" readonly="YES">
                        <input type="hidden" name="cliente" value="" readonly="YES">
                        <input type="hidden" name="ESTADO" value="" readonly="YES">

                    </span>
                </form>
            </span>
        </form>
    </div>








</div>