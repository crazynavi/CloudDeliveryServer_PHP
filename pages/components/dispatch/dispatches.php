<div class="body">
    <div class="cont">




        <div class="mainContDato">

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

            <h1>Reportes facturas por franquicias</h1>
            <form action="panel.php" enctype="multipart/form-data" method="post">
                Criterios de busqueda
                <table width="100%" class="list">
                    <tbody>
                        <tr>
                            <td><select name="courier">
                                    <option value="">-- Empresa --&gt;</option>
                                </select></td>
                            <td><strong>Desde</strong><br>
                                <input id="popup_container" value="" name="fecha_desde" style="width:150px;"
                                    type="date">
                            </td>
                            <td><strong>Hasta</strong><br>
                                <input id="popup_container2" value="" name="fecha_hasta" style="width:150px;"
                                    type="date">
                            </td>
                            <td><input name="boton" type="submit" id="boton" value="Generar salida">
                                <input type="hidden" name="OPTIONS" value="98" readonly="YES">
                                <input type="hidden" name="MENU" value="Menu" readonly="YES">
                                <input type="hidden" name="MENU" value="" readonly="YES">
                                <input type="hidden" name="IDMENU" value="100" readonly="YES">
                                <input type="hidden" name="AX" value="2" readonly="YES">
                                <input type="hidden" name="EDIT" value="" readonly="YES">
                                <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                                <input type="hidden" name="codigo" value="" readonly="YES">
                                <input type="hidden" name="chk1[]" value="0" readonly="YES">
                                <input type="hidden" name="chk2[]" value="0" readonly="YES">
                                &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>



    </div>
</div>