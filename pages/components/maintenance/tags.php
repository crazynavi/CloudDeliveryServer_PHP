<div class="body">
    <div class="cont">



        <div class="mainContDato">


            <h1>Configuración de etiquetas/recibos

            </h1>
            <form action="run.php" enctype="multipart/form-data" method="post">


                <table class="list ">

                    <tbody>
                        <tr>
                            <th align="center" valign="top">&nbsp;</th>
                            <th align="center" valign="top">Valor</th>
                            <th align="center" valign="top">Descripción</th>
                            <th align="center" valign="top">Tipo </th>
                            <th align="center" valign="top"> Activo </th>
                        </tr>
                        <tr>
                            <td align="left" valign="top">
                                1 <input type="hidden" name="id_parametro_etiqueta[]" id="id_parametro_etiqueta[]"
                                    value="191"></td>
                            <td align="left" valign="top">
                                <input type="text" name="descripcion191" value="OPAM CARGO" required=""
                                    style="width:500px;">
                            </td>
                            <td align="left" valign="top">Cabecera de las etiquetas de los paquetes</td>
                            <td align="left" valign="top">1&nbsp;</td>
                            <td align="center" valign="top"> <input name="estatus191" type="checkbox" value="1"
                                    checked="checked"> </td>
                        </tr>


                        <tr>
                            <td align="left" valign="top">
                                2 <input type="hidden" name="id_parametro_etiqueta[]" id="id_parametro_etiqueta[]"
                                    value="192"></td>
                            <td align="left" valign="top">
                                <input type="text" name="descripcion192" value=" OPS" required="" style="width:500px;">
                            </td>
                            <td align="left" valign="top">Segunda linea etiquetas de los paquetes</td>
                            <td align="left" valign="top">2&nbsp;</td>
                            <td align="center" valign="top"> <input name="estatus192" type="checkbox" value="1"
                                    checked="checked"> </td>
                        </tr>


                        <tr>
                            <td align="left" valign="top">
                                3 <input type="hidden" name="id_parametro_etiqueta[]" id="id_parametro_etiqueta[]"
                                    value="193"></td>
                            <td align="left" valign="top">
                                <input type="text" name="descripcion193"
                                    value="REVISE SU MERCANCÍA AL MOMENTO DE RECIBIRLA, DE LO CONTRARIO, USTED ASUME LA RESPONSABILIDAD POR FALTANTES O MAL ESTADO."
                                    required="" style="width:500px;">
                            </td>
                            <td align="left" valign="top">Mensaje de confirmacion impresion en recibos</td>
                            <td align="left" valign="top">3&nbsp;</td>
                            <td align="center" valign="top"> <input name="estatus193" type="checkbox" value="1"
                                    checked="checked"> </td>
                        </tr>


                        <tr>
                            <td align="left" valign="top">
                                4 <input type="hidden" name="id_parametro_etiqueta[]" id="id_parametro_etiqueta[]"
                                    value="195"></td>
                            <td align="left" valign="top">
                                <input type="text" name="descripcion195" value="generar_etiqueta_GK420D_4x6" required=""
                                    style="width:500px;">
                            </td>
                            <td align="left" valign="top">Formato Etiqueta</td>
                            <td align="left" valign="top">5&nbsp;</td>
                            <td align="center" valign="top"> <input name="estatus195" type="checkbox" value="1"
                                    checked="checked"> </td>
                        </tr>


                    </tbody>
                </table>

                <div align="center">
                    <input type="hidden" name="id_parametro_etiqueta[]" id="id_parametro_etiqueta" value="0">
                    <input type="submit" name="boton" value="Grabar" class="blue boton right">
                    <input type="hidden" name="EJECUTE" value="2" readonly="YES">
                    <input type="hidden" name="id_empresa" value="" readonly="YES">
                    <input type="hidden" name="OPTIONS" value="1" readonly="YES">
                    <input type="hidden" name="MENU" value="Menu" readonly="YES">
                    <input type="hidden" name="MENU1" value="" readonly="YES">
                    <input type="hidden" name="IDMENU" value="79" readonly="YES">
                    <input type="hidden" name="AX" value="10" readonly="YES">
                    <input type="hidden" name="EDIT" value="" readonly="YES">


                    <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                </div>
            </form>



        </div>

    </div>
</div>