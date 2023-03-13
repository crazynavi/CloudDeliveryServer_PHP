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

            <form action="panel.php" enctype="multipart/form-data" method="post">
                <table class="list ">

                    <tbody>
                        <tr>
                            <th colspan="4" align="left" valign="top" bgcolor="#F9F9F9">Criterios de busqueda </th>
                        </tr>
                        <tr>
                            <td width="19%" align="left" valign="top">
                                <strong> </strong>



                            </td>
                            <td width="27%" align="left" valign="top"><strong>Desde</strong><br>
                                <input type="date" id="popup_container" value="" name="fecha_desde"
                                    style="width:150px;">
                            </td>
                            <td width="22%" valign="top"><strong>Hasta</strong><br>
                                <input id="popup_container2" type="date" value="" name="fecha_hasta"
                                    style="width:150px;">
                                &nbsp;
                            </td>
                            <td width="32%" align="center" valign="top">
                                <input name="boton" type="submit" id="boton" value="Generar salida">
                                <input type="hidden" name="OPTIONS" value="98" readonly="YES">
                                <input type="hidden" name="MENU" value="Menu" readonly="YES">
                                <input type="hidden" name="MENU1" value="" readonly="YES">
                                <input type="hidden" name="IDMENU" value="165" readonly="YES">
                                <input type="hidden" name="AX" value="6" readonly="YES">
                                <input type="hidden" name="EDIT" value="" readonly="YES">
                                <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">

                                <input type="hidden" name="codigo" value="" readonly="YES">
                                <input type="hidden" name="chk1[]" value="0" readonly="YES">
                                <input type="hidden" name="chk2[]" value="0" readonly="YES"> &nbsp;
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <div align="center"><br>


            </div>

        </div>



    </div>
</div>