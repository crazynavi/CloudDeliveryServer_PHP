<div class="body">
    <div class="cont">






        <h1>Recepción de paquetes</h1>
        <form action="run.php" enctype="multipart/form-data" method="post" name="popupform">



            <div class="row div">
                <div class="col2">
                    <div class="row">
                        <h2>Recibir paquetes </h2>
                        <div class="row-line">
                            <span class="label">Guia</span>
                            <span class="details">
                                <input type="hidden" name="codigo_recepcion" value="ISDQ2303100141-68">
                                <input name="guia" type="text" id="guia" tabindex="1"
                                    placeholder="Guia o Tracking Number" autofocus="" class="user-success">
                            </span>

                        </div>


                        <div class="row-line">
                            <input type="submit" class="boton gree right" value="Grabar">

                        </div>

                        <div class="row-line">
                            <span class="label">*** Usar Lector de barra</span>
                            <span class="details">
                                <input type="hidden" name="codigo_recepcion" value="ISDQ2303100141-68" readonly="yes">


                            </span>
                        </div>
                    </div>
                </div>
                <div class="col2">
                    <div class="row">
                        <h2>Configuracion</h2>
                        <div class="row-line">
                            <span class="label">Estatus del paquete</span>
                            <span class="details">
                                <select name="estatus_procesonew" id="estatus_proceso" required="required">
                                    <option value="3">Disponible para retirar</option>
                                </select>
                            </span>
                        </div>



                        <div class="row-line">
                            <span class="label">Notificar por correo</span>
                            <span class="details">
                                <input name="notificaremail" type="checkbox" id="notificar" tabindex="2" value="1"
                                    checked="checked">
                            </span>
                        </div>



                    </div>

                </div>
            </div>




            <div align="center">
                <input type="hidden" name="AX" value="recepcionpaquete" readonly="YES">
                <input type="hidden" name="EJECUTE" value="4" readonly="YES">
                <input type="hidden" name="OPTIONS" value="8" readonly="YES">
                <input type="hidden" name="MENU" value="Menu" readonly="YES">
                <input type="hidden" name="MENU1" value="" readonly="YES">
                <input type="hidden" name="IDMENU" value="121" readonly="YES">
                <input type="hidden" name="EDIT" value="" readonly="YES">
                <input type="hidden" name="codigo" value="" readonly="YES">
                <input type="hidden" name="codigo_cliente" value="" readonly="YES">
                <input type="hidden" name="track[]" value="0" readonly="YES">
                <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                &nbsp;
            </div>
        </form>



        <h2>Reporte de recepción de paquetes </h2>
        <table class="list">
            <tbody>
                <tr>
                    <th>#</th>
                    <th>Receción</th>
                    <th>Fecha</th>
                    <th>Total</th>
                    <th>Usuario</th>
                    <th>&nbsp;</th>
                </tr>


                <tr>
                    <td valign="top">
                        1 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303091050-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303091050-85 </a></td>
                    <td align="center" valign="top"> 2023-03-09 06:51:03&nbsp;</td>
                    <td align="center" valign="top">1</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303091050-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        2 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303071006-83&amp;PARAMETRO2=83&amp;paquete=&amp;SS=1">

                            ISDQ2303071006-83 </a></td>
                    <td align="center" valign="top"> 2023-03-07 06:11:08&nbsp;</td>
                    <td align="center" valign="top">9</td>
                    <td align="center" valign="top">011 &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303071006-83&amp;PARAMETRO2=83&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        3 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303060758-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303060758-85 </a></td>
                    <td align="center" valign="top"> 2023-03-06 04:21:52&nbsp;</td>
                    <td align="center" valign="top">50</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303060758-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        4 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=INB2303041154-68&amp;PARAMETRO2=68&amp;paquete=&amp;SS=1">

                            INB2303041154-68 </a></td>
                    <td align="center" valign="top"> 2023-03-04 08:58:59&nbsp;</td>
                    <td align="center" valign="top">74</td>
                    <td align="center" valign="top">opscargo &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=INB2303041154-68&amp;PARAMETRO2=68&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        5 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303041239-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303041239-85 </a></td>
                    <td align="center" valign="top"> 2023-03-04 08:39:46&nbsp;</td>
                    <td align="center" valign="top">1</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303041239-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        6 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303030526-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303030526-85 </a></td>
                    <td align="center" valign="top"> 2023-03-03 13:34:23&nbsp;</td>
                    <td align="center" valign="top">6</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303030526-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        7 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303030940-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303030940-85 </a></td>
                    <td align="center" valign="top"> 2023-03-03 05:43:53&nbsp;</td>
                    <td align="center" valign="top">4</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303030940-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        8 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303030853-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303030853-85 </a></td>
                    <td align="center" valign="top"> 2023-03-03 04:54:08&nbsp;</td>
                    <td align="center" valign="top">3</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303030853-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        9 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303030836-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303030836-85 </a></td>
                    <td align="center" valign="top"> 2023-03-03 04:47:19&nbsp;</td>
                    <td align="center" valign="top">10</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303030836-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        10 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303020254-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303020254-85 </a></td>
                    <td align="center" valign="top"> 2023-03-02 10:58:05&nbsp;</td>
                    <td align="center" valign="top">6</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303020254-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        11 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303020849-83&amp;PARAMETRO2=83&amp;paquete=&amp;SS=1">

                            ISDQ2303020849-83 </a></td>
                    <td align="center" valign="top"> 2023-03-02 04:51:13&nbsp;</td>
                    <td align="center" valign="top">22</td>
                    <td align="center" valign="top">011 &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303020849-83&amp;PARAMETRO2=83&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        12 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303010451-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303010451-85 </a></td>
                    <td align="center" valign="top"> 2023-03-01 13:07:05&nbsp;</td>
                    <td align="center" valign="top">24</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303010451-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        13 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303010243-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303010243-85 </a></td>
                    <td align="center" valign="top"> 2023-03-01 10:44:05&nbsp;</td>
                    <td align="center" valign="top">1</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303010243-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        14 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303011121-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1">

                            ISDQ2303011121-85 </a></td>
                    <td align="center" valign="top"> 2023-03-01 07:22:35&nbsp;</td>
                    <td align="center" valign="top">1</td>
                    <td align="center" valign="top">oficinasdq &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2303011121-85&amp;PARAMETRO2=85&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

                <tr>
                    <td valign="top">
                        15 <input name="chk[]" type="hidden" value=""></td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2302280601-84&amp;PARAMETRO2=84&amp;paquete=&amp;SS=1">

                            ISDQ2302280601-84 </a></td>
                    <td align="center" valign="top"> 2023-02-28 14:18:40&nbsp;</td>
                    <td align="center" valign="top">83</td>
                    <td align="center" valign="top">012 &nbsp;</td>
                    <td align="center" valign="top"><a
                            href="panel.php?OPTIONS=8&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=121&amp;EDIT=Y&amp;AX=6D&amp;&amp;wreceip=ISDQ2302280601-84&amp;PARAMETRO2=84&amp;paquete=&amp;SS=1"
                            class="boton gree">Ver Reporte </a>

                    </td>
                </tr>

            </tbody>
        </table>












    </div>
</div>