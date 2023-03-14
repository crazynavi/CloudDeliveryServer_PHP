<div class="body">
    <div class="cont">




        <div class="mainContDato">

            <h1>Cambio titular / courier </h1>


            <form action="run.php" enctype="multipart/form-data" method="post" name="popupform">

                <div class="col2">

                    <div class="row-line">
                        <span class="label">No guia</span>
                        <span class="details">
                            <input name="guia" type="text" id="guia" required="required" value="">
                        </span>
                    </div>

                    <div class="row-line">
                        <span class="label">Courier</span>
                        <span class="details">
                            <select name="idempresa" id="idempresa" required="required">
                                <option value="">-- Seleccionar --&gt;</option>
                                <option value="52">OPS CARGO Y LOGISTICS</option>
                            </select>
                        </span>
                    </div>

                    <div class="row-line">
                        <input type="submit" class="boton gree right" value="Grabar">

                    </div>

                </div>

                <input type="hidden" name="EJECUTE" value="16" readonly="YES">
                <input type="hidden" name="id_paquete" value="" readonly="YES">
                <input type="hidden" name="OPTIONS" value="98" readonly="YES">
                <input type="hidden" name="MENU" value="Menu" readonly="YES">
                <input type="hidden" name="MENU1" value="" readonly="YES">
                <input type="hidden" name="IDMENU" value="158" readonly="YES">
                <input type="hidden" name="AX" value="4" readonly="YES">
                <input type="hidden" name="EDIT" value="" readonly="YES">
                <input type="hidden" name="id_cliente" value="" readonly="YES">
                <input type="hidden" name="clientecambio" value="" readonly="YES">
                <input type="hidden" name="TABS" value="6" readonly="YES">
                <input type="hidden" name="id_estatus_proceso" value="" readonly="YES">
                <input type="hidden" name="codigo_anterior" value="" readonly="YES">

            </form>



        </div>



    </div>
</div>