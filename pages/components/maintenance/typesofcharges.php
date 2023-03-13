<div class="body">
    <div class="cont">



        <div class="mainContDato">

            <h1>Cargos Adicionales</h1>
            <form action="run.php" enctype="multipart/form-data" method="post">
                <table width="100%" border="0" class="list">
                    <tbody>
                        <tr>
                            <th> Tipo de Cargo </th>
                            <th>Valor en usd </th>
                            <th>&nbsp;</th>
                            <th> Itbis
                                18% </th>
                            <th>Activo</th>
                        </tr>
                        <tr>
                            <td bgcolor="#FCFDFE">Airport Fee <input type="hidden" value="155" name="id_cargo[]"
                                    readonly="yes">
                                &nbsp;</td>
                            <td bgcolor="#FCFDFE"><input name="valor155" type="text" id="valor155" value="0.06"
                                    required="required"></td>
                            <td bgcolor="#FCFDFE">3.3&nbsp;</td>
                            <td align="center" bgcolor="#FCFDFE"><input name="itbis155" id="itbis155" type="checkbox"
                                    value="1" checked="checked"></td>
                            <td align="center" bgcolor="#FCFDFE"><input name="id_estatus155" id="id_estatus155"
                                    type="checkbox" value="1" checked="checked">
                                &nbsp;</td>
                        </tr>

                        <tr>
                            <td bgcolor="#FCFDFE">DGA <input type="hidden" value="156" name="id_cargo[]" readonly="yes">
                                &nbsp;</td>
                            <td bgcolor="#FCFDFE"><input name="valor156" type="text" id="valor156" value="0.12"
                                    required="required"></td>
                            <td bgcolor="#FCFDFE">6.6&nbsp;</td>
                            <td align="center" bgcolor="#FCFDFE"><input name="itbis156" id="itbis156" type="checkbox"
                                    value="1" checked="checked"></td>
                            <td align="center" bgcolor="#FCFDFE"><input name="id_estatus156" id="id_estatus156"
                                    type="checkbox" value="1" checked="checked">
                                &nbsp;</td>
                        </tr>

                        <tr>
                            <td bgcolor="#FCFDFE">Cargo Combustible <input type="hidden" value="157" name="id_cargo[]"
                                    readonly="yes">
                                &nbsp;</td>
                            <td bgcolor="#FCFDFE"><input name="valor157" type="text" id="valor157" value="0.60"
                                    required="required"></td>
                            <td bgcolor="#FCFDFE">33&nbsp;</td>
                            <td align="center" bgcolor="#FCFDFE"><input name="itbis157" id="itbis157" type="checkbox"
                                    value="1" checked="checked"></td>
                            <td align="center" bgcolor="#FCFDFE"><input name="id_estatus157" id="id_estatus157"
                                    type="checkbox" value="1" checked="checked">
                                &nbsp;</td>
                        </tr>

                        <tr>
                            <td bgcolor="#FCFDFE">Seguro % <input type="hidden" value="158" name="id_cargo[]"
                                    readonly="yes">
                                &nbsp;</td>
                            <td bgcolor="#FCFDFE"><input name="valor158" type="text" id="valor158" value="35"
                                    required="required"></td>
                            <td bgcolor="#FCFDFE">1925&nbsp;</td>
                            <td align="center" bgcolor="#FCFDFE"><input name="itbis158" id="itbis158" type="checkbox"
                                    value="1" checked="checked"></td>
                            <td align="center" bgcolor="#FCFDFE"><input name="id_estatus158" id="id_estatus158"
                                    type="checkbox" value="1" checked="checked">
                                &nbsp;</td>
                        </tr>

                        <tr>
                            <td bgcolor="#FCFDFE">&nbsp;</td>
                            <td bgcolor="#FCFDFE">&nbsp;</td>
                            <td bgcolor="#FCFDFE">1967.9&nbsp;</td>
                            <td align="center" bgcolor="#FCFDFE">&nbsp;</td>
                            <td align="center" bgcolor="#FCFDFE">&nbsp;</td>
                        </tr>
                    </tbody>
                </table>
                <div align="center">
                    <input type="hidden" name="cajafpago[]" id="caja" value="0">
                    <input type="hidden" name="cajabandeja[]" id="cajabandeja" value="0">
                    <input type="submit" name="boton" value="Grabar">
                    <input type="hidden" name="EJECUTE" value="2" readonly="YES">
                    <input type="hidden" name="id_empresa" value="" readonly="YES">
                    <input type="hidden" name="OPTIONS" value="1" readonly="YES">
                    <input type="hidden" name="MENU" value="Menu" readonly="YES">
                    <input type="hidden" name="MENU1" value="" readonly="YES">
                    <input type="hidden" name="IDMENU" value="76" readonly="YES">
                    <input type="hidden" name="AX" value="9" readonly="YES">
                    <input type="hidden" name="EDIT" value="" readonly="YES">
                    <input type="hidden" name="oficina" value="" readonly="YES">
                    <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                </div>
            </form>


            <form action="run.php" enctype="multipart/form-data" method="post">

                <h1>Seguro</h1>
                <table class="list">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th align="center" valign="top">FOB inicio </th>
                            <th align="center" valign="top">FOB fin </th>
                            <th colspan="2" align="center" valign="top"> Valor a calcular </th>
                        </tr>

                        <tr>
                            <td colspan="4" align="center" valign="top">

                                <input type="hidden" name="caja[]" id="caja" value="0">
                                <input type="hidden" name="cajatexto[2" id="cajatexto" value="0">
                                <input type="submit" name="boton" value="Aplicar" class="boton blue right">
                                <input type="hidden" name="EJECUTE" value="2" readonly="YES">
                                <input type="hidden" name="id_empresa" value="" readonly="YES">
                                <input type="hidden" name="OPTIONS" value="1" readonly="YES">
                                <input type="hidden" name="MENU" value="Menu" readonly="YES">
                                <input type="hidden" name="MENU1" value="" readonly="YES">
                                <input type="hidden" name="IDMENU" value="76" readonly="YES">
                                <input type="hidden" name="AX" value="8c" readonly="YES">
                                <input type="hidden" name="EDIT" value="" readonly="YES">
                                <input type="hidden" name="oficina" value="" readonly="YES">
                                <input type="hidden" name="control_oficina" value="" readonly="YES">
                                <input type="hidden" name="tipo_seguro" value="AEREO" readonly="YES">
                                <input type="hidden" name="tipo_tarifa" value="" readonly="YES"> <input type="hidden"
                                    name="MENU_SISTEMA" value="" readonly="YES">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>



        </div>

    </div>
</div>