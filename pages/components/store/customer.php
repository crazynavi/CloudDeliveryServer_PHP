<div class="body">
    <div class="cont">



        <div class="mainContDato">



            <h1>Paquetes / Clientes </h1>
            <form action="panel.php" enctype="multipart/form-data" method="post" name="popupform">
                <table width="100%" border="0" class="lista">
                    <caption style="border-bottom:#000033 2px solid;">
                        <strong>Datos del cliente</strong>
                    </caption>
                    <tbody>
                        <tr>
                            <td width="7%" align="right" valign="top"><strong>Codigo</strong></td>
                            <td width="43%" valign="top">
                                <input name="codigo_cliente" type="text" id="codigo_cliente" required="required"
                                    value="" placeholer="Codigo" style="width:70px; background-color:F2F2F2 ">
                                <input type="button" name="choice"
                                    onclick="window.open('popclientesalmacen.php','popuppage','width=910,height=500,top=100,left=250, scrollbars=yes, resizable=yes');"
                                    value="...">
                                &nbsp;
                            </td>
                            <td width="14%" align="right" valign="top"><strong>Nombre cliente </strong></td>
                            <td width="36%" valign="top"><input name="nombrecliente" type="text" id="nombrecliente"
                                    required="required" value="" style="width:200px; background-color:#FFFFCC"
                                    readonly="yes">
                                &nbsp;</td>
                        </tr>
                        <tr>
                            <td align="right" valign="top">&nbsp;</td>
                            <td valign="top"><input type="hidden" name="OPTIONS" value="22" readonly="YES">
                                <input type="hidden" name="MENU" value="Menu" readonly="YES">
                                <input type="hidden" name="MENU1" value="" readonly="YES">
                                <input type="hidden" name="IDMENU" value="188" readonly="YES">
                                <input type="hidden" name="AX" value="19" readonly="YES">
                                <input type="hidden" name="EDIT" value="" readonly="YES">
                                <input type="hidden" name="codigo" value="" readonly="YES">
                                <input type="hidden" name="chk1[]" value="0" readonly="YES">
                                <input type="hidden" name="chk2[]" value="0" readonly="YES">

                                <input type="hidden" name="cliente" value="" readonly="YES">
                                <input type="hidden" name="oficina" value="" readonly="YES">
                                <input type="hidden" name="idempresa" value="" readonly="YES">

                            </td>
                            <td align="right" valign="top"><strong>Empresa</strong></td>
                            <td valign="top"><input name="nombreempresa" type="text" id="nombreempresa"
                                    required="required" value="" readonly="yes"
                                    style="width:200px; background-color:#FFFFCC">
                                <input name="boton" type="submit" id="boton" value="Generar salida">
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>



    </div>
</div>