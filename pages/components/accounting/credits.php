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

        <h1>Reporte de Creditos</h1>
        <form action="print.php" method="post" target="_blank">

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

                                <option value="1">OPS SANTO DOMINGO </option>
                                <option value="2">SAN FRANCISCO DE MACORIS</option>
                                <option value="3">OPS HAITI</option>
                                <option value="4">OPS MIAMI DROPSHIPPING</option>
                                <option value="5">OPS SANTIAGO DE LOS CABALLEROS RD</option>
                                <option value="7">JULIETA MORALES</option>
                                <option value="8">PLAN COURRIER</option>
                                <option value="9">PLAN FREIGHT FORWARDER</option>
                                <option value="10">PLAN STORAGE (ALMACENAMIENTO)</option>
                                <option value="11">INDEPENDENCIA</option>
                                <option value="12">LA VEGA</option>
                            </select>
                        </span>
                    </div>
                    <div class="row-line">
                        <input type="submit" name="Submit" value="Generar Reporte" class="blue boton right">
                        <input type="hidden" name="VIEW" value="FACTURACREDITO">
                    </div>

                </div>

            </div>


        </form>
    </div>








</div>