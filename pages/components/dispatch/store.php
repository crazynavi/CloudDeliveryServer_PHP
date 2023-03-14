<div class="body">
    <div class="cont">




        <div class="mainContDato">

            <h1>Preferencias almacen/courier </h1>

            Pantalla usada para controlar que codigo/empresa puede trabajar el broker.

            <form action="run.php" enctype="multipart/form-data" method="post" name="popupform">

                <table class="list">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th align="center" valign="top">Empresa</th>
                            <th align="center" valign="top">Codigo</th>
                            <th align="center" valign="top">Permitir</th>
                            <th align="center" valign="top">&nbsp;</th>
                        </tr>
                        <tr>
                            <td align="center" valign="top">1 <input type="hidden" name="empresa_bro[]" value="39">
                                <input type="hidden" name="empresa39" value="52">

                            </td>
                            <td align="left" valign="top"> Ops cargo y logistics </td>
                            <td align="left" valign="top"> </td>
                            <td align="center" valign="top"> <input name="estatus39" type="checkbox" value="1"
                                    checked="checked"> </td>
                            <td align="center" valign="top">
                                <span class=" flaticon-checked21 "></span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" valign="top">2 <input type="hidden" name="empresa_bro[]" value="40">
                                <input type="hidden" name="empresa40" value="16">

                            </td>
                            <td align="left" valign="top"> </td>
                            <td align="left" valign="top"> </td>
                            <td align="center" valign="top"> <input name="estatus40" type="checkbox" value="1"
                                    checked="checked"> </td>
                            <td align="center" valign="top">
                                <span class=" flaticon-checked21 "></span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <input type="hidden" name="EJECUTE" value="16" readonly="YES">
                <input type="hidden" name="id_paquete" value="" readonly="YES">
                <input type="hidden" name="OPTIONS" value="98" readonly="YES">
                <input type="hidden" name="MENU" value="Menu" readonly="YES">
                <input type="hidden" name="MENU1" value="" readonly="YES">
                <input type="hidden" name="IDMENU" value="161" readonly="YES">
                <input type="hidden" name="AX" value="5" readonly="YES">
                <input type="hidden" name="EDIT" value="" readonly="YES">
                <input type="hidden" name="id_cliente" value="" readonly="YES">
                <input type="hidden" name="clientecambio" value="" readonly="YES">
                <input type="hidden" name="TABS" value="6" readonly="YES">
                <input type="hidden" name="id_estatus_proceso" value="" readonly="YES">
                <input type="hidden" name="empresa_bro[]" value="0" readonly="YES">
                <input type="submit" name="submit" value="Grabar Cambios" class="blue right">
            </form>

        </div>



    </div>
</div>