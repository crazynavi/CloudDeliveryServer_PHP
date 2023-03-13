<div class="body">
    <div class="cont">



        <div class="mainContDato">



            <h1>
                Actualizar paquetes <span class="flaticon-supermarket37"></span></h1>


            <form action="run.php" enctype="multipart/form-data" method="post" name="popupform">



                <div align="right">
                    <a href="#" class="boton blue">Inbound</a>


                    <a href="panel.php?OPTIONS=22&amp;AX=20c&amp;IDMENU=157&amp;MENU=Menu&amp;MENU_SISTEMA="
                        class="boton grey left">Jaula (Origen)</a>


                    <a href="#" class="item-block-list form-view-btn modal-window-open-button boton gree left"
                        data-box-size="600,400"
                        data-url="modal.php?VIEW=2&amp;estatus=7&amp;codigo_recepcion=INB2303090210-68">Recibir (Almacen
                        SDQ)</a>
                </div>


                <div class="row div">

                    <div class="col2">
                        <h2>Entrada de datos</h2>

                        <div class="row-line">
                            <span class="label">No. guias</span>
                            <span class="details">
                                <textarea name="links" rows="20" cols="50" tabindex="1" placeholder="Listado de guias"
                                    id="links" autofocus="" class="user-success"></textarea>
                            </span>
                        </div>



                    </div>
                    <div class="col2">
                        <div class="row-line">
                            <span class="label">Estatus del paquete</span>
                            <span class="details">
                                <select name="estatus_procesonew" id="estatus_proceso" required="required" tabindex="2">
                                    <option value="">--Estatus--&gt;</option>
                                    <option value="6">Pendiente de pago</option>
                                    <option value="7">Almacen (SDQ)</option>
                                    <option value="58">Almacen Principal</option>
                                    <option value="16">Analisis DGA</option>
                                    <option value="20">En Jaula (DOM)</option>
                                    <option value="52">En tramite (Aduanas)</option>
                                    <option value="17">Factura Cargada</option>
                                    <option value="40">Inspeccion AILA</option>
                                    <option value="41">Pendiente Factura Cliente</option>
                                    <option value="5">Retenido (Aduana)</option>
                                </select>
                            </span>
                        </div>


                        <div class="row-line">
                            <span class="label">Bloquear</span>
                            <span class="details">
                                <input name="bloquear" type="checkbox" value="1">
                            </span>
                        </div>



                        <div class="row-line">
                            <input type="hidden" name="codigo_recepcion" value="INB2303090210-68" readonly="yes">

                            <input name="submit2" type="submit" id="submit" value="Iniciar carga" tabindex="3"
                                class="blue boton right">
                        </div>




                        <div class="row-line">
                            Total pendientes : 24<table class="list">
                                <tbody>
                                    <tr>
                                        <th align="center"><strong>#</strong></th>
                                        <th align="center"><strong>Guia</strong></th>
                                        <th align="center"><strong>Estatus</strong></th>
                                        <th align="center"><strong>Fecha</strong></th>
                                        <th align="center">&nbsp;</th>
                                    </tr>

                                    <tr>
                                        <td>1</td>
                                        <td>OPS18329975</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2018-02-19 17:07:12 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>2</td>
                                        <td>OPS19333125</td>
                                        <td>En tramite (Aduanas)</td>
                                        <td>2019-02-26 18:02:59 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>3</td>
                                        <td>OPS19333004</td>
                                        <td>En tramite (Aduanas)</td>
                                        <td>2019-02-26 18:02:59 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>4</td>
                                        <td>20343077</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:44 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>5</td>
                                        <td>20343076</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:44 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>6</td>
                                        <td>20343065</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:44 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>7</td>
                                        <td>20343068</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:44 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>8</td>
                                        <td>20343075</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:45 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>9</td>
                                        <td>2
                                        </td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:45 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>10</td>
                                        <td>20343078</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:45 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>11</td>
                                        <td>20343071</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:45 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>12</td>
                                        <td>20343079</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:45 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>13</td>
                                        <td>20343080</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:45 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>14</td>
                                        <td>20343074</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:45 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>15</td>
                                        <td>20343057</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-10 12:06:45 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>16</td>
                                        <td>20343092</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-22 07:15:50 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>17</td>
                                        <td>20343100</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-22 07:15:50 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>18</td>
                                        <td>20343116</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-22 07:15:50 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>19</td>
                                        <td>20343119</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-22 07:15:50 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>20</td>
                                        <td>20343094</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-22 07:15:50 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>21</td>
                                        <td>20343111</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-22 07:15:51 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>22</td>
                                        <td>20343081</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-22 07:15:51 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>23</td>
                                        <td>20343118</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-22 07:15:51 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>24</td>
                                        <td>20343117</td>
                                        <td>Almacen (SDQ)</td>
                                        <td>2020-02-22 07:15:51 </td>
                                        <td>PENDIENTE &nbsp;</td>
                                    </tr>


                                    <tr>
                                        <td>&nbsp;</td>
                                        <td colspan="3">Total Pendientes: 24</td>
                                        <td align="center"> &nbsp; &nbsp;</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>




                <div align="center">
                    <input type="hidden" name="EJECUTE" value="7" readonly="YES">
                    <input type="hidden" name="AX" value="BULKPUPDATE" readonly="YES">
                    <input type="hidden" name="OPTIONS" value="22" readonly="YES">
                    <input type="hidden" name="MENU" value="Menu" readonly="YES">
                    <input type="hidden" name="MENU1" value="" readonly="YES">
                    <input type="hidden" name="IDMENU" value="157" readonly="YES">
                    <input type="hidden" name="EDIT" value="" readonly="YES">
                    <input type="hidden" name="codigo" value="" readonly="YES">
                    <input type="hidden" name="codigo_cliente" value="" readonly="YES">
                    <input type="hidden" name="track[]" value="0" readonly="YES">
                    <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                </div>

            </form>

            <a name="aqui" id="aqui"></a>

            <h1>Recepción de paquetes</h1>
            <form action="run.php" enctype="multipart/form-data" method="post" name="popupform">



                <div class="row div">
                    <div class="col2">
                        <div class="row">
                            <h2>Actualizar estatus de paquetes </h2>
                            <div class="row-line">
                                <span class="label">Guia</span>
                                <span class="details">
                                    <input type="hidden" name="codigo_recepcion" value="ISDQ2303090210-68">
                                    <input name="guia" type="text" id="guia" tabindex="1" placeholder="DO11111119873"
                                        autofocus="">
                                </span>

                            </div>


                            <div class="row-line">
                                <input type="submit" class="boton gree right" value="Grabar">

                            </div>

                            <div class="row-line">
                                <span class="label">*** Usar Lector de barra</span>
                                <span class="details">
                                    <input type="hidden" name="codigo_recepcion" value="ISDQ2303090210-68"
                                        readonly="yes">


                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col2">
                        <div class="row">
                            <h2>Estatus del paquete</h2>
                            <div class="row-line">
                                <span class="label">Estatus del paquete</span>
                                <span class="details">
                                    <select name="estatus_procesonew" id="estatus_proceso" required="required">
                                        <option value="">--Estatus--&gt;</option>
                                        <option value="6">Pendiente de pago</option>
                                        <option value="7">Almacen (SDQ)</option>
                                        <option value="58">Almacen Principal</option>
                                        <option value="5">Retenido (Aduana)</option>
                                        <option value="16">Analisis DGA</option>
                                        <option value="17">Factura Cargada</option>
                                        <option value="20">En Jaula (DOM)</option>
                                        <option value="40">Inspeccion AILA</option>
                                        <option value="41">Pendiente Factura Cliente</option>
                                        <option value="52">En tramite (Aduanas)</option>
                                    </select>
                                </span>
                            </div>



                        </div>

                    </div>
                </div>




                <div align="center">
                    <input type="hidden" name="AX" value="recepcionpaquetealmacenbulk" readonly="YES">
                    <input type="hidden" name="EJECUTE" value="7" readonly="YES">
                    <input type="hidden" name="OPTIONS" value="22" readonly="YES">
                    <input type="hidden" name="MENU" value="Menu" readonly="YES">
                    <input type="hidden" name="MENU1" value="" readonly="YES">
                    <input type="hidden" name="IDMENU" value="157" readonly="YES">
                    <input type="hidden" name="EDIT" value="" readonly="YES">
                    <input type="hidden" name="codigo" value="" readonly="YES">
                    <input type="hidden" name="codigo_cliente" value="" readonly="YES">
                    <input type="hidden" name="track[]" value="0" readonly="YES">
                    <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                    &nbsp;
                </div>
            </form>


            <script type="text/javascript">

                $(document).ready(function () {
                    $("#links").focus();
                });

            </script>





        </div>



    </div>
</div>