<div class="body">
    <div class="cont">





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

        <h1>Reporte de NCF </h1>
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
                        <span class="label">Tipo de comprobante</span>
                        <span class="details">
                            <select name="tipocomprobante" id="tipocomprobante">
                                <option value="">-- Ver todos los comprobantes --&gt; </option>

                                <option value="6">Comprobantes Gubernamentales[15]</option>
                                <option value="4">Facturas de Consumo[02]</option>
                                <option value="3">Facturas de Crédito Fiscal[01]</option>
                                <option value="5">Regímenes Especiales de Tributación[14]</option>
                                <option value="2">Registro Gastos Menores[13]</option>
                                <option value="1">Registro Proveedores Informales[11]</option>
                            </select>
                        </span>
                    </div>
                    <div class="row-line">
                        <input type="submit" name="Submit" value="Generar Reporte" class="blue boton right">
                        <input type="hidden" name="VIEW" value="NCFREP">
                        <input type="hidden" name="OPTIONS" value="60" readonly="YES">
                        <input type="hidden" name="MENU" value="Menu" readonly="YES">
                        <input type="hidden" name="MENU" value="" readonly="YES">
                        <input type="hidden" name="IDMENU" value="164" readonly="YES">
                        <input type="hidden" name="AX" value="REPNCF" readonly="YES">
                        <input type="hidden" name="EDIT" value="" readonly="YES">
                        <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                        <input type="hidden" name="codigo" value="" readonly="YES">

                        <input type="hidden" name="EDIT" value="" readonly="YES">
                        <input type="hidden" name="cliente" value="" readonly="YES">
                        <input type="hidden" name="ESTADO" value="" readonly="YES">
                    </div>

                </div>

            </div>


        </form>

    </div>








</div>