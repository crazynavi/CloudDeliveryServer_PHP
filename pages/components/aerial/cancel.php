<div class="body">
    <div class="cont">






        <form action="run.php" enctype="multipart/form-data" method="post" name="popupform">
            <script type="text/javascript">

                $(document).ready(function () {
                    $("#guia").focus();
                });

            </script>
            <h1>Anular paquete(s)</h1>

            <div class="row div">
                <div class="col2">

                    <div class="row-line">
                        <span class="label">Guia</span>
                        <span class="details">
                            <input type="hidden" name="codigo_recepcion" value="ISDQ2303100139-68">
                            <input name="guia" type="text" id="guia" tabindex="1" placeholder="DO11111119873">
                        </span>
                    </div>


                    <div class="row-line">
                        <span class="label">Estatus del paquete</span>
                        <span class="details">
                            <select name="estatus_procesonew" id="estatus_proceso" required="required">
                                <option value="">--Estatus--&gt;</option>
                                <option value="-14">Anulado</option>
                            </select>
                        </span>
                    </div>

                    <div class="row-line">
                        <span class="label">Nota</span>
                        <span class="details">
                            <input name="cancelado" type="text" id="cancelado" placeholder="Razon de anulacion">
                        </span>
                    </div>
                    <div class="row-line">
                        <span class="label">*** Usar Lector de barra</span>
                        <span class="details">
                            <input type="hidden" name="codigo_recepcion" value="ISDQ2303100139-68" readonly="yes">

                            <input name="submit2" type="submit" id="submit" value="Grabar">
                        </span>
                    </div>

                </div>

            </div>


            <div align="center">
                <input type="hidden" name="AX" value="anularpaquete" readonly="YES">
                <input type="hidden" name="EJECUTE" value="4" readonly="YES">
                <input type="hidden" name="OPTIONS" value="8" readonly="YES">
                <input type="hidden" name="MENU" value="Menu" readonly="YES">
                <input type="hidden" name="MENU1" value="" readonly="YES">
                <input type="hidden" name="IDMENU" value="136" readonly="YES">
                <input type="hidden" name="EDIT" value="" readonly="YES">
                <input type="hidden" name="codigo" value="" readonly="YES">
                <input type="hidden" name="codigo_cliente" value="" readonly="YES">
                <input type="hidden" name="track[]" value="0" readonly="YES">
                <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                &nbsp;
            </div>
        </form>













    </div>
</div>