<div class="body">
    <div class="cont">



        <div class="mainContDato">



            <h1>Generar reporte de embarque [ ]
                <span class="right"></span>
            </h1>


            <div class="toolbar">
                <div class="nav-h left">
                    <ul>
                        <li>
                            <a class="flaticon-back57"
                                href="panel.php?OPTIONS=22&amp;AX=8&amp;IDMENU=22&amp;MENU=Almacen&amp;MENU_SISTEMA=51">Retornar
                                Atras</a>
                        </li>
                        <li><a class="flaticon-triangular42" href="javascript:history.go(0);">Actualizar</a></li>


                    </ul>
                </div>
            </div>
            <br>

            <div align="center">
                <form action="MODULO/BROKER/rep_xls_valijas_exp.php" enctype="multipart/form-data" method="post"
                    target="_blank">
                    <table class="list">

                        <tbody>
                            <tr>
                                <th align="center" valign="top">#</th>
                                <th align="center" valign="top">ID</th>
                                <th colspan="2" align="center" valign="top">Etiqueta </th>
                                <th align="center" valign="top">Paquetes</th>
                                <th align="center" valign="top">Tracking</th>
                                <th align="center" valign="top">Tipo Valija </th>
                                <th width="232" align="center" valign="top">Comentario</th>
                            </tr>
                            <tr>
                                <td colspan="8" align="left" valign="top">*** No hay valijas registradas. </td>
                            </tr>


                        </tbody>
                    </table>


                    <input type="hidden" name="id_empresa" value="" readonly="YES">
                    <input type="hidden" name="OPTIONS" value="22" readonly="YES">
                    <input type="hidden" name="MENU" value="Menu" readonly="YES">
                    <input type="hidden" name="MENU1" value="" readonly="YES">
                    <input type="hidden" name="IDMENU" value="36" readonly="YES">
                    <input type="hidden" name="AX" value="3" readonly="YES">
                    <input type="hidden" name="EDIT" value="" readonly="YES">
                    <input type="hidden" name="chk[]" value="0" readonly="YES">
                    <input type="hidden" name="AXXION" value="" readonly="YES">
                    <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                </form>
            </div>

            <br>

        </div>



    </div>
</div>