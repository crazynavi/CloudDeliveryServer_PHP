<div class="body">
    <div class="cont">



        <div class="mainContDato">

            <h1>Ordenar menu

                <a class="boton gree right"
                    href="panel.php?OPTIONS=19&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=30&amp;EDIT=Y&amp;AX=1&amp;MENU_SISTEMA=">Crear
                    Menu</a>


            </h1>

            <form action="run.php" enctype="multipart/form-data" method="post">

                <table class="list">
                    <tbody>
                        <tr>
                            <th>#</th>
                            <th width="57%" align="center" valign="top">Menu</th>
                            <th width="27%" align="center" valign="top">Orden</th>
                            <th width="16%" align="center" valign="top">Publicado </th>
                        </tr>
                        <tr>
                            <td align="center" valign="top">1</td>
                            <td align="left" valign="top">

                                <input type="hidden" name="chk[]2" value="59">
                                <input type="text" name="descripcion59" value="Terminos y condiciones"
                                    style="width:200px;">
                            </td>
                            <td align="center" valign="top"><input type="text" name="orden59" value="99"
                                    style="width:130px;">
                            </td>
                            <td align="center" valign="top"><input name="estatus59" type="checkbox" id="estatus"
                                    value="1" checked="checked"> </td>
                        </tr>
                    </tbody>
                </table>
                <div align="center">
                    <input type="hidden" name="EJECUTE" value="6" readonly="YES">
                    <input type="submit" name="boton" value="Grabar">
                    <input type="hidden" name="id_empresa" value="" readonly="YES">
                    <input type="hidden" name="OPTIONS" value="19" readonly="YES">
                    <input type="hidden" name="MENU" value="Menu" readonly="YES">
                    <input type="hidden" name="MENU1" value="" readonly="YES">
                    <input type="hidden" name="IDMENU" value="30" readonly="YES">
                    <input type="hidden" name="AX" value="4" readonly="YES">
                    <input type="hidden" name="EDIT" value="" readonly="YES">
                    <input type="hidden" name="chk[]" value="0" readonly="YES">
                    <input type="hidden" name="AXXION" value="" readonly="YES">

                    <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                </div>
            </form>




        </div>


    </div>
</div>