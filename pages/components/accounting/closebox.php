<div class="body">
    <div class="cont">





        <h1>Cierre de Caja
        </h1>



        <div align="right">
            <a href="panel.php?OPTIONS=60&amp;SESSION=YXOv1ScbEHZ1iWOLV-pIh1&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=174&amp;AX=ciecaja2&amp;MENU2=Cierre%20Caja"
                class="boton blue">Listar Cierres</a>
        </div>

        <div align="center">


            <h2> Cuadre del caja <br>
                2023-03-01 al </h2>

        </div>

        <form action="panel.php" method="get">

            <div class="row div">

                <div class="col2">
                    <div class="row-line">
                        <span class="label">Desde</span>
                        <span class="details">
                            <input type="date" id="popup_container" name="fecha_desde" style="width:150px;"
                                value="2023-03-10" s=""> </span>
                    </div>
                    <div class="row-line">
                        <span class="label">Hasta</span>
                        <span class="details">
                            <input type="date" id="popup_container2" name="fecha_hasta" style="width:150px;"
                                value="2023-03-10">
                        </span>
                    </div>

                </div>

                <div class="col2">
                    <div class="row-line">
                        <span class="label">Oficina</span>
                        <span class="details">
                            <select name="idoficina" id="idoficina">
                                <option value="">-- Ver todas las oficinas </option>

                                <option value="1" selected="selected">OPS SANTO DOMINGO </option>
                            </select>
                        </span>
                    </div>
                    <div class="row-line">
                        <input type="submit" name="Submit" value="Generar Reporte" class="blue boton right">


                        <input type="hidden" name="OPTIONS" value="60">
                        <input type="hidden" name="AX" value="ciecaja">
                        <input type="hidden" name="SESSION" value="JqiV,uXYG6UvGXVCqnvv91">
                        <input type="hidden" name="SESSION" value="JqiV,uXYG6UvGXVCqnvv91">
                        <input type="hidden" name="MENU" value="Menu">
                        <input type="hidden" name="IDMENU" value="174">
                        <input type="hidden" name="MENU2" value="Cierre Caja">


                    </div>

                </div>

            </div>

        </form>

        <form action="run.php" enctype="multipart/form-data" method="post">

            <table class="list  ">

                <tbody>
                    <tr title="">
                        <th align="center" valign="top"> </th>
                        <th align="center" valign="top">Recibo</th>
                        <th align="center" valign="top">No. Factura </th>
                        <th align="center" valign="top">Usuario</th>
                        <th align="center" valign="top">Fecha</th>
                        <th align="center" valign="top">Nombre del cliente </th>
                        <th align="center" valign="top">Forma pago </th>
                        <th align="center" valign="top">Monto<strong> </strong> </th>
                    </tr>



                    <tr>
                        <td colspan="8" align="left" valign="top">*** No hay registros encontrados. </td>
                    </tr>


                </tbody>
            </table>
            <hr>

        </form>
    </div>








</div>