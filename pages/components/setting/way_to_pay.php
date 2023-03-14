<div class="body">
    <div class="cont">



        <div class="mainContDato">

            <h1>Mantenimiento Forma de Pago </h1>

            <form action="run.php" enctype="multipart/form-data" method="post">

                <table width="446" border="0" align="center" class="list">

                    <tbody>
                        <tr>
                            <th align="center" valign="top">#</th>
                            <th align="center" valign="top">Descripción</th>

                            <th width="306" align="center" valign="top"> Activo </th>
                        </tr>
                        <tr>
                            <td align="left" valign="top">1&nbsp;</td>
                            <td align="left" valign="top"><input type="hidden" name="cajafpago[]" id="cajafpago[]"
                                    value="46">
                                <input type="text" name="descripcion46" value="Efectivo" required="required"
                                    style="width:300px;">
                            </td>

                            <td align="center" valign="top"> <input name="estatus46" type="checkbox" value="1"
                                    checked="checked" style="width:300px;"></td>
                        </tr>


                        <tr>
                            <td align="left" valign="top">2&nbsp;</td>
                            <td align="left" valign="top"><input type="hidden" name="cajafpago[]" id="cajafpago[]"
                                    value="48">
                                <input type="text" name="descripcion48" value="TARJETA" required="required"
                                    style="width:300px;">
                            </td>

                            <td align="center" valign="top"> <input name="estatus48" type="checkbox" value="1"
                                    checked="checked" style="width:300px;"></td>
                        </tr>




                        <tr>
                            <td align="left" valign="top">+</td>
                            <td align="left" valign="top">
                                <input type="hidden" name="caja[]" id="caja" value="78741">
                                &nbsp; <input type="text" name="descripcion78741">
                            </td>

                            <td align="center" valign="top"><input type="checkbox" name="estatus78741" value="1"></td>
                        </tr>
                        <tr>
                            <td width="157" align="left" valign="top">&nbsp;</td>
                            <td width="139" align="center" valign="top">&nbsp;</td>
                            <td align="center" valign="top"><input type="hidden" name="cajafpago[]" id="cajafpago[]2"
                                    value="0">
                                <input type="hidden" name="cajabandeja[]" id="cajabandeja" value="0">
                                <input type="submit" name="boton" value="Grabar">
                                <input type="hidden" name="EJECUTE" value="2" readonly="YES">
                                <input type="hidden" name="id_empresa" value="" readonly="YES">
                                <input type="hidden" name="OPTIONS" value="104" readonly="YES">
                                <input type="hidden" name="MENU" value="Menu" readonly="YES">
                                <input type="hidden" name="MENU1" value="" readonly="YES">
                                <input type="hidden" name="IDMENU" value="75" readonly="YES">
                                <input type="hidden" name="AX" value="8" readonly="YES">
                                <input type="hidden" name="EDIT" value="" readonly="YES">
                                <input type="hidden" name="oficina" value="" readonly="YES">
                                <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">&nbsp;</td>
                            <td align="left" valign="top"><input type="button" name="Button" value="+ Agregar"></td>
                            <td align="center" valign="top">&nbsp;</td>
                            <td align="center" valign="top">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>

            </form>



        </div>

    </div>
</div>