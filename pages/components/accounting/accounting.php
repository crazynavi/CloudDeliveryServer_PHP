<div class="body">
    <div class="cont">

        <h1> Modulo Contabilidad </h1>

        <div class="row">
            <div class="cont-box">
                <div class="list-block">



                    <a href="?OPTIONS=60&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Contabilidad&amp;IDMENU=64&amp;AX=1&amp;MENU2=Cuenta por cobrar"
                        class="item-block-list ">
                        <h3>Cuenta por cobrar</h3>

                        <p class="flaticon-tasks2 tblack"> </p>
                    </a>



                    <a href="?OPTIONS=60&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Contabilidad&amp;IDMENU=162&amp;AX=1B&amp;MENU2=Creditos"
                        class="item-block-list ">
                        <h3>Creditos</h3>

                        <p class="flaticon-savings tblack"> </p>
                    </a>



                    <a href="?OPTIONS=60&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Contabilidad&amp;IDMENU=202&amp;AX=DEPOSITO&amp;MENU2=Depositos"
                        class="item-block-list ">
                        <h3>Depositos</h3>

                        <p class="flaticon-accounting tblack"> </p>
                    </a>



                    <a href="?OPTIONS=60&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Contabilidad&amp;IDMENU=63&amp;AX=4&amp;MENU2=Reporte"
                        class="item-block-list ">
                        <h3>Reporte</h3>

                        <p class="flaticon-stats9 tblack"> </p>
                    </a>



                    <a href="?OPTIONS=60&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Contabilidad&amp;IDMENU=65&amp;AX=5&amp;MENU2=Facturas"
                        class="item-block-list ">
                        <h3>Facturas</h3>

                        <p class="flaticon-accounting tblack"> </p>
                    </a>



                    <a href="?OPTIONS=60&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Contabilidad&amp;IDMENU=67&amp;AX=6&amp;MENU2=Cuadre de Caja"
                        class="item-block-list ">
                        <h3>Cuadre de caja</h3>

                        <p class="flaticon-webpage10 tblack"> </p>
                    </a>



                    <a href="?OPTIONS=60&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Contabilidad&amp;IDMENU=174&amp;AX=ciecaja&amp;MENU2=Cierre Caja"
                        class="item-block-list ">
                        <h3>Cierre caja</h3>

                        <p class="flaticon-hand119 tblack"> </p>
                    </a>



                    <a href="?OPTIONS=60&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Contabilidad&amp;IDMENU=164&amp;AX=REPNCF&amp;MENU2=NCF"
                        class="item-block-list ">
                        <h3>Ncf</h3>

                        <p class="flaticon-accounting tblack"> </p>
                    </a>


                </div>
            </div>
        </div>

        <link rel="stylesheet" type="text/css" href="css/epoch_styles.css">
        <script type="text/javascript" src="js/epoch_classes.js"></script>
        <script type="text/javascript">
            /*You can also place this code in a separate file and link to it like epoch_classes.js*/
            var bas_cal, dp_cal2, dp_cal3, dp_cal4, dp_cal5;
            window.onload = function () {

                dp_cal = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container'));
                dp_cal2 = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container2'));
                dp_cal3 = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container3'));
                dp_cal4 = new Epoch('epoch_popup', 'popup', document.getElementById('popup_container4'));

            };
        </script>

        <h1>Reporte de Cuadre</h1>
        <form action="view.php" method="get" target="_blank">

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
                        <input type="hidden" name="VIEW" value="6">
                    </div>

                </div>

            </div>


        </form>

    </div>








</div>