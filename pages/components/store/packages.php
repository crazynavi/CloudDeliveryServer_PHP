<div class="body">
    <div class="cont">



        <div class="mainContDato">




            <h1>Almacen / Paquetes
                <a class="boton right gree"
                    href="panel.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;EDIT=Y&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;rand=84248">+
                    Crear paquete</a>

                <a class="boton right blue"
                    href="print.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;EDIT=Y&amp;MENU=Menu&amp;paramentro1=17&amp;VIEW=FACTURACARGADA&amp;rand=38245"
                    target="_blank">+ Facturas Cargadas</a>
            </h1>




            <div class="toolbar">
                <div class="nav-h left">
                    <ul>
                        <li><a class="flaticon-commercial15"
                                href="panel.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;EDIT=Y&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;rand=80323">Crear
                                paquete</a></li>
                        <li><a class="flaticon-triangular42" href="javascript:history.go(0);">Actualizar</a></li>
                    </ul>
                </div>
                <div class="toolbar-item-form right">

                    <form name="form1" id="form1" action="panel.php" enctype="multipart/form-data" method="post">
                        <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
                            <option
                                value="panel.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;estatusproceso=9&amp;SHOW_=1"
                                class="">-- Sin filtro--&gt;</option>

                            <option
                                value="panel.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;estatusproceso=9&amp;SHOW_=1&amp;TIPOENVIO="
                                class="">Registrado (1672)</option>

                            <option
                                value="panel.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;estatusproceso=13&amp;SHOW_=1&amp;TIPOENVIO="
                                class="">Recibido en Origen (47584)</option>

                            <option
                                value="panel.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;estatusproceso=22&amp;SHOW_=1&amp;TIPOENVIO="
                                class="">Empaquetado (124)</option>
                        </select>



                        <input name="buscar" type="text" class="buscador" value="" placeholder="Guia/Tracking">
                        <input type="submit" value="Buscar" class="blue">


                        <input type="hidden" name="OPTIONS" value="22" readonly="YES">
                        <input type="hidden" name="MENU" value="Menu" readonly="YES">
                        <input type="hidden" name="MENU1" value="" readonly="YES">
                        <input type="hidden" name="IDMENU" value="10" readonly="YES">
                        <input type="hidden" name="AX" value="2" readonly="YES">

                    </form>


                </div>
            </div>



            <script language="javascript">



                $(function () {
                    // add multiple select / deselect functionality   
                    $("#selectall").click(function () {
                        $('.case').attr('checked', this.checked);
                    });
                    // if all checkbox are selected, check the selectall checkbox    
                    // and viceversa   
                    $(".case").click(function () {
                        if ($(".case").length == $(".case:checked").length) {
                            $("#selectall").attr("checked", "checked");
                        }
                        else {
                            $("#selectall").removeAttr("checked");
                        }
                    });
                });

                function MM_jumpMenu(targ, selObj, restore) { //v3.0
                    eval(targ + ".location='" + selObj.options[selObj.selectedIndex].value + "'");
                    if (restore) selObj.selectedIndex = 0;
                }

            </script>




            <script type="text/JavaScript">

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_jumpMenuGo(selName,targ,restore){ //v3.0
  var selObj = MM_findObj(selName); if (selObj) MM_jumpMenu(targ,selObj,restore);
}

    </script>

            <script>


                /*
                Auto Refresh Page with Time script
                By JavaScript Kit (javascriptkit.com)
                Over 200+ free scripts here!
                */

                //enter refresh time in "minutes:seconds" Minutes should range from 0 to inifinity. Seconds should range from 0 to 59
                var limit = "5:00"

                var doctitle = document.title
                var parselimit = limit.split(":")
                parselimit = parselimit[0] * 60 + parselimit[1] * 1

                function beginrefresh() {
                    if (parselimit == 1)
                        window.location.reload()
                    else {
                        parselimit -= 1
                        curmin = Math.floor(parselimit / 60)
                        cursec = parselimit % 60
                        if (curmin != 0)
                            curtime = curmin + " minutes and " + cursec + " seconds left until page refresh!"
                        else
                            curtime = cursec + " seconds left until page refresh!"
                        document.title = doctitle + ' (' + curtime + ')'
                        setTimeout("beginrefresh()", 1000)
                    }
                }

                if (window.addEventListener)
                    window.addEventListener("load", beginrefresh, false)
                else if (window.attachEvent)
                    window.attachEvent("load", beginrefresh)



            </script>



            <br>

            <span class="right">

                <a href="panel.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;estatusproceso=9&amp;SHOW_=1&amp;TIPOENVIO=&amp;rand=78893"
                    class="boton blue flaticon-baggage21" title="Registrado"> (1672)</a>

                <a href="panel.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;estatusproceso=13&amp;SHOW_=1&amp;TIPOENVIO=&amp;rand=56865"
                    class="boton gree flaticon-warning39" title="Recibido en Origen"> (47584)</a>

                <a href="panel.php?OPTIONS=22&amp;AX=2&amp;IDMENU=10&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;estatusproceso=22&amp;SHOW_=1&amp;TIPOENVIO=&amp;rand=97840"
                    class="boton gree flaticon-baggage21" title="Empaquetado"> (124)</a>

            </span>

            <form action="run.php" enctype="multipart/form-data" method="post">


                <table class="list checkList">

                    <tbody>
                        <tr>
                            <th align="center" valign="top">#</th>
                            <th align="center" valign="top">&nbsp;</th>
                            <th align="center" valign="top">&nbsp;</th>
                            <th align="center" valign="top">Codigo</th>
                            <th valign="top">Cliente</th>
                            <th valign="top">Oficina</th>
                            <th align="center" valign="top">Creado</th>
                            <th align="center" valign="top">Peso </th>
                            <th align="center" valign="top">Vol</th>
                            <th align="center" valign="top">Qty</th>
                            <th align="center" valign="top">Contenido </th>
                            <th align="center" valign="top">Tracking </th>

                            <th align="center" valign="top">Guia</th>
                            <th align="center" valign="top">Fob</th>
                            <th align="center" valign="top">&nbsp;</th>
                        </tr>
                        <tr title="Registrado">
                            <td valign="top">
                                1 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=65557"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426049&amp;SS=1&amp;rand=17374"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426049" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426049" value="9">
                                <input type="hidden" name="cliente426049" value="1672" readonly="YES">
                                <input type="hidden" name="idempresa426049" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426049&amp;SS=&amp;rand=56546">1672</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426049&amp;SS=1&amp;rand=13238">Yohan
                                    Reinoso Abreu</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                09/03/2023</td>
                            <td align="center" valign="top"> 5.28</td>
                            <td align="center" valign="top">0.027</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426049&amp;SS=1&amp;rand=98650">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1672&amp;paquete=426049&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=24184">Oximeter</a>
                            </td>
                            <td align="left" valign="top">73197643006816
                                &nbsp; </td>

                            <td align="center" valign="top">23426049 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426049&amp;SS=1&amp;rand=47263"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1672&amp;paquete=426049&amp;PRINT=Y&amp;rand=83990"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                2 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=74895"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426048&amp;SS=1&amp;rand=79090"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426048" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426048" value="9">
                                <input type="hidden" name="cliente426048" value="6696" readonly="YES">
                                <input type="hidden" name="idempresa426048" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426048&amp;SS=&amp;rand=84402">6696</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426048&amp;SS=1&amp;rand=49008">Angelin
                                    De Los Angeles Rondon Santoyo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                09/03/2023</td>
                            <td align="center" valign="top"> 40.26</td>
                            <td align="center" valign="top">0.166</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426048&amp;SS=1&amp;rand=52858">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6696&amp;paquete=426048&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=73354">Skirt</a>
                            </td>
                            <td align="left" valign="top">318477014873631
                                &nbsp; </td>

                            <td align="center" valign="top">23426048 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426048&amp;SS=1&amp;rand=26464"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6696&amp;paquete=426048&amp;PRINT=Y&amp;rand=30929"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                3 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=25461"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426047&amp;SS=1&amp;rand=68257"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426047" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426047" value="9">
                                <input type="hidden" name="cliente426047" value="1395" readonly="YES">
                                <input type="hidden" name="idempresa426047" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426047&amp;SS=&amp;rand=31042">1395</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426047&amp;SS=1&amp;rand=82078">Perla
                                    Carolina Vargas Cuevas</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 11.88</td>
                            <td align="center" valign="top">0.043</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426047&amp;SS=1&amp;rand=21415">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1395&amp;paquete=426047&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=51904">Wall
                                    Shelf</a>
                            </td>
                            <td align="left" valign="top">YT7095760154902
                                &nbsp; </td>

                            <td align="center" valign="top">23426047 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426047&amp;SS=1&amp;rand=44904"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1395&amp;paquete=426047&amp;PRINT=Y&amp;rand=33753"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                4 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=79445"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426046&amp;SS=1&amp;rand=29152"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426046" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426046" value="9">
                                <input type="hidden" name="cliente426046" value="8293" readonly="YES">
                                <input type="hidden" name="idempresa426046" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426046&amp;SS=&amp;rand=62000">8293</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426046&amp;SS=1&amp;rand=59769">Jose
                                    Manuel Gomez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 6.16</td>
                            <td align="center" valign="top">0.017</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426046&amp;SS=1&amp;rand=98047">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8293&amp;paquete=426046&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=18865">Camera</a>
                            </td>
                            <td align="left" valign="top">DPK210461937593
                                &nbsp; </td>

                            <td align="center" valign="top">23426046 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426046&amp;SS=1&amp;rand=57610"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8293&amp;paquete=426046&amp;PRINT=Y&amp;rand=63604"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                5 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=26240"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426045&amp;SS=1&amp;rand=14156"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426045" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426045" value="9">
                                <input type="hidden" name="cliente426045" value="666" readonly="YES">
                                <input type="hidden" name="idempresa426045" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426045&amp;SS=&amp;rand=66843">666</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426045&amp;SS=1&amp;rand=24891">Franklyn
                                    Alberto De La Cruz Acosta</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 12.76</td>
                            <td align="center" valign="top">0.073</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426045&amp;SS=1&amp;rand=28342">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=666&amp;paquete=426045&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=14107">Trunk</a>
                            </td>
                            <td align="left" valign="top">518992605000
                                &nbsp; </td>

                            <td align="center" valign="top">23426045 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426045&amp;SS=1&amp;rand=98882"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=666&amp;paquete=426045&amp;PRINT=Y&amp;rand=93239"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                6 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=83199"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426044&amp;SS=1&amp;rand=83284"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426044" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426044" value="9">
                                <input type="hidden" name="cliente426044" value="8395" readonly="YES">
                                <input type="hidden" name="idempresa426044" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426044&amp;SS=&amp;rand=42247">8395</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426044&amp;SS=1&amp;rand=36057">Vickniel
                                    Santana Rosario</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 2.42</td>
                            <td align="center" valign="top">0.006</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426044&amp;SS=1&amp;rand=56639">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8395&amp;paquete=426044&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=58713">Intelligent
                                    Watch</a>
                            </td>
                            <td align="left" valign="top">900895778943
                                &nbsp; </td>

                            <td align="center" valign="top">23426044 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426044&amp;SS=1&amp;rand=56988"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8395&amp;paquete=426044&amp;PRINT=Y&amp;rand=72101"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                7 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=26970"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426043&amp;SS=1&amp;rand=78032"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426043" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426043" value="9">
                                <input type="hidden" name="cliente426043" value="1560" readonly="YES">
                                <input type="hidden" name="idempresa426043" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426043&amp;SS=&amp;rand=54179">1560</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426043&amp;SS=1&amp;rand=38387">Jose
                                    Ernesto Matos Cepeda</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 19.36</td>
                            <td align="center" valign="top">0.024</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426043&amp;SS=1&amp;rand=29936">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1560&amp;paquete=426043&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=89085">Nail
                                    Powder</a>
                            </td>
                            <td align="left" valign="top">JT3026531760910
                                &nbsp; </td>

                            <td align="center" valign="top">23426043 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426043&amp;SS=1&amp;rand=62141"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1560&amp;paquete=426043&amp;PRINT=Y&amp;rand=99383"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                8 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=18238"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426035&amp;SS=1&amp;rand=24142"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426035" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426035" value="9">
                                <input type="hidden" name="cliente426035" value="2557" readonly="YES">
                                <input type="hidden" name="idempresa426035" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426035&amp;SS=&amp;rand=59152">2557</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426035&amp;SS=1&amp;rand=16285">Ruben
                                    D Perez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 140.8</td>
                            <td align="center" valign="top">0.12</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426035&amp;SS=1&amp;rand=33008">
                                    8</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2557&amp;paquete=426035&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=16762">Auto
                                    Repair Tools</a>
                            </td>
                            <td align="left" valign="top">233244191
                                &nbsp; </td>

                            <td align="center" valign="top">23426035 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426035&amp;SS=1&amp;rand=69891"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2557&amp;paquete=426035&amp;PRINT=Y&amp;rand=49250"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                9 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=20920"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426026&amp;SS=1&amp;rand=36735"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426026" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426026" value="9">
                                <input type="hidden" name="cliente426026" value="8596" readonly="YES">
                                <input type="hidden" name="idempresa426026" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426026&amp;SS=&amp;rand=64143">8596</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426026&amp;SS=1&amp;rand=39264">Selestino
                                    Mariano</a></td>
                            <td align="left" valign="top">PLAN COURRIER</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 487.08</td>
                            <td align="center" valign="top">0.513</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426026&amp;SS=1&amp;rand=40843">
                                    9</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8596&amp;paquete=426026&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=63026">Wrapping
                                    Film</a>
                            </td>
                            <td align="left" valign="top">78664325736502
                                &nbsp; </td>

                            <td align="center" valign="top">23426026 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426026&amp;SS=1&amp;rand=32503"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8596&amp;paquete=426026&amp;PRINT=Y&amp;rand=24043"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                10 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=46311"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426025&amp;SS=1&amp;rand=64752"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426025" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426025" value="9">
                                <input type="hidden" name="cliente426025" value="1818" readonly="YES">
                                <input type="hidden" name="idempresa426025" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426025&amp;SS=&amp;rand=50102">1818</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426025&amp;SS=1&amp;rand=92951">Jennifer
                                    Luciano</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 0.66</td>
                            <td align="center" valign="top">0.004</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426025&amp;SS=1&amp;rand=23466">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1818&amp;paquete=426025&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=97092">Socks</a>
                            </td>
                            <td align="left" valign="top">73198271093882
                                &nbsp; </td>

                            <td align="center" valign="top">23426025 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426025&amp;SS=1&amp;rand=65053"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1818&amp;paquete=426025&amp;PRINT=Y&amp;rand=40438"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                11 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=75124"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426024&amp;SS=1&amp;rand=19232"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426024" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426024" value="9">
                                <input type="hidden" name="cliente426024" value="1818" readonly="YES">
                                <input type="hidden" name="idempresa426024" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426024&amp;SS=&amp;rand=68826">1818</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426024&amp;SS=1&amp;rand=95061">Jennifer
                                    Luciano</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 2.42</td>
                            <td align="center" valign="top">0.005</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426024&amp;SS=1&amp;rand=98319">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1818&amp;paquete=426024&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=30968">Charger</a>
                            </td>
                            <td align="left" valign="top">776240492112245
                                &nbsp; </td>

                            <td align="center" valign="top">23426024 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426024&amp;SS=1&amp;rand=94445"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1818&amp;paquete=426024&amp;PRINT=Y&amp;rand=16557"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                12 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=45111"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426021&amp;SS=1&amp;rand=53598"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426021" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426021" value="9">
                                <input type="hidden" name="cliente426021" value="1" readonly="YES">
                                <input type="hidden" name="idempresa426021" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426021&amp;SS=&amp;rand=22844">1</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426021&amp;SS=1&amp;rand=68121">Cuenta
                                    General</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 90.42</td>
                            <td align="center" valign="top">0.402</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426021&amp;SS=1&amp;rand=60362">
                                    3</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=426021&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=82736">Boots</a>
                            </td>
                            <td align="left" valign="top">300538958623
                                &nbsp; </td>

                            <td align="center" valign="top">23426021 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426021&amp;SS=1&amp;rand=17372"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=426021&amp;PRINT=Y&amp;rand=71284"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                13 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=19471"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426020&amp;SS=1&amp;rand=71516"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426020" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426020" value="9">
                                <input type="hidden" name="cliente426020" value="9331" readonly="YES">
                                <input type="hidden" name="idempresa426020" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426020&amp;SS=&amp;rand=10548">9331</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426020&amp;SS=1&amp;rand=50316">Giscer
                                    Elvira Pontier De Los Santos</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 18.48</td>
                            <td align="center" valign="top">0.028</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426020&amp;SS=1&amp;rand=34542">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9331&amp;paquete=426020&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=33053">Key
                                    Suit</a>
                            </td>
                            <td align="left" valign="top">772019728514468
                                &nbsp; </td>

                            <td align="center" valign="top">23426020 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426020&amp;SS=1&amp;rand=64361"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9331&amp;paquete=426020&amp;PRINT=Y&amp;rand=70855"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                14 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=87807"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426019&amp;SS=1&amp;rand=14463"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426019" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426019" value="9">
                                <input type="hidden" name="cliente426019" value="1" readonly="YES">
                                <input type="hidden" name="idempresa426019" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426019&amp;SS=&amp;rand=63806">1</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426019&amp;SS=1&amp;rand=11273">Cuenta
                                    General</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 39.38</td>
                            <td align="center" valign="top">0.157</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426019&amp;SS=1&amp;rand=11555">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=426019&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=28860">Juicer</a>
                            </td>
                            <td align="left" valign="top">300534198245
                                &nbsp; </td>

                            <td align="center" valign="top">23426019 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426019&amp;SS=1&amp;rand=41712"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=426019&amp;PRINT=Y&amp;rand=76680"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                15 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=38094"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426018&amp;SS=1&amp;rand=10538"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426018" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426018" value="9">
                                <input type="hidden" name="cliente426018" value="9330" readonly="YES">
                                <input type="hidden" name="idempresa426018" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426018&amp;SS=&amp;rand=71742">9330</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426018&amp;SS=1&amp;rand=36413">La
                                    Merca Pm</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 11.88</td>
                            <td align="center" valign="top">0.026</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426018&amp;SS=1&amp;rand=31508">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9330&amp;paquete=426018&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=66188">Light
                                    Stick</a>
                            </td>
                            <td align="left" valign="top">312201731884298
                                &nbsp; </td>

                            <td align="center" valign="top">23426018 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426018&amp;SS=1&amp;rand=42972"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9330&amp;paquete=426018&amp;PRINT=Y&amp;rand=66620"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                16 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=19786"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426016&amp;SS=1&amp;rand=55817"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426016" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426016" value="9">
                                <input type="hidden" name="cliente426016" value="925" readonly="YES">
                                <input type="hidden" name="idempresa426016" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426016&amp;SS=&amp;rand=34741">925</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426016&amp;SS=1&amp;rand=70150">Gregorio
                                    De La Cruz Morel</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426016&amp;SS=1&amp;rand=38554">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=925&amp;paquete=426016&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=42115">Ropa</a>
                            </td>
                            <td align="left" valign="top">D10013686347492
                                &nbsp; </td>

                            <td align="center" valign="top">23426016 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426016&amp;SS=1&amp;rand=41434"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=925&amp;paquete=426016&amp;PRINT=Y&amp;rand=48027"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                17 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=13631"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426015&amp;SS=1&amp;rand=41984"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426015" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426015" value="9">
                                <input type="hidden" name="cliente426015" value="2297" readonly="YES">
                                <input type="hidden" name="idempresa426015" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426015&amp;SS=&amp;rand=88344">2297</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426015&amp;SS=1&amp;rand=38175">Loren
                                    Stephanie Solis Colon</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426015&amp;SS=1&amp;rand=65038">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2297&amp;paquete=426015&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=52705">Ropa</a>
                            </td>
                            <td align="left" valign="top">D10013700738931
                                &nbsp; </td>

                            <td align="center" valign="top">23426015 </td>
                            <td align="center" valign="top">
                                40 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426015&amp;SS=1&amp;rand=99031"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2297&amp;paquete=426015&amp;PRINT=Y&amp;rand=52845"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                18 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=57170"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426014&amp;SS=1&amp;rand=62838"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426014" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426014" value="9">
                                <input type="hidden" name="cliente426014" value="1817" readonly="YES">
                                <input type="hidden" name="idempresa426014" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426014&amp;SS=&amp;rand=54119">1817</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426014&amp;SS=1&amp;rand=58727">AndrÃÂ©s
                                    Guerrero</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426014&amp;SS=1&amp;rand=81700">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1817&amp;paquete=426014&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=85833">Jabones</a>
                            </td>
                            <td align="left" valign="top">TBA305659061490
                                &nbsp; </td>

                            <td align="center" valign="top">23426014 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426014&amp;SS=1&amp;rand=35407"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1817&amp;paquete=426014&amp;PRINT=Y&amp;rand=19794"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                19 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=86373"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426013&amp;SS=1&amp;rand=97151"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426013" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426013" value="9">
                                <input type="hidden" name="cliente426013" value="1001" readonly="YES">
                                <input type="hidden" name="idempresa426013" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426013&amp;SS=&amp;rand=46208">1001</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426013&amp;SS=1&amp;rand=17881">Omar
                                    Leonardo Perez</a></td>
                            <td align="left" valign="top">JULIETA MORALES</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426013&amp;SS=1&amp;rand=63339">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=426013&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=79181">Capsula
                                    De Cafe</a>
                            </td>
                            <td align="left" valign="top">TBA305658438088
                                &nbsp; </td>

                            <td align="center" valign="top">23426013 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426013&amp;SS=1&amp;rand=74502"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=426013&amp;PRINT=Y&amp;rand=73127"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                20 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=34999"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426012&amp;SS=1&amp;rand=99245"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426012" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426012" value="9">
                                <input type="hidden" name="cliente426012" value="1001" readonly="YES">
                                <input type="hidden" name="idempresa426012" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426012&amp;SS=&amp;rand=43277">1001</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426012&amp;SS=1&amp;rand=63554">Omar
                                    Leonardo Perez</a></td>
                            <td align="left" valign="top">JULIETA MORALES</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426012&amp;SS=1&amp;rand=41360">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=426012&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=74713">Red
                                    De Tennis</a>
                            </td>
                            <td align="left" valign="top">TBA305658102256
                                &nbsp; </td>

                            <td align="center" valign="top">23426012 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426012&amp;SS=1&amp;rand=11582"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=426012&amp;PRINT=Y&amp;rand=44993"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                21 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=16697"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426011&amp;SS=1&amp;rand=89927"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426011" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426011" value="9">
                                <input type="hidden" name="cliente426011" value="4488" readonly="YES">
                                <input type="hidden" name="idempresa426011" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426011&amp;SS=&amp;rand=73169">4488</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426011&amp;SS=1&amp;rand=71736">Taylor
                                    Peralta</a></td>
                            <td align="left" valign="top">INDEPENDENCIA</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426011&amp;SS=1&amp;rand=42633">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4488&amp;paquete=426011&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=72201">Crema</a>
                            </td>
                            <td align="left" valign="top">TBA305666375820
                                &nbsp; </td>

                            <td align="center" valign="top">23426011 </td>
                            <td align="center" valign="top">
                                10 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426011&amp;SS=1&amp;rand=24582"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4488&amp;paquete=426011&amp;PRINT=Y&amp;rand=89805"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                22 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=35040"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426010&amp;SS=1&amp;rand=68703"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426010" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426010" value="9">
                                <input type="hidden" name="cliente426010" value="1817" readonly="YES">
                                <input type="hidden" name="idempresa426010" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426010&amp;SS=&amp;rand=48532">1817</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426010&amp;SS=1&amp;rand=16740">AndrÃÂ©s
                                    Guerrero</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426010&amp;SS=1&amp;rand=54536">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1817&amp;paquete=426010&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=73941">Herramienta
                                </a>
                            </td>
                            <td align="left" valign="top">TBA305663087807
                                &nbsp; </td>

                            <td align="center" valign="top">23426010 </td>
                            <td align="center" valign="top">
                                60 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426010&amp;SS=1&amp;rand=26535"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1817&amp;paquete=426010&amp;PRINT=Y&amp;rand=40909"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                23 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=71092"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426009&amp;SS=1&amp;rand=62745"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426009" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426009" value="9">
                                <input type="hidden" name="cliente426009" value="535" readonly="YES">
                                <input type="hidden" name="idempresa426009" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426009&amp;SS=&amp;rand=48791">535</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426009&amp;SS=1&amp;rand=34432">Christian
                                    Lorenzo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426009&amp;SS=1&amp;rand=41927">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=535&amp;paquete=426009&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=23294">Cafe
                                </a>
                            </td>
                            <td align="left" valign="top">TBA305661306505
                                &nbsp; </td>

                            <td align="center" valign="top">23426009 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426009&amp;SS=1&amp;rand=97561"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=535&amp;paquete=426009&amp;PRINT=Y&amp;rand=66927"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                24 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=22539"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426008&amp;SS=1&amp;rand=40838"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426008" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426008" value="9">
                                <input type="hidden" name="cliente426008" value="1001" readonly="YES">
                                <input type="hidden" name="idempresa426008" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426008&amp;SS=&amp;rand=30482">1001</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426008&amp;SS=1&amp;rand=53901">Omar
                                    Leonardo Perez</a></td>
                            <td align="left" valign="top">JULIETA MORALES</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426008&amp;SS=1&amp;rand=15551">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=426008&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=32065">Acc
                                    Personal Capilar</a>
                            </td>
                            <td align="left" valign="top">TBA305634147274
                                &nbsp; </td>

                            <td align="center" valign="top">23426008 </td>
                            <td align="center" valign="top">
                                80 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426008&amp;SS=1&amp;rand=88895"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=426008&amp;PRINT=Y&amp;rand=22249"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                25 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=21993"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426007&amp;SS=1&amp;rand=62065"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426007" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426007" value="9">
                                <input type="hidden" name="cliente426007" value="2366" readonly="YES">
                                <input type="hidden" name="idempresa426007" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426007&amp;SS=&amp;rand=83987">2366</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426007&amp;SS=1&amp;rand=54628">Yesenia
                                    LucÃÂ­a Mojica RodrÃÂ­guez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426007&amp;SS=1&amp;rand=34266">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2366&amp;paquete=426007&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=98570">Perfume</a>
                            </td>
                            <td align="left" valign="top">TBA305603513751
                                &nbsp; </td>

                            <td align="center" valign="top">23426007 </td>
                            <td align="center" valign="top">
                                40 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426007&amp;SS=1&amp;rand=44433"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2366&amp;paquete=426007&amp;PRINT=Y&amp;rand=59308"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                26 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=67273"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426006&amp;SS=1&amp;rand=82967"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426006" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426006" value="9">
                                <input type="hidden" name="cliente426006" value="1001" readonly="YES">
                                <input type="hidden" name="idempresa426006" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426006&amp;SS=&amp;rand=66049">1001</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426006&amp;SS=1&amp;rand=21809">Omar
                                    Leonardo Perez</a></td>
                            <td align="left" valign="top">JULIETA MORALES</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426006&amp;SS=1&amp;rand=56908">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=426006&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=82586">Raquetas
                                    Tennis</a>
                            </td>
                            <td align="left" valign="top">1195266420920003316600395415508706
                                &nbsp; </td>

                            <td align="center" valign="top">23426006 </td>
                            <td align="center" valign="top">
                                200 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426006&amp;SS=1&amp;rand=52720"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=426006&amp;PRINT=Y&amp;rand=28001"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                27 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=45331"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426005&amp;SS=1&amp;rand=91512"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426005" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426005" value="9">
                                <input type="hidden" name="cliente426005" value="811" readonly="YES">
                                <input type="hidden" name="idempresa426005" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426005&amp;SS=&amp;rand=52434">811</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426005&amp;SS=1&amp;rand=77260">Santos
                                    Darinel Guerrero Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426005&amp;SS=1&amp;rand=14807">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=426005&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=49996">Botones
                                    Amarillos</a>
                            </td>
                            <td align="left" valign="top">9248790281670609301200
                                &nbsp; </td>

                            <td align="center" valign="top">23426005 </td>
                            <td align="center" valign="top">
                                20 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426005&amp;SS=1&amp;rand=44187"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=426005&amp;PRINT=Y&amp;rand=27347"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                28 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=80835"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426004&amp;SS=1&amp;rand=64671"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426004" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426004" value="9">
                                <input type="hidden" name="cliente426004" value="811" readonly="YES">
                                <input type="hidden" name="idempresa426004" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426004&amp;SS=&amp;rand=71250">811</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426004&amp;SS=1&amp;rand=86388">Santos
                                    Darinel Guerrero Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426004&amp;SS=1&amp;rand=86738">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=426004&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=60145">Piezas
                                    De Violin</a>
                            </td>
                            <td align="left" valign="top">EU800140424CN
                                &nbsp; </td>

                            <td align="center" valign="top">23426004 </td>
                            <td align="center" valign="top">
                                100 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426004&amp;SS=1&amp;rand=98639"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=426004&amp;PRINT=Y&amp;rand=98733"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                29 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=22210"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426003&amp;SS=1&amp;rand=82627"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426003" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426003" value="9">
                                <input type="hidden" name="cliente426003" value="8587" readonly="YES">
                                <input type="hidden" name="idempresa426003" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426003&amp;SS=&amp;rand=53361">8587</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426003&amp;SS=1&amp;rand=46478">Nandone
                                    Santos Acosta</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 47</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426003&amp;SS=1&amp;rand=81197">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8587&amp;paquete=426003&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=87796">Pantalla</a>
                            </td>
                            <td align="left" valign="top">9021306766-2
                                &nbsp; </td>

                            <td align="center" valign="top">23426003 </td>
                            <td align="center" valign="top">
                                350.00 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426003&amp;SS=1&amp;rand=95787"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8587&amp;paquete=426003&amp;PRINT=Y&amp;rand=48471"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                30 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=70763"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426002&amp;SS=1&amp;rand=61837"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426002" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426002" value="9">
                                <input type="hidden" name="cliente426002" value="4624" readonly="YES">
                                <input type="hidden" name="idempresa426002" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426002&amp;SS=&amp;rand=60282">4624</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426002&amp;SS=1&amp;rand=27671">Jhoan
                                    Daniel Burgos</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                08/03/2023</td>
                            <td align="center" valign="top"> 2.09</td>
                            <td align="center" valign="top">0.005</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426002&amp;SS=1&amp;rand=44423">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4624&amp;paquete=426002&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=13002">Circuit
                                    Board</a>
                            </td>
                            <td align="left" valign="top">JT0007607743619
                                &nbsp; </td>

                            <td align="center" valign="top">23426002 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426002&amp;SS=1&amp;rand=45673"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4624&amp;paquete=426002&amp;PRINT=Y&amp;rand=79756"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                31 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=94516"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426001&amp;SS=1&amp;rand=88109"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426001" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426001" value="9">
                                <input type="hidden" name="cliente426001" value="1876" readonly="YES">
                                <input type="hidden" name="idempresa426001" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426001&amp;SS=&amp;rand=57016">1876</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426001&amp;SS=1&amp;rand=99324">Miguel
                                    Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 27.06</td>
                            <td align="center" valign="top">0.112</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426001&amp;SS=1&amp;rand=38105">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1876&amp;paquete=426001&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=91205">Running
                                    Shoes</a>
                            </td>
                            <td align="left" valign="top">9870518706465
                                &nbsp; </td>

                            <td align="center" valign="top">23426001 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426001&amp;SS=1&amp;rand=26672"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1876&amp;paquete=426001&amp;PRINT=Y&amp;rand=18941"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                32 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=55876"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426000&amp;SS=1&amp;rand=87923"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="426000" id="case" class="case">
                                <input type="hidden" name="idstatusproceso426000" value="9">
                                <input type="hidden" name="cliente426000" value="73" readonly="YES">
                                <input type="hidden" name="idempresa426000" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426000&amp;SS=&amp;rand=95331">73</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426000&amp;SS=1&amp;rand=42615">Carlos
                                    O Tavarez </a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 37.62</td>
                            <td align="center" valign="top">0.074</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426000&amp;SS=1&amp;rand=48068">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=73&amp;paquete=426000&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=93971">Remote
                                    Control</a>
                            </td>
                            <td align="left" valign="top">518990542958
                                &nbsp; </td>

                            <td align="center" valign="top">23426000 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=426000&amp;SS=1&amp;rand=41348"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=73&amp;paquete=426000&amp;PRINT=Y&amp;rand=60280"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                33 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=76598"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425998&amp;SS=1&amp;rand=84710"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425998" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425998" value="9">
                                <input type="hidden" name="cliente425998" value="73" readonly="YES">
                                <input type="hidden" name="idempresa425998" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425998&amp;SS=&amp;rand=96759">73</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425998&amp;SS=1&amp;rand=57796">Carlos
                                    O Tavarez </a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 74.8</td>
                            <td align="center" valign="top">0.408</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425998&amp;SS=1&amp;rand=72506">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=73&amp;paquete=425998&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=92546">Curtain</a>
                            </td>
                            <td align="left" valign="top">202066917894
                                &nbsp; </td>

                            <td align="center" valign="top">23425998 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425998&amp;SS=1&amp;rand=96268"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=73&amp;paquete=425998&amp;PRINT=Y&amp;rand=43270"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                34 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=54383"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425997&amp;SS=1&amp;rand=56550"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425997" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425997" value="9">
                                <input type="hidden" name="cliente425997" value="5295" readonly="YES">
                                <input type="hidden" name="idempresa425997" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425997&amp;SS=&amp;rand=60942">5295</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425997&amp;SS=1&amp;rand=88808">Jose
                                    Alexander Ramirez Padilla</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 5.06</td>
                            <td align="center" valign="top">0.031</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425997&amp;SS=1&amp;rand=59554">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5295&amp;paquete=425997&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=96617">Backpack</a>
                            </td>
                            <td align="left" valign="top">750062875029
                                &nbsp; </td>

                            <td align="center" valign="top">23425997 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425997&amp;SS=1&amp;rand=68564"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5295&amp;paquete=425997&amp;PRINT=Y&amp;rand=54070"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                35 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=84727"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425996&amp;SS=1&amp;rand=25581"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425996" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425996" value="9">
                                <input type="hidden" name="cliente425996" value="1296" readonly="YES">
                                <input type="hidden" name="idempresa425996" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425996&amp;SS=&amp;rand=53395">1296</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425996&amp;SS=1&amp;rand=22832">Jose
                                    De Los Santos Almonte Aquino</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 169.84</td>
                            <td align="center" valign="top">0.376</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425996&amp;SS=1&amp;rand=16786">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1296&amp;paquete=425996&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=70068">False
                                    Lawn</a>
                            </td>
                            <td align="left" valign="top">202209143031
                                &nbsp; </td>

                            <td align="center" valign="top">23425996 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425996&amp;SS=1&amp;rand=31775"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1296&amp;paquete=425996&amp;PRINT=Y&amp;rand=62664"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                36 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=57992"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425995&amp;SS=1&amp;rand=27107"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425995" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425995" value="9">
                                <input type="hidden" name="cliente425995" value="1" readonly="YES">
                                <input type="hidden" name="idempresa425995" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425995&amp;SS=&amp;rand=95280">1</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425995&amp;SS=1&amp;rand=96062">Cuenta
                                    General</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 4.18</td>
                            <td align="center" valign="top">0.01</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425995&amp;SS=1&amp;rand=21078">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425995&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=36629">Automobile
                                    Side Marker Lamp</a>
                            </td>
                            <td align="left" valign="top">5301170410194
                                &nbsp; </td>

                            <td align="center" valign="top">23425995 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425995&amp;SS=1&amp;rand=56342"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425995&amp;PRINT=Y&amp;rand=87678"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                37 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=21340"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425994&amp;SS=1&amp;rand=53101"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425994" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425994" value="9">
                                <input type="hidden" name="cliente425994" value="1" readonly="YES">
                                <input type="hidden" name="idempresa425994" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425994&amp;SS=&amp;rand=45474">1</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425994&amp;SS=1&amp;rand=83848">Cuenta
                                    General</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 24.64</td>
                            <td align="center" valign="top">0.023</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425994&amp;SS=1&amp;rand=45647">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425994&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=41742">Plastic
                                    Packaging Bag</a>
                            </td>
                            <td align="left" valign="top">YT7092466744313
                                &nbsp; </td>

                            <td align="center" valign="top">23425994 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425994&amp;SS=1&amp;rand=27118"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425994&amp;PRINT=Y&amp;rand=90032"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                38 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=88294"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425991&amp;SS=1&amp;rand=78061"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425991" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425991" value="9">
                                <input type="hidden" name="cliente425991" value="2710" readonly="YES">
                                <input type="hidden" name="idempresa425991" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425991&amp;SS=&amp;rand=78840">2710</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425991&amp;SS=1&amp;rand=47849">David
                                    Castillo Castro</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 97.9</td>
                            <td align="center" valign="top">0.437</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425991&amp;SS=1&amp;rand=74679">
                                    3</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2710&amp;paquete=425991&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=47405">Men`s
                                    Shoes</a>
                            </td>
                            <td align="left" valign="top">433102883151239
                                &nbsp; </td>

                            <td align="center" valign="top">23425991 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425991&amp;SS=1&amp;rand=91920"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2710&amp;paquete=425991&amp;PRINT=Y&amp;rand=59406"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                39 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=62987"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425990&amp;SS=1&amp;rand=45316"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425990" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425990" value="9">
                                <input type="hidden" name="cliente425990" value="2073" readonly="YES">
                                <input type="hidden" name="idempresa425990" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425990&amp;SS=&amp;rand=72240">2073</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425990&amp;SS=1&amp;rand=69774">Robinson
                                    Valdez Pineda</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 7.26</td>
                            <td align="center" valign="top">0.035</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425990&amp;SS=1&amp;rand=15385">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2073&amp;paquete=425990&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=94017">Knapsack</a>
                            </td>
                            <td align="left" valign="top">78663719104665
                                &nbsp; </td>

                            <td align="center" valign="top">23425990 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425990&amp;SS=1&amp;rand=32439"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2073&amp;paquete=425990&amp;PRINT=Y&amp;rand=63378"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                40 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=21124"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425989&amp;SS=1&amp;rand=27720"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425989" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425989" value="9">
                                <input type="hidden" name="cliente425989" value="5703" readonly="YES">
                                <input type="hidden" name="idempresa425989" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425989&amp;SS=&amp;rand=59440">5703</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425989&amp;SS=1&amp;rand=32203">JosÃÂ©
                                    Paulino</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 15.62</td>
                            <td align="center" valign="top">0.083</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425989&amp;SS=1&amp;rand=54350">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5703&amp;paquete=425989&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=15783">Car
                                    Trash Can</a>
                            </td>
                            <td align="left" valign="top">773210166281505
                                &nbsp; </td>

                            <td align="center" valign="top">23425989 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425989&amp;SS=1&amp;rand=19881"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5703&amp;paquete=425989&amp;PRINT=Y&amp;rand=65691"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                41 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=58885"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425988&amp;SS=1&amp;rand=55357"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425988" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425988" value="9">
                                <input type="hidden" name="cliente425988" value="6802" readonly="YES">
                                <input type="hidden" name="idempresa425988" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425988&amp;SS=&amp;rand=49539">6802</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425988&amp;SS=1&amp;rand=94534">Treisi
                                    Estefany Rosso GuzmÃÂ¡n</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 6.82</td>
                            <td align="center" valign="top">0.023</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425988&amp;SS=1&amp;rand=87101">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6802&amp;paquete=425988&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=66659">Bag</a>
                            </td>
                            <td align="left" valign="top">78655556537789
                                &nbsp; </td>

                            <td align="center" valign="top">23425988 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425988&amp;SS=1&amp;rand=84566"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6802&amp;paquete=425988&amp;PRINT=Y&amp;rand=75395"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                42 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=44721"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425986&amp;SS=1&amp;rand=63407"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425986" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425986" value="9">
                                <input type="hidden" name="cliente425986" value="1395" readonly="YES">
                                <input type="hidden" name="idempresa425986" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425986&amp;SS=&amp;rand=23244">1395</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425986&amp;SS=1&amp;rand=19400">Perla
                                    Carolina Vargas Cuevas</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 35.86</td>
                            <td align="center" valign="top">0.125</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425986&amp;SS=1&amp;rand=10812">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1395&amp;paquete=425986&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=15165">Backpack</a>
                            </td>
                            <td align="left" valign="top">78663780426667
                                &nbsp; </td>

                            <td align="center" valign="top">23425986 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425986&amp;SS=1&amp;rand=68808"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1395&amp;paquete=425986&amp;PRINT=Y&amp;rand=63801"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                43 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=50482"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425985&amp;SS=1&amp;rand=41048"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425985" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425985" value="9">
                                <input type="hidden" name="cliente425985" value="9031" readonly="YES">
                                <input type="hidden" name="idempresa425985" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425985&amp;SS=&amp;rand=33576">9031</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425985&amp;SS=1&amp;rand=55869">Juan
                                    Velazquez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 2.2</td>
                            <td align="center" valign="top">0.007</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425985&amp;SS=1&amp;rand=35065">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9031&amp;paquete=425985&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=56016">Women`s
                                    Dress</a>
                            </td>
                            <td align="left" valign="top">78663788351902
                                &nbsp; </td>

                            <td align="center" valign="top">23425985 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425985&amp;SS=1&amp;rand=19247"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9031&amp;paquete=425985&amp;PRINT=Y&amp;rand=46190"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                44 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=73737"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425980&amp;SS=1&amp;rand=68689"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425980" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425980" value="9">
                                <input type="hidden" name="cliente425980" value="4322" readonly="YES">
                                <input type="hidden" name="idempresa425980" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425980&amp;SS=&amp;rand=68395">4322</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425980&amp;SS=1&amp;rand=28088">Rafael
                                    Adames</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 202.4</td>
                            <td align="center" valign="top">0.284</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425980&amp;SS=1&amp;rand=74473">
                                    4</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4322&amp;paquete=425980&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=78278">Engine
                                    Support</a>
                            </td>
                            <td align="left" valign="top">800013573596
                                &nbsp; </td>

                            <td align="center" valign="top">23425980 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425980&amp;SS=1&amp;rand=83780"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4322&amp;paquete=425980&amp;PRINT=Y&amp;rand=33359"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                45 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=33635"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425940&amp;SS=1&amp;rand=33320"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425940" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425940" value="9">
                                <input type="hidden" name="cliente425940" value="9003" readonly="YES">
                                <input type="hidden" name="idempresa425940" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425940&amp;SS=&amp;rand=27894">9003</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425940&amp;SS=1&amp;rand=20736">Dervi
                                    Leandro PeÃÂ±a Diaz</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 809.6</td>
                            <td align="center" valign="top">0.52</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425940&amp;SS=1&amp;rand=89980">
                                    40</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9003&amp;paquete=425940&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=12461">Hydraulic
                                    Pump</a>
                            </td>
                            <td align="left" valign="top">NOTR202303080057077
                                &nbsp; </td>

                            <td align="center" valign="top">23425940 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425940&amp;SS=1&amp;rand=86133"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9003&amp;paquete=425940&amp;PRINT=Y&amp;rand=34702"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                46 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=65869"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425939&amp;SS=1&amp;rand=99378"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425939" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425939" value="9">
                                <input type="hidden" name="cliente425939" value="8510" readonly="YES">
                                <input type="hidden" name="idempresa425939" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425939&amp;SS=&amp;rand=44103">8510</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425939&amp;SS=1&amp;rand=66683">Kelvin
                                    Joel Vidal Encarnacion</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 8</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425939&amp;SS=1&amp;rand=14544">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8510&amp;paquete=425939&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=12911">Acc
                                    Personales</a>
                            </td>
                            <td align="left" valign="top">9622001900004059970200395405518603
                                &nbsp; </td>

                            <td align="center" valign="top">23425939 </td>
                            <td align="center" valign="top">
                                150 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425939&amp;SS=1&amp;rand=30484"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8510&amp;paquete=425939&amp;PRINT=Y&amp;rand=55028"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                47 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=43961"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425938&amp;SS=1&amp;rand=54061"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425938" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425938" value="9">
                                <input type="hidden" name="cliente425938" value="1128" readonly="YES">
                                <input type="hidden" name="idempresa425938" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425938&amp;SS=&amp;rand=10897">1128</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425938&amp;SS=1&amp;rand=69027">Sandy
                                    Alexis PeÃÂÃÂ±a Lopez</a></td>
                            <td align="left" valign="top">ARROYO HONDO</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425938&amp;SS=1&amp;rand=10078">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1128&amp;paquete=425938&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=20146">Repuesto
                                    Carro</a>
                            </td>
                            <td align="left" valign="top">9622001900004369187200395312172540
                                &nbsp; </td>

                            <td align="center" valign="top">23425938 </td>
                            <td align="center" valign="top">
                                85 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425938&amp;SS=1&amp;rand=15218"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1128&amp;paquete=425938&amp;PRINT=Y&amp;rand=73817"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                48 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=78837"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425931&amp;SS=1&amp;rand=73614"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425931" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425931" value="9">
                                <input type="hidden" name="cliente425931" value="6" readonly="YES">
                                <input type="hidden" name="idempresa425931" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425931&amp;SS=&amp;rand=91906">6</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425931&amp;SS=1&amp;rand=53311">Edgar
                                    David</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425931&amp;SS=1&amp;rand=51893">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6&amp;paquete=425931&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=75686">Acc
                                    Personal</a>
                            </td>
                            <td align="left" valign="top">420331669400136105155563312547
                                &nbsp; </td>

                            <td align="center" valign="top">23425931 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425931&amp;SS=1&amp;rand=76671"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6&amp;paquete=425931&amp;PRINT=Y&amp;rand=75529"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                49 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=99008"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425930&amp;SS=1&amp;rand=94567"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425930" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425930" value="9">
                                <input type="hidden" name="cliente425930" value="7967" readonly="YES">
                                <input type="hidden" name="idempresa425930" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425930&amp;SS=&amp;rand=86267">7967</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425930&amp;SS=1&amp;rand=88989">Tamar
                                    Contreras</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425930&amp;SS=1&amp;rand=97029">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7967&amp;paquete=425930&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=72401">Cerraduras</a>
                            </td>
                            <td align="left" valign="top">9262690281670609827512
                                &nbsp; </td>

                            <td align="center" valign="top">23425930 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425930&amp;SS=1&amp;rand=23691"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7967&amp;paquete=425930&amp;PRINT=Y&amp;rand=62898"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                50 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=71779"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425925&amp;SS=1&amp;rand=57796"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425925" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425925" value="9">
                                <input type="hidden" name="cliente425925" value="1001" readonly="YES">
                                <input type="hidden" name="idempresa425925" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425925&amp;SS=&amp;rand=29581">1001</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425925&amp;SS=1&amp;rand=76325">Omar
                                    Leonardo Perez</a></td>
                            <td align="left" valign="top">JULIETA MORALES</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425925&amp;SS=1&amp;rand=60709">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=425925&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=50067">Respuesto</a>
                            </td>
                            <td align="left" valign="top">420331669214490280018733626401
                                &nbsp; </td>

                            <td align="center" valign="top">23425925 </td>
                            <td align="center" valign="top">
                                20 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425925&amp;SS=1&amp;rand=31353"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=425925&amp;PRINT=Y&amp;rand=94671"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                51 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=94130"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425924&amp;SS=1&amp;rand=32252"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425924" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425924" value="9">
                                <input type="hidden" name="cliente425924" value="1001" readonly="YES">
                                <input type="hidden" name="idempresa425924" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425924&amp;SS=&amp;rand=63699">1001</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425924&amp;SS=1&amp;rand=94209">Omar
                                    Leonardo Perez</a></td>
                            <td align="left" valign="top">JULIETA MORALES</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425924&amp;SS=1&amp;rand=42400">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=425924&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=68918">Repuesto</a>
                            </td>
                            <td align="left" valign="top">420331669214490280018733626371
                                &nbsp; </td>

                            <td align="center" valign="top">23425924 </td>
                            <td align="center" valign="top">
                                20 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425924&amp;SS=1&amp;rand=68026"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1001&amp;paquete=425924&amp;PRINT=Y&amp;rand=21237"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                52 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=42533"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425921&amp;SS=1&amp;rand=59932"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425921" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425921" value="9">
                                <input type="hidden" name="cliente425921" value="8801" readonly="YES">
                                <input type="hidden" name="idempresa425921" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425921&amp;SS=&amp;rand=64549">8801</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425921&amp;SS=1&amp;rand=84427">Reynaldo
                                    Aponte</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425921&amp;SS=1&amp;rand=35619">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8801&amp;paquete=425921&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=41221">Acc
                                    Personal</a>
                            </td>
                            <td align="left" valign="top">4203316692748927005455000345828704
                                &nbsp; </td>

                            <td align="center" valign="top">23425921 </td>
                            <td align="center" valign="top">
                                20 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425921&amp;SS=1&amp;rand=59957"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8801&amp;paquete=425921&amp;PRINT=Y&amp;rand=34628"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                53 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=35788"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425920&amp;SS=1&amp;rand=46225"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425920" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425920" value="9">
                                <input type="hidden" name="cliente425920" value="7967" readonly="YES">
                                <input type="hidden" name="idempresa425920" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425920&amp;SS=&amp;rand=23617">7967</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425920&amp;SS=1&amp;rand=32817">Tamar
                                    Contreras</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425920&amp;SS=1&amp;rand=18626">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7967&amp;paquete=425920&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=37310">Tubos
                                    Negros</a>
                            </td>
                            <td align="left" valign="top">420331669248790281670609712808
                                &nbsp; </td>

                            <td align="center" valign="top">23425920 </td>
                            <td align="center" valign="top">
                                30 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425920&amp;SS=1&amp;rand=85717"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7967&amp;paquete=425920&amp;PRINT=Y&amp;rand=80407"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                54 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=85107"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425918&amp;SS=1&amp;rand=15299"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425918" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425918" value="9">
                                <input type="hidden" name="cliente425918" value="7023" readonly="YES">
                                <input type="hidden" name="idempresa425918" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425918&amp;SS=&amp;rand=56732">7023</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425918&amp;SS=1&amp;rand=45816">Christopher
                                    Dominguez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425918&amp;SS=1&amp;rand=55368">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7023&amp;paquete=425918&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=78087">Liquido
                                    Chino</a>
                            </td>
                            <td align="left" valign="top">420331669248790281670680020168
                                &nbsp; </td>

                            <td align="center" valign="top">23425918 </td>
                            <td align="center" valign="top">
                                40 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425918&amp;SS=1&amp;rand=40488"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7023&amp;paquete=425918&amp;PRINT=Y&amp;rand=49498"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                55 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=10339"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425917&amp;SS=1&amp;rand=94188"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425917" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425917" value="9">
                                <input type="hidden" name="cliente425917" value="6" readonly="YES">
                                <input type="hidden" name="idempresa425917" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425917&amp;SS=&amp;rand=43708">6</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425917&amp;SS=1&amp;rand=42741">Edgar
                                    David</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425917&amp;SS=1&amp;rand=63106">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6&amp;paquete=425917&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=11735">Pantalon</a>
                            </td>
                            <td align="left" valign="top">420331669361289677018573660282
                                &nbsp; </td>

                            <td align="center" valign="top">23425917 </td>
                            <td align="center" valign="top">
                                30 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425917&amp;SS=1&amp;rand=53979"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6&amp;paquete=425917&amp;PRINT=Y&amp;rand=95640"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                56 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=61669"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425912&amp;SS=1&amp;rand=18529"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425912" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425912" value="9">
                                <input type="hidden" name="cliente425912" value="811" readonly="YES">
                                <input type="hidden" name="idempresa425912" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425912&amp;SS=&amp;rand=80068">811</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425912&amp;SS=1&amp;rand=87290">Santos
                                    Darinel Guerrero Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425912&amp;SS=1&amp;rand=49752">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=425912&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=40025">Botones</a>
                            </td>
                            <td align="left" valign="top">420331669248790281670609506513
                                &nbsp; </td>

                            <td align="center" valign="top">23425912 </td>
                            <td align="center" valign="top">
                                60 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425912&amp;SS=1&amp;rand=21918"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=425912&amp;PRINT=Y&amp;rand=75541"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                57 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=76251"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425911&amp;SS=1&amp;rand=35537"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425911" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425911" value="9">
                                <input type="hidden" name="cliente425911" value="811" readonly="YES">
                                <input type="hidden" name="idempresa425911" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425911&amp;SS=&amp;rand=98360">811</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425911&amp;SS=1&amp;rand=84878">Santos
                                    Darinel Guerrero Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425911&amp;SS=1&amp;rand=62848">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=425911&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=84078">Repuesto</a>
                            </td>
                            <td align="left" valign="top">420331669262690281670609826539
                                &nbsp; </td>

                            <td align="center" valign="top">23425911 </td>
                            <td align="center" valign="top">
                                90 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425911&amp;SS=1&amp;rand=65285"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=425911&amp;PRINT=Y&amp;rand=47955"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                58 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=89378"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425905&amp;SS=1&amp;rand=22018"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425905" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425905" value="9">
                                <input type="hidden" name="cliente425905" value="808" readonly="YES">
                                <input type="hidden" name="idempresa425905" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425905&amp;SS=&amp;rand=83773">808</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425905&amp;SS=1&amp;rand=44746">Glenn
                                    Holguin</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425905&amp;SS=1&amp;rand=90106">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=808&amp;paquete=425905&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=24261">Piezas
                                    De Celulares</a>
                            </td>
                            <td align="left" valign="top">420331669248790281670609980474
                                &nbsp; </td>

                            <td align="center" valign="top">23425905 </td>
                            <td align="center" valign="top">
                                80 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425905&amp;SS=1&amp;rand=84246"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=808&amp;paquete=425905&amp;PRINT=Y&amp;rand=90447"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                59 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=18450"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425903&amp;SS=1&amp;rand=27954"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425903" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425903" value="9">
                                <input type="hidden" name="cliente425903" value="186" readonly="YES">
                                <input type="hidden" name="idempresa425903" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425903&amp;SS=&amp;rand=33188">186</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425903&amp;SS=1&amp;rand=71558">Kennedy
                                    Lachapel</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425903&amp;SS=1&amp;rand=29690">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=186&amp;paquete=425903&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=77169">Ropa</a>
                            </td>
                            <td align="left" valign="top">420331669361289677018507263923
                                &nbsp; </td>

                            <td align="center" valign="top">23425903 </td>
                            <td align="center" valign="top">
                                40 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425903&amp;SS=1&amp;rand=67199"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=186&amp;paquete=425903&amp;PRINT=Y&amp;rand=81361"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                60 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=85699"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425902&amp;SS=1&amp;rand=47267"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425902" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425902" value="9">
                                <input type="hidden" name="cliente425902" value="2813" readonly="YES">
                                <input type="hidden" name="idempresa425902" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425902&amp;SS=&amp;rand=68651">2813</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425902&amp;SS=1&amp;rand=35451">Lilia
                                    Lovera</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425902&amp;SS=1&amp;rand=77294">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2813&amp;paquete=425902&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=80570">Cover</a>
                            </td>
                            <td align="left" valign="top">420331669374889677018355262709
                                &nbsp; </td>

                            <td align="center" valign="top">23425902 </td>
                            <td align="center" valign="top">
                                10 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425902&amp;SS=1&amp;rand=10993"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2813&amp;paquete=425902&amp;PRINT=Y&amp;rand=53545"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                61 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=16107"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425901&amp;SS=1&amp;rand=99355"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425901" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425901" value="9">
                                <input type="hidden" name="cliente425901" value="811" readonly="YES">
                                <input type="hidden" name="idempresa425901" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425901&amp;SS=&amp;rand=38424">811</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425901&amp;SS=1&amp;rand=68957">Santos
                                    Darinel Guerrero Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425901&amp;SS=1&amp;rand=83433">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=425901&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=93711">Overdrive
                                    Od300</a>
                            </td>
                            <td align="left" valign="top">4203316626179400108205497660297324
                                &nbsp; </td>

                            <td align="center" valign="top">23425901 </td>
                            <td align="center" valign="top">
                                90 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425901&amp;SS=1&amp;rand=16912"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=811&amp;paquete=425901&amp;PRINT=Y&amp;rand=72811"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                62 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=15729"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425900&amp;SS=1&amp;rand=90687"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425900" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425900" value="9">
                                <input type="hidden" name="cliente425900" value="666" readonly="YES">
                                <input type="hidden" name="idempresa425900" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425900&amp;SS=&amp;rand=17558">666</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425900&amp;SS=1&amp;rand=95837">Franklyn
                                    Alberto De La Cruz Acosta</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425900&amp;SS=1&amp;rand=14949">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=666&amp;paquete=425900&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=91805">Ropa</a>
                            </td>
                            <td align="left" valign="top">420331669214490324478826745397
                                &nbsp; </td>

                            <td align="center" valign="top">23425900 </td>
                            <td align="center" valign="top">
                                30 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425900&amp;SS=1&amp;rand=86285"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=666&amp;paquete=425900&amp;PRINT=Y&amp;rand=23400"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                63 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=19759"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425889&amp;SS=1&amp;rand=19474"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425889" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425889" value="9">
                                <input type="hidden" name="cliente425889" value="2813" readonly="YES">
                                <input type="hidden" name="idempresa425889" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425889&amp;SS=&amp;rand=84960">2813</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425889&amp;SS=1&amp;rand=39451">Lilia
                                    Lovera</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425889&amp;SS=1&amp;rand=86644">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2813&amp;paquete=425889&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=52159">Tripode</a>
                            </td>
                            <td align="left" valign="top">420331669361289677018593369585
                                &nbsp; </td>

                            <td align="center" valign="top">23425889 </td>
                            <td align="center" valign="top">
                                30 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425889&amp;SS=1&amp;rand=20812"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2813&amp;paquete=425889&amp;PRINT=Y&amp;rand=72344"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                64 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=89427"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425888&amp;SS=1&amp;rand=79465"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425888" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425888" value="9">
                                <input type="hidden" name="cliente425888" value="808" readonly="YES">
                                <input type="hidden" name="idempresa425888" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425888&amp;SS=&amp;rand=97797">808</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425888&amp;SS=1&amp;rand=66721">Glenn
                                    Holguin</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425888&amp;SS=1&amp;rand=60036">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=808&amp;paquete=425888&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=98791">Readin
                                    Glasses</a>
                            </td>
                            <td align="left" valign="top">420331669361289677018460529562
                                &nbsp; </td>

                            <td align="center" valign="top">23425888 </td>
                            <td align="center" valign="top">
                                60 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425888&amp;SS=1&amp;rand=20267"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=808&amp;paquete=425888&amp;PRINT=Y&amp;rand=66145"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                65 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=98147"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425887&amp;SS=1&amp;rand=48693"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425887" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425887" value="9">
                                <input type="hidden" name="cliente425887" value="1570" readonly="YES">
                                <input type="hidden" name="idempresa425887" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425887&amp;SS=&amp;rand=35102">1570</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425887&amp;SS=1&amp;rand=81580">Denisse
                                    Jiret Rodriguez Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425887&amp;SS=1&amp;rand=42405">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1570&amp;paquete=425887&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=42016">Cover
                                    Y Crema</a>
                            </td>
                            <td align="left" valign="top">420331669361289677018641432803
                                &nbsp; </td>

                            <td align="center" valign="top">23425887 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425887&amp;SS=1&amp;rand=54392"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1570&amp;paquete=425887&amp;PRINT=Y&amp;rand=48136"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                66 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=32704"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425876&amp;SS=1&amp;rand=61951"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425876" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425876" value="9">
                                <input type="hidden" name="cliente425876" value="925" readonly="YES">
                                <input type="hidden" name="idempresa425876" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425876&amp;SS=&amp;rand=43973">925</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425876&amp;SS=1&amp;rand=37654">Gregorio
                                    De La Cruz Morel</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                07/03/2023</td>
                            <td align="center" valign="top"> 9</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425876&amp;SS=1&amp;rand=53756">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=925&amp;paquete=425876&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=30259">Acc
                                    Chinos</a>
                            </td>
                            <td align="left" valign="top">1ZY458680404008698
                                &nbsp; </td>

                            <td align="center" valign="top">23425876 </td>
                            <td align="center" valign="top">
                                100 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425876&amp;SS=1&amp;rand=51056"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=925&amp;paquete=425876&amp;PRINT=Y&amp;rand=63516"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                67 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=39734"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425874&amp;SS=1&amp;rand=36016"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425874" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425874" value="9">
                                <input type="hidden" name="cliente425874" value="8291" readonly="YES">
                                <input type="hidden" name="idempresa425874" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425874&amp;SS=&amp;rand=92969">8291</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425874&amp;SS=1&amp;rand=26379">Lisset
                                    Liranzo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 62.26</td>
                            <td align="center" valign="top">0.122</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425874&amp;SS=1&amp;rand=78176">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8291&amp;paquete=425874&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=13782">Flower
                                    Receptacle</a>
                            </td>
                            <td align="left" valign="top">800265020349
                                &nbsp; </td>

                            <td align="center" valign="top">23425874 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425874&amp;SS=1&amp;rand=88724"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8291&amp;paquete=425874&amp;PRINT=Y&amp;rand=67604"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                68 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=83248"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425873&amp;SS=1&amp;rand=86521"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425873" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425873" value="9">
                                <input type="hidden" name="cliente425873" value="5703" readonly="YES">
                                <input type="hidden" name="idempresa425873" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425873&amp;SS=&amp;rand=34326">5703</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425873&amp;SS=1&amp;rand=43285">JosÃÂ©
                                    Paulino</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 1.98</td>
                            <td align="center" valign="top">0.004</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425873&amp;SS=1&amp;rand=85313">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5703&amp;paquete=425873&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=44594">Nozzle</a>
                            </td>
                            <td align="left" valign="top">SF1510475907098
                                &nbsp; </td>

                            <td align="center" valign="top">23425873 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425873&amp;SS=1&amp;rand=99431"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5703&amp;paquete=425873&amp;PRINT=Y&amp;rand=83460"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                69 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=83289"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425871&amp;SS=1&amp;rand=34534"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425871" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425871" value="9">
                                <input type="hidden" name="cliente425871" value="5669" readonly="YES">
                                <input type="hidden" name="idempresa425871" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425871&amp;SS=&amp;rand=65041">5669</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425871&amp;SS=1&amp;rand=25694">Junior
                                    Statlin Vicente Soto</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 3467.2</td>
                            <td align="center" valign="top">4.832</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425871&amp;SS=1&amp;rand=66551">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5669&amp;paquete=425871&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=19433">Automatic
                                    Door Opener</a>
                            </td>
                            <td align="left" valign="top">NOTR202303070343126
                                &nbsp; </td>

                            <td align="center" valign="top">23425871 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425871&amp;SS=1&amp;rand=63831"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5669&amp;paquete=425871&amp;PRINT=Y&amp;rand=89256"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                70 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=71385"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425863&amp;SS=1&amp;rand=97806"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425863" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425863" value="9">
                                <input type="hidden" name="cliente425863" value="8847" readonly="YES">
                                <input type="hidden" name="idempresa425863" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425863&amp;SS=&amp;rand=26911">8847</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425863&amp;SS=1&amp;rand=25141">JosÃÂ©
                                    Enrique De Oleo Amador</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 547.69</td>
                            <td align="center" valign="top">3.565</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425863&amp;SS=1&amp;rand=28065">
                                    8</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8847&amp;paquete=425863&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=67968">Auto
                                    Parts</a>
                            </td>
                            <td align="left" valign="top">80914336521
                                &nbsp; </td>

                            <td align="center" valign="top">23425863 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425863&amp;SS=1&amp;rand=78659"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8847&amp;paquete=425863&amp;PRINT=Y&amp;rand=57800"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                71 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=93985"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425853&amp;SS=1&amp;rand=71628"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425853" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425853" value="9">
                                <input type="hidden" name="cliente425853" value="165" readonly="YES">
                                <input type="hidden" name="idempresa425853" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425853&amp;SS=&amp;rand=74181">165</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425853&amp;SS=1&amp;rand=72162">Cesar
                                    Hilario</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 470.8</td>
                            <td align="center" valign="top">1.33</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425853&amp;SS=1&amp;rand=75411">
                                    10</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=165&amp;paquete=425853&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=62905">Shoes</a>
                            </td>
                            <td align="left" valign="top">773209470035825
                                &nbsp; </td>

                            <td align="center" valign="top">23425853 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425853&amp;SS=1&amp;rand=39766"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=165&amp;paquete=425853&amp;PRINT=Y&amp;rand=58660"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                72 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=49427"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425831&amp;SS=1&amp;rand=64093"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425831" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425831" value="9">
                                <input type="hidden" name="cliente425831" value="292" readonly="YES">
                                <input type="hidden" name="idempresa425831" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425831&amp;SS=&amp;rand=91946">292</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425831&amp;SS=1&amp;rand=34741">MariÃÂÃÂ­a
                                    Angel Rincon Lantigua</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 519.2</td>
                            <td align="center" valign="top">2.1</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425831&amp;SS=1&amp;rand=98689">
                                    22</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=292&amp;paquete=425831&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=91378">Auto
                                    Filter</a>
                            </td>
                            <td align="left" valign="top">NOTR202303070345325
                                &nbsp; </td>

                            <td align="center" valign="top">23425831 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425831&amp;SS=1&amp;rand=18202"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=292&amp;paquete=425831&amp;PRINT=Y&amp;rand=81978"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                73 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=25912"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425822&amp;SS=1&amp;rand=73244"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425822" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425822" value="9">
                                <input type="hidden" name="cliente425822" value="7176" readonly="YES">
                                <input type="hidden" name="idempresa425822" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425822&amp;SS=&amp;rand=97674">7176</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425822&amp;SS=1&amp;rand=82465">Daniel
                                    Enrique Pichardo</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 199.98</td>
                            <td align="center" valign="top">0.828</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425822&amp;SS=1&amp;rand=82678">
                                    9</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7176&amp;paquete=425822&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=61505">Wired
                                    Headset</a>
                            </td>
                            <td align="left" valign="top">188061590855
                                &nbsp; </td>

                            <td align="center" valign="top">23425822 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425822&amp;SS=1&amp;rand=71721"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7176&amp;paquete=425822&amp;PRINT=Y&amp;rand=54063"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                74 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=59311"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425821&amp;SS=1&amp;rand=88634"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425821" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425821" value="9">
                                <input type="hidden" name="cliente425821" value="1100" readonly="YES">
                                <input type="hidden" name="idempresa425821" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425821&amp;SS=&amp;rand=69206">1100</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425821&amp;SS=1&amp;rand=77378">Miguel
                                    Moya Solis</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 26.4</td>
                            <td align="center" valign="top">0.06</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425821&amp;SS=1&amp;rand=56602">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1100&amp;paquete=425821&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=47865">Router</a>
                            </td>
                            <td align="left" valign="top">SF1454226648161
                                &nbsp; </td>

                            <td align="center" valign="top">23425821 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425821&amp;SS=1&amp;rand=35178"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1100&amp;paquete=425821&amp;PRINT=Y&amp;rand=50588"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                75 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=19494"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425820&amp;SS=1&amp;rand=99360"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425820" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425820" value="9">
                                <input type="hidden" name="cliente425820" value="5833" readonly="YES">
                                <input type="hidden" name="idempresa425820" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425820&amp;SS=&amp;rand=22751">5833</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425820&amp;SS=1&amp;rand=84906">Ruben
                                    Antonio Herrera</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 34.76</td>
                            <td align="center" valign="top">0.076</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425820&amp;SS=1&amp;rand=62266">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5833&amp;paquete=425820&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=52518">Car
                                    Wash Water Gun</a>
                            </td>
                            <td align="left" valign="top">777130258620363
                                &nbsp; </td>

                            <td align="center" valign="top">23425820 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425820&amp;SS=1&amp;rand=43567"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5833&amp;paquete=425820&amp;PRINT=Y&amp;rand=11694"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                76 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=16612"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425817&amp;SS=1&amp;rand=35514"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425817" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425817" value="9">
                                <input type="hidden" name="cliente425817" value="8411" readonly="YES">
                                <input type="hidden" name="idempresa425817" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425817&amp;SS=&amp;rand=36436">8411</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425817&amp;SS=1&amp;rand=15302">Martiribel
                                    Margarita Tejada Nolasco</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 104.94</td>
                            <td align="center" valign="top">0.255</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425817&amp;SS=1&amp;rand=26892">
                                    3</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8411&amp;paquete=425817&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=44639">Softball</a>
                            </td>
                            <td align="left" valign="top">20221298585
                                &nbsp; </td>

                            <td align="center" valign="top">23425817 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425817&amp;SS=1&amp;rand=87282"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8411&amp;paquete=425817&amp;PRINT=Y&amp;rand=42806"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                77 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=17883"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425816&amp;SS=1&amp;rand=84956"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425816" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425816" value="9">
                                <input type="hidden" name="cliente425816" value="7347" readonly="YES">
                                <input type="hidden" name="idempresa425816" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425816&amp;SS=&amp;rand=25271">7347</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425816&amp;SS=1&amp;rand=90563">Roberto
                                    Carlos Herrera Herrera</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 19.14</td>
                            <td align="center" valign="top">0.041</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425816&amp;SS=1&amp;rand=46461">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7347&amp;paquete=425816&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=86994">Charging
                                    Line</a>
                            </td>
                            <td align="left" valign="top">SF1417440001967
                                &nbsp; </td>

                            <td align="center" valign="top">23425816 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425816&amp;SS=1&amp;rand=44627"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7347&amp;paquete=425816&amp;PRINT=Y&amp;rand=95774"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                78 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=75628"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425815&amp;SS=1&amp;rand=13833"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425815" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425815" value="9">
                                <input type="hidden" name="cliente425815" value="1" readonly="YES">
                                <input type="hidden" name="idempresa425815" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425815&amp;SS=&amp;rand=73152">1</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425815&amp;SS=1&amp;rand=32231">Cuenta
                                    General</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 15.18</td>
                            <td align="center" valign="top">0.158</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425815&amp;SS=1&amp;rand=51699">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425815&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=98332">Plastic
                                    Kettle</a>
                            </td>
                            <td align="left" valign="top">106490096440
                                &nbsp; </td>

                            <td align="center" valign="top">23425815 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425815&amp;SS=1&amp;rand=72820"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425815&amp;PRINT=Y&amp;rand=61194"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                79 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=97693"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425814&amp;SS=1&amp;rand=85572"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425814" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425814" value="9">
                                <input type="hidden" name="cliente425814" value="7074" readonly="YES">
                                <input type="hidden" name="idempresa425814" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425814&amp;SS=&amp;rand=46101">7074</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425814&amp;SS=1&amp;rand=59960">Jeison
                                    Linares</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 5.72</td>
                            <td align="center" valign="top">0.019</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425814&amp;SS=1&amp;rand=38091">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7074&amp;paquete=425814&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=79670">Pressure
                                    Switch</a>
                            </td>
                            <td align="left" valign="top">YT7081076820923
                                &nbsp; </td>

                            <td align="center" valign="top">23425814 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425814&amp;SS=1&amp;rand=61655"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7074&amp;paquete=425814&amp;PRINT=Y&amp;rand=44705"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                80 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=15184"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425813&amp;SS=1&amp;rand=88093"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425813" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425813" value="9">
                                <input type="hidden" name="cliente425813" value="2841" readonly="YES">
                                <input type="hidden" name="idempresa425813" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425813&amp;SS=&amp;rand=50008">2841</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425813&amp;SS=1&amp;rand=32077">Geurys
                                    Cespedes</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 10.56</td>
                            <td align="center" valign="top">0.073</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425813&amp;SS=1&amp;rand=32732">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2841&amp;paquete=425813&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=37290">Helmet</a>
                            </td>
                            <td align="left" valign="top">YT7082475973613
                                &nbsp; </td>

                            <td align="center" valign="top">23425813 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425813&amp;SS=1&amp;rand=64884"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2841&amp;paquete=425813&amp;PRINT=Y&amp;rand=40617"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                81 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=22246"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425812&amp;SS=1&amp;rand=80157"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425812" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425812" value="9">
                                <input type="hidden" name="cliente425812" value="8004" readonly="YES">
                                <input type="hidden" name="idempresa425812" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425812&amp;SS=&amp;rand=31181">8004</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425812&amp;SS=1&amp;rand=58709">Yudelkys
                                    Noboa Mateo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 6.82</td>
                            <td align="center" valign="top">0.02</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425812&amp;SS=1&amp;rand=67151">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8004&amp;paquete=425812&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=65809">Skating
                                    Shoes</a>
                            </td>
                            <td align="left" valign="top">JT3026176554859
                                &nbsp; </td>

                            <td align="center" valign="top">23425812 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425812&amp;SS=1&amp;rand=54484"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8004&amp;paquete=425812&amp;PRINT=Y&amp;rand=42779"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                82 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=69643"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425811&amp;SS=1&amp;rand=27637"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425811" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425811" value="9">
                                <input type="hidden" name="cliente425811" value="7178" readonly="YES">
                                <input type="hidden" name="idempresa425811" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425811&amp;SS=&amp;rand=65011">7178</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425811&amp;SS=1&amp;rand=21342">Juan
                                    JosÃÂÃÂ© UreÃÂÃÂ±a RodrÃÂÃÂ­guez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 2.2</td>
                            <td align="center" valign="top">0.007</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425811&amp;SS=1&amp;rand=25970">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7178&amp;paquete=425811&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=37832">Home
                                    Webcam</a>
                            </td>
                            <td align="left" valign="top">SF1459976053141
                                &nbsp; </td>

                            <td align="center" valign="top">23425811 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425811&amp;SS=1&amp;rand=72538"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7178&amp;paquete=425811&amp;PRINT=Y&amp;rand=23664"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                83 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=23405"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425810&amp;SS=1&amp;rand=18640"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425810" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425810" value="9">
                                <input type="hidden" name="cliente425810" value="1206" readonly="YES">
                                <input type="hidden" name="idempresa425810" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425810&amp;SS=&amp;rand=73625">1206</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425810&amp;SS=1&amp;rand=51498">Modesto
                                    Castillo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 13.64</td>
                            <td align="center" valign="top">0.059</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425810&amp;SS=1&amp;rand=88311">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425810&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=35281">Headset</a>
                            </td>
                            <td align="left" valign="top">YT7082497405545
                                &nbsp; </td>

                            <td align="center" valign="top">23425810 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425810&amp;SS=1&amp;rand=86204"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425810&amp;PRINT=Y&amp;rand=93496"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                84 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=23374"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425809&amp;SS=1&amp;rand=36213"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425809" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425809" value="9">
                                <input type="hidden" name="cliente425809" value="7720" readonly="YES">
                                <input type="hidden" name="idempresa425809" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425809&amp;SS=&amp;rand=25574">7720</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425809&amp;SS=1&amp;rand=46108">Wilson
                                    Ventura</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 3.08</td>
                            <td align="center" valign="top">0.005</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425809&amp;SS=1&amp;rand=63505">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7720&amp;paquete=425809&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=80460">Oil
                                    Seal+maintenance Kit</a>
                            </td>
                            <td align="left" valign="top">773209684372461
                                &nbsp; </td>

                            <td align="center" valign="top">23425809 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425809&amp;SS=1&amp;rand=76726"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7720&amp;paquete=425809&amp;PRINT=Y&amp;rand=75753"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                85 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=60617"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425808&amp;SS=1&amp;rand=97909"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425808" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425808" value="9">
                                <input type="hidden" name="cliente425808" value="7074" readonly="YES">
                                <input type="hidden" name="idempresa425808" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425808&amp;SS=&amp;rand=34463">7074</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425808&amp;SS=1&amp;rand=27768">Jeison
                                    Linares</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 42.46</td>
                            <td align="center" valign="top">0.177</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425808&amp;SS=1&amp;rand=63718">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7074&amp;paquete=425808&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=78948">Water
                                    Purification Equipment</a>
                            </td>
                            <td align="left" valign="top">433098156145531
                                &nbsp; </td>

                            <td align="center" valign="top">23425808 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425808&amp;SS=1&amp;rand=60549"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7074&amp;paquete=425808&amp;PRINT=Y&amp;rand=33361"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                86 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=96587"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425807&amp;SS=1&amp;rand=25561"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425807" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425807" value="9">
                                <input type="hidden" name="cliente425807" value="8293" readonly="YES">
                                <input type="hidden" name="idempresa425807" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425807&amp;SS=&amp;rand=44705">8293</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425807&amp;SS=1&amp;rand=22557">Jose
                                    Manuel Gomez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 6.82</td>
                            <td align="center" valign="top">0.018</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425807&amp;SS=1&amp;rand=53394">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8293&amp;paquete=425807&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=17244">Yard
                                    Monitoring</a>
                            </td>
                            <td align="left" valign="top">JDVC17020719006
                                &nbsp; </td>

                            <td align="center" valign="top">23425807 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425807&amp;SS=1&amp;rand=36222"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8293&amp;paquete=425807&amp;PRINT=Y&amp;rand=66800"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                87 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=25885"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425802&amp;SS=1&amp;rand=99849"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425802" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425802" value="9">
                                <input type="hidden" name="cliente425802" value="3229" readonly="YES">
                                <input type="hidden" name="idempresa425802" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425802&amp;SS=&amp;rand=18299">3229</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425802&amp;SS=1&amp;rand=14196">Rances
                                    De La Cruz</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 103.84</td>
                            <td align="center" valign="top">0.51</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425802&amp;SS=1&amp;rand=35130">
                                    5</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3229&amp;paquete=425802&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=94505">Infusion
                                    Pump+special Needle For Implantable Drug </a>
                            </td>
                            <td align="left" valign="top">JDV010546445025
                                &nbsp; </td>

                            <td align="center" valign="top">23425802 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425802&amp;SS=1&amp;rand=97694"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3229&amp;paquete=425802&amp;PRINT=Y&amp;rand=48505"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                88 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=30718"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425801&amp;SS=1&amp;rand=23268"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425801" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425801" value="9">
                                <input type="hidden" name="cliente425801" value="2217" readonly="YES">
                                <input type="hidden" name="idempresa425801" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425801&amp;SS=&amp;rand=84614">2217</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425801&amp;SS=1&amp;rand=84224">Martin
                                    Salvador Martinez Puello</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 15.4</td>
                            <td align="center" valign="top">0.005</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425801&amp;SS=1&amp;rand=93730">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2217&amp;paquete=425801&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=61341">Crankshaft
                                    Pulley</a>
                            </td>
                            <td align="left" valign="top">773209614969304
                                &nbsp; </td>

                            <td align="center" valign="top">23425801 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425801&amp;SS=1&amp;rand=59977"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2217&amp;paquete=425801&amp;PRINT=Y&amp;rand=54347"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                89 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=59250"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425800&amp;SS=1&amp;rand=84442"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425800" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425800" value="9">
                                <input type="hidden" name="cliente425800" value="5608" readonly="YES">
                                <input type="hidden" name="idempresa425800" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425800&amp;SS=&amp;rand=72117">5608</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425800&amp;SS=1&amp;rand=22968">Ronald
                                    Flores</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 12.32</td>
                            <td align="center" valign="top">0.032</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425800&amp;SS=1&amp;rand=63390">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5608&amp;paquete=425800&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=32666">Pacifier
                                    Bag</a>
                            </td>
                            <td align="left" valign="top">773209466652244
                                &nbsp; </td>

                            <td align="center" valign="top">23425800 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425800&amp;SS=1&amp;rand=46331"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5608&amp;paquete=425800&amp;PRINT=Y&amp;rand=59978"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                90 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=48228"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425799&amp;SS=1&amp;rand=81037"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425799" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425799" value="9">
                                <input type="hidden" name="cliente425799" value="2602" readonly="YES">
                                <input type="hidden" name="idempresa425799" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425799&amp;SS=&amp;rand=72536">2602</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425799&amp;SS=1&amp;rand=91624">Carlos
                                    Alejandro Almonte</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 46.64</td>
                            <td align="center" valign="top">0.121</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425799&amp;SS=1&amp;rand=88282">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2602&amp;paquete=425799&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=98760">Softball</a>
                            </td>
                            <td align="left" valign="top">202212985882
                                &nbsp; </td>

                            <td align="center" valign="top">23425799 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425799&amp;SS=1&amp;rand=58425"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2602&amp;paquete=425799&amp;PRINT=Y&amp;rand=14168"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                91 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=98609"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425798&amp;SS=1&amp;rand=66725"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425798" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425798" value="9">
                                <input type="hidden" name="cliente425798" value="7994" readonly="YES">
                                <input type="hidden" name="idempresa425798" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425798&amp;SS=&amp;rand=18365">7994</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425798&amp;SS=1&amp;rand=33739">Heriberto
                                    Santos</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 12.54</td>
                            <td align="center" valign="top">0.221</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425798&amp;SS=1&amp;rand=61230">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7994&amp;paquete=425798&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=16060">Sealing
                                    Strip</a>
                            </td>
                            <td align="left" valign="top">300537305433
                                &nbsp; </td>

                            <td align="center" valign="top">23425798 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425798&amp;SS=1&amp;rand=72245"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7994&amp;paquete=425798&amp;PRINT=Y&amp;rand=81950"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                92 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=29329"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425797&amp;SS=1&amp;rand=56860"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425797" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425797" value="9">
                                <input type="hidden" name="cliente425797" value="9379" readonly="YES">
                                <input type="hidden" name="idempresa425797" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425797&amp;SS=&amp;rand=66174">9379</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425797&amp;SS=1&amp;rand=23059">Erick
                                    Nicolas Henson Vicente</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 15.62</td>
                            <td align="center" valign="top">0.036</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425797&amp;SS=1&amp;rand=18201">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9379&amp;paquete=425797&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=26152">Straight
                                    Comb</a>
                            </td>
                            <td align="left" valign="top">773209692786770
                                &nbsp; </td>

                            <td align="center" valign="top">23425797 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425797&amp;SS=1&amp;rand=67408"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9379&amp;paquete=425797&amp;PRINT=Y&amp;rand=67452"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                93 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=10594"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425796&amp;SS=1&amp;rand=39526"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425796" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425796" value="9">
                                <input type="hidden" name="cliente425796" value="8641" readonly="YES">
                                <input type="hidden" name="idempresa425796" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425796&amp;SS=&amp;rand=80422">8641</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425796&amp;SS=1&amp;rand=63986">Baldwin
                                    Alvarez Martinez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 0.44</td>
                            <td align="center" valign="top">0.007</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425796&amp;SS=1&amp;rand=62194">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8641&amp;paquete=425796&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=26753">Paper
                                    Sample</a>
                            </td>
                            <td align="left" valign="top">SF1452886583151
                                &nbsp; </td>

                            <td align="center" valign="top">23425796 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425796&amp;SS=1&amp;rand=23964"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8641&amp;paquete=425796&amp;PRINT=Y&amp;rand=10422"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                94 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=97791"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425793&amp;SS=1&amp;rand=86502"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425793" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425793" value="9">
                                <input type="hidden" name="cliente425793" value="1" readonly="YES">
                                <input type="hidden" name="idempresa425793" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425793&amp;SS=&amp;rand=92048">1</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425793&amp;SS=1&amp;rand=86074">Cuenta
                                    General</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 92.84</td>
                            <td align="center" valign="top">0.417</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425793&amp;SS=1&amp;rand=85262">
                                    3</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425793&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=50473">Leather
                                    Shoes</a>
                            </td>
                            <td align="left" valign="top">75145534892
                                &nbsp; </td>

                            <td align="center" valign="top">23425793 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425793&amp;SS=1&amp;rand=90243"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425793&amp;PRINT=Y&amp;rand=83871"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                95 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=17199"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425792&amp;SS=1&amp;rand=98610"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425792" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425792" value="9">
                                <input type="hidden" name="cliente425792" value="2073" readonly="YES">
                                <input type="hidden" name="idempresa425792" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425792&amp;SS=&amp;rand=17611">2073</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425792&amp;SS=1&amp;rand=68431">Robinson
                                    Valdez Pineda</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 3.08</td>
                            <td align="center" valign="top">0.009</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425792&amp;SS=1&amp;rand=14670">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2073&amp;paquete=425792&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=79857">Uav</a>
                            </td>
                            <td align="left" valign="top">78325942149791
                                &nbsp; </td>

                            <td align="center" valign="top">23425792 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425792&amp;SS=1&amp;rand=50381"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2073&amp;paquete=425792&amp;PRINT=Y&amp;rand=34001"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                96 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=36717"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425791&amp;SS=1&amp;rand=16556"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425791" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425791" value="9">
                                <input type="hidden" name="cliente425791" value="8293" readonly="YES">
                                <input type="hidden" name="idempresa425791" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425791&amp;SS=&amp;rand=47062">8293</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425791&amp;SS=1&amp;rand=44920">Jose
                                    Manuel Gomez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 8.36</td>
                            <td align="center" valign="top">0.014</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425791&amp;SS=1&amp;rand=32709">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8293&amp;paquete=425791&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=14470">Bluetooth
                                    Headset</a>
                            </td>
                            <td align="left" valign="top">YT2297618716811
                                &nbsp; </td>

                            <td align="center" valign="top">23425791 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425791&amp;SS=1&amp;rand=12373"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8293&amp;paquete=425791&amp;PRINT=Y&amp;rand=33305"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                97 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=43997"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425790&amp;SS=1&amp;rand=82796"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425790" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425790" value="9">
                                <input type="hidden" name="cliente425790" value="1206" readonly="YES">
                                <input type="hidden" name="idempresa425790" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425790&amp;SS=&amp;rand=87293">1206</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425790&amp;SS=1&amp;rand=96193">Modesto
                                    Castillo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 6.16</td>
                            <td align="center" valign="top">0.02</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425790&amp;SS=1&amp;rand=99550">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425790&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=11258">Wrist
                                    Watch</a>
                            </td>
                            <td align="left" valign="top">YT2297194544715
                                &nbsp; </td>

                            <td align="center" valign="top">23425790 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425790&amp;SS=1&amp;rand=96617"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425790&amp;PRINT=Y&amp;rand=97342"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                98 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=87761"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425786&amp;SS=1&amp;rand=88665"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425786" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425786" value="9">
                                <input type="hidden" name="cliente425786" value="4624" readonly="YES">
                                <input type="hidden" name="idempresa425786" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425786&amp;SS=&amp;rand=83416">4624</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425786&amp;SS=1&amp;rand=73024">Jhoan
                                    Daniel Burgos</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 168.96</td>
                            <td align="center" valign="top">0.504</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425786&amp;SS=1&amp;rand=39139">
                                    4</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4624&amp;paquete=425786&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=73660">Electric
                                    Shear Storage Box</a>
                            </td>
                            <td align="left" valign="top">70272276410
                                &nbsp; </td>

                            <td align="center" valign="top">23425786 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425786&amp;SS=1&amp;rand=56895"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4624&amp;paquete=425786&amp;PRINT=Y&amp;rand=46339"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                99 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=72270"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425785&amp;SS=1&amp;rand=64508"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425785" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425785" value="9">
                                <input type="hidden" name="cliente425785" value="2073" readonly="YES">
                                <input type="hidden" name="idempresa425785" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425785&amp;SS=&amp;rand=14770">2073</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425785&amp;SS=1&amp;rand=76942">Robinson
                                    Valdez Pineda</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 3.3</td>
                            <td align="center" valign="top">0.006</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425785&amp;SS=1&amp;rand=44365">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2073&amp;paquete=425785&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=55152">Intelligent
                                    Watch</a>
                            </td>
                            <td align="left" valign="top">YT2297232703221
                                &nbsp; </td>

                            <td align="center" valign="top">23425785 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425785&amp;SS=1&amp;rand=10943"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2073&amp;paquete=425785&amp;PRINT=Y&amp;rand=71084"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                100 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=61709"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425765&amp;SS=1&amp;rand=48006"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425765" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425765" value="9">
                                <input type="hidden" name="cliente425765" value="1555" readonly="YES">
                                <input type="hidden" name="idempresa425765" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425765&amp;SS=&amp;rand=16005">1555</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425765&amp;SS=1&amp;rand=84420">Felipe
                                    Cruz Lora</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 541.2</td>
                            <td align="center" valign="top">1.68</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425765&amp;SS=1&amp;rand=52478">
                                    20</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1555&amp;paquete=425765&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=18379">Safety
                                    Shoes</a>
                            </td>
                            <td align="left" valign="top">842915970
                                &nbsp; </td>

                            <td align="center" valign="top">23425765 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425765&amp;SS=1&amp;rand=17726"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1555&amp;paquete=425765&amp;PRINT=Y&amp;rand=86477"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                101 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=91176"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425764&amp;SS=1&amp;rand=95021"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425764" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425764" value="9">
                                <input type="hidden" name="cliente425764" value="666" readonly="YES">
                                <input type="hidden" name="idempresa425764" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425764&amp;SS=&amp;rand=82670">666</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425764&amp;SS=1&amp;rand=90727">Franklyn
                                    Alberto De La Cruz Acosta</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 3.08</td>
                            <td align="center" valign="top">0.005</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425764&amp;SS=1&amp;rand=96280">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=666&amp;paquete=425764&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=79287">Tablet
                                    Cutting Sub-package</a>
                            </td>
                            <td align="left" valign="top">433097814791335
                                &nbsp; </td>

                            <td align="center" valign="top">23425764 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425764&amp;SS=1&amp;rand=88069"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=666&amp;paquete=425764&amp;PRINT=Y&amp;rand=84041"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                102 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=67952"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425744&amp;SS=1&amp;rand=71486"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425744" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425744" value="9">
                                <input type="hidden" name="cliente425744" value="292" readonly="YES">
                                <input type="hidden" name="idempresa425744" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425744&amp;SS=&amp;rand=57065">292</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425744&amp;SS=1&amp;rand=97093">MariÃÂÃÂ­a
                                    Angel Rincon Lantigua</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 1214.4</td>
                            <td align="center" valign="top">2.5</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425744&amp;SS=1&amp;rand=45146">
                                    20</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=292&amp;paquete=425744&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=13961">Tyre</a>
                            </td>
                            <td align="left" valign="top">23030059232
                                &nbsp; </td>

                            <td align="center" valign="top">23425744 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425744&amp;SS=1&amp;rand=43432"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=292&amp;paquete=425744&amp;PRINT=Y&amp;rand=17417"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                103 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=68470"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425743&amp;SS=1&amp;rand=48204"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425743" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425743" value="9">
                                <input type="hidden" name="cliente425743" value="5703" readonly="YES">
                                <input type="hidden" name="idempresa425743" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425743&amp;SS=&amp;rand=84360">5703</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425743&amp;SS=1&amp;rand=12836">JosÃÂ©
                                    Paulino</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 1.32</td>
                            <td align="center" valign="top">0.003</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425743&amp;SS=1&amp;rand=93358">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5703&amp;paquete=425743&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=85304">Stoplight</a>
                            </td>
                            <td align="left" valign="top">YT7083914999153
                                &nbsp; </td>

                            <td align="center" valign="top">23425743 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425743&amp;SS=1&amp;rand=73922"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5703&amp;paquete=425743&amp;PRINT=Y&amp;rand=55068"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                104 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=33311"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425742&amp;SS=1&amp;rand=79929"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425742" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425742" value="9">
                                <input type="hidden" name="cliente425742" value="4367" readonly="YES">
                                <input type="hidden" name="idempresa425742" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425742&amp;SS=&amp;rand=39489">4367</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425742&amp;SS=1&amp;rand=75790">Kelvin
                                    Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 7.26</td>
                            <td align="center" valign="top">0.023</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425742&amp;SS=1&amp;rand=88309">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4367&amp;paquete=425742&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=47216">Blood
                                    Sampling Needle</a>
                            </td>
                            <td align="left" valign="top">YT7082894980629
                                &nbsp; </td>

                            <td align="center" valign="top">23425742 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425742&amp;SS=1&amp;rand=62267"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4367&amp;paquete=425742&amp;PRINT=Y&amp;rand=79485"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                105 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=42238"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425737&amp;SS=1&amp;rand=44937"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425737" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425737" value="9">
                                <input type="hidden" name="cliente425737" value="6" readonly="YES">
                                <input type="hidden" name="idempresa425737" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425737&amp;SS=&amp;rand=70213">6</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425737&amp;SS=1&amp;rand=38518">Edgar
                                    David</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 231.22</td>
                            <td align="center" valign="top">0.249</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425737&amp;SS=1&amp;rand=24224">
                                    5</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6&amp;paquete=425737&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=58282">Welcome
                                    Column</a>
                            </td>
                            <td align="left" valign="top">500086513013
                                &nbsp; </td>

                            <td align="center" valign="top">23425737 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425737&amp;SS=1&amp;rand=22560"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6&amp;paquete=425737&amp;PRINT=Y&amp;rand=82178"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                106 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=29768"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425736&amp;SS=1&amp;rand=69627"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425736" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425736" value="9">
                                <input type="hidden" name="cliente425736" value="1156" readonly="YES">
                                <input type="hidden" name="idempresa425736" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425736&amp;SS=&amp;rand=79271">1156</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425736&amp;SS=1&amp;rand=64916">Yuniz
                                    De La Cruz</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 0.66</td>
                            <td align="center" valign="top">0.003</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425736&amp;SS=1&amp;rand=73589">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1156&amp;paquete=425736&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=22704">Top</a>
                            </td>
                            <td align="left" valign="top">SF1452876135152
                                &nbsp; </td>

                            <td align="center" valign="top">23425736 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425736&amp;SS=1&amp;rand=72334"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1156&amp;paquete=425736&amp;PRINT=Y&amp;rand=42060"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                107 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=60909"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425735&amp;SS=1&amp;rand=56694"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425735" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425735" value="9">
                                <input type="hidden" name="cliente425735" value="1818" readonly="YES">
                                <input type="hidden" name="idempresa425735" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425735&amp;SS=&amp;rand=44898">1818</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425735&amp;SS=1&amp;rand=54267">Jennifer
                                    Luciano</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 2.64</td>
                            <td align="center" valign="top">0.012</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425735&amp;SS=1&amp;rand=41999">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1818&amp;paquete=425735&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=18821">Clothes</a>
                            </td>
                            <td align="left" valign="top">78662333300553
                                &nbsp; </td>

                            <td align="center" valign="top">23425735 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425735&amp;SS=1&amp;rand=99337"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1818&amp;paquete=425735&amp;PRINT=Y&amp;rand=65311"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                108 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=88751"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425715&amp;SS=1&amp;rand=38826"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425715" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425715" value="9">
                                <input type="hidden" name="cliente425715" value="6" readonly="YES">
                                <input type="hidden" name="idempresa425715" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425715&amp;SS=&amp;rand=41101">6</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425715&amp;SS=1&amp;rand=77060">Edgar
                                    David</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                06/03/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425715&amp;SS=1&amp;rand=76044">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6&amp;paquete=425715&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=93370">Acc
                                    Personal</a>
                            </td>
                            <td align="left" valign="top">TBA305627484856
                                &nbsp; </td>

                            <td align="center" valign="top">23425715 </td>
                            <td align="center" valign="top">
                                60 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425715&amp;SS=1&amp;rand=56546"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6&amp;paquete=425715&amp;PRINT=Y&amp;rand=18282"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                109 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=38307"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425710&amp;SS=1&amp;rand=26759"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425710" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425710" value="9">
                                <input type="hidden" name="cliente425710" value="4645" readonly="YES">
                                <input type="hidden" name="idempresa425710" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425710&amp;SS=&amp;rand=46801">4645</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425710&amp;SS=1&amp;rand=52533">Steven
                                    Reynoso Llamas</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 88.88</td>
                            <td align="center" valign="top">0.188</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425710&amp;SS=1&amp;rand=75042">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4645&amp;paquete=425710&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=59363">Grinder</a>
                            </td>
                            <td align="left" valign="top">YT7083293796500
                                &nbsp; </td>

                            <td align="center" valign="top">23425710 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425710&amp;SS=1&amp;rand=34712"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4645&amp;paquete=425710&amp;PRINT=Y&amp;rand=94812"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                110 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=28990"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425708&amp;SS=1&amp;rand=13984"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425708" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425708" value="9">
                                <input type="hidden" name="cliente425708" value="9257" readonly="YES">
                                <input type="hidden" name="idempresa425708" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425708&amp;SS=&amp;rand=59728">9257</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425708&amp;SS=1&amp;rand=92581">HÃÂ©ctor
                                    Javier Medina De JesÃÂºs</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 143.88</td>
                            <td align="center" valign="top">0.752</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425708&amp;SS=1&amp;rand=26689">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9257&amp;paquete=425708&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=32062">Chair</a>
                            </td>
                            <td align="left" valign="top">300536904819
                                &nbsp; </td>

                            <td align="center" valign="top">23425708 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425708&amp;SS=1&amp;rand=34641"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9257&amp;paquete=425708&amp;PRINT=Y&amp;rand=77600"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                111 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=78758"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425705&amp;SS=1&amp;rand=69540"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425705" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425705" value="9">
                                <input type="hidden" name="cliente425705" value="9392" readonly="YES">
                                <input type="hidden" name="idempresa425705" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425705&amp;SS=&amp;rand=31868">9392</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425705&amp;SS=1&amp;rand=20757">Gina
                                    Bencosme</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 83.38</td>
                            <td align="center" valign="top">0.237</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425705&amp;SS=1&amp;rand=78362">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9392&amp;paquete=425705&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=31205">Package</a>
                            </td>
                            <td align="left" valign="top">YT7081355064894
                                &nbsp; </td>

                            <td align="center" valign="top">23425705 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425705&amp;SS=1&amp;rand=76070"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9392&amp;paquete=425705&amp;PRINT=Y&amp;rand=67113"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                112 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=60032"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425704&amp;SS=1&amp;rand=17171"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425704" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425704" value="9">
                                <input type="hidden" name="cliente425704" value="9203" readonly="YES">
                                <input type="hidden" name="idempresa425704" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425704&amp;SS=&amp;rand=44174">9203</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425704&amp;SS=1&amp;rand=36076">Joan
                                    Mercedes</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 8.8</td>
                            <td align="center" valign="top">0.039</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425704&amp;SS=1&amp;rand=10542">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9203&amp;paquete=425704&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=90721">Pu
                                    Bag</a>
                            </td>
                            <td align="left" valign="top">JDVC15196672262
                                &nbsp; </td>

                            <td align="center" valign="top">23425704 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425704&amp;SS=1&amp;rand=44359"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9203&amp;paquete=425704&amp;PRINT=Y&amp;rand=38850"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                113 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=17481"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425694&amp;SS=1&amp;rand=81162"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425694" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425694" value="9">
                                <input type="hidden" name="cliente425694" value="7314" readonly="YES">
                                <input type="hidden" name="idempresa425694" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425694&amp;SS=&amp;rand=81385">7314</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425694&amp;SS=1&amp;rand=82524">Jose
                                    Miguel CalderÃÂÃÂÃÂÃÂ³n</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 191.4</td>
                            <td align="center" valign="top">6.45</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425694&amp;SS=1&amp;rand=40525">
                                    10</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7314&amp;paquete=425694&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=16097">Gantry+front
                                    Bar Inner Bone</a>
                            </td>
                            <td align="left" valign="top">NOTR202303040327555
                                &nbsp; </td>

                            <td align="center" valign="top">23425694 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425694&amp;SS=1&amp;rand=77337"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7314&amp;paquete=425694&amp;PRINT=Y&amp;rand=59516"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                114 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=20083"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425693&amp;SS=1&amp;rand=37065"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425693" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425693" value="9">
                                <input type="hidden" name="cliente425693" value="8687" readonly="YES">
                                <input type="hidden" name="idempresa425693" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425693&amp;SS=&amp;rand=52097">8687</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425693&amp;SS=1&amp;rand=36773">Fraylin
                                    Alexis Tejada Vargas</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 23.54</td>
                            <td align="center" valign="top">0.057</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425693&amp;SS=1&amp;rand=59128">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8687&amp;paquete=425693&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=76740">Parts</a>
                            </td>
                            <td align="left" valign="top">518996953556
                                &nbsp; </td>

                            <td align="center" valign="top">23425693 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425693&amp;SS=1&amp;rand=14373"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8687&amp;paquete=425693&amp;PRINT=Y&amp;rand=37887"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                115 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=46281"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425410&amp;SS=1&amp;rand=36243"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425410" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425410" value="9">
                                <input type="hidden" name="cliente425410" value="9371" readonly="YES">
                                <input type="hidden" name="idempresa425410" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425410&amp;SS=&amp;rand=48645">9371</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425410&amp;SS=1&amp;rand=24644">Jiuber
                                    Polanco</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 0.66</td>
                            <td align="center" valign="top">0.002</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425410&amp;SS=1&amp;rand=57449">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9371&amp;paquete=425410&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=24716">Lens
                                    Hood</a>
                            </td>
                            <td align="left" valign="top">73197990858473
                                &nbsp; </td>

                            <td align="center" valign="top">23425410 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425410&amp;SS=1&amp;rand=81759"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9371&amp;paquete=425410&amp;PRINT=Y&amp;rand=17481"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                116 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=31889"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425409&amp;SS=1&amp;rand=25933"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425409" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425409" value="9">
                                <input type="hidden" name="cliente425409" value="7178" readonly="YES">
                                <input type="hidden" name="idempresa425409" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425409&amp;SS=&amp;rand=43559">7178</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425409&amp;SS=1&amp;rand=32432">Juan
                                    JosÃÂÃÂ© UreÃÂÃÂ±a RodrÃÂÃÂ­guez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 0.66</td>
                            <td align="center" valign="top">0.006</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425409&amp;SS=1&amp;rand=16655">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7178&amp;paquete=425409&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=77920">Memory
                                    Card</a>
                            </td>
                            <td align="left" valign="top">SF1673625164610
                                &nbsp; </td>

                            <td align="center" valign="top">23425409 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425409&amp;SS=1&amp;rand=61283"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7178&amp;paquete=425409&amp;PRINT=Y&amp;rand=24137"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                117 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=59083"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425408&amp;SS=1&amp;rand=42669"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425408" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425408" value="9">
                                <input type="hidden" name="cliente425408" value="3090" readonly="YES">
                                <input type="hidden" name="idempresa425408" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425408&amp;SS=&amp;rand=96663">3090</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425408&amp;SS=1&amp;rand=89609">Ali
                                    Jose Cabrera Diaz</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 2.42</td>
                            <td align="center" valign="top">0.012</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425408&amp;SS=1&amp;rand=48768">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3090&amp;paquete=425408&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=74000">Sweeping
                                    Robot</a>
                            </td>
                            <td align="left" valign="top">74100290918666
                                &nbsp; </td>

                            <td align="center" valign="top">23425408 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425408&amp;SS=1&amp;rand=49126"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3090&amp;paquete=425408&amp;PRINT=Y&amp;rand=58852"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                118 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=11065"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425407&amp;SS=1&amp;rand=91225"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425407" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425407" value="9">
                                <input type="hidden" name="cliente425407" value="9371" readonly="YES">
                                <input type="hidden" name="idempresa425407" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425407&amp;SS=&amp;rand=85627">9371</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425407&amp;SS=1&amp;rand=60195">Jiuber
                                    Polanco</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 0.22</td>
                            <td align="center" valign="top">0.002</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425407&amp;SS=1&amp;rand=67966">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9371&amp;paquete=425407&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=90002">Electric
                                    Shear Accessories</a>
                            </td>
                            <td align="left" valign="top">312200733030747
                                &nbsp; </td>

                            <td align="center" valign="top">23425407 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425407&amp;SS=1&amp;rand=88084"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9371&amp;paquete=425407&amp;PRINT=Y&amp;rand=14247"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                119 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=26245"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425405&amp;SS=1&amp;rand=36730"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425405" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425405" value="9">
                                <input type="hidden" name="cliente425405" value="3473" readonly="YES">
                                <input type="hidden" name="idempresa425405" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425405&amp;SS=&amp;rand=28893">3473</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425405&amp;SS=1&amp;rand=73695">Daniel
                                    Enrique Contreras UreÃÂ±a</a></td>
                            <td align="left" valign="top">SAN FRANCISCO DE MACORIS</td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 49.06</td>
                            <td align="center" valign="top">0.144</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425405&amp;SS=1&amp;rand=51447">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3473&amp;paquete=425405&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=10652">Lawn
                                    Mower</a>
                            </td>
                            <td align="left" valign="top">SF1674659815660
                                &nbsp; </td>

                            <td align="center" valign="top">23425405 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425405&amp;SS=1&amp;rand=81178"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3473&amp;paquete=425405&amp;PRINT=Y&amp;rand=73337"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                120 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=26587"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425404&amp;SS=1&amp;rand=24738"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425404" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425404" value="9">
                                <input type="hidden" name="cliente425404" value="3114" readonly="YES">
                                <input type="hidden" name="idempresa425404" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425404&amp;SS=&amp;rand=95770">3114</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425404&amp;SS=1&amp;rand=33244">Jeremy
                                    Hernandez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 24.64</td>
                            <td align="center" valign="top">0.02</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425404&amp;SS=1&amp;rand=92659">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3114&amp;paquete=425404&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=57054">Tap</a>
                            </td>
                            <td align="left" valign="top">80909697503
                                &nbsp; </td>

                            <td align="center" valign="top">23425404 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425404&amp;SS=1&amp;rand=47382"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3114&amp;paquete=425404&amp;PRINT=Y&amp;rand=51743"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                121 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=89725"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425403&amp;SS=1&amp;rand=44046"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425403" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425403" value="9">
                                <input type="hidden" name="cliente425403" value="3063" readonly="YES">
                                <input type="hidden" name="idempresa425403" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425403&amp;SS=&amp;rand=41353">3063</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425403&amp;SS=1&amp;rand=38493">Brenda
                                    Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 30.8</td>
                            <td align="center" valign="top">0.02</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425403&amp;SS=1&amp;rand=18047">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3063&amp;paquete=425403&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=80481">Tap+milling
                                    Cutter</a>
                            </td>
                            <td align="left" valign="top">80909697503
                                &nbsp; </td>

                            <td align="center" valign="top">23425403 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425403&amp;SS=1&amp;rand=87347"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3063&amp;paquete=425403&amp;PRINT=Y&amp;rand=19114"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                122 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=71706"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425402&amp;SS=1&amp;rand=72974"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425402" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425402" value="9">
                                <input type="hidden" name="cliente425402" value="1" readonly="YES">
                                <input type="hidden" name="idempresa425402" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425402&amp;SS=&amp;rand=69310">1</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425402&amp;SS=1&amp;rand=39673">Cuenta
                                    General</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 34.98</td>
                            <td align="center" valign="top">0.068</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425402&amp;SS=1&amp;rand=62976">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425402&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=57394">Electric
                                    Clippers</a>
                            </td>
                            <td align="left" valign="top">73198006686649
                                &nbsp; </td>

                            <td align="center" valign="top">23425402 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425402&amp;SS=1&amp;rand=43922"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425402&amp;PRINT=Y&amp;rand=79223"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                123 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=84126"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425400&amp;SS=1&amp;rand=62816"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425400" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425400" value="9">
                                <input type="hidden" name="cliente425400" value="165" readonly="YES">
                                <input type="hidden" name="idempresa425400" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425400&amp;SS=&amp;rand=52918">165</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425400&amp;SS=1&amp;rand=35573">Cesar
                                    Hilario</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 65.56</td>
                            <td align="center" valign="top">0.21</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425400&amp;SS=1&amp;rand=63470">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=165&amp;paquete=425400&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=34097">Shoes</a>
                            </td>
                            <td align="left" valign="top">773209469968426
                                &nbsp; </td>

                            <td align="center" valign="top">23425400 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425400&amp;SS=1&amp;rand=98911"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=165&amp;paquete=425400&amp;PRINT=Y&amp;rand=80059"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                124 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=48837"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425399&amp;SS=1&amp;rand=94682"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425399" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425399" value="9">
                                <input type="hidden" name="cliente425399" value="3998" readonly="YES">
                                <input type="hidden" name="idempresa425399" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425399&amp;SS=&amp;rand=13303">3998</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425399&amp;SS=1&amp;rand=41496">Roberto
                                    Medina</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 30.36</td>
                            <td align="center" valign="top">0.118</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425399&amp;SS=1&amp;rand=51737">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3998&amp;paquete=425399&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=50687">Water
                                    Tank</a>
                            </td>
                            <td align="left" valign="top">78661946782217
                                &nbsp; </td>

                            <td align="center" valign="top">23425399 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425399&amp;SS=1&amp;rand=83241"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3998&amp;paquete=425399&amp;PRINT=Y&amp;rand=41462"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                125 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=84734"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425395&amp;SS=1&amp;rand=24594"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425395" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425395" value="9">
                                <input type="hidden" name="cliente425395" value="2366" readonly="YES">
                                <input type="hidden" name="idempresa425395" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425395&amp;SS=&amp;rand=69956">2366</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425395&amp;SS=1&amp;rand=92782">Yesenia
                                    LucÃÂ­a Mojica RodrÃÂ­guez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 186.56</td>
                            <td align="center" valign="top">0.656</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425395&amp;SS=1&amp;rand=95076">
                                    4</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2366&amp;paquete=425395&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=57303">Meat
                                    Grinder</a>
                            </td>
                            <td align="left" valign="top">106476468616
                                &nbsp; </td>

                            <td align="center" valign="top">23425395 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425395&amp;SS=1&amp;rand=11896"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2366&amp;paquete=425395&amp;PRINT=Y&amp;rand=66783"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                126 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=30278"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425394&amp;SS=1&amp;rand=71208"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425394" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425394" value="9">
                                <input type="hidden" name="cliente425394" value="1965" readonly="YES">
                                <input type="hidden" name="idempresa425394" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425394&amp;SS=&amp;rand=96457">1965</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425394&amp;SS=1&amp;rand=83255">Julio
                                    Caraballo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> auto parts</td>
                            <td align="center" valign="top">0.002</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425394&amp;SS=1&amp;rand=28603">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1965&amp;paquete=425394&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=40380">0.66</a>
                            </td>
                            <td align="left" valign="top">78662315281715
                                &nbsp; </td>

                            <td align="center" valign="top">23425394 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425394&amp;SS=1&amp;rand=62479"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1965&amp;paquete=425394&amp;PRINT=Y&amp;rand=12729"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                127 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=93197"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425375&amp;SS=1&amp;rand=15397"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425375" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425375" value="9">
                                <input type="hidden" name="cliente425375" value="828" readonly="YES">
                                <input type="hidden" name="idempresa425375" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425375&amp;SS=&amp;rand=38304">828</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425375&amp;SS=1&amp;rand=56668">Luis
                                    Miguel Vargas NÃÂÃÂÃÂÃÂºÃÂÃÂÃÂÃÂ±ez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                03/03/2023</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425375&amp;SS=1&amp;rand=39496">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=828&amp;paquete=425375&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=37216">Bocina</a>
                            </td>
                            <td align="left" valign="top">TBA305592015716
                                &nbsp; </td>

                            <td align="center" valign="top">23425375 </td>
                            <td align="center" valign="top">
                                60 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425375&amp;SS=1&amp;rand=36727"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=828&amp;paquete=425375&amp;PRINT=Y&amp;rand=78334"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                128 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=31898"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425369&amp;SS=1&amp;rand=40031"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425369" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425369" value="9">
                                <input type="hidden" name="cliente425369" value="4367" readonly="YES">
                                <input type="hidden" name="idempresa425369" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425369&amp;SS=&amp;rand=19831">4367</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425369&amp;SS=1&amp;rand=73636">Kelvin
                                    Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 11.66</td>
                            <td align="center" valign="top">0.026</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425369&amp;SS=1&amp;rand=80720">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4367&amp;paquete=425369&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=93073">Sphygmomanometer</a>
                            </td>
                            <td align="left" valign="top">DPK211578300123
                                &nbsp; </td>

                            <td align="center" valign="top">23425369 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425369&amp;SS=1&amp;rand=15098"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4367&amp;paquete=425369&amp;PRINT=Y&amp;rand=65454"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                129 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=17667"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425368&amp;SS=1&amp;rand=75056"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425368" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425368" value="9">
                                <input type="hidden" name="cliente425368" value="6435" readonly="YES">
                                <input type="hidden" name="idempresa425368" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425368&amp;SS=&amp;rand=58237">6435</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425368&amp;SS=1&amp;rand=12744">Guillermo
                                    Rodriguez Cepeda</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 45.54</td>
                            <td align="center" valign="top">0.378</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425368&amp;SS=1&amp;rand=32360">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6435&amp;paquete=425368&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=60135">Car
                                    Tail Lamp</a>
                            </td>
                            <td align="left" valign="top">106478374059
                                &nbsp; </td>

                            <td align="center" valign="top">23425368 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425368&amp;SS=1&amp;rand=69528"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6435&amp;paquete=425368&amp;PRINT=Y&amp;rand=52639"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                130 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=31344"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425366&amp;SS=1&amp;rand=65985"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425366" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425366" value="9">
                                <input type="hidden" name="cliente425366" value="1206" readonly="YES">
                                <input type="hidden" name="idempresa425366" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425366&amp;SS=&amp;rand=35895">1206</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425366&amp;SS=1&amp;rand=49948">Modesto
                                    Castillo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 27.72</td>
                            <td align="center" valign="top">0.146</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425366&amp;SS=1&amp;rand=96366">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425366&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=88375">Men`s
                                    Sports Shoes</a>
                            </td>
                            <td align="left" valign="top">188053404221
                                &nbsp; </td>

                            <td align="center" valign="top">23425366 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425366&amp;SS=1&amp;rand=52679"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425366&amp;PRINT=Y&amp;rand=89564"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                131 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=93774"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425365&amp;SS=1&amp;rand=80984"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425365" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425365" value="9">
                                <input type="hidden" name="cliente425365" value="9324" readonly="YES">
                                <input type="hidden" name="idempresa425365" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425365&amp;SS=&amp;rand=46233">9324</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425365&amp;SS=1&amp;rand=33271">Katherine
                                    Cristina Castro Sarmiento</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 30.36</td>
                            <td align="center" valign="top">0.249</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425365&amp;SS=1&amp;rand=18200">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9324&amp;paquete=425365&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=72961">Toys</a>
                            </td>
                            <td align="left" valign="top">800012919719
                                &nbsp; </td>

                            <td align="center" valign="top">23425365 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425365&amp;SS=1&amp;rand=11605"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9324&amp;paquete=425365&amp;PRINT=Y&amp;rand=40100"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                132 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=12993"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425364&amp;SS=1&amp;rand=21438"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425364" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425364" value="9">
                                <input type="hidden" name="cliente425364" value="2987" readonly="YES">
                                <input type="hidden" name="idempresa425364" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425364&amp;SS=&amp;rand=13736">2987</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425364&amp;SS=1&amp;rand=83714">Wilson
                                    Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 8.8</td>
                            <td align="center" valign="top">0.037</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425364&amp;SS=1&amp;rand=14511">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2987&amp;paquete=425364&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=18836">Acoustic
                                    Diaphragm</a>
                            </td>
                            <td align="left" valign="top">312200733236791
                                &nbsp; </td>

                            <td align="center" valign="top">23425364 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425364&amp;SS=1&amp;rand=49169"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2987&amp;paquete=425364&amp;PRINT=Y&amp;rand=22180"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                133 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=83893"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425362&amp;SS=1&amp;rand=97408"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425362" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425362" value="9">
                                <input type="hidden" name="cliente425362" value="1454" readonly="YES">
                                <input type="hidden" name="idempresa425362" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425362&amp;SS=&amp;rand=24925">1454</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425362&amp;SS=1&amp;rand=16253">Marichel
                                    Altagracia PeÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂ±a Hernandez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 27.94</td>
                            <td align="center" valign="top">0.053</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425362&amp;SS=1&amp;rand=57543">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1454&amp;paquete=425362&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=84455">Leather
                                    Passport Case</a>
                            </td>
                            <td align="left" valign="top">78661968673402
                                &nbsp; </td>

                            <td align="center" valign="top">23425362 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425362&amp;SS=1&amp;rand=58894"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1454&amp;paquete=425362&amp;PRINT=Y&amp;rand=78889"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                134 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=50441"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425361&amp;SS=1&amp;rand=84790"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425361" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425361" value="9">
                                <input type="hidden" name="cliente425361" value="1206" readonly="YES">
                                <input type="hidden" name="idempresa425361" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425361&amp;SS=&amp;rand=28837">1206</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425361&amp;SS=1&amp;rand=46808">Modesto
                                    Castillo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 9.24</td>
                            <td align="center" valign="top">0.032</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425361&amp;SS=1&amp;rand=73166">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425361&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=71518">Backpack</a>
                            </td>
                            <td align="left" valign="top">777130579456239
                                &nbsp; </td>

                            <td align="center" valign="top">23425361 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425361&amp;SS=1&amp;rand=36372"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425361&amp;PRINT=Y&amp;rand=66940"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                135 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=52503"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425360&amp;SS=1&amp;rand=72606"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425360" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425360" value="9">
                                <input type="hidden" name="cliente425360" value="7877" readonly="YES">
                                <input type="hidden" name="idempresa425360" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425360&amp;SS=&amp;rand=90212">7877</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425360&amp;SS=1&amp;rand=60704">Maria
                                    Magdalena Ramos Franco</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 35.42</td>
                            <td align="center" valign="top">0.139</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425360&amp;SS=1&amp;rand=45568">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7877&amp;paquete=425360&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=91819">Car
                                    Seat Cover</a>
                            </td>
                            <td align="left" valign="top">SF1683150717922
                                &nbsp; </td>

                            <td align="center" valign="top">23425360 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425360&amp;SS=1&amp;rand=90805"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7877&amp;paquete=425360&amp;PRINT=Y&amp;rand=48563"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                136 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=13257"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425358&amp;SS=1&amp;rand=94543"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425358" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425358" value="9">
                                <input type="hidden" name="cliente425358" value="4367" readonly="YES">
                                <input type="hidden" name="idempresa425358" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425358&amp;SS=&amp;rand=32278">4367</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425358&amp;SS=1&amp;rand=17770">Kelvin
                                    Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 45.54</td>
                            <td align="center" valign="top">0.337</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425358&amp;SS=1&amp;rand=13379">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4367&amp;paquete=425358&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=71448">Foot
                                    Bath</a>
                            </td>
                            <td align="left" valign="top">80910426881
                                &nbsp; </td>

                            <td align="center" valign="top">23425358 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425358&amp;SS=1&amp;rand=29952"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4367&amp;paquete=425358&amp;PRINT=Y&amp;rand=87274"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                137 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=68857"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425357&amp;SS=1&amp;rand=44879"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425357" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425357" value="9">
                                <input type="hidden" name="cliente425357" value="1" readonly="YES">
                                <input type="hidden" name="idempresa425357" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425357&amp;SS=&amp;rand=93528">1</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425357&amp;SS=1&amp;rand=26401">Cuenta
                                    General</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 1.32</td>
                            <td align="center" valign="top">0.003</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425357&amp;SS=1&amp;rand=29334">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425357&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=52423">Solid
                                    State Drive</a>
                            </td>
                            <td align="left" valign="top">SF1458646155124
                                &nbsp; </td>

                            <td align="center" valign="top">23425357 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425357&amp;SS=1&amp;rand=95291"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=425357&amp;PRINT=Y&amp;rand=69777"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                138 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=37214"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425356&amp;SS=1&amp;rand=24129"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425356" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425356" value="9">
                                <input type="hidden" name="cliente425356" value="9350" readonly="YES">
                                <input type="hidden" name="idempresa425356" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425356&amp;SS=&amp;rand=16585">9350</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425356&amp;SS=1&amp;rand=10380">Eliezer
                                    Javier Quezada</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                02/03/2023</td>
                            <td align="center" valign="top"> 0.66</td>
                            <td align="center" valign="top">0.004</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425356&amp;SS=1&amp;rand=85648">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9350&amp;paquete=425356&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=42958">Tie
                                    Suit</a>
                            </td>
                            <td align="left" valign="top">SF1501601550923
                                &nbsp; </td>

                            <td align="center" valign="top">23425356 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425356&amp;SS=1&amp;rand=67322"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9350&amp;paquete=425356&amp;PRINT=Y&amp;rand=38151"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                139 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=15565"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425333&amp;SS=1&amp;rand=57534"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425333" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425333" value="9">
                                <input type="hidden" name="cliente425333" value="7179" readonly="YES">
                                <input type="hidden" name="idempresa425333" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425333&amp;SS=&amp;rand=88857">7179</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425333&amp;SS=1&amp;rand=51135">Cesar
                                    Yunior Roberto Mercedes</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 133.32</td>
                            <td align="center" valign="top">0.128</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425333&amp;SS=1&amp;rand=49354">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7179&amp;paquete=425333&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=79663">Sugarcane
                                    Machine</a>
                            </td>
                            <td align="left" valign="top">500078815178
                                &nbsp; </td>

                            <td align="center" valign="top">23425333 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425333&amp;SS=1&amp;rand=89699"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7179&amp;paquete=425333&amp;PRINT=Y&amp;rand=52613"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                140 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=74206"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425332&amp;SS=1&amp;rand=21977"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425332" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425332" value="9">
                                <input type="hidden" name="cliente425332" value="2115" readonly="YES">
                                <input type="hidden" name="idempresa425332" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425332&amp;SS=&amp;rand=60384">2115</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425332&amp;SS=1&amp;rand=77587">Joan
                                    David Medina Rivas</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 25.3</td>
                            <td align="center" valign="top">0.019</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425332&amp;SS=1&amp;rand=83427">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2115&amp;paquete=425332&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=80338">Stainless
                                    Steel Accessories</a>
                            </td>
                            <td align="left" valign="top">500060435876
                                &nbsp; </td>

                            <td align="center" valign="top">23425332 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425332&amp;SS=1&amp;rand=64861"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2115&amp;paquete=425332&amp;PRINT=Y&amp;rand=52284"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                141 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=25218"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425331&amp;SS=1&amp;rand=58390"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425331" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425331" value="9">
                                <input type="hidden" name="cliente425331" value="7178" readonly="YES">
                                <input type="hidden" name="idempresa425331" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425331&amp;SS=&amp;rand=68686">7178</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425331&amp;SS=1&amp;rand=44553">Juan
                                    JosÃÂÃÂ© UreÃÂÃÂ±a RodrÃÂÃÂ­guez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 5.94</td>
                            <td align="center" valign="top">0.023</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425331&amp;SS=1&amp;rand=10813">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7178&amp;paquete=425331&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=63978">Camera
                                    Bulb</a>
                            </td>
                            <td align="left" valign="top">312200353577004
                                &nbsp; </td>

                            <td align="center" valign="top">23425331 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425331&amp;SS=1&amp;rand=14330"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7178&amp;paquete=425331&amp;PRINT=Y&amp;rand=38028"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                142 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=78108"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425328&amp;SS=1&amp;rand=20916"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425328" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425328" value="9">
                                <input type="hidden" name="cliente425328" value="6586" readonly="YES">
                                <input type="hidden" name="idempresa425328" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425328&amp;SS=&amp;rand=38410">6586</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425328&amp;SS=1&amp;rand=63756">Lenin
                                    Almonte</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 937.2</td>
                            <td align="center" valign="top">0.835</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425328&amp;SS=1&amp;rand=53876">
                                    3</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6586&amp;paquete=425328&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=95733">Delivery
                                    Cylinder</a>
                            </td>
                            <td align="left" valign="top">11141126
                                &nbsp; </td>

                            <td align="center" valign="top">23425328 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425328&amp;SS=1&amp;rand=91909"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6586&amp;paquete=425328&amp;PRINT=Y&amp;rand=59443"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                143 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=53268"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425327&amp;SS=1&amp;rand=80766"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425327" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425327" value="9">
                                <input type="hidden" name="cliente425327" value="1206" readonly="YES">
                                <input type="hidden" name="idempresa425327" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425327&amp;SS=&amp;rand=10578">1206</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425327&amp;SS=1&amp;rand=92623">Modesto
                                    Castillo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 45.1</td>
                            <td align="center" valign="top">0.094</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425327&amp;SS=1&amp;rand=60429">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425327&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=90279">Mouse
                                    Pad</a>
                            </td>
                            <td align="left" valign="top">773208847595932
                                &nbsp; </td>

                            <td align="center" valign="top">23425327 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425327&amp;SS=1&amp;rand=45236"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1206&amp;paquete=425327&amp;PRINT=Y&amp;rand=34635"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                144 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=12256"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425326&amp;SS=1&amp;rand=95622"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425326" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425326" value="9">
                                <input type="hidden" name="cliente425326" value="1454" readonly="YES">
                                <input type="hidden" name="idempresa425326" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425326&amp;SS=&amp;rand=12223">1454</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425326&amp;SS=1&amp;rand=85684">Marichel
                                    Altagracia PeÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂ±a Hernandez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 3.3</td>
                            <td align="center" valign="top">0.016</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425326&amp;SS=1&amp;rand=75960">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1454&amp;paquete=425326&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=67085">Bamboo
                                    Cup+bamboo Shell Pen</a>
                            </td>
                            <td align="left" valign="top">SF1457906009126
                                &nbsp; </td>

                            <td align="center" valign="top">23425326 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425326&amp;SS=1&amp;rand=37969"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1454&amp;paquete=425326&amp;PRINT=Y&amp;rand=91179"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                145 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=25476"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425324&amp;SS=1&amp;rand=96657"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425324" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425324" value="9">
                                <input type="hidden" name="cliente425324" value="2217" readonly="YES">
                                <input type="hidden" name="idempresa425324" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425324&amp;SS=&amp;rand=35733">2217</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425324&amp;SS=1&amp;rand=26290">Martin
                                    Salvador Martinez Puello</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 28.82</td>
                            <td align="center" valign="top">0.029</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425324&amp;SS=1&amp;rand=60635">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2217&amp;paquete=425324&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=40065">Lifting
                                    Jack</a>
                            </td>
                            <td align="left" valign="top">YT7076630227346
                                &nbsp; </td>

                            <td align="center" valign="top">23425324 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425324&amp;SS=1&amp;rand=54320"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2217&amp;paquete=425324&amp;PRINT=Y&amp;rand=38744"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                146 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=50983"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425323&amp;SS=1&amp;rand=82731"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425323" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425323" value="9">
                                <input type="hidden" name="cliente425323" value="1818" readonly="YES">
                                <input type="hidden" name="idempresa425323" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425323&amp;SS=&amp;rand=92501">1818</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425323&amp;SS=1&amp;rand=94861">Jennifer
                                    Luciano</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 4.84</td>
                            <td align="center" valign="top">0.019</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425323&amp;SS=1&amp;rand=78464">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1818&amp;paquete=425323&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=84411">Skirt</a>
                            </td>
                            <td align="left" valign="top">78661243581854
                                &nbsp; </td>

                            <td align="center" valign="top">23425323 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425323&amp;SS=1&amp;rand=54304"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1818&amp;paquete=425323&amp;PRINT=Y&amp;rand=31732"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                147 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=65177"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425322&amp;SS=1&amp;rand=54884"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425322" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425322" value="9">
                                <input type="hidden" name="cliente425322" value="8596" readonly="YES">
                                <input type="hidden" name="idempresa425322" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425322&amp;SS=&amp;rand=24356">8596</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425322&amp;SS=1&amp;rand=25606">Selestino
                                    Mariano</a></td>
                            <td align="left" valign="top">PLAN COURRIER</td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 41.8</td>
                            <td align="center" valign="top">0.046</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425322&amp;SS=1&amp;rand=45163">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8596&amp;paquete=425322&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=59593">Double
                                    Sided Tape</a>
                            </td>
                            <td align="left" valign="top">JT3025917858820
                                &nbsp; </td>

                            <td align="center" valign="top">23425322 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425322&amp;SS=1&amp;rand=50243"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8596&amp;paquete=425322&amp;PRINT=Y&amp;rand=47421"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                148 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=55215"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425318&amp;SS=1&amp;rand=52467"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425318" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425318" value="9">
                                <input type="hidden" name="cliente425318" value="8876" readonly="YES">
                                <input type="hidden" name="idempresa425318" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425318&amp;SS=&amp;rand=33105">8876</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425318&amp;SS=1&amp;rand=31176">Iraida
                                    Santos GuzmÃÂ¡n</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 46.2</td>
                            <td align="center" valign="top">0.108</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425318&amp;SS=1&amp;rand=19553">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8876&amp;paquete=425318&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=61076">Baking
                                    Cup Machine</a>
                            </td>
                            <td align="left" valign="top">YT7076282566539
                                &nbsp; </td>

                            <td align="center" valign="top">23425318 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425318&amp;SS=1&amp;rand=22356"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8876&amp;paquete=425318&amp;PRINT=Y&amp;rand=35030"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                149 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=57733"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425317&amp;SS=1&amp;rand=48091"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425317" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425317" value="9">
                                <input type="hidden" name="cliente425317" value="2987" readonly="YES">
                                <input type="hidden" name="idempresa425317" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425317&amp;SS=&amp;rand=51322">2987</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425317&amp;SS=1&amp;rand=18369">Wilson
                                    Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 1.54</td>
                            <td align="center" valign="top">0.005</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425317&amp;SS=1&amp;rand=78158">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2987&amp;paquete=425317&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=95643">Circuit
                                    Board</a>
                            </td>
                            <td align="left" valign="top">74100206577723
                                &nbsp; </td>

                            <td align="center" valign="top">23425317 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425317&amp;SS=1&amp;rand=47114"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2987&amp;paquete=425317&amp;PRINT=Y&amp;rand=29142"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                150 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=78375"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425315&amp;SS=1&amp;rand=39616"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425315" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425315" value="9">
                                <input type="hidden" name="cliente425315" value="5959" readonly="YES">
                                <input type="hidden" name="idempresa425315" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425315&amp;SS=&amp;rand=24003">5959</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425315&amp;SS=1&amp;rand=56839">Agustina
                                    Mercedes Gomez Sanchez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 56.76</td>
                            <td align="center" valign="top">0.234</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425315&amp;SS=1&amp;rand=24027">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5959&amp;paquete=425315&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=68309">Laser
                                    Engraving Machine</a>
                            </td>
                            <td align="left" valign="top">202207306624
                                &nbsp; </td>

                            <td align="center" valign="top">23425315 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425315&amp;SS=1&amp;rand=78573"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5959&amp;paquete=425315&amp;PRINT=Y&amp;rand=79206"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                151 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=23194"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425313&amp;SS=1&amp;rand=92930"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425313" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425313" value="9">
                                <input type="hidden" name="cliente425313" value="9401" readonly="YES">
                                <input type="hidden" name="idempresa425313" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425313&amp;SS=&amp;rand=94813">9401</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425313&amp;SS=1&amp;rand=58358">Jeison
                                    Adames Lopez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                01/03/2023</td>
                            <td align="center" valign="top"> 1.1</td>
                            <td align="center" valign="top">0.005</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425313&amp;SS=1&amp;rand=52523">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9401&amp;paquete=425313&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=45057">Router</a>
                            </td>
                            <td align="left" valign="top">SF1502776633211
                                &nbsp; </td>

                            <td align="center" valign="top">23425313 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425313&amp;SS=1&amp;rand=95780"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9401&amp;paquete=425313&amp;PRINT=Y&amp;rand=97740"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                152 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=87526"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425302&amp;SS=1&amp;rand=28886"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425302" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425302" value="9">
                                <input type="hidden" name="cliente425302" value="7580" readonly="YES">
                                <input type="hidden" name="idempresa425302" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425302&amp;SS=&amp;rand=28917">7580</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425302&amp;SS=1&amp;rand=97080">Victor
                                    Tolentino</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                28/02/2023</td>
                            <td align="center" valign="top"> 7.26</td>
                            <td align="center" valign="top">0.025</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425302&amp;SS=1&amp;rand=79964">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7580&amp;paquete=425302&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=41275">Fishing
                                    Net</a>
                            </td>
                            <td align="left" valign="top">YT7070540948844
                                &nbsp; </td>

                            <td align="center" valign="top">23425302 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425302&amp;SS=1&amp;rand=32110"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7580&amp;paquete=425302&amp;PRINT=Y&amp;rand=37698"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                153 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=79367"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425301&amp;SS=1&amp;rand=73433"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425301" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425301" value="9">
                                <input type="hidden" name="cliente425301" value="5029" readonly="YES">
                                <input type="hidden" name="idempresa425301" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425301&amp;SS=&amp;rand=46069">5029</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425301&amp;SS=1&amp;rand=57526">Wellingthon
                                    Tavera Figuereo Tavera Figuereo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                28/02/2023</td>
                            <td align="center" valign="top"> 0.88</td>
                            <td align="center" valign="top">0.003</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425301&amp;SS=1&amp;rand=69077">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5029&amp;paquete=425301&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=83184">Remote
                                    Control</a>
                            </td>
                            <td align="left" valign="top">312200153618814
                                &nbsp; </td>

                            <td align="center" valign="top">23425301 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425301&amp;SS=1&amp;rand=76669"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5029&amp;paquete=425301&amp;PRINT=Y&amp;rand=47452"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                154 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=22801"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425298&amp;SS=1&amp;rand=90673"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425298" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425298" value="9">
                                <input type="hidden" name="cliente425298" value="9330" readonly="YES">
                                <input type="hidden" name="idempresa425298" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425298&amp;SS=&amp;rand=94293">9330</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425298&amp;SS=1&amp;rand=36830">La
                                    Merca Pm</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                28/02/2023</td>
                            <td align="center" valign="top"> 175.56</td>
                            <td align="center" valign="top">0.273</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425298&amp;SS=1&amp;rand=58983">
                                    3</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9330&amp;paquete=425298&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=72866">Camouflage</a>
                            </td>
                            <td align="left" valign="top">300538676110
                                &nbsp; </td>

                            <td align="center" valign="top">23425298 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425298&amp;SS=1&amp;rand=16036"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9330&amp;paquete=425298&amp;PRINT=Y&amp;rand=72178"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                155 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=65796"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425296&amp;SS=1&amp;rand=10850"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425296" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425296" value="9">
                                <input type="hidden" name="cliente425296" value="5096" readonly="YES">
                                <input type="hidden" name="idempresa425296" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425296&amp;SS=&amp;rand=30537">5096</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425296&amp;SS=1&amp;rand=18320">Jose
                                    Ramon Florentino Paula</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                28/02/2023</td>
                            <td align="center" valign="top"> 64.02</td>
                            <td align="center" valign="top">0.041</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425296&amp;SS=1&amp;rand=45909">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5096&amp;paquete=425296&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=26318">Cable</a>
                            </td>
                            <td align="left" valign="top">DPK202152572085
                                &nbsp; </td>

                            <td align="center" valign="top">23425296 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425296&amp;SS=1&amp;rand=16061"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5096&amp;paquete=425296&amp;PRINT=Y&amp;rand=33435"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                156 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=45206"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425295&amp;SS=1&amp;rand=34980"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425295" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425295" value="9">
                                <input type="hidden" name="cliente425295" value="9373" readonly="YES">
                                <input type="hidden" name="idempresa425295" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425295&amp;SS=&amp;rand=30515">9373</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425295&amp;SS=1&amp;rand=25170">Marcos
                                    Gustavo ÃÂvila De Leo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                28/02/2023</td>
                            <td align="center" valign="top"> 1.54</td>
                            <td align="center" valign="top">0.009</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425295&amp;SS=1&amp;rand=66256">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9373&amp;paquete=425295&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=52627">Clothes</a>
                            </td>
                            <td align="left" valign="top">SF1158965807684
                                &nbsp; </td>

                            <td align="center" valign="top">23425295 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425295&amp;SS=1&amp;rand=52870"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9373&amp;paquete=425295&amp;PRINT=Y&amp;rand=45624"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                157 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=26061"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425294&amp;SS=1&amp;rand=88940"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425294" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425294" value="9">
                                <input type="hidden" name="cliente425294" value="9330" readonly="YES">
                                <input type="hidden" name="idempresa425294" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425294&amp;SS=&amp;rand=93151">9330</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425294&amp;SS=1&amp;rand=85140">La
                                    Merca Pm</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                28/02/2023</td>
                            <td align="center" valign="top"> 40.04</td>
                            <td align="center" valign="top">0.106</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425294&amp;SS=1&amp;rand=72125">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9330&amp;paquete=425294&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=69820">Headset</a>
                            </td>
                            <td align="left" valign="top">900895379297
                                &nbsp; </td>

                            <td align="center" valign="top">23425294 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425294&amp;SS=1&amp;rand=32592"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9330&amp;paquete=425294&amp;PRINT=Y&amp;rand=84928"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                158 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=60494"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425275&amp;SS=1&amp;rand=26885"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425275" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425275" value="9">
                                <input type="hidden" name="cliente425275" value="4367" readonly="YES">
                                <input type="hidden" name="idempresa425275" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425275&amp;SS=&amp;rand=21758">4367</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425275&amp;SS=1&amp;rand=19477">Kelvin
                                    Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                28/02/2023</td>
                            <td align="center" valign="top"> 445.5</td>
                            <td align="center" valign="top">2.205</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425275&amp;SS=1&amp;rand=89753">
                                    15</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4367&amp;paquete=425275&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=27796">Cosmetic
                                    Instrument</a>
                            </td>
                            <td align="left" valign="top">900895348638
                                &nbsp; </td>

                            <td align="center" valign="top">23425275 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425275&amp;SS=1&amp;rand=81657"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4367&amp;paquete=425275&amp;PRINT=Y&amp;rand=55550"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                159 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=28648"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425270&amp;SS=1&amp;rand=12195"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425270" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425270" value="9">
                                <input type="hidden" name="cliente425270" value="1454" readonly="YES">
                                <input type="hidden" name="idempresa425270" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425270&amp;SS=&amp;rand=63872">1454</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425270&amp;SS=1&amp;rand=64558">Marichel
                                    Altagracia PeÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂ±a Hernandez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                28/02/2023</td>
                            <td align="center" valign="top"> 1.76</td>
                            <td align="center" valign="top">0.004</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425270&amp;SS=1&amp;rand=28514">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1454&amp;paquete=425270&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=69934">Water
                                    Cup</a>
                            </td>
                            <td align="left" valign="top">73197840976377
                                &nbsp; </td>

                            <td align="center" valign="top">23425270 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425270&amp;SS=1&amp;rand=87994"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1454&amp;paquete=425270&amp;PRINT=Y&amp;rand=63722"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                160 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=94916"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425236&amp;SS=1&amp;rand=18510"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425236" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425236" value="9">
                                <input type="hidden" name="cliente425236" value="9040" readonly="YES">
                                <input type="hidden" name="idempresa425236" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425236&amp;SS=&amp;rand=78894">9040</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425236&amp;SS=1&amp;rand=61173">Victor
                                    Alfonso Oviedo Tejada</a></td>
                            <td align="left" valign="top">SAN FRANCISCO DE MACORIS</td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 19.58</td>
                            <td align="center" valign="top">0.046</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425236&amp;SS=1&amp;rand=61139">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9040&amp;paquete=425236&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=31764">Aerator</a>
                            </td>
                            <td align="left" valign="top">73197822077671
                                &nbsp; </td>

                            <td align="center" valign="top">23425236 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425236&amp;SS=1&amp;rand=96798"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9040&amp;paquete=425236&amp;PRINT=Y&amp;rand=77202"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                161 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=20704"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425234&amp;SS=1&amp;rand=89950"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425234" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425234" value="9">
                                <input type="hidden" name="cliente425234" value="7994" readonly="YES">
                                <input type="hidden" name="idempresa425234" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425234&amp;SS=&amp;rand=62342">7994</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425234&amp;SS=1&amp;rand=82831">Heriberto
                                    Santos</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 59.62</td>
                            <td align="center" valign="top">0.32</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425234&amp;SS=1&amp;rand=59771">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7994&amp;paquete=425234&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=84936">Tissue
                                    Box</a>
                            </td>
                            <td align="left" valign="top">78661328282529
                                &nbsp; </td>

                            <td align="center" valign="top">23425234 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425234&amp;SS=1&amp;rand=67759"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7994&amp;paquete=425234&amp;PRINT=Y&amp;rand=20265"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                162 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=11821"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425228&amp;SS=1&amp;rand=79519"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425228" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425228" value="9">
                                <input type="hidden" name="cliente425228" value="6851" readonly="YES">
                                <input type="hidden" name="idempresa425228" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425228&amp;SS=&amp;rand=29744">6851</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425228&amp;SS=1&amp;rand=91576">Madelyn
                                    Sierra Alcantara</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 105.6</td>
                            <td align="center" valign="top">0.258</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425228&amp;SS=1&amp;rand=97316">
                                    3</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6851&amp;paquete=425228&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=11402">Children
                                    Tableware</a>
                            </td>
                            <td align="left" valign="top">70273798335
                                &nbsp; </td>

                            <td align="center" valign="top">23425228 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425228&amp;SS=1&amp;rand=47126"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6851&amp;paquete=425228&amp;PRINT=Y&amp;rand=25964"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                163 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=13598"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425212&amp;SS=1&amp;rand=10998"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425212" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425212" value="9">
                                <input type="hidden" name="cliente425212" value="5953" readonly="YES">
                                <input type="hidden" name="idempresa425212" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425212&amp;SS=&amp;rand=80523">5953</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425212&amp;SS=1&amp;rand=32114">Amex
                                    Cruz</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 461.12</td>
                            <td align="center" valign="top">1.056</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425212&amp;SS=1&amp;rand=70934">
                                    16</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5953&amp;paquete=425212&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=68518">Router</a>
                            </td>
                            <td align="left" valign="top">500080011975
                                &nbsp; </td>

                            <td align="center" valign="top">23425212 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425212&amp;SS=1&amp;rand=85837"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5953&amp;paquete=425212&amp;PRINT=Y&amp;rand=65851"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                164 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=77030"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425210&amp;SS=1&amp;rand=64731"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425210" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425210" value="9">
                                <input type="hidden" name="cliente425210" value="2730" readonly="YES">
                                <input type="hidden" name="idempresa425210" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425210&amp;SS=&amp;rand=27024">2730</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425210&amp;SS=1&amp;rand=38169">Jhesabet
                                    Dominguez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 15.4</td>
                            <td align="center" valign="top">0.044</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425210&amp;SS=1&amp;rand=86497">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2730&amp;paquete=425210&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=23822">Swimsuit</a>
                            </td>
                            <td align="left" valign="top">312200139672131
                                &nbsp; </td>

                            <td align="center" valign="top">23425210 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425210&amp;SS=1&amp;rand=15371"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2730&amp;paquete=425210&amp;PRINT=Y&amp;rand=97203"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                165 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=13773"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425208&amp;SS=1&amp;rand=67715"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425208" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425208" value="9">
                                <input type="hidden" name="cliente425208" value="2366" readonly="YES">
                                <input type="hidden" name="idempresa425208" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425208&amp;SS=&amp;rand=80034">2366</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425208&amp;SS=1&amp;rand=63545">Yesenia
                                    LucÃÂ­a Mojica RodrÃÂ­guez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 14.96</td>
                            <td align="center" valign="top">0.059</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425208&amp;SS=1&amp;rand=52651">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2366&amp;paquete=425208&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=47794">Hair
                                    Hoop</a>
                            </td>
                            <td align="left" valign="top">YT7073447282417
                                &nbsp; </td>

                            <td align="center" valign="top">23425208 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425208&amp;SS=1&amp;rand=73811"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2366&amp;paquete=425208&amp;PRINT=Y&amp;rand=54474"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                166 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=27313"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425180&amp;SS=1&amp;rand=93557"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425180" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425180" value="9">
                                <input type="hidden" name="cliente425180" value="3832" readonly="YES">
                                <input type="hidden" name="idempresa425180" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425180&amp;SS=&amp;rand=46050">3832</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425180&amp;SS=1&amp;rand=24629">Eliana
                                    Tavarez</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 31.46</td>
                            <td align="center" valign="top">0.087</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425180&amp;SS=1&amp;rand=94960">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3832&amp;paquete=425180&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=83177">Jar</a>
                            </td>
                            <td align="left" valign="top">900895231548
                                &nbsp; </td>

                            <td align="center" valign="top">23425180 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425180&amp;SS=1&amp;rand=40595"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3832&amp;paquete=425180&amp;PRINT=Y&amp;rand=98560"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                167 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=84177"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425176&amp;SS=1&amp;rand=21118"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425176" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425176" value="9">
                                <input type="hidden" name="cliente425176" value="3389" readonly="YES">
                                <input type="hidden" name="idempresa425176" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425176&amp;SS=&amp;rand=30674">3389</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425176&amp;SS=1&amp;rand=55112">Miguel
                                    Angel Canelo Pineda</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 28.38</td>
                            <td align="center" valign="top">0.09</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425176&amp;SS=1&amp;rand=79638">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3389&amp;paquete=425176&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=16512">Optical
                                    Fiber Quick Connector</a>
                            </td>
                            <td align="left" valign="top">DPK211645544136
                                &nbsp; </td>

                            <td align="center" valign="top">23425176 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425176&amp;SS=1&amp;rand=20963"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3389&amp;paquete=425176&amp;PRINT=Y&amp;rand=56668"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                168 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=71244"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425173&amp;SS=1&amp;rand=37988"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425173" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425173" value="9">
                                <input type="hidden" name="cliente425173" value="5972" readonly="YES">
                                <input type="hidden" name="idempresa425173" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425173&amp;SS=&amp;rand=84839">5972</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425173&amp;SS=1&amp;rand=57741">Luis
                                    Antonio Lara Reyes</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 63.58</td>
                            <td align="center" valign="top">0.087</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425173&amp;SS=1&amp;rand=51812">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5972&amp;paquete=425173&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=90212">Honey</a>
                            </td>
                            <td align="left" valign="top">842622589
                                &nbsp; </td>

                            <td align="center" valign="top">23425173 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425173&amp;SS=1&amp;rand=54945"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5972&amp;paquete=425173&amp;PRINT=Y&amp;rand=55586"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                169 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=57927"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425172&amp;SS=1&amp;rand=34979"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425172" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425172" value="9">
                                <input type="hidden" name="cliente425172" value="3354" readonly="YES">
                                <input type="hidden" name="idempresa425172" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425172&amp;SS=&amp;rand=19131">3354</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425172&amp;SS=1&amp;rand=10578">Alfred
                                    Luis Sosa Aquino</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 27.5</td>
                            <td align="center" valign="top">0.064</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425172&amp;SS=1&amp;rand=72774">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3354&amp;paquete=425172&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=82944">Mobile
                                    Phone Shell</a>
                            </td>
                            <td align="left" valign="top">800012488597
                                &nbsp; </td>

                            <td align="center" valign="top">23425172 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425172&amp;SS=1&amp;rand=55053"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3354&amp;paquete=425172&amp;PRINT=Y&amp;rand=90089"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                170 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=76501"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425166&amp;SS=1&amp;rand=91104"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425166" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425166" value="9">
                                <input type="hidden" name="cliente425166" value="1608" readonly="YES">
                                <input type="hidden" name="idempresa425166" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425166&amp;SS=&amp;rand=14718">1608</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425166&amp;SS=1&amp;rand=71462">Lepido
                                    Jimenez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 46.64</td>
                            <td align="center" valign="top">0.286</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425166&amp;SS=1&amp;rand=74282">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1608&amp;paquete=425166&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=45315">Artificial
                                    Flower</a>
                            </td>
                            <td align="left" valign="top">202203002007
                                &nbsp; </td>

                            <td align="center" valign="top">23425166 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425166&amp;SS=1&amp;rand=70022"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1608&amp;paquete=425166&amp;PRINT=Y&amp;rand=58460"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                171 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=56434"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425165&amp;SS=1&amp;rand=90698"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425165" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425165" value="9">
                                <input type="hidden" name="cliente425165" value="8183" readonly="YES">
                                <input type="hidden" name="idempresa425165" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425165&amp;SS=&amp;rand=13573">8183</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425165&amp;SS=1&amp;rand=36073">Sixto
                                    Jesus Payano Fernandez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 14.08</td>
                            <td align="center" valign="top">0.03</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425165&amp;SS=1&amp;rand=97211">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8183&amp;paquete=425165&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=24537">Pincer-type
                                    Universal Meter</a>
                            </td>
                            <td align="left" valign="top">SF1659700461810
                                &nbsp; </td>

                            <td align="center" valign="top">23425165 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425165&amp;SS=1&amp;rand=82742"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8183&amp;paquete=425165&amp;PRINT=Y&amp;rand=68456"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                172 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=52527"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425164&amp;SS=1&amp;rand=67582"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425164" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425164" value="9">
                                <input type="hidden" name="cliente425164" value="7877" readonly="YES">
                                <input type="hidden" name="idempresa425164" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425164&amp;SS=&amp;rand=26198">7877</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425164&amp;SS=1&amp;rand=94340">Maria
                                    Magdalena Ramos Franco</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 12.98</td>
                            <td align="center" valign="top">0.033</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425164&amp;SS=1&amp;rand=57794">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7877&amp;paquete=425164&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=71144">Short
                                    Sleeve</a>
                            </td>
                            <td align="left" valign="top">73197680297847
                                &nbsp; </td>

                            <td align="center" valign="top">23425164 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425164&amp;SS=1&amp;rand=49927"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7877&amp;paquete=425164&amp;PRINT=Y&amp;rand=15721"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                173 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=96125"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425163&amp;SS=1&amp;rand=59060"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425163" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425163" value="9">
                                <input type="hidden" name="cliente425163" value="1608" readonly="YES">
                                <input type="hidden" name="idempresa425163" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425163&amp;SS=&amp;rand=16301">1608</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425163&amp;SS=1&amp;rand=68900">Lepido
                                    Jimenez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 18.26</td>
                            <td align="center" valign="top">0.096</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425163&amp;SS=1&amp;rand=42004">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1608&amp;paquete=425163&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=61355">Artificial
                                    Flower</a>
                            </td>
                            <td align="left" valign="top">53025022
                                &nbsp; </td>

                            <td align="center" valign="top">23425163 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425163&amp;SS=1&amp;rand=58989"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1608&amp;paquete=425163&amp;PRINT=Y&amp;rand=18506"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                174 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=52460"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425159&amp;SS=1&amp;rand=63709"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425159" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425159" value="9">
                                <input type="hidden" name="cliente425159" value="9330" readonly="YES">
                                <input type="hidden" name="idempresa425159" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425159&amp;SS=&amp;rand=79970">9330</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425159&amp;SS=1&amp;rand=26743">La
                                    Merca Pm</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 10.12</td>
                            <td align="center" valign="top">0.027</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425159&amp;SS=1&amp;rand=99025">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9330&amp;paquete=425159&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=49993">Electronic
                                    Watch</a>
                            </td>
                            <td align="left" valign="top">78660739553687
                                &nbsp; </td>

                            <td align="center" valign="top">23425159 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425159&amp;SS=1&amp;rand=75205"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9330&amp;paquete=425159&amp;PRINT=Y&amp;rand=55460"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                175 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=40691"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425158&amp;SS=1&amp;rand=78779"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425158" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425158" value="9">
                                <input type="hidden" name="cliente425158" value="2073" readonly="YES">
                                <input type="hidden" name="idempresa425158" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425158&amp;SS=&amp;rand=81534">2073</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425158&amp;SS=1&amp;rand=37903">Robinson
                                    Valdez Pineda</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                27/02/2023</td>
                            <td align="center" valign="top"> 4.62</td>
                            <td align="center" valign="top">0.016</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425158&amp;SS=1&amp;rand=93318">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2073&amp;paquete=425158&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=64277">Aircraft
                                    Toy</a>
                            </td>
                            <td align="left" valign="top">SF1387283781303
                                &nbsp; </td>

                            <td align="center" valign="top">23425158 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425158&amp;SS=1&amp;rand=96360"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2073&amp;paquete=425158&amp;PRINT=Y&amp;rand=45845"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                176 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=31859"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425140&amp;SS=1&amp;rand=22558"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425140" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425140" value="9">
                                <input type="hidden" name="cliente425140" value="390" readonly="YES">
                                <input type="hidden" name="idempresa425140" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425140&amp;SS=&amp;rand=40186">390</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425140&amp;SS=1&amp;rand=79655">Miguel
                                    Angel Perez Jimenez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                25/02/2023</td>
                            <td align="center" valign="top"> 24.42</td>
                            <td align="center" valign="top">0.09</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425140&amp;SS=1&amp;rand=83703">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=390&amp;paquete=425140&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=80115">Printer
                                    Cartridge</a>
                            </td>
                            <td align="left" valign="top">188059706437
                                &nbsp; </td>

                            <td align="center" valign="top">23425140 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425140&amp;SS=1&amp;rand=85377"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=390&amp;paquete=425140&amp;PRINT=Y&amp;rand=79829"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                177 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=39175"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425139&amp;SS=1&amp;rand=91679"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425139" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425139" value="9">
                                <input type="hidden" name="cliente425139" value="2919" readonly="YES">
                                <input type="hidden" name="idempresa425139" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425139&amp;SS=&amp;rand=48729">2919</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425139&amp;SS=1&amp;rand=71181">Raymundo
                                    Villar Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                25/02/2023</td>
                            <td align="center" valign="top"> 16.06</td>
                            <td align="center" valign="top">0.043</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425139&amp;SS=1&amp;rand=53035">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2919&amp;paquete=425139&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=97719">Battery
                                    Car Charger</a>
                            </td>
                            <td align="left" valign="top">800114052738
                                &nbsp; </td>

                            <td align="center" valign="top">23425139 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425139&amp;SS=1&amp;rand=79689"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2919&amp;paquete=425139&amp;PRINT=Y&amp;rand=95497"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                178 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=61428"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425135&amp;SS=1&amp;rand=59659"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425135" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425135" value="9">
                                <input type="hidden" name="cliente425135" value="3389" readonly="YES">
                                <input type="hidden" name="idempresa425135" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425135&amp;SS=&amp;rand=22240">3389</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425135&amp;SS=1&amp;rand=60453">Miguel
                                    Angel Canelo Pineda</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                25/02/2023</td>
                            <td align="center" valign="top"> 54.56</td>
                            <td align="center" valign="top">0.079</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425135&amp;SS=1&amp;rand=99654">
                                    3</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3389&amp;paquete=425135&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=87447">Optical
                                    Fiber Connector Parts+tools</a>
                            </td>
                            <td align="left" valign="top">202020813021
                                &nbsp; </td>

                            <td align="center" valign="top">23425135 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425135&amp;SS=1&amp;rand=15913"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=3389&amp;paquete=425135&amp;PRINT=Y&amp;rand=40345"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                179 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=66226"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425134&amp;SS=1&amp;rand=87449"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425134" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425134" value="9">
                                <input type="hidden" name="cliente425134" value="9081" readonly="YES">
                                <input type="hidden" name="idempresa425134" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425134&amp;SS=&amp;rand=68250">9081</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425134&amp;SS=1&amp;rand=59544">Rafael
                                    Alejandro Rivera Arias</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                25/02/2023</td>
                            <td align="center" valign="top"> 6.38</td>
                            <td align="center" valign="top">0.026</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425134&amp;SS=1&amp;rand=51726">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9081&amp;paquete=425134&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=64610">High-heeled
                                    Shoes</a>
                            </td>
                            <td align="left" valign="top">621029008939925
                                &nbsp; </td>

                            <td align="center" valign="top">23425134 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425134&amp;SS=1&amp;rand=95391"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9081&amp;paquete=425134&amp;PRINT=Y&amp;rand=73587"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                180 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=77170"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425133&amp;SS=1&amp;rand=35578"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425133" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425133" value="9">
                                <input type="hidden" name="cliente425133" value="8807" readonly="YES">
                                <input type="hidden" name="idempresa425133" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425133&amp;SS=&amp;rand=53242">8807</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425133&amp;SS=1&amp;rand=60874">Bryan
                                    AlcÃÂ¡ntara Marte</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                25/02/2023</td>
                            <td align="center" valign="top"> 9.46</td>
                            <td align="center" valign="top">0.018</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425133&amp;SS=1&amp;rand=15693">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8807&amp;paquete=425133&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=38620">Clothes</a>
                            </td>
                            <td align="left" valign="top">SF1416709152617
                                &nbsp; </td>

                            <td align="center" valign="top">23425133 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425133&amp;SS=1&amp;rand=40703"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8807&amp;paquete=425133&amp;PRINT=Y&amp;rand=44869"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                181 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=30299"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425130&amp;SS=1&amp;rand=79433"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425130" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425130" value="9">
                                <input type="hidden" name="cliente425130" value="1672" readonly="YES">
                                <input type="hidden" name="idempresa425130" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425130&amp;SS=&amp;rand=16050">1672</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425130&amp;SS=1&amp;rand=73336">Yohan
                                    Reinoso Abreu</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                25/02/2023</td>
                            <td align="center" valign="top"> 11.22</td>
                            <td align="center" valign="top">0.029</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425130&amp;SS=1&amp;rand=77152">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1672&amp;paquete=425130&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=85740">Ragdoll</a>
                            </td>
                            <td align="left" valign="top">SF1649149578333
                                &nbsp; </td>

                            <td align="center" valign="top">23425130 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425130&amp;SS=1&amp;rand=68833"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1672&amp;paquete=425130&amp;PRINT=Y&amp;rand=38580"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                182 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=45400"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425121&amp;SS=1&amp;rand=81075"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425121" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425121" value="9">
                                <input type="hidden" name="cliente425121" value="8353" readonly="YES">
                                <input type="hidden" name="idempresa425121" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425121&amp;SS=&amp;rand=89035">8353</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425121&amp;SS=1&amp;rand=45054">Jaime
                                    Rafael Colon</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                25/02/2023</td>
                            <td align="center" valign="top"> 5.06</td>
                            <td align="center" valign="top">0.018</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425121&amp;SS=1&amp;rand=68522">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8353&amp;paquete=425121&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=94950">Shoes</a>
                            </td>
                            <td align="left" valign="top">433076583354537
                                &nbsp; </td>

                            <td align="center" valign="top">23425121 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425121&amp;SS=1&amp;rand=75401"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8353&amp;paquete=425121&amp;PRINT=Y&amp;rand=34749"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                183 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=82399"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425110&amp;SS=1&amp;rand=43651"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425110" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425110" value="9">
                                <input type="hidden" name="cliente425110" value="5890" readonly="YES">
                                <input type="hidden" name="idempresa425110" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425110&amp;SS=&amp;rand=84295">5890</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425110&amp;SS=1&amp;rand=34125">RamÃÂ³n
                                    Giron</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                25/02/2023</td>
                            <td align="center" valign="top"> 16.28</td>
                            <td align="center" valign="top">0.039</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425110&amp;SS=1&amp;rand=98262">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5890&amp;paquete=425110&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=79686">Intelligent
                                    Watch</a>
                            </td>
                            <td align="left" valign="top">433082672131110
                                &nbsp; </td>

                            <td align="center" valign="top">23425110 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425110&amp;SS=1&amp;rand=97713"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5890&amp;paquete=425110&amp;PRINT=Y&amp;rand=75433"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                184 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=15264"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425109&amp;SS=1&amp;rand=50956"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425109" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425109" value="9">
                                <input type="hidden" name="cliente425109" value="2018" readonly="YES">
                                <input type="hidden" name="idempresa425109" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425109&amp;SS=&amp;rand=36307">2018</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425109&amp;SS=1&amp;rand=20958">Alejandro
                                    Paniagua BÃÂÃÂÃÂÃÂ¡ez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                25/02/2023</td>
                            <td align="center" valign="top"> 5.72</td>
                            <td align="center" valign="top">0.009</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425109&amp;SS=1&amp;rand=79577">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2018&amp;paquete=425109&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=67011">Mobile
                                    Phone</a>
                            </td>
                            <td align="left" valign="top">SF1649180801327
                                &nbsp; </td>

                            <td align="center" valign="top">23425109 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425109&amp;SS=1&amp;rand=55829"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2018&amp;paquete=425109&amp;PRINT=Y&amp;rand=99878"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                185 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=46444"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425055&amp;SS=1&amp;rand=61880"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425055" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425055" value="9">
                                <input type="hidden" name="cliente425055" value="7545" readonly="YES">
                                <input type="hidden" name="idempresa425055" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425055&amp;SS=&amp;rand=73214">7545</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425055&amp;SS=1&amp;rand=23596">Yowlly
                                    De Los Santos</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                24/02/2023</td>
                            <td align="center" valign="top"> 51.04</td>
                            <td align="center" valign="top">0.258</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425055&amp;SS=1&amp;rand=47621">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7545&amp;paquete=425055&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=42047">Disposable
                                    Portable Infusion Pump</a>
                            </td>
                            <td align="left" valign="top">JDV010427067459
                                &nbsp; </td>

                            <td align="center" valign="top">23425055 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425055&amp;SS=1&amp;rand=52178"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7545&amp;paquete=425055&amp;PRINT=Y&amp;rand=83022"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                186 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=23123"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425048&amp;SS=1&amp;rand=41214"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425048" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425048" value="9">
                                <input type="hidden" name="cliente425048" value="5032" readonly="YES">
                                <input type="hidden" name="idempresa425048" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425048&amp;SS=&amp;rand=28076">5032</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425048&amp;SS=1&amp;rand=81646">Daniel
                                    Esteban Mauricio Castillo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                24/02/2023</td>
                            <td align="center" valign="top"> 51.04</td>
                            <td align="center" valign="top">0.258</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425048&amp;SS=1&amp;rand=36164">
                                    2</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5032&amp;paquete=425048&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=93478">Disposable
                                    Portable Infusion Pump</a>
                            </td>
                            <td align="left" valign="top">JDV010427084791
                                &nbsp; </td>

                            <td align="center" valign="top">23425048 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425048&amp;SS=1&amp;rand=16395"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=5032&amp;paquete=425048&amp;PRINT=Y&amp;rand=18563"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                187 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=37130"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425045&amp;SS=1&amp;rand=90691"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="425045" id="case" class="case">
                                <input type="hidden" name="idstatusproceso425045" value="9">
                                <input type="hidden" name="cliente425045" value="7877" readonly="YES">
                                <input type="hidden" name="idempresa425045" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425045&amp;SS=&amp;rand=42690">7877</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425045&amp;SS=1&amp;rand=35393">Maria
                                    Magdalena Ramos Franco</a></td>
                            <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD</td>
                            <td align="center" valign="top">
                                24/02/2023</td>
                            <td align="center" valign="top"> 2.64</td>
                            <td align="center" valign="top">0.004</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425045&amp;SS=1&amp;rand=70378">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7877&amp;paquete=425045&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=40403">Skin
                                    Cream</a>
                            </td>
                            <td align="left" valign="top">SF1408107127946
                                &nbsp; </td>

                            <td align="center" valign="top">23425045 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=425045&amp;SS=1&amp;rand=10826"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=7877&amp;paquete=425045&amp;PRINT=Y&amp;rand=75644"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                188 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=81361"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424732&amp;SS=1&amp;rand=37134"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="424732" id="case" class="case">
                                <input type="hidden" name="idstatusproceso424732" value="9">
                                <input type="hidden" name="cliente424732" value="2456" readonly="YES">
                                <input type="hidden" name="idempresa424732" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424732&amp;SS=&amp;rand=86603">2456</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424732&amp;SS=1&amp;rand=60938">Vivian
                                    Liang Liang</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                20/02/2023</td>
                            <td align="center" valign="top"> 1589.06</td>
                            <td align="center" valign="top">3.15</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424732&amp;SS=1&amp;rand=94146">
                                    27</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2456&amp;paquete=424732&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=42432">Mobile
                                    Phone Shell</a>
                            </td>
                            <td align="left" valign="top">NOTR2023022005151310
                                &nbsp; </td>

                            <td align="center" valign="top">23424732 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424732&amp;SS=1&amp;rand=60816"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2456&amp;paquete=424732&amp;PRINT=Y&amp;rand=40591"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                189 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=94314"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424663&amp;SS=1&amp;rand=34031"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="424663" id="case" class="case">
                                <input type="hidden" name="idstatusproceso424663" value="9">
                                <input type="hidden" name="cliente424663" value="6116" readonly="YES">
                                <input type="hidden" name="idempresa424663" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424663&amp;SS=&amp;rand=54189">6116</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424663&amp;SS=1&amp;rand=41935">Constructex
                                    Urbaez Diaz Srl</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                17/02/2023</td>
                            <td align="center" valign="top"> 68.42</td>
                            <td align="center" valign="top">0.084</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424663&amp;SS=1&amp;rand=66079">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6116&amp;paquete=424663&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=96369">Glitter</a>
                            </td>
                            <td align="left" valign="top">500079404313
                                &nbsp; </td>

                            <td align="center" valign="top">23424663 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=424663&amp;SS=1&amp;rand=24958"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6116&amp;paquete=424663&amp;PRINT=Y&amp;rand=79203"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                190 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=37583"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=423605&amp;SS=1&amp;rand=43035"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="423605" id="case" class="case">
                                <input type="hidden" name="idstatusproceso423605" value="9">
                                <input type="hidden" name="cliente423605" value="4488" readonly="YES">
                                <input type="hidden" name="idempresa423605" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=423605&amp;SS=&amp;rand=60850">4488</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=423605&amp;SS=1&amp;rand=63748">Taylor
                                    Peralta</a></td>
                            <td align="left" valign="top">INDEPENDENCIA</td>
                            <td align="center" valign="top">
                                08/02/2023</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=423605&amp;SS=1&amp;rand=36514">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4488&amp;paquete=423605&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=67247">Switch</a>
                            </td>
                            <td align="left" valign="top">1Z2Y385X0327814480
                                &nbsp; </td>

                            <td align="center" valign="top">23423605 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=423605&amp;SS=1&amp;rand=72312"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=4488&amp;paquete=423605&amp;PRINT=Y&amp;rand=63645"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                191 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=57938"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422556&amp;SS=1&amp;rand=15003"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="422556" id="case" class="case">
                                <input type="hidden" name="idstatusproceso422556" value="9">
                                <input type="hidden" name="cliente422556" value="9054" readonly="YES">
                                <input type="hidden" name="idempresa422556" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422556&amp;SS=&amp;rand=89040">9054</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422556&amp;SS=1&amp;rand=28317">Alexander
                                    Hiraldo Silverio</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                15/01/2023</td>
                            <td align="center" valign="top"> 20.46</td>
                            <td align="center" valign="top">0.039</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422556&amp;SS=1&amp;rand=45408">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9054&amp;paquete=422556&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=89867">Intelligent
                                    Watch</a>
                            </td>
                            <td align="left" valign="top">JDVC17800985791
                                &nbsp; </td>

                            <td align="center" valign="top">23422556 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422556&amp;SS=1&amp;rand=93962"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=9054&amp;paquete=422556&amp;PRINT=Y&amp;rand=26769"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                192 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=27002"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422049&amp;SS=1&amp;rand=80566"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="422049" id="case" class="case">
                                <input type="hidden" name="idstatusproceso422049" value="9">
                                <input type="hidden" name="cliente422049" value="1" readonly="YES">
                                <input type="hidden" name="idempresa422049" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422049&amp;SS=&amp;rand=77708">1</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422049&amp;SS=1&amp;rand=21149">Cuenta
                                    General</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                10/01/2023</td>
                            <td align="center" valign="top"> 2.2</td>
                            <td align="center" valign="top">0.004</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422049&amp;SS=1&amp;rand=22999">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=422049&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=38525">Velcro</a>
                            </td>
                            <td align="left" valign="top">78649147169762
                                &nbsp; </td>

                            <td align="center" valign="top">23422049 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=422049&amp;SS=1&amp;rand=51741"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1&amp;paquete=422049&amp;PRINT=Y&amp;rand=17313"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                193 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=2&amp;&amp;estatusproceso=&amp;rand=62557"
                                    class="flaticon-boat17"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=417640&amp;SS=1&amp;rand=95931"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="417640" id="case" class="case">
                                <input type="hidden" name="idstatusproceso417640" value="9">
                                <input type="hidden" name="cliente417640" value="8518" readonly="YES">
                                <input type="hidden" name="idempresa417640" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=417640&amp;SS=&amp;rand=49250">8518</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=417640&amp;SS=1&amp;rand=28637">Alfred
                                    Gunesch</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                14/11/2022</td>
                            <td align="center" valign="top"> 12.76</td>
                            <td align="center" valign="top">0.028</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=417640&amp;SS=1&amp;rand=92300">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8518&amp;paquete=417640&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=64209">Power
                                    Controller</a>
                            </td>
                            <td align="left" valign="top">773192090510097
                                &nbsp; </td>

                            <td align="center" valign="top">22417640 </td>
                            <td align="center" valign="top">
                                0.0 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=417640&amp;SS=1&amp;rand=97842"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=8518&amp;paquete=417640&amp;PRINT=Y&amp;rand=29883"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                194 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=97245"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414546&amp;SS=1&amp;rand=58692"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414546" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414546" value="9">
                                <input type="hidden" name="cliente414546" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414546" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414546&amp;SS=&amp;rand=83633">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414546&amp;SS=1&amp;rand=33760">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                30/09/2022</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414546&amp;SS=1&amp;rand=25939">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414546&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=55946">Bateria
                                    Laptop</a>
                            </td>
                            <td align="left" valign="top">4203316693055902769051550969463419
                                &nbsp; </td>

                            <td align="center" valign="top">22414546 </td>
                            <td align="center" valign="top">
                                66 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414546&amp;SS=1&amp;rand=87407"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414546&amp;PRINT=Y&amp;rand=73879"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                195 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=60950"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414491&amp;SS=1&amp;rand=76447"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414491" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414491" value="9">
                                <input type="hidden" name="cliente414491" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414491" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414491&amp;SS=&amp;rand=92198">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414491&amp;SS=1&amp;rand=96359">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414491&amp;SS=1&amp;rand=66315">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414491&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=86160">Pantalla
                                    Repuesto</a>
                            </td>
                            <td align="left" valign="top">1001905144070003316600278471086241
                                &nbsp; </td>

                            <td align="center" valign="top">22414491 </td>
                            <td align="center" valign="top">
                                60.00 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414491&amp;SS=1&amp;rand=23128"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414491&amp;PRINT=Y&amp;rand=83318"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                196 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=66726"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414490&amp;SS=1&amp;rand=90838"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414490" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414490" value="9">
                                <input type="hidden" name="cliente414490" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414490" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414490&amp;SS=&amp;rand=94468">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414490&amp;SS=1&amp;rand=79726">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414490&amp;SS=1&amp;rand=29364">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414490&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=46209">Repuesto
                                    Peq</a>
                            </td>
                            <td align="left" valign="top">TBA180695859901
                                &nbsp; </td>

                            <td align="center" valign="top">22414490 </td>
                            <td align="center" valign="top">
                                2 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414490&amp;SS=1&amp;rand=87041"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414490&amp;PRINT=Y&amp;rand=81922"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                197 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=42141"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414489&amp;SS=1&amp;rand=36291"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414489" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414489" value="9">
                                <input type="hidden" name="cliente414489" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414489" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414489&amp;SS=&amp;rand=10560">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414489&amp;SS=1&amp;rand=34441">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414489&amp;SS=1&amp;rand=90501">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414489&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=98403">Acc
                                    Goma</a>
                            </td>
                            <td align="left" valign="top">TBA181139473101
                                &nbsp; </td>

                            <td align="center" valign="top">22414489 </td>
                            <td align="center" valign="top">
                                2 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414489&amp;SS=1&amp;rand=54326"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414489&amp;PRINT=Y&amp;rand=87747"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                198 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=57096"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414488&amp;SS=1&amp;rand=37960"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414488" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414488" value="9">
                                <input type="hidden" name="cliente414488" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414488" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414488&amp;SS=&amp;rand=21508">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414488&amp;SS=1&amp;rand=73037">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414488&amp;SS=1&amp;rand=83907">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414488&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=98916">Acc
                                    Goma</a>
                            </td>
                            <td align="left" valign="top">TBA180524700601
                                &nbsp; </td>

                            <td align="center" valign="top">22414488 </td>
                            <td align="center" valign="top">
                                2 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414488&amp;SS=1&amp;rand=46916"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414488&amp;PRINT=Y&amp;rand=44858"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                199 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=75364"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414487&amp;SS=1&amp;rand=39114"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414487" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414487" value="9">
                                <input type="hidden" name="cliente414487" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414487" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414487&amp;SS=&amp;rand=41217">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414487&amp;SS=1&amp;rand=41679">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414487&amp;SS=1&amp;rand=25275">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414487&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=54347">Collar
                                    Bisuteria</a>
                            </td>
                            <td align="left" valign="top">420331669300120111409282247583
                                &nbsp; </td>

                            <td align="center" valign="top">22414487 </td>
                            <td align="center" valign="top">
                                5 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414487&amp;SS=1&amp;rand=24997"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414487&amp;PRINT=Y&amp;rand=82003"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                200 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=45185"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414485&amp;SS=1&amp;rand=19465"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414485" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414485" value="9">
                                <input type="hidden" name="cliente414485" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414485" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414485&amp;SS=&amp;rand=61730">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414485&amp;SS=1&amp;rand=64551">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414485&amp;SS=1&amp;rand=55676">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414485&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=48771">Repuesto</a>
                            </td>
                            <td align="left" valign="top">420331669274890109524017118112
                                &nbsp; </td>

                            <td align="center" valign="top">22414485 </td>
                            <td align="center" valign="top">
                                25 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414485&amp;SS=1&amp;rand=46473"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414485&amp;PRINT=Y&amp;rand=87818"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                201 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=75064"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414484&amp;SS=1&amp;rand=47034"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414484" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414484" value="9">
                                <input type="hidden" name="cliente414484" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414484" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414484&amp;SS=&amp;rand=22260">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414484&amp;SS=1&amp;rand=65565">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414484&amp;SS=1&amp;rand=45438">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414484&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=66588">Acc</a>
                            </td>
                            <td align="left" valign="top">420331669214490270334828754891
                                &nbsp; </td>

                            <td align="center" valign="top">22414484 </td>
                            <td align="center" valign="top">
                                10 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414484&amp;SS=1&amp;rand=53313"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414484&amp;PRINT=Y&amp;rand=92535"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                202 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=94549"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414482&amp;SS=1&amp;rand=64822"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414482" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414482" value="9">
                                <input type="hidden" name="cliente414482" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414482" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414482&amp;SS=&amp;rand=65572">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414482&amp;SS=1&amp;rand=78457">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 1</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414482&amp;SS=1&amp;rand=63739">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414482&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=12489">Ropa
                                    Shein</a>
                            </td>
                            <td align="left" valign="top">420331669200190306403911518396
                                &nbsp; </td>

                            <td align="center" valign="top">22414482 </td>
                            <td align="center" valign="top">
                                15 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414482&amp;SS=1&amp;rand=23315"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414482&amp;PRINT=Y&amp;rand=39103"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                203 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=41605"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414481&amp;SS=1&amp;rand=54534"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414481" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414481" value="9">
                                <input type="hidden" name="cliente414481" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414481" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414481&amp;SS=&amp;rand=70784">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414481&amp;SS=1&amp;rand=56881">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414481&amp;SS=1&amp;rand=98882">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414481&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=85782">Cable</a>
                            </td>
                            <td align="left" valign="top">4203316626179405508205497083426236
                                &nbsp; </td>

                            <td align="center" valign="top">22414481 </td>
                            <td align="center" valign="top">
                                15 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414481&amp;SS=1&amp;rand=38885"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414481&amp;PRINT=Y&amp;rand=44068"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                204 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=95249"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414480&amp;SS=1&amp;rand=90616"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414480" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414480" value="9">
                                <input type="hidden" name="cliente414480" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414480" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414480&amp;SS=&amp;rand=98620">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414480&amp;SS=1&amp;rand=50926">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 0.5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414480&amp;SS=1&amp;rand=39387">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414480&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=45094">Pieza
                                    De Motor</a>
                            </td>
                            <td align="left" valign="top">420331669274890109524018037535
                                &nbsp; </td>

                            <td align="center" valign="top">22414480 </td>
                            <td align="center" valign="top">
                                23 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414480&amp;SS=1&amp;rand=38744"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414480&amp;PRINT=Y&amp;rand=14451"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                205 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=82129"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414479&amp;SS=1&amp;rand=51006"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414479" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414479" value="9">
                                <input type="hidden" name="cliente414479" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414479" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414479&amp;SS=&amp;rand=70018">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414479&amp;SS=1&amp;rand=27567">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414479&amp;SS=1&amp;rand=17595">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414479&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=23332">Perfume</a>
                            </td>
                            <td align="left" valign="top">420331669405511109236863046380
                                &nbsp; </td>

                            <td align="center" valign="top">22414479 </td>
                            <td align="center" valign="top">
                                30 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414479&amp;SS=1&amp;rand=20103"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414479&amp;PRINT=Y&amp;rand=12145"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                206 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=78155"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414477&amp;SS=1&amp;rand=75676"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414477" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414477" value="9">
                                <input type="hidden" name="cliente414477" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414477" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414477&amp;SS=&amp;rand=80603">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414477&amp;SS=1&amp;rand=41895">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414477&amp;SS=1&amp;rand=78167">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414477&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=93919">Ropa</a>
                            </td>
                            <td align="left" valign="top">TBA059258646704
                                &nbsp; </td>

                            <td align="center" valign="top">22414477 </td>
                            <td align="center" valign="top">
                                40 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414477&amp;SS=1&amp;rand=71000"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414477&amp;PRINT=Y&amp;rand=19772"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                207 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=48453"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414474&amp;SS=1&amp;rand=41784"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414474" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414474" value="9">
                                <input type="hidden" name="cliente414474" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414474" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414474&amp;SS=&amp;rand=66655">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414474&amp;SS=1&amp;rand=47336">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 14</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414474&amp;SS=1&amp;rand=27566">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414474&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=95541">Adt.
                                    Corriente Hp</a>
                            </td>
                            <td align="left" valign="top">1Z14V5340313382914
                                &nbsp; </td>

                            <td align="center" valign="top">22414474 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414474&amp;SS=1&amp;rand=81405"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414474&amp;PRINT=Y&amp;rand=22816"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                208 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=86157"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414473&amp;SS=1&amp;rand=80026"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414473" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414473" value="9">
                                <input type="hidden" name="cliente414473" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414473" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414473&amp;SS=&amp;rand=63743">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414473&amp;SS=1&amp;rand=25545">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 12</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414473&amp;SS=1&amp;rand=25120">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414473&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=92489">Balones
                                    De Volleyball</a>
                            </td>
                            <td align="left" valign="top">9622001900004644243300275555099205
                                &nbsp; </td>

                            <td align="center" valign="top">22414473 </td>
                            <td align="center" valign="top">
                                80 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414473&amp;SS=1&amp;rand=29998"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414473&amp;PRINT=Y&amp;rand=97251"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                209 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=43496"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414472&amp;SS=1&amp;rand=90017"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414472" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414472" value="9">
                                <input type="hidden" name="cliente414472" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414472" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414472&amp;SS=&amp;rand=24819">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414472&amp;SS=1&amp;rand=51092">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 8</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414472&amp;SS=1&amp;rand=13349">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414472&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=34923">Power
                                    Inverter 2000w</a>
                            </td>
                            <td align="left" valign="top">9689587666
                                &nbsp; </td>

                            <td align="center" valign="top">22414472 </td>
                            <td align="center" valign="top">
                                100 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414472&amp;SS=1&amp;rand=53238"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414472&amp;PRINT=Y&amp;rand=81506"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                210 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=10600"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414471&amp;SS=1&amp;rand=33841"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="414471" id="case" class="case">
                                <input type="hidden" name="idstatusproceso414471" value="9">
                                <input type="hidden" name="cliente414471" value="2" readonly="YES">
                                <input type="hidden" name="idempresa414471" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414471&amp;SS=&amp;rand=23402">2</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414471&amp;SS=1&amp;rand=78768">Sin
                                    Identificar Sin Identificar</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                29/09/2022</td>
                            <td align="center" valign="top"> 7</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414471&amp;SS=1&amp;rand=27761">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414471&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=84403">Acc
                                    Tela</a>
                            </td>
                            <td align="left" valign="top">4203316692612909857143551000473520
                                &nbsp; </td>

                            <td align="center" valign="top">22414471 </td>
                            <td align="center" valign="top">
                                30.00 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=414471&amp;SS=1&amp;rand=88542"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2&amp;paquete=414471&amp;PRINT=Y&amp;rand=66216"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                211 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=26187"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405387&amp;SS=1&amp;rand=55197"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="405387" id="case" class="case">
                                <input type="hidden" name="idstatusproceso405387" value="9">
                                <input type="hidden" name="cliente405387" value="1570" readonly="YES">
                                <input type="hidden" name="idempresa405387" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405387&amp;SS=&amp;rand=13553">1570</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405387&amp;SS=1&amp;rand=43755">Denisse
                                    Jiret Rodriguez Rodriguez</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                03/06/2022</td>
                            <td align="center" valign="top"> 3</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405387&amp;SS=1&amp;rand=50739">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1570&amp;paquete=405387&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=84959">Repuesto</a>
                            </td>
                            <td align="left" valign="top">9622001900002185778600273718598597
                                &nbsp; </td>

                            <td align="center" valign="top">22405387 </td>
                            <td align="center" valign="top">
                                125.00 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405387&amp;SS=1&amp;rand=56573"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1570&amp;paquete=405387&amp;PRINT=Y&amp;rand=36897"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                212 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=64986"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405358&amp;SS=1&amp;rand=20316"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="405358" id="case" class="case">
                                <input type="hidden" name="idstatusproceso405358" value="9">
                                <input type="hidden" name="cliente405358" value="166" readonly="YES">
                                <input type="hidden" name="idempresa405358" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405358&amp;SS=&amp;rand=52444">166</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405358&amp;SS=1&amp;rand=80107">Jonathan
                                    Rodriguez</a></td>
                            <td align="left" valign="top">INDEPENDENCIA</td>
                            <td align="center" valign="top">
                                02/06/2022</td>
                            <td align="center" valign="top"> 48</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405358&amp;SS=1&amp;rand=12806">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=166&amp;paquete=405358&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=72443">Repuesto
                                    Carro / Esmerly</a>
                            </td>
                            <td align="left" valign="top">NOTR2022060212125910-2
                                &nbsp; </td>

                            <td align="center" valign="top">22405358 </td>
                            <td align="center" valign="top">
                                100.00 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=405358&amp;SS=1&amp;rand=77358"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=166&amp;paquete=405358&amp;PRINT=Y&amp;rand=46303"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                213 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=3&amp;&amp;estatusproceso=&amp;rand=62461"
                                    class="flaticon-delivery55"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404842&amp;SS=1&amp;rand=92178"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="404842" id="case" class="case">
                                <input type="hidden" name="idstatusproceso404842" value="9">
                                <input type="hidden" name="cliente404842" value="1158" readonly="YES">
                                <input type="hidden" name="idempresa404842" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404842&amp;SS=&amp;rand=87396">1158</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404842&amp;SS=1&amp;rand=65812">Yasmira
                                    Rivas</a></td>
                            <td align="left" valign="top">OPS MIAMI DROPSHIPPING</td>
                            <td align="center" valign="top">
                                26/05/2022</td>
                            <td align="center" valign="top"> 5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404842&amp;SS=1&amp;rand=27102">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1158&amp;paquete=404842&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=40635">Parte
                                    Repuestp</a>
                            </td>
                            <td align="left" valign="top">9622001900008524261900273412485370
                                &nbsp; </td>

                            <td align="center" valign="top">22404842 </td>
                            <td align="center" valign="top">
                                100 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404842&amp;SS=1&amp;rand=47318"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1158&amp;paquete=404842&amp;PRINT=Y&amp;rand=27703"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                214 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=3&amp;&amp;estatusproceso=&amp;rand=64477"
                                    class="flaticon-delivery55"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404518&amp;SS=1&amp;rand=60722"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="404518" id="case" class="case">
                                <input type="hidden" name="idstatusproceso404518" value="9">
                                <input type="hidden" name="cliente404518" value="1158" readonly="YES">
                                <input type="hidden" name="idempresa404518" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404518&amp;SS=&amp;rand=96473">1158</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404518&amp;SS=1&amp;rand=82240">Yasmira
                                    Rivas</a></td>
                            <td align="left" valign="top">OPS MIAMI DROPSHIPPING</td>
                            <td align="center" valign="top">
                                24/05/2022</td>
                            <td align="center" valign="top"> 2</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404518&amp;SS=1&amp;rand=45125">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1158&amp;paquete=404518&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=85015">Parte
                                    Elect</a>
                            </td>
                            <td align="left" valign="top">1001905183040003316600273360858193
                                &nbsp; </td>

                            <td align="center" valign="top">22404518 </td>
                            <td align="center" valign="top">
                                50 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404518&amp;SS=1&amp;rand=48457"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1158&amp;paquete=404518&amp;PRINT=Y&amp;rand=61314"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                215 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=3&amp;&amp;estatusproceso=&amp;rand=40213"
                                    class="flaticon-delivery55"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404476&amp;SS=1&amp;rand=52011"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="404476" id="case" class="case">
                                <input type="hidden" name="idstatusproceso404476" value="9">
                                <input type="hidden" name="cliente404476" value="1158" readonly="YES">
                                <input type="hidden" name="idempresa404476" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404476&amp;SS=&amp;rand=95071">1158</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404476&amp;SS=1&amp;rand=80954">Yasmira
                                    Rivas</a></td>
                            <td align="left" valign="top">OPS MIAMI DROPSHIPPING</td>
                            <td align="center" valign="top">
                                23/05/2022</td>
                            <td align="center" valign="top"> 3</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404476&amp;SS=1&amp;rand=36971">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1158&amp;paquete=404476&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=51644">Partes</a>
                            </td>
                            <td align="left" valign="top">1Z14V5270315413604
                                &nbsp; </td>

                            <td align="center" valign="top">22404476 </td>
                            <td align="center" valign="top">
                                69.00 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=404476&amp;SS=1&amp;rand=17851"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1158&amp;paquete=404476&amp;PRINT=Y&amp;rand=91958"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                216 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=61961"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=403912&amp;SS=1&amp;rand=60297"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="403912" id="case" class="case">
                                <input type="hidden" name="idstatusproceso403912" value="9">
                                <input type="hidden" name="cliente403912" value="6992" readonly="YES">
                                <input type="hidden" name="idempresa403912" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=403912&amp;SS=&amp;rand=72065">6992</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=403912&amp;SS=1&amp;rand=64769">Heriberto
                                    Cairo</a></td>
                            <td align="left" valign="top">OPS SANTO DOMINGO </td>
                            <td align="center" valign="top">
                                17/05/2022</td>
                            <td align="center" valign="top"> 130</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=403912&amp;SS=1&amp;rand=32740">
                                    5</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6992&amp;paquete=403912&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=49424">Vaso
                                    Plastico Para Gua</a>
                            </td>
                            <td align="left" valign="top">1ZVY77570329288889
                                &nbsp; </td>

                            <td align="center" valign="top">22403912 </td>
                            <td align="center" valign="top">
                                100 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=403912&amp;SS=1&amp;rand=11072"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=6992&amp;paquete=403912&amp;PRINT=Y&amp;rand=85202"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                217 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=1&amp;&amp;estatusproceso=&amp;rand=41603"
                                    class="flaticon-plane7"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=400960&amp;SS=1&amp;rand=88470"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="400960" id="case" class="case">
                                <input type="hidden" name="idstatusproceso400960" value="9">
                                <input type="hidden" name="cliente400960" value="2999" readonly="YES">
                                <input type="hidden" name="idempresa400960" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=400960&amp;SS=&amp;rand=51015">2999</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=400960&amp;SS=1&amp;rand=58707">Vladimir
                                    JimÃÂ©nez</a></td>
                            <td align="left" valign="top">INDEPENDENCIA</td>
                            <td align="center" valign="top">
                                13/04/2022</td>
                            <td align="center" valign="top"> 3</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=400960&amp;SS=1&amp;rand=29105">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2999&amp;paquete=400960&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=88334">Zapatos</a>
                            </td>
                            <td align="left" valign="top">1Z6Y36A10390147726
                                &nbsp; </td>

                            <td align="center" valign="top">22400960 </td>
                            <td align="center" valign="top">
                                55 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=400960&amp;SS=1&amp;rand=76411"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=2999&amp;paquete=400960&amp;PRINT=Y&amp;rand=83583"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr title="Registrado">
                            <td valign="top">
                                218 </td>
                            <td valign="top">

                                <a href="panel.php?OPTIONS=22&amp;SESSION=JqiV,uXYG6UvGXVCqnvv91&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=10&amp;AX=2&amp;MENU2=Paquetes&amp;TIPOENVIO=3&amp;&amp;estatusproceso=&amp;rand=49057"
                                    class="flaticon-delivery55"> </a>
                            </td>
                            <td valign="top"><a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=386870&amp;SS=1&amp;rand=72885"
                                    class="flaticon-baggage21"> </a> </td>
                            <td align="left" valign="top" title="Ops Cargo Y Logistics">
                                <input name="chk[]" type="hidden" value="386870" id="case" class="case">
                                <input type="hidden" name="idstatusproceso386870" value="9">
                                <input type="hidden" name="cliente386870" value="1353" readonly="YES">
                                <input type="hidden" name="idempresa386870" value="52" readonly="YES">
                                <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=386870&amp;SS=&amp;rand=65824">1353</a>
                                <br>
                            </td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=386870&amp;SS=1&amp;rand=84183">Ana
                                    Oscarina Brito Liriano</a></td>
                            <td align="left" valign="top">OPS MIAMI DROPSHIPPING</td>
                            <td align="center" valign="top">
                                10/11/2021</td>
                            <td align="center" valign="top"> 5</td>
                            <td align="center" valign="top">0</td>
                            <td align="center" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=386870&amp;SS=1&amp;rand=57901">
                                    1</a></td>
                            <td align="left" valign="top"> <a
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1353&amp;paquete=386870&amp;MENU_SISTEMA=&amp;empresa=52&amp;rand=14281">Maquillaje</a>
                            </td>
                            <td align="left" valign="top">1009981710290003316600775050363005
                                &nbsp; </td>

                            <td align="center" valign="top">21386870 </td>
                            <td align="center" valign="top">
                                89.00 </td>
                            <td align="center" valign="top">
                                <a class="button edit"
                                    href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=1A&amp;paquete=386870&amp;SS=1&amp;rand=45497"></a>

                                <a href="panel.php?OPTIONS=22&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=10&amp;EDIT=Y&amp;AX=2&amp;cliente=1353&amp;paquete=386870&amp;PRINT=Y&amp;rand=88115"
                                    class="flaticon-barscode" title="Imprimir etiquetas"> </a>
                            </td>
                        </tr>


                        <tr>
                            <td colspan="2" align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td colspan="3" align="left" valign="top">&nbsp;</td>
                            <td align="left" valign="top">&nbsp;</td>
                            <td align="center" valign="top">16986.76 lbs&nbsp;</td>
                            <td align="center" valign="top">45.679&nbsp;</td>
                            <td align="left" valign="top">472</td>
                            <td colspan="2" align="left" valign="top">Total registros : 218 </td>
                        </tr>
                    </tbody>
                </table>
            </form>

        </div>



    </div>
</div>