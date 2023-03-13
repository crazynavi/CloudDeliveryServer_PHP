<div class="body">
    <div class="cont">
        <script type="text/JavaScript">

function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}

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


        <h1>Cobros &gt;&gt; Clientes sin facturar
            <div align="right">

                <form name="form1" id="form1">
                    <label>Oficina</label> <select name="menu1" onchange="MM_jumpMenu('parent',this,0)">
                        <option
                            value="panel.php?OPTIONS=14&amp;AX=9&amp;IDMENU=14&amp;MENU=Notificaciones&amp;MENU_SISTEMA=142>">
                            -- Sin filtro --&gt;</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=1">
                            OPS SANTO DOMINGO </option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=2">
                            SAN FRANCISCO DE MACORIS</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=3">
                            OPS HAITI</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=4">
                            OPS MIAMI DROPSHIPPING</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=5">
                            OPS SANTIAGO DE LOS CABALLEROS RD</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=6">
                            ARROYO HONDO</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=7">
                            JULIETA MORALES</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=8">
                            PLAN COURRIER</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=9">
                            PLAN FREIGHT FORWARDER</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=10">
                            PLAN STORAGE (ALMACENAMIENTO)</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=11">
                            INDEPENDENCIA</option>

                        <option
                            value="panel.php?OPTIONS=80&amp;AX=7&amp;IDMENU=108&amp;MENU=Menu&amp;MENU_SISTEMA=&amp;OFICINA=12">
                            LA VEGA</option>

                    </select>
                    <input type="button" name="Button1" value="Go" onclick="MM_jumpMenuGo('menu1','parent',0)">
                </form>
            </div>
        </h1>

        <table class="list ">
            <tbody>
                <tr>
                    <th align="center" valign="top"> </th>
                    <th align="center" valign="top">Codigo</th>
                    <th align="center" valign="top"> Titular </th>
                    <th align="center" valign="top">Identificación</th>
                    <th align="center" valign="top">Correo electronico </th>
                    <th align="center" valign="top">Oficina </th>
                    <th align="center" valign="top">Paquetes</th>
                    <th align="center" valign="top">Facturar</th>
                </tr>
                <tr>
                    <td align="right" valign="top">1 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7655">7655</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7655&amp;MENU_SISTEMA=">
                                Falco Caribbean Suppliers</a></strong>
                    </td>
                    <td align="left" valign="top">132266781</td>
                    <td align="left" valign="top">ambar2689@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7655','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7655&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">2 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1246">1246</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1246&amp;MENU_SISTEMA=">Abimael
                                Vasquez</a></strong>
                    </td>
                    <td align="left" valign="top">40226318521</td>
                    <td align="left" valign="top">abimaelvasquez1998@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1246','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1246&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">3 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8033">8033</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8033&amp;MENU_SISTEMA=">Adams
                                Santana Paulino</a></strong>
                    </td>
                    <td align="left" valign="top">05601473183</td>
                    <td align="left" valign="top">santanaadams292@gmail.com </td>
                    <td align="left" valign="top">SAN FRANCISCO DE MACORIS </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8033','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8033&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">4 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7684">7684</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7684&amp;MENU_SISTEMA=">Agustin
                                Castro</a></strong>
                    </td>
                    <td align="left" valign="top">00116275405</td>
                    <td align="left" valign="top">productosaca2022@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7684','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7684&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">5 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2830">2830</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2830&amp;MENU_SISTEMA=">Alan
                                Alfonso Jimenez Perez</a></strong>
                    </td>
                    <td align="left" valign="top">00118917632</td>
                    <td align="left" valign="top">a.a.jimenez@hotmail.es </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2830','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2830&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">6 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=251">251</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=251&amp;MENU_SISTEMA=">Alan
                                Corniel</a></strong>
                    </td>
                    <td align="left" valign="top">40213624584</td>
                    <td align="left" valign="top">alancorniel2808@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=251','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=251&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">7 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7028">7028</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7028&amp;MENU_SISTEMA=">Albert
                                Manuel Santos Rodriguez</a></strong>
                    </td>
                    <td align="left" valign="top">40213279868</td>
                    <td align="left" valign="top">albertsantos9808@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7028','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7028&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">8 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3155">3155</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3155&amp;MENU_SISTEMA=">Alberto
                                Colon</a></strong>
                    </td>
                    <td align="left" valign="top">00100287309</td>
                    <td align="left" valign="top">alberto.colon@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3155','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3155&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">9 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2018">2018</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2018&amp;MENU_SISTEMA=">Alejandro
                                Paniagua BÃÂÃÂ¡ez</a></strong>
                    </td>
                    <td align="left" valign="top">40220479808</td>
                    <td align="left" valign="top">incuberservice@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2018','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2018&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">10 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2928">2928</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2928&amp;MENU_SISTEMA=">Alexander
                                FernÃÂ¡ndez Fortuna</a></strong>
                    </td>
                    <td align="left" valign="top">40200366553</td>
                    <td align="left" valign="top">the-dr34m@hotmail.es </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2928','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2928&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">11 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5178">5178</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5178&amp;MENU_SISTEMA=">Alexander
                                Guerrero Ventura</a></strong>
                    </td>
                    <td align="left" valign="top">40223144904</td>
                    <td align="left" valign="top">guerreroventura00@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5178','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5178&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">12 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5747">5747</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5747&amp;MENU_SISTEMA=">Alexander
                                Manuel Cepeda FernÃ¡ndez</a></strong>
                    </td>
                    <td align="left" valign="top">40212213546</td>
                    <td align="left" valign="top">alexander.cepeda001@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5747','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5747&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">13 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1170">1170</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1170&amp;MENU_SISTEMA=">Alexander
                                Valdez</a></strong>
                    </td>
                    <td align="left" valign="top">00118683366</td>
                    <td align="left" valign="top">alexandervaldez25.av@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1170','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1170&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">14 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3233">3233</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3233&amp;MENU_SISTEMA=">Alexandra
                                Martinez De Lara</a></strong>
                    </td>
                    <td align="left" valign="top">04800878508</td>
                    <td align="left" valign="top">martinezal236@yahoo.com </td>
                    <td align="left" valign="top">LA VEGA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3233','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (11)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3233&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">15 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4192">4192</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4192&amp;MENU_SISTEMA=">Alexis
                                Fernandez</a></strong>
                    </td>
                    <td align="left" valign="top">03100040900</td>
                    <td align="left" valign="top">afernandez@softkyrios.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4192','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4192&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">16 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3354">3354</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3354&amp;MENU_SISTEMA=">Alfred
                                Luis Sosa Aquino</a></strong>
                    </td>
                    <td align="left" valign="top">40224657219</td>
                    <td align="left" valign="top">alfre.d@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3354','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3354&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">17 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8786">8786</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8786&amp;MENU_SISTEMA=">Alvaro
                                Alexander Vasquez RodrÃ­guez</a></strong>
                    </td>
                    <td align="left" valign="top">03105270684</td>
                    <td align="left" valign="top">fix646@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8786','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8786&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">18 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6107">6107</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6107&amp;MENU_SISTEMA=">Alwyn
                                Ambiorix Diaz Gardner</a></strong>
                    </td>
                    <td align="left" valign="top">132269535</td>
                    <td align="left" valign="top">foodstuff.rds@gmail.com </td>
                    <td align="left" valign="top">PLAN FREIGHT FORWARDER </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6107','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6107&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">19 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4096">4096</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4096&amp;MENU_SISTEMA=">Amada
                                Encarnacion</a></strong>
                    </td>
                    <td align="left" valign="top">07933369506</td>
                    <td align="left" valign="top">amadafencarnacion@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4096','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4096&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">20 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7469">7469</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7469&amp;MENU_SISTEMA=">Ana
                                Crystal Rivera</a></strong>
                    </td>
                    <td align="left" valign="top">14300013928</td>
                    <td align="left" valign="top">anacrivera2015@gmail.com </td>
                    <td align="left" valign="top">SAN FRANCISCO DE MACORIS </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7469','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7469&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">21 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5479">5479</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5479&amp;MENU_SISTEMA=">Andre
                                Wright</a></strong>
                    </td>
                    <td align="left" valign="top">561655312</td>
                    <td align="left" valign="top">awright14615@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5479','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5479&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">22 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3617">3617</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3617&amp;MENU_SISTEMA=">Angel
                                Santana</a></strong>
                    </td>
                    <td align="left" valign="top">22300913401</td>
                    <td align="left" valign="top">ing.angelsantanarivera@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3617','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3617&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">23 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4464">4464</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4464&amp;MENU_SISTEMA=">Anibal
                                Marcelo De La Cruz Burgos</a></strong>
                    </td>
                    <td align="left" valign="top">40224275830</td>
                    <td align="left" valign="top">marcelodelacruzmarcelo1995@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4464','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4464&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">24 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3124">3124</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3124&amp;MENU_SISTEMA=">Argelis
                                Lopez</a></strong>
                    </td>
                    <td align="left" valign="top">40215635638</td>
                    <td align="left" valign="top">lopez.argenis002@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3124','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3124&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">25 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=867">867</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=867&amp;MENU_SISTEMA=">Argenis
                                Rodriguez</a></strong>
                    </td>
                    <td align="left" valign="top">00119217933</td>
                    <td align="left" valign="top">arodriguez@opscargo.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=867','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (6)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=867&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">26 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6270">6270</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6270&amp;MENU_SISTEMA=">Arnor
                                Dotel</a></strong>
                    </td>
                    <td align="left" valign="top">40224022364</td>
                    <td align="left" valign="top">dotel18@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6270','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6270&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">27 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3792">3792</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3792&amp;MENU_SISTEMA=">Aurora
                                Matias</a></strong>
                    </td>
                    <td align="left" valign="top">40210411159</td>
                    <td align="left" valign="top">matiasrosar09@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3792','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3792&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">28 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5071">5071</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5071&amp;MENU_SISTEMA=">ÃÂngel
                                De La Cruz Bobadilla</a></strong>
                    </td>
                    <td align="left" valign="top">03105602712</td>
                    <td align="left" valign="top">bobadilla191@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5071','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5071&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">29 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6625">6625</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6625&amp;MENU_SISTEMA=">Basner
                                Abiezer Mata Cruz</a></strong>
                    </td>
                    <td align="left" valign="top">40224286852</td>
                    <td align="left" valign="top">basnermata@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6625','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (11)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6625&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">30 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6474">6474</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6474&amp;MENU_SISTEMA=">Benjy
                                Bazile</a></strong>
                    </td>
                    <td align="left" valign="top">PP3639777</td>
                    <td align="left" valign="top">alexiscarlin3@gmail.com </td>
                    <td align="left" valign="top">OPS HAITI </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6474','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6474&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">31 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7181">7181</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7181&amp;MENU_SISTEMA=">Benny
                                Lantigua</a></strong>
                    </td>
                    <td align="left" valign="top">132161459</td>
                    <td align="left" valign="top">info@blantop.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7181','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7181&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">32 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2825">2825</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2825&amp;MENU_SISTEMA=">Bill
                                Aponte</a></strong>
                    </td>
                    <td align="left" valign="top">40226717524</td>
                    <td align="left" valign="top">Bill_aponte_23@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2825','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2825&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">33 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=891">891</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=891&amp;MENU_SISTEMA=">Bily
                                Rodriguez</a></strong>
                    </td>
                    <td align="left" valign="top">00117568691</td>
                    <td align="left" valign="top">rodriguezbilly1702@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=891','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=891&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">34 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4170">4170</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4170&amp;MENU_SISTEMA=">Bladimir
                                Beltre</a></strong>
                    </td>
                    <td align="left" valign="top">22301334151</td>
                    <td align="left" valign="top">100236486bb@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4170','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4170&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">35 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7755">7755</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7755&amp;MENU_SISTEMA=">Bladimir
                                Riveras Reyes</a></strong>
                    </td>
                    <td align="left" valign="top">11800146505</td>
                    <td align="left" valign="top">blady.compras@hotmail.com </td>
                    <td align="left" valign="top">LA VEGA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7755','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7755&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">36 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7093">7093</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7093&amp;MENU_SISTEMA=">Bordados
                                Xavier, Srl</a></strong>
                    </td>
                    <td align="left" valign="top">131752586</td>
                    <td align="left" valign="top">bordadosxavier@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7093','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7093&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">37 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1194">1194</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1194&amp;MENU_SISTEMA=">Breylin
                                Ramos Lantigua</a></strong>
                    </td>
                    <td align="left" valign="top">05601789216</td>
                    <td align="left" valign="top">breylinrl@gmail.com </td>
                    <td align="left" valign="top">SAN FRANCISCO DE MACORIS </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1194','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1194&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">38 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6796">6796</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6796&amp;MENU_SISTEMA=">Bryan
                                Marte</a></strong>
                    </td>
                    <td align="left" valign="top">07100550305</td>
                    <td align="left" valign="top">bryan37marte@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6796','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6796&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">39 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8851">8851</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8851&amp;MENU_SISTEMA=">Camila
                                Esmerlyn Payano Delgado</a></strong>
                    </td>
                    <td align="left" valign="top">40211125295</td>
                    <td align="left" valign="top">camilapayano09@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8851','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8851&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">40 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6789">6789</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6789&amp;MENU_SISTEMA=">Carlos
                                Daniel Montero Reyes</a></strong>
                    </td>
                    <td align="left" valign="top">40227459100</td>
                    <td align="left" valign="top">Carlosdanielmontero1923@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6789','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6789&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">41 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6670">6670</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6670&amp;MENU_SISTEMA=">Carlos
                                Suero</a></strong>
                    </td>
                    <td align="left" valign="top">00117772715</td>
                    <td align="left" valign="top">Bimmerservicerd@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6670','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6670&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">42 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7380">7380</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7380&amp;MENU_SISTEMA=">Carlos
                                Toribio</a></strong>
                    </td>
                    <td align="left" valign="top">00113192694</td>
                    <td align="left" valign="top">toribiocarlos@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7380','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7380&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">43 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7366">7366</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7366&amp;MENU_SISTEMA=">Cesar
                                Carlos Martinez Lopez</a></strong>
                    </td>
                    <td align="left" valign="top">03103650838</td>
                    <td align="left" valign="top">cesarcarlos.martinez20@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7366','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7366&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">44 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6596">6596</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6596&amp;MENU_SISTEMA=">Christopher
                                Javier Lorenzo Ferreyra</a></strong>
                    </td>
                    <td align="left" valign="top">40224025136</td>
                    <td align="left" valign="top">javier02lorenzo@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6596','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6596&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">45 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6271">6271</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6271&amp;MENU_SISTEMA=">Claribel
                                Tolentino</a></strong>
                    </td>
                    <td align="left" valign="top">22300489069</td>
                    <td align="left" valign="top">labebatolentino1922@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6271','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6271&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">46 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=34">34</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=34&amp;MENU_SISTEMA=">Claudimil
                                Nivar</a></strong>
                    </td>
                    <td align="left" valign="top">40224387940</td>
                    <td align="left" valign="top">claudimilnivar@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=34','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=34&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">47 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6540">6540</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6540&amp;MENU_SISTEMA=">Creati
                                Graphics S.r.l</a></strong>
                    </td>
                    <td align="left" valign="top">132409205</td>
                    <td align="left" valign="top">creatigraphicscomp@gmail.com </td>
                    <td align="left" valign="top">SAN FRANCISCO DE MACORIS </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6540','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6540&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">48 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2764">2764</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2764&amp;MENU_SISTEMA=">Cristhian
                                Holguin</a></strong>
                    </td>
                    <td align="left" valign="top">131516157</td>
                    <td align="left" valign="top">cristhianholguin@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2764','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2764&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">49 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6735">6735</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6735&amp;MENU_SISTEMA=">Cristopher
                                Randy Avalo Alvarez</a></strong>
                    </td>
                    <td align="left" valign="top">223000374968</td>
                    <td align="left" valign="top">avalorandy4@gmailcom </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6735','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6735&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">50 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2045">2045</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2045&amp;MENU_SISTEMA=">Crizaidy
                                Valverde</a></strong>
                    </td>
                    <td align="left" valign="top">40200474480</td>
                    <td align="left" valign="top">globoboxrd20@gmail.com </td>
                    <td align="left" valign="top">ARROYO HONDO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2045','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2045&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">51 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1">1</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1&amp;MENU_SISTEMA=">Cuenta
                                General</a></strong>
                    </td>
                    <td align="left" valign="top">131441963</td>
                    <td align="left" valign="top">algenis2020@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (99)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">52 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6087">6087</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6087&amp;MENU_SISTEMA=">Dalky
                                Melendez</a></strong>
                    </td>
                    <td align="left" valign="top">03105251320</td>
                    <td align="left" valign="top">dalkymelendez35@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6087','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6087&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">53 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2500">2500</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2500&amp;MENU_SISTEMA=">Daniely
                                Reyes</a></strong>
                    </td>
                    <td align="left" valign="top">40236782930</td>
                    <td align="left" valign="top">lysreyes.lr@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2500','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2500&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">54 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=229">229</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=229&amp;MENU_SISTEMA=">David
                                Emanuel Cuevas Medina</a></strong>
                    </td>
                    <td align="left" valign="top">40221143445</td>
                    <td align="left" valign="top">davidcuevasmedina@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=229','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=229&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">55 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=9">9</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=9&amp;MENU_SISTEMA=">David
                                RodrÃÂ­guez</a></strong>
                    </td>
                    <td align="left" valign="top">00118959485</td>
                    <td align="left" valign="top">Davidmrrr@hotmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=9','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=9&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">56 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1570">1570</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1570&amp;MENU_SISTEMA=">Denisse
                                Jiret Rodriguez Rodriguez</a></strong>
                    </td>
                    <td align="left" valign="top">40210328759</td>
                    <td align="left" valign="top">denisser799@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1570','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1570&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">57 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3964">3964</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3964&amp;MENU_SISTEMA=">Domingo
                                Alberto Piadosa</a></strong>
                    </td>
                    <td align="left" valign="top">40236381048</td>
                    <td align="left" valign="top">domingoalbertopiadosa0121@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3964','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3964&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">58 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5558">5558</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5558&amp;MENU_SISTEMA=">Domingo
                                Antonio Almonte Almonte</a></strong>
                    </td>
                    <td align="left" valign="top">00109681577</td>
                    <td align="left" valign="top">dalmontea@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5558','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5558&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">59 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7311">7311</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7311&amp;MENU_SISTEMA=">Domingo
                                CÃ©spedes</a></strong>
                    </td>
                    <td align="left" valign="top">000000000000001</td>
                    <td align="left" valign="top">genejimnz@outlook.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7311','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7311&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">60 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3210">3210</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3210&amp;MENU_SISTEMA=">Eddy
                                Antonio Ozoria Gonzalez</a></strong>
                    </td>
                    <td align="left" valign="top">03701202164</td>
                    <td align="left" valign="top">eozoria11@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3210','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3210&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">61 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5279">5279</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5279&amp;MENU_SISTEMA=">Eddy
                                Perdomo</a></strong>
                    </td>
                    <td align="left" valign="top">11800086917</td>
                    <td align="left" valign="top">eddyjpg@hotmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5279','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5279&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">62 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5851">5851</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5851&amp;MENU_SISTEMA=">Edertson
                                Cerne</a></strong>
                    </td>
                    <td align="left" valign="top">SD5343027</td>
                    <td align="left" valign="top">joupagraphicdesign@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5851','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5851&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">63 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6">6</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6&amp;MENU_SISTEMA=">Edgar
                                David</a></strong>
                    </td>
                    <td align="left" valign="top">00117282665</td>
                    <td align="left" valign="top">estebancalzado@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">64 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2261">2261</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2261&amp;MENU_SISTEMA=">Edinson
                                Enmanuel Lebron Medrano</a></strong>
                    </td>
                    <td align="left" valign="top">8293276262</td>
                    <td align="left" valign="top">up_karaoke_@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2261','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2261&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">65 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1663">1663</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1663&amp;MENU_SISTEMA=">Edison
                                Humberto Martinez Ferreras</a></strong>
                    </td>
                    <td align="left" valign="top">40221929777</td>
                    <td align="left" valign="top">edisonmartinez1@windowslive.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1663','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1663&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">66 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4264">4264</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4264&amp;MENU_SISTEMA=">Eduardo
                                De JesÃºs Paredes Ferrera</a></strong>
                    </td>
                    <td align="left" valign="top">04701605521</td>
                    <td align="left" valign="top">edwardoparedes44@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4264','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4264&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">67 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2122">2122</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2122&amp;MENU_SISTEMA=">Edward
                                Gonzalez</a></strong>
                    </td>
                    <td align="left" valign="top">40239142454</td>
                    <td align="left" valign="top">genshoprd@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2122','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2122&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">68 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3315">3315</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3315&amp;MENU_SISTEMA=">Edward
                                Moreta</a></strong>
                    </td>
                    <td align="left" valign="top">40220107219</td>
                    <td align="left" valign="top">mercedespion5@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3315','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3315&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">69 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4782">4782</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4782&amp;MENU_SISTEMA=">Edward
                                Perez</a></strong>
                    </td>
                    <td align="left" valign="top">132314115</td>
                    <td align="left" valign="top">Gallosdelcibao@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4782','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4782&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">70 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5526">5526</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5526&amp;MENU_SISTEMA=">Edwin
                                Alexander Ramirez Tavares</a></strong>
                    </td>
                    <td align="left" valign="top">04800770507</td>
                    <td align="left" valign="top">edwinramireztavares@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5526','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5526&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">71 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8110">8110</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8110&amp;MENU_SISTEMA=">Edwin
                                Almanzar</a></strong>
                    </td>
                    <td align="left" valign="top">40223029246</td>
                    <td align="left" valign="top">edwinalmanzar0203@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8110','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8110&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">72 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8270">8270</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8270&amp;MENU_SISTEMA=">EfraÃ­n
                                Vasquez</a></strong>
                    </td>
                    <td align="left" valign="top">40209498290</td>
                    <td align="left" valign="top">efrav1705@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8270','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8270&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">73 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=9130">9130</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=9130&amp;MENU_SISTEMA=">Eliezer
                                Alvarez</a></strong>
                    </td>
                    <td align="left" valign="top">40215459153</td>
                    <td align="left" valign="top">aroldot2017@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=9130','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=9130&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">74 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1320">1320</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1320&amp;MENU_SISTEMA=">Eloy
                                Perez</a></strong>
                    </td>
                    <td align="left" valign="top">40222285138</td>
                    <td align="left" valign="top">rafa_sp01@hotmail.com </td>
                    <td align="left" valign="top">LA VEGA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1320','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1320&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">75 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2406">2406</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2406&amp;MENU_SISTEMA=">Emeli
                                Santos Torres</a></strong>
                    </td>
                    <td align="left" valign="top">22500186659</td>
                    <td align="left" valign="top">emelisantos468@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2406','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2406&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">76 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7317">7317</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7317&amp;MENU_SISTEMA=">Emmanuel
                                MatÃ­as DomÃ­nguez</a></strong>
                    </td>
                    <td align="left" valign="top">15500056369</td>
                    <td align="left" valign="top">emmanuelmatias2015@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7317','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7317&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">77 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=454">454</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=454&amp;MENU_SISTEMA=">Emmy
                                Franco</a></strong>
                    </td>
                    <td align="left" valign="top">08200264979</td>
                    <td align="left" valign="top">emmycoralysfranco@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=454','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=454&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">78 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=818">818</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=818&amp;MENU_SISTEMA=">Erichs
                                Daniel Hernandez Santos</a></strong>
                    </td>
                    <td align="left" valign="top">40222912970</td>
                    <td align="left" valign="top">erichsdanielhernandez@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=818','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=818&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">79 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=119">119</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=119&amp;MENU_SISTEMA=">Erickson
                                Jorge Duverge Flete</a></strong>
                    </td>
                    <td align="left" valign="top">40224600474</td>
                    <td align="left" valign="top">ericksonduverge@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=119','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=119&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">80 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6547">6547</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6547&amp;MENU_SISTEMA=">Erika
                                Ruiz</a></strong>
                    </td>
                    <td align="left" valign="top">60384554</td>
                    <td align="left" valign="top">erika_ruiz8@hotmail.com </td>
                    <td align="left" valign="top">OPS MIAMI DROPSHIPPING </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6547','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6547&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">81 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6479">6479</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6479&amp;MENU_SISTEMA=">Estefany
                                Carolina Rojas Arias</a></strong>
                    </td>
                    <td align="left" valign="top">40223586229</td>
                    <td align="left" valign="top">estefanycarolinarojasarias@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6479','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6479&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">82 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1834">1834</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1834&amp;MENU_SISTEMA=">Exteniel
                                Feliz</a></strong>
                    </td>
                    <td align="left" valign="top">10700023301</td>
                    <td align="left" valign="top">bussiness.onlyne@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1834','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1834&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">83 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=294">294</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=294&amp;MENU_SISTEMA=">Ezequiel
                                Montero</a></strong>
                    </td>
                    <td align="left" valign="top">00102332947</td>
                    <td align="left" valign="top">exemon23@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=294','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=294&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">84 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4458">4458</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4458&amp;MENU_SISTEMA=">Fabio
                                RamÃ³n DÃ­az Del Rosario</a></strong>
                    </td>
                    <td align="left" valign="top">06800092940</td>
                    <td align="left" valign="top">fabiodiaz240@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4458','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4458&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">85 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8680">8680</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8680&amp;MENU_SISTEMA=">FÃ©lix
                                Antonio SÃ¡nchez</a></strong>
                    </td>
                    <td align="left" valign="top">00119297612</td>
                    <td align="left" valign="top">felixantoniosanchez482@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8680','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8680&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">86 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=223">223</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=223&amp;MENU_SISTEMA=">Feguens
                                Forestal</a></strong>
                    </td>
                    <td align="left" valign="top">CY2942252</td>
                    <td align="left" valign="top">feguensf@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=223','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=223&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">87 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2699">2699</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2699&amp;MENU_SISTEMA=">Fernando
                                Antonio De La Cruz DomÃÂÃÂÃÂÃÂ­nguez</a></strong>
                    </td>
                    <td align="left" valign="top">22400552885</td>
                    <td align="left" valign="top">fadd1990@hotmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2699','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2699&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">88 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1223">1223</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1223&amp;MENU_SISTEMA=">Fernando
                                De Jesus De La Cruz Caceres</a></strong>
                    </td>
                    <td align="left" valign="top">00118898220</td>
                    <td align="left" valign="top">repviciosdelacruz@hotmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1223','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1223&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">89 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=389">389</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=389&amp;MENU_SISTEMA=">Fernando
                                Diaz Nin</a></strong>
                    </td>
                    <td align="left" valign="top">40200717516</td>
                    <td align="left" valign="top">fdodiaznin@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=389','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=389&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">90 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7070">7070</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7070&amp;MENU_SISTEMA=">Fernando
                                Matos</a></strong>
                    </td>
                    <td align="left" valign="top">02000105201</td>
                    <td align="left" valign="top">fernandomatosny@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7070','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7070&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">91 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6832">6832</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6832&amp;MENU_SISTEMA=">Fernando
                                Popa Aquino</a></strong>
                    </td>
                    <td align="left" valign="top">40220834929</td>
                    <td align="left" valign="top">aquinosmart2000@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6832','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6832&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">92 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6073">6073</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6073&amp;MENU_SISTEMA=">Fervin
                                Cuevas Feliz</a></strong>
                    </td>
                    <td align="left" valign="top">01800535658</td>
                    <td align="left" valign="top">fervincuevas04@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6073','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6073&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">93 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5030">5030</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5030&amp;MENU_SISTEMA=">Francis
                                Manuel Sanchez Valerio</a></strong>
                    </td>
                    <td align="left" valign="top">40224490389</td>
                    <td align="left" valign="top">francissanchez799@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5030','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5030&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">94 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4171">4171</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4171&amp;MENU_SISTEMA=">Francisco
                                Sierra</a></strong>
                    </td>
                    <td align="left" valign="top">40214291607</td>
                    <td align="left" valign="top">info@lorandy.co </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4171','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4171&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">95 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=666">666</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=666&amp;MENU_SISTEMA=">Franklyn
                                Alberto De La Cruz Acosta</a></strong>
                    </td>
                    <td align="left" valign="top">09200166479</td>
                    <td align="left" valign="top">mr-acosta1@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=666','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=666&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">96 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6626">6626</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6626&amp;MENU_SISTEMA=">Fredy
                                Jaquez</a></strong>
                    </td>
                    <td align="left" valign="top">40220230474</td>
                    <td align="left" valign="top">fredy4447@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6626','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6626&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">97 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2828">2828</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2828&amp;MENU_SISTEMA=">Gabriel
                                Castro Veras</a></strong>
                    </td>
                    <td align="left" valign="top">40214493906</td>
                    <td align="left" valign="top">gabrielcastroveras@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2828','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2828&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">98 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7191">7191</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7191&amp;MENU_SISTEMA=">Gabriel
                                Cruz Capellan</a></strong>
                    </td>
                    <td align="left" valign="top">40223352739</td>
                    <td align="left" valign="top">Gabrielcruzcapellan@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7191','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7191&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">99 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6083">6083</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6083&amp;MENU_SISTEMA=">George
                                Castillo</a></strong>
                    </td>
                    <td align="left" valign="top">22301139642</td>
                    <td align="left" valign="top">georgecastillo2091@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6083','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6083&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">100 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=12">12</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=12&amp;MENU_SISTEMA=">Geovanne
                                Antonio Rodriguez</a></strong>
                    </td>
                    <td align="left" valign="top">00109274571</td>
                    <td align="left" valign="top">geovanny18@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=12','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=12&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">101 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7750">7750</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7750&amp;MENU_SISTEMA=">Gertrudis
                                MuÃ±oz</a></strong>
                    </td>
                    <td align="left" valign="top">40213529593</td>
                    <td align="left" valign="top">gertrudism16@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7750','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7750&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">102 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=764">764</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=764&amp;MENU_SISTEMA=">Gervania
                                Abreu</a></strong>
                    </td>
                    <td align="left" valign="top">0310522140</td>
                    <td align="left" valign="top">gervaniaabreu0728@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=764','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=764&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">103 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=808">808</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=808&amp;MENU_SISTEMA=">Glenn
                                Holguin</a></strong>
                    </td>
                    <td align="left" valign="top">02700462076</td>
                    <td align="left" valign="top">glennholguin@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=808','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=808&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">104 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7511">7511</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7511&amp;MENU_SISTEMA=">Gregorio
                                De La Cruz</a></strong>
                    </td>
                    <td align="left" valign="top">001113056972</td>
                    <td align="left" valign="top">servicios@innotecgroupsrl.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7511','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7511&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">105 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=925">925</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=925&amp;MENU_SISTEMA=">Gregorio
                                De La Cruz Morel</a></strong>
                    </td>
                    <td align="left" valign="top">00113056972</td>
                    <td align="left" valign="top">gregori24@hotmail.it </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=925','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=925&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">106 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6281">6281</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6281&amp;MENU_SISTEMA=">Gregorio
                                Garcia</a></strong>
                    </td>
                    <td align="left" valign="top">03103657973</td>
                    <td align="left" valign="top">greimy2505@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6281','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6281&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">107 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4122">4122</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4122&amp;MENU_SISTEMA=">Hamilton
                                Mateo</a></strong>
                    </td>
                    <td align="left" valign="top">130763127</td>
                    <td align="left" valign="top">daytonap54@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4122','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4122&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">108 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6133">6133</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6133&amp;MENU_SISTEMA=">Haylander
                                Rosario Torres</a></strong>
                    </td>
                    <td align="left" valign="top">40227949118</td>
                    <td align="left" valign="top">haylander0203@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6133','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6133&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">109 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4095">4095</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4095&amp;MENU_SISTEMA=">Henri
                                Gerardo</a></strong>
                    </td>
                    <td align="left" valign="top">00114012198</td>
                    <td align="left" valign="top">henrygerardo2029@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4095','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4095&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">110 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4808">4808</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4808&amp;MENU_SISTEMA=">Henry
                                Sencion</a></strong>
                    </td>
                    <td align="left" valign="top">00113228274</td>
                    <td align="left" valign="top">h.sencion@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4808','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4808&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">111 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4360">4360</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4360&amp;MENU_SISTEMA=">Idalina
                                Capellan Rojas</a></strong>
                    </td>
                    <td align="left" valign="top">00118415553</td>
                    <td align="left" valign="top">idalia91@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4360','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4360&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">112 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2772">2772</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2772&amp;MENU_SISTEMA=">Impormas
                                Srl</a></strong>
                    </td>
                    <td align="left" valign="top">131512399</td>
                    <td align="left" valign="top">fasla@hot.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2772','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2772&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">113 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2945">2945</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2945&amp;MENU_SISTEMA=">Inoel
                                Rosario Flete</a></strong>
                    </td>
                    <td align="left" valign="top">402194339789</td>
                    <td align="left" valign="top">Inoelslayers@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2945','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2945&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">114 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3052">3052</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3052&amp;MENU_SISTEMA=">Irmenia
                                PeÃ±a Garcia</a></strong>
                    </td>
                    <td align="left" valign="top">22300897240</td>
                    <td align="left" valign="top">irmenia@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3052','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3052&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">115 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=22">22</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=22&amp;MENU_SISTEMA=">Isaac
                                Rodriguez</a></strong>
                    </td>
                    <td align="left" valign="top">22500311570</td>
                    <td align="left" valign="top">driver1.2@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=22','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (7)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=22&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">116 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7610">7610</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7610&amp;MENU_SISTEMA=">Isael
                                Fermin Capellan Valdez</a></strong>
                    </td>
                    <td align="left" valign="top">40232951018</td>
                    <td align="left" valign="top">isaelcapellanlite@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7610','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7610&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">117 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7968">7968</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7968&amp;MENU_SISTEMA=">Javier
                                Murguialday</a></strong>
                    </td>
                    <td align="left" valign="top">132319232</td>
                    <td align="left" valign="top">expertixautomatizacion@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7968','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7968&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">118 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2342">2342</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2342&amp;MENU_SISTEMA=">Jeison
                                Quezada</a></strong>
                    </td>
                    <td align="left" valign="top">40215791738</td>
                    <td align="left" valign="top">jeisonquezada1111@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2342','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2342&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">119 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8273">8273</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8273&amp;MENU_SISTEMA=">Jenny
                                Awilda Morel Plata</a></strong>
                    </td>
                    <td align="left" valign="top">00115413981</td>
                    <td align="left" valign="top">jem.morel@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8273','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8273&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">120 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4040">4040</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4040&amp;MENU_SISTEMA=">Jesus
                                Albert Garcia Reynoso</a></strong>
                    </td>
                    <td align="left" valign="top">09400203452</td>
                    <td align="left" valign="top">albert.ingenier@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4040','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4040&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">121 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7416">7416</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7416&amp;MENU_SISTEMA=">Jeziel
                                Neftali Alvarez Feliz</a></strong>
                    </td>
                    <td align="left" valign="top">02301602484</td>
                    <td align="left" valign="top">jezielnaf@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7416','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7416&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">122 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1502">1502</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1502&amp;MENU_SISTEMA=">Jhon
                                Martinez</a></strong>
                    </td>
                    <td align="left" valign="top">00118427319</td>
                    <td align="left" valign="top">expresscomputer12@hotmail.es </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1502','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1502&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">123 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5378">5378</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5378&amp;MENU_SISTEMA=">Jhonathan
                                Charles</a></strong>
                    </td>
                    <td align="left" valign="top">02301533671</td>
                    <td align="left" valign="top">jhontt53@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5378','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5378&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">124 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5904">5904</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5904&amp;MENU_SISTEMA=">Jhonny
                                Guzman</a></strong>
                    </td>
                    <td align="left" valign="top">08700115457</td>
                    <td align="left" valign="top">s.prevencion@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5904','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5904&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">125 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6970">6970</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6970&amp;MENU_SISTEMA=">Jimmy
                                Lee</a></strong>
                    </td>
                    <td align="left" valign="top">00109192690</td>
                    <td align="left" valign="top">jimmylee@szwinplus.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6970','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6970&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">126 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5601">5601</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5601&amp;MENU_SISTEMA=">Joan
                                Isaac Cuevas Gutierrez</a></strong>
                    </td>
                    <td align="left" valign="top">40222485985</td>
                    <td align="left" valign="top">joanmusicjicg@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5601','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5601&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">127 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4365">4365</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4365&amp;MENU_SISTEMA=">Joel
                                Guzman Brito</a></strong>
                    </td>
                    <td align="left" valign="top">131758772</td>
                    <td align="left" valign="top">joelguzmanbrito@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4365','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4365&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">128 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2994">2994</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2994&amp;MENU_SISTEMA=">Joel
                                Santos</a></strong>
                    </td>
                    <td align="left" valign="top">05401522130</td>
                    <td align="left" valign="top">100242180j@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2994','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (4)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2994&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">129 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6599">6599</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6599&amp;MENU_SISTEMA=">Johana
                                Solano</a></strong>
                    </td>
                    <td align="left" valign="top">124523658</td>
                    <td align="left" valign="top">johasolano22@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6599','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6599&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">130 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5021">5021</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5021&amp;MENU_SISTEMA=">Johanna
                                Mota Echavarria</a></strong>
                    </td>
                    <td align="left" valign="top">00114039589</td>
                    <td align="left" valign="top">johannamota0011@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5021','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5021&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">131 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8577">8577</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8577&amp;MENU_SISTEMA=">John
                                Abujarour</a></strong>
                    </td>
                    <td align="left" valign="top">132130359</td>
                    <td align="left" valign="top">John.abujarour@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8577','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8577&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">132 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4102">4102</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4102&amp;MENU_SISTEMA=">Jonathan
                                Jose Lizardo Parra</a></strong>
                    </td>
                    <td align="left" valign="top">40223152964</td>
                    <td align="left" valign="top">lizardoparra28@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4102','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4102&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">133 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7799">7799</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7799&amp;MENU_SISTEMA=">Jonathan
                                Manuel Castro De Los Santos</a></strong>
                    </td>
                    <td align="left" valign="top">09300469179</td>
                    <td align="left" valign="top">jonathancastro2303@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7799','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7799&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">134 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5449">5449</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5449&amp;MENU_SISTEMA=">Jonathan
                                Maria Parra</a></strong>
                    </td>
                    <td align="left" valign="top">40226420608</td>
                    <td align="left" valign="top">ympcompras@hotmail.com </td>
                    <td align="left" valign="top">SAN FRANCISCO DE MACORIS </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5449','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (4)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5449&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">135 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=166">166</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=166&amp;MENU_SISTEMA=">Jonathan
                                Rodriguez</a></strong>
                    </td>
                    <td align="left" valign="top">40220035477</td>
                    <td align="left" valign="top">JONI25252@HOTMAIL.COM </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=166','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=166&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">136 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2405">2405</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2405&amp;MENU_SISTEMA=">Jorge
                                Alejandro Sosa Salazar</a></strong>
                    </td>
                    <td align="left" valign="top">00107268914</td>
                    <td align="left" valign="top">jorgesosa25@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2405','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2405&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">137 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6025">6025</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6025&amp;MENU_SISTEMA=">Jorge
                                Espitia</a></strong>
                    </td>
                    <td align="left" valign="top">00116831595</td>
                    <td align="left" valign="top">espitia.jorge@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6025','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6025&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">138 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6689">6689</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6689&amp;MENU_SISTEMA=">Jorge
                                Santana</a></strong>
                    </td>
                    <td align="left" valign="top">00118882026</td>
                    <td align="left" valign="top">the_ladies_man3@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6689','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6689&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">139 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4942">4942</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4942&amp;MENU_SISTEMA=">JosÃ©
                                HernÃ¡ndez</a></strong>
                    </td>
                    <td align="left" valign="top">00118475391</td>
                    <td align="left" valign="top">kelvinrmpc@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4942','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4942&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">140 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1195">1195</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1195&amp;MENU_SISTEMA=">JosÃ©
                                Jonas Batista Batista</a></strong>
                    </td>
                    <td align="left" valign="top">40223170024</td>
                    <td align="left" valign="top">batistajonas387@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1195','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1195&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">141 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7735">7735</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7735&amp;MENU_SISTEMA=">JosÃÂ©
                                Yariel RodrÃÂ­guez Liz</a></strong>
                    </td>
                    <td align="left" valign="top">03105750255</td>
                    <td align="left" valign="top">yarielliz05@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7735','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7735&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">142 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1885">1885</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1885&amp;MENU_SISTEMA=">Jose
                                Abel Santos Gomez</a></strong>
                    </td>
                    <td align="left" valign="top">40229716143</td>
                    <td align="left" valign="top">bigescrackxd@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1885','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1885&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">143 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4913">4913</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4913&amp;MENU_SISTEMA=">Jose
                                Alejandro Gomez Valenzuela</a></strong>
                    </td>
                    <td align="left" valign="top">40200507123</td>
                    <td align="left" valign="top">jadengomez0418@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4913','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4913&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">144 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1304">1304</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1304&amp;MENU_SISTEMA=">Jose
                                Armando Mendez</a></strong>
                    </td>
                    <td align="left" valign="top">40214770923</td>
                    <td align="left" valign="top">jmendezfiguereo@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1304','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (9)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1304&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">145 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2037">2037</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2037&amp;MENU_SISTEMA=">Jose
                                Beltre</a></strong>
                    </td>
                    <td align="left" valign="top">02801023595</td>
                    <td align="left" valign="top">joseraul.jrmb@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2037','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2037&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">146 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3253">3253</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3253&amp;MENU_SISTEMA=">Jose
                                Burgos</a></strong>
                    </td>
                    <td align="left" valign="top">00800038671</td>
                    <td align="left" valign="top">soycomosoy008@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3253','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (8)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3253&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">147 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6327">6327</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6327&amp;MENU_SISTEMA=">Jose
                                David Ferreira</a></strong>
                    </td>
                    <td align="left" valign="top">40211054743</td>
                    <td align="left" valign="top">Josedavidferreira12@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6327','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6327&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">148 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6717">6717</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6717&amp;MENU_SISTEMA=">Jose
                                Jaquez</a></strong>
                    </td>
                    <td align="left" valign="top">03600444529</td>
                    <td align="left" valign="top">jairodiscolight@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6717','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6717&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">149 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=23">23</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=23&amp;MENU_SISTEMA=">Jose
                                Miguel Alix</a></strong>
                    </td>
                    <td align="left" valign="top">22500792449</td>
                    <td align="left" valign="top">josuealix@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=23','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=23&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">150 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6751">6751</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6751&amp;MENU_SISTEMA=">Jose
                                Miguel Rodriguez</a></strong>
                    </td>
                    <td align="left" valign="top">11600035122</td>
                    <td align="left" valign="top">josemiguelrodriguez2502@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6751','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6751&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">151 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7130">7130</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7130&amp;MENU_SISTEMA=">Jose
                                Rafael Liranzo Lopez</a></strong>
                    </td>
                    <td align="left" valign="top">40220641753</td>
                    <td align="left" valign="top">jose1991_7@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7130','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7130&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">152 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3581">3581</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3581&amp;MENU_SISTEMA=">Jose
                                Rafael Ortiz</a></strong>
                    </td>
                    <td align="left" valign="top">22400496778</td>
                    <td align="left" valign="top">jose.ortiz.dev@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3581','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3581&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">153 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4362">4362</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4362&amp;MENU_SISTEMA=">Jose
                                Ramon Beltran Marchel</a></strong>
                    </td>
                    <td align="left" valign="top">102832019</td>
                    <td align="left" valign="top">beltran220286@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4362','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4362&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">154 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3488">3488</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3488&amp;MENU_SISTEMA=">Juan
                                Aleudy Diaz</a></strong>
                    </td>
                    <td align="left" valign="top">04702114697</td>
                    <td align="left" valign="top">aleudy1996@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3488','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3488&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">155 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5397">5397</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5397&amp;MENU_SISTEMA=">Juan
                                Carlos Francisco Francisco</a></strong>
                    </td>
                    <td align="left" valign="top">12000004122</td>
                    <td align="left" valign="top">vrcomunicacion@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5397','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5397&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">156 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=585">585</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=585&amp;MENU_SISTEMA=">Juan
                                Carlos Gautreaux</a></strong>
                    </td>
                    <td align="left" valign="top">00118093194</td>
                    <td align="left" valign="top">j_carlxx@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=585','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=585&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">157 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5782">5782</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5782&amp;MENU_SISTEMA=">Juan
                                Carlos Lorenzo Del Rosario</a></strong>
                    </td>
                    <td align="left" valign="top">40219276421</td>
                    <td align="left" valign="top">juancarlos03k@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5782','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5782&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">158 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=916">916</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=916&amp;MENU_SISTEMA=">Juan
                                Feliz Herrera</a></strong>
                    </td>
                    <td align="left" valign="top">00201302247</td>
                    <td align="left" valign="top">juanfelizherrera2@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=916','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=916&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">159 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6831">6831</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6831&amp;MENU_SISTEMA=">Juan
                                Jose HernÃ¡ndez</a></strong>
                    </td>
                    <td align="left" valign="top">05000364322</td>
                    <td align="left" valign="top">andresmooxie06@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6831','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6831&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">160 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6593">6593</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6593&amp;MENU_SISTEMA=">Juan
                                Samuel Crooke Castillo</a></strong>
                    </td>
                    <td align="left" valign="top">40225104153</td>
                    <td align="left" valign="top">patriocrooke@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6593','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6593&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">161 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2614">2614</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2614&amp;MENU_SISTEMA=">Juan
                                Villar</a></strong>
                    </td>
                    <td align="left" valign="top">00117542712</td>
                    <td align="left" valign="top">funny51-barbaraa56@yahoo.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2614','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2614&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">162 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1749">1749</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1749&amp;MENU_SISTEMA=">Julio
                                Arias</a></strong>
                    </td>
                    <td align="left" valign="top">40220015008</td>
                    <td align="left" valign="top">julioarias2306@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1749','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1749&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">163 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7725">7725</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7725&amp;MENU_SISTEMA=">Julio
                                EncarnaciÃ³n Montero</a></strong>
                    </td>
                    <td align="left" valign="top">00118802487</td>
                    <td align="left" valign="top">julio5200@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7725','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7725&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">164 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=978">978</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=978&amp;MENU_SISTEMA=">Julissa
                                Medina</a></strong>
                    </td>
                    <td align="left" valign="top">00118812015</td>
                    <td align="left" valign="top">sjulissa9@gmail.com </td>
                    <td align="left" valign="top">ARROYO HONDO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=978','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=978&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">165 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7320">7320</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7320&amp;MENU_SISTEMA=">Kaholanne
                                Adehelai Karme Augustin</a></strong>
                    </td>
                    <td align="left" valign="top">01169920000100345</td>
                    <td align="left" valign="top">kaholanneaugustin@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7320','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7320&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">166 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7103">7103</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7103&amp;MENU_SISTEMA=">Karen
                                Marte</a></strong>
                    </td>
                    <td align="left" valign="top">40222487726</td>
                    <td align="left" valign="top">karenyanela@live.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7103','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (8)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7103&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">167 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2050">2050</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2050&amp;MENU_SISTEMA=">Karla
                                Collado</a></strong>
                    </td>
                    <td align="left" valign="top">40234253371</td>
                    <td align="left" valign="top">karlacollado@gmail.com </td>
                    <td align="left" valign="top">PLAN COURRIER </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2050','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2050&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">168 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7177">7177</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7177&amp;MENU_SISTEMA=">Kelvin
                                Martinez</a></strong>
                    </td>
                    <td align="left" valign="top">40221564368</td>
                    <td align="left" valign="top">balen4443@gmail.com </td>
                    <td align="left" valign="top">LA VEGA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7177','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7177&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">169 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5193">5193</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5193&amp;MENU_SISTEMA=">Kenndy
                                Claude Jospitre</a></strong>
                    </td>
                    <td align="left" valign="top">Rm5124372</td>
                    <td align="left" valign="top">generaledistribution@hotmail.fr </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5193','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5193&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">170 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6355">6355</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6355&amp;MENU_SISTEMA=">Leandro
                                Rafael Garrido Brador</a></strong>
                    </td>
                    <td align="left" valign="top">01000104354</td>
                    <td align="left" valign="top">leandrogarri2@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6355','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6355&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">171 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2272">2272</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2272&amp;MENU_SISTEMA=">Lilibet
                                Encarnacion Mateo</a></strong>
                    </td>
                    <td align="left" valign="top">00117940593</td>
                    <td align="left" valign="top">expresscomputer123@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2272','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2272&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">172 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2714">2714</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2714&amp;MENU_SISTEMA=">Linkit
                                Solutions Group</a></strong>
                    </td>
                    <td align="left" valign="top">131074006</td>
                    <td align="left" valign="top">jmarte@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2714','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2714&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">173 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5889">5889</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5889&amp;MENU_SISTEMA=">Liz
                                Guzman</a></strong>
                    </td>
                    <td align="left" valign="top">00118976729</td>
                    <td align="left" valign="top">l.adaguzman@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5889','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5889&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">174 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5901">5901</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5901&amp;MENU_SISTEMA=">Lorena
                                Riveras</a></strong>
                    </td>
                    <td align="left" valign="top">40228402315</td>
                    <td align="left" valign="top">lorenariverabautista@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5901','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5901&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">175 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8299">8299</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8299&amp;MENU_SISTEMA=">Lorenzo
                                Aquino MÃ©ndez FÃ©liz</a></strong>
                    </td>
                    <td align="left" valign="top">07600181684</td>
                    <td align="left" valign="top">lorenzoarquitecto@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8299','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8299&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">176 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2358">2358</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2358&amp;MENU_SISTEMA=">Lorenzo
                                GutiÃ©rrez</a></strong>
                    </td>
                    <td align="left" valign="top">00109582957</td>
                    <td align="left" valign="top">eurocoches@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2358','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2358&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">177 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7627">7627</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7627&amp;MENU_SISTEMA=">Luis
                                Cruz Auto Import Y Repuestos Srl Cruz Contreas</a></strong>
                    </td>
                    <td align="left" valign="top">131761356</td>
                    <td align="left" valign="top">luisalberto1986@live.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7627','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7627&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">178 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8698">8698</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8698&amp;MENU_SISTEMA=">Luis
                                Manuel PeÃ±a</a></strong>
                    </td>
                    <td align="left" valign="top">40210016115</td>
                    <td align="left" valign="top">pluismanuel184@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8698','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8698&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">179 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3665">3665</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3665&amp;MENU_SISTEMA=">Luis
                                Miguel Santana Peralta</a></strong>
                    </td>
                    <td align="left" valign="top">05401266423</td>
                    <td align="left" valign="top">drluissantana@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3665','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3665&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">180 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=828">828</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=828&amp;MENU_SISTEMA=">Luis
                                Miguel Vargas NÃÂÃÂºÃÂÃÂ±ez</a></strong>
                    </td>
                    <td align="left" valign="top">03105637247</td>
                    <td align="left" valign="top">lmv0619@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=828','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=828&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">181 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2952">2952</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2952&amp;MENU_SISTEMA=">Luis
                                Quevedo</a></strong>
                    </td>
                    <td align="left" valign="top">22300135187</td>
                    <td align="left" valign="top">quevedoeljefe@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2952','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2952&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">182 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6415">6415</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6415&amp;MENU_SISTEMA=">Luis
                                Quevedo</a></strong>
                    </td>
                    <td align="left" valign="top">131590332</td>
                    <td align="left" valign="top">l.quevedoenc@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6415','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6415&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">183 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3081">3081</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3081&amp;MENU_SISTEMA=">Luskari
                                Tejeda</a></strong>
                    </td>
                    <td align="left" valign="top">40239398106</td>
                    <td align="left" valign="top">luskari_4@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3081','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3081&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">184 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3271">3271</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3271&amp;MENU_SISTEMA=">Luz
                                Clara GuzmÃ¡n</a></strong>
                    </td>
                    <td align="left" valign="top">40210117186</td>
                    <td align="left" valign="top">luzclaritaguzman1327@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3271','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3271&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">185 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6993">6993</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6993&amp;MENU_SISTEMA=">Magdeline
                                Valerio</a></strong>
                    </td>
                    <td align="left" valign="top">40223090552</td>
                    <td align="left" valign="top">valeriomadelin30@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6993','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6993&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">186 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6562">6562</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6562&amp;MENU_SISTEMA=">Manuel
                                Matos</a></strong>
                    </td>
                    <td align="left" valign="top">00111704136</td>
                    <td align="left" valign="top">grupomeileedi@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6562','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6562&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">187 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1263">1263</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1263&amp;MENU_SISTEMA=">Manuel
                                Perez</a></strong>
                    </td>
                    <td align="left" valign="top">00104586920</td>
                    <td align="left" valign="top">elbarbero0746@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1263','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1263&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">188 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2030">2030</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2030&amp;MENU_SISTEMA=">Maria
                                Abreu</a></strong>
                    </td>
                    <td align="left" valign="top">40209576905</td>
                    <td align="left" valign="top">mariabeth0503@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2030','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2030&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">189 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6823">6823</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6823&amp;MENU_SISTEMA=">Maria
                                Carolina Heredia Arteaga</a></strong>
                    </td>
                    <td align="left" valign="top">058951662</td>
                    <td align="left" valign="top">mcheredia16@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6823','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6823&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">190 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7877">7877</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7877&amp;MENU_SISTEMA=">Maria
                                Magdalena Ramos Franco</a></strong>
                    </td>
                    <td align="left" valign="top">11600033739</td>
                    <td align="left" valign="top">mariame1215r@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7877','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7877&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">191 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6385">6385</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6385&amp;MENU_SISTEMA=">Maria
                                Reyna Ferrando Sanchez</a></strong>
                    </td>
                    <td align="left" valign="top">22301274092</td>
                    <td align="left" valign="top">mariaferrando1@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6385','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6385&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">192 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3072">3072</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3072&amp;MENU_SISTEMA=">Maribel
                                Del Carmen Acosta Ovalle</a></strong>
                    </td>
                    <td align="left" valign="top">03103002733</td>
                    <td align="left" valign="top">maribelcacosta@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3072','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3072&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">193 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6826">6826</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6826&amp;MENU_SISTEMA=">Maritza
                                Merizalde</a></strong>
                    </td>
                    <td align="left" valign="top">0909330292</td>
                    <td align="left" valign="top">maritzamerizalden@gmail.com </td>
                    <td align="left" valign="top">OPS MIAMI DROPSHIPPING </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6826','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (6)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6826&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">194 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7115">7115</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7115&amp;MENU_SISTEMA=">Massiel
                                Cruz Rodriguez</a></strong>
                    </td>
                    <td align="left" valign="top">40220081406</td>
                    <td align="left" valign="top">innotecgroupsrl@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7115','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7115&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">195 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2873">2873</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2873&amp;MENU_SISTEMA=">Miguel
                                Manzano Reyes</a></strong>
                    </td>
                    <td align="left" valign="top">40224308359</td>
                    <td align="left" valign="top">yunior.mmr@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2873','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2873&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">196 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4966">4966</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4966&amp;MENU_SISTEMA=">Mildred
                                Esperanza Padilla Perez</a></strong>
                    </td>
                    <td align="left" valign="top">40228159139</td>
                    <td align="left" valign="top">mildredesperanzapadilla00@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4966','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4966&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">197 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5262">5262</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5262&amp;MENU_SISTEMA=">Miranda
                                Moronta Moncion</a></strong>
                    </td>
                    <td align="left" valign="top">40218249486</td>
                    <td align="left" valign="top">mirandamoronta05@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5262','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (4)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5262&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">198 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3386">3386</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3386&amp;MENU_SISTEMA=">Morelis
                                Enrique Duval Collado</a></strong>
                    </td>
                    <td align="left" valign="top">03105606762</td>
                    <td align="left" valign="top">morelisduval@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3386','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3386&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">199 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7964">7964</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7964&amp;MENU_SISTEMA=">Naoki
                                Javier Shiguetome RodrÃ­guez</a></strong>
                    </td>
                    <td align="left" valign="top">04400195048</td>
                    <td align="left" valign="top">naokishiguetome@gmail.com </td>
                    <td align="left" valign="top">LA VEGA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7964','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7964&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">200 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8469">8469</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8469&amp;MENU_SISTEMA=">Neftali
                                Marte Santos</a></strong>
                    </td>
                    <td align="left" valign="top">04800888143</td>
                    <td align="left" valign="top">naftaly27@yahoo.com </td>
                    <td align="left" valign="top">LA VEGA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8469','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8469&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">201 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5980">5980</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5980&amp;MENU_SISTEMA=">Nelmari
                                Cuevas Polanco</a></strong>
                    </td>
                    <td align="left" valign="top">40213468818</td>
                    <td align="left" valign="top">nelmaripolanco4@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5980','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5980&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">202 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1000">1000</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1000&amp;MENU_SISTEMA=">Nicaurys
                                Guzman</a></strong>
                    </td>
                    <td align="left" valign="top">22400241422</td>
                    <td align="left" valign="top">niki1809@hotmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1000','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1000&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">203 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8373">8373</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8373&amp;MENU_SISTEMA=">Nicole
                                Aimee Baez Ortiz</a></strong>
                    </td>
                    <td align="left" valign="top">00119523678</td>
                    <td align="left" valign="top">nicoleaimeebaez@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8373','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8373&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">204 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3098">3098</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3098&amp;MENU_SISTEMA=">Niurka
                                GonzÃ¡lez</a></strong>
                    </td>
                    <td align="left" valign="top">07300010829</td>
                    <td align="left" valign="top">ngvargas16@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3098','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3098&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">205 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1001">1001</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1001&amp;MENU_SISTEMA=">Omar
                                Leonardo Perez</a></strong>
                    </td>
                    <td align="left" valign="top">00108330937</td>
                    <td align="left" valign="top">VA.CONCEPT@YAHOO.COM </td>
                    <td align="left" valign="top">JULIETA MORALES </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1001','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1001&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">206 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=894">894</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=894&amp;MENU_SISTEMA=">Opam
                                Cargo Courrier</a></strong>
                    </td>
                    <td align="left" valign="top">130796017</td>
                    <td align="left" valign="top">ARODRIGUEZ@OPSCARGO.COM </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=894','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=894&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">207 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8500">8500</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8500&amp;MENU_SISTEMA=">Patrizia
                                Mirabile</a></strong>
                    </td>
                    <td align="left" valign="top">40232279907</td>
                    <td align="left" valign="top">patriziasubervi@outlook.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8500','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8500&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">208 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=213">213</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=213&amp;MENU_SISTEMA=">Priscila
                                Kranwinkel</a></strong>
                    </td>
                    <td align="left" valign="top">00115128233</td>
                    <td align="left" valign="top">pkranwinkel@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=213','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=213&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">209 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6728">6728</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6728&amp;MENU_SISTEMA=">Rafael
                                Garcia</a></strong>
                    </td>
                    <td align="left" valign="top">00300494929</td>
                    <td align="left" valign="top">eithasebastian032021@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6728','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6728&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">210 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6346">6346</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6346&amp;MENU_SISTEMA=">Rafael
                                Ramos</a></strong>
                    </td>
                    <td align="left" valign="top">05601613036</td>
                    <td align="left" valign="top">rafaelrc22@hotmail.com </td>
                    <td align="left" valign="top">SAN FRANCISCO DE MACORIS </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6346','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6346&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">211 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5536">5536</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5536&amp;MENU_SISTEMA=">Ramona
                                Rosabel Guaba</a></strong>
                    </td>
                    <td align="left" valign="top">00110104635</td>
                    <td align="left" valign="top">diannyaponte60@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5536','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5536&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">212 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8413">8413</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8413&amp;MENU_SISTEMA=">Raynier
                                Santiago Suriel NuÃÂÃÂÃÂÃÂ±ez</a></strong>
                    </td>
                    <td align="left" valign="top">40222649192</td>
                    <td align="left" valign="top">rayniers94@gmail.com </td>
                    <td align="left" valign="top">LA VEGA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8413','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8413&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">213 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1406">1406</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1406&amp;MENU_SISTEMA=">Reinaldo
                                Gaitan</a></strong>
                    </td>
                    <td align="left" valign="top">G356730740450</td>
                    <td align="left" valign="top">INFO@PBLLOGISTIC.COM </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1406','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1406&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">214 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4199">4199</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4199&amp;MENU_SISTEMA=">Reynaldo
                                Trinidad</a></strong>
                    </td>
                    <td align="left" valign="top">02700449990</td>
                    <td align="left" valign="top">arq.reynaldotrinidad@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4199','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4199&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">215 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6679">6679</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6679&amp;MENU_SISTEMA=">Rikelme
                                Luciano Grangerard</a></strong>
                    </td>
                    <td align="left" valign="top">40214816841</td>
                    <td align="left" valign="top">rikelmeluciano16@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6679','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6679&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">216 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7347">7347</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7347&amp;MENU_SISTEMA=">Roberto
                                Carlos Herrera Herrera</a></strong>
                    </td>
                    <td align="left" valign="top">40223935483</td>
                    <td align="left" valign="top">theroberto2011@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7347','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7347&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">217 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8363">8363</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8363&amp;MENU_SISTEMA=">Roberto
                                Reinoso</a></strong>
                    </td>
                    <td align="left" valign="top">05100204253</td>
                    <td align="left" valign="top">robertoreynoso4@hotmail.com </td>
                    <td align="left" valign="top">LA VEGA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8363','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8363&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">218 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2770">2770</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2770&amp;MENU_SISTEMA=">Rodolfo
                                Ortiz</a></strong>
                    </td>
                    <td align="left" valign="top">08400072925</td>
                    <td align="left" valign="top">595@hfcnc.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2770','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2770&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">219 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6273">6273</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6273&amp;MENU_SISTEMA=">Ronny
                                Gabriel Rodriguez Reyes</a></strong>
                    </td>
                    <td align="left" valign="top">40225510201</td>
                    <td align="left" valign="top">ronnyreyes142@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6273','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6273&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">220 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=445">445</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=445&amp;MENU_SISTEMA=">Rosanna
                                Medina Monegro</a></strong>
                    </td>
                    <td align="left" valign="top">22400304337</td>
                    <td align="left" valign="top">keidynicole@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=445','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=445&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">221 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7770">7770</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7770&amp;MENU_SISTEMA=">Rosdania
                                Tavarez</a></strong>
                    </td>
                    <td align="left" valign="top">40233794060</td>
                    <td align="left" valign="top">laroyacevedo@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7770','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7770&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">222 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2079">2079</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2079&amp;MENU_SISTEMA=">Ruth
                                Enelfri MejÃ­a A Reyes</a></strong>
                    </td>
                    <td align="left" valign="top">22301642041</td>
                    <td align="left" valign="top">ruthenelfri.mejia@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2079','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2079&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">223 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2138">2138</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2138&amp;MENU_SISTEMA=">Sandro
                                Encarnacion</a></strong>
                    </td>
                    <td align="left" valign="top">00112634407</td>
                    <td align="left" valign="top">suplinatec22@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2138','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2138&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">224 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5450">5450</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5450&amp;MENU_SISTEMA=">Santo
                                Guerrero</a></strong>
                    </td>
                    <td align="left" valign="top">00111214755</td>
                    <td align="left" valign="top">alexisaguerrero@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5450','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5450&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">225 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6413">6413</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6413&amp;MENU_SISTEMA=">Shamuel
                                Perez</a></strong>
                    </td>
                    <td align="left" valign="top">00118710359</td>
                    <td align="left" valign="top">solucioneswebfp@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6413','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6413&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">226 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2">2</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2&amp;MENU_SISTEMA=">Sin
                                Identificar Sin Identificar</a></strong>
                    </td>
                    <td align="left" valign="top">876939393831</td>
                    <td align="left" valign="top">trafico@opscargo.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">227 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6842">6842</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6842&amp;MENU_SISTEMA=">Socorro
                                Perez</a></strong>
                    </td>
                    <td align="left" valign="top">03102265299</td>
                    <td align="left" valign="top">ing.enmanuelrp30@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6842','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6842&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">228 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8487">8487</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8487&amp;MENU_SISTEMA=">Steven
                                NÃºÃ±ez Aquino</a></strong>
                    </td>
                    <td align="left" valign="top">40229952995</td>
                    <td align="left" valign="top">stevenna030@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8487','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8487&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">229 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8900">8900</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8900&amp;MENU_SISTEMA=">Suze
                                Thevenin</a></strong>
                    </td>
                    <td align="left" valign="top">004672935</td>
                    <td align="left" valign="top">Tsuze04@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8900','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8900&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">230 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6941">6941</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6941&amp;MENU_SISTEMA=">Tania
                                Michelle Cabrera Cruz</a></strong>
                    </td>
                    <td align="left" valign="top">40240596474</td>
                    <td align="left" valign="top">cabreramichelle237@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6941','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6941&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">231 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4488">4488</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4488&amp;MENU_SISTEMA=">Taylor
                                Peralta</a></strong>
                    </td>
                    <td align="left" valign="top">130591962</td>
                    <td align="left" valign="top">tperalta@trservicios.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4488','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4488&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">232 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7984">7984</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7984&amp;MENU_SISTEMA=">VÃ­ctor
                                JesÃºs Acosta Robles</a></strong>
                    </td>
                    <td align="left" valign="top">15500077589</td>
                    <td align="left" valign="top">ugasu1022@gmail.com </td>
                    <td align="left" valign="top">SAN FRANCISCO DE MACORIS </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7984','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7984&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">233 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5726">5726</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5726&amp;MENU_SISTEMA=">Wagner
                                Gallardo</a></strong>
                    </td>
                    <td align="left" valign="top">00117685271</td>
                    <td align="left" valign="top">wagner-rgp@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5726','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5726&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">234 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4260">4260</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4260&amp;MENU_SISTEMA=">Waiker
                                Andy Soriano Isabel</a></strong>
                    </td>
                    <td align="left" valign="top">40225277413</td>
                    <td align="left" valign="top">sorianowaiker@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4260','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4260&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">235 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=3134">3134</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3134&amp;MENU_SISTEMA=">Waldo
                                Paulino Santos</a></strong>
                    </td>
                    <td align="left" valign="top">03701205886</td>
                    <td align="left" valign="top">waldito01@icloud.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=3134','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=3134&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">236 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6384">6384</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6384&amp;MENU_SISTEMA=">Walter
                                David Ortiz Taveras</a></strong>
                    </td>
                    <td align="left" valign="top">00117693028</td>
                    <td align="left" valign="top">dannycuellob1@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6384','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6384&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">237 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1684">1684</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1684&amp;MENU_SISTEMA=">Wascar
                                Robles</a></strong>
                    </td>
                    <td align="left" valign="top">00116784265</td>
                    <td align="left" valign="top">wascar.robles@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1684','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1684&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">238 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6391">6391</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6391&amp;MENU_SISTEMA=">Wendy
                                Massiel Mota Aybar</a></strong>
                    </td>
                    <td align="left" valign="top">132318757</td>
                    <td align="left" valign="top">wendymota80@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6391','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6391&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">239 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7033">7033</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7033&amp;MENU_SISTEMA=">Wilkinia
                                Castro</a></strong>
                    </td>
                    <td align="left" valign="top">40221415975</td>
                    <td align="left" valign="top">wilkikiamcc@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7033','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7033&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">240 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=169">169</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=169&amp;MENU_SISTEMA=">William
                                Henriquez</a></strong>
                    </td>
                    <td align="left" valign="top">05601779472</td>
                    <td align="left" valign="top">wiliam_henriquez24@hotmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=169','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=169&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">241 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8403">8403</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8403&amp;MENU_SISTEMA=">Wilson
                                Minaya</a></strong>
                    </td>
                    <td align="left" valign="top">40215187326</td>
                    <td align="left" valign="top">wilsondariel01@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8403','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8403&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">242 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=7720">7720</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7720&amp;MENU_SISTEMA=">Wilson
                                Ventura</a></strong>
                    </td>
                    <td align="left" valign="top">03800134110</td>
                    <td align="left" valign="top">wilson2130@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=7720','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=7720&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">243 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8337">8337</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8337&amp;MENU_SISTEMA=">Windsor
                                VÃ¡squez</a></strong>
                    </td>
                    <td align="left" valign="top">07800015583</td>
                    <td align="left" valign="top">cavasglobalsolution@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8337','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8337&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">244 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6328">6328</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6328&amp;MENU_SISTEMA=">Yacel
                                MarÃ­a Lopez Diaz</a></strong>
                    </td>
                    <td align="left" valign="top">03200377152</td>
                    <td align="left" valign="top">dlopez.yacel@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6328','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6328&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">245 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6857">6857</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6857&amp;MENU_SISTEMA=">Yamin
                                Gil Solano</a></strong>
                    </td>
                    <td align="left" valign="top">40224929345</td>
                    <td align="left" valign="top">yazmingilsolano1995@icloud.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6857','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6857&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">246 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=1158">1158</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1158&amp;MENU_SISTEMA=">Yasmira
                                Rivas</a></strong>
                    </td>
                    <td align="left" valign="top">9319035</td>
                    <td align="left" valign="top">lemoad6102@gmail.com </td>
                    <td align="left" valign="top">OPS MIAMI DROPSHIPPING </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=1158','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=1158&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">247 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4762">4762</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4762&amp;MENU_SISTEMA=">Yenibeth
                                Del Valle Aparcedo Escalona</a></strong>
                    </td>
                    <td align="left" valign="top">074288470</td>
                    <td align="left" valign="top">aparcedoyenibeth@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4762','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4762&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">248 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=8793">8793</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8793&amp;MENU_SISTEMA=">Yerald
                                Anthony Tamarez Acosta</a></strong>
                    </td>
                    <td align="left" valign="top">40224927919</td>
                    <td align="left" valign="top">anthonytamarez@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=8793','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=8793&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">249 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=5621">5621</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5621&amp;MENU_SISTEMA=">Yerson
                                Vasquez</a></strong>
                    </td>
                    <td align="left" valign="top">40220400846</td>
                    <td align="left" valign="top">eyeisonvasquez@hotmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=5621','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (3)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=5621&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">250 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2366">2366</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2366&amp;MENU_SISTEMA=">Yesenia
                                LucÃ­a Mojica RodrÃ­guez</a></strong>
                    </td>
                    <td align="left" valign="top">02800751543</td>
                    <td align="left" valign="top">nechalyneyelis@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2366','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2366&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">251 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=10">10</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=10&amp;MENU_SISTEMA=">Ygnacio
                                De La Rosa</a></strong>
                    </td>
                    <td align="left" valign="top">04701986996</td>
                    <td align="left" valign="top">ygnaciodm@gmail.com </td>
                    <td align="left" valign="top">INDEPENDENCIA </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=10','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (2)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=10&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">252 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2244">2244</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2244&amp;MENU_SISTEMA=">Yhoryi
                                Jose RamiÂ­rez Romero</a></strong>
                    </td>
                    <td align="left" valign="top">01001038684</td>
                    <td align="left" valign="top">yhoryijoseramirezromero@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2244','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2244&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">253 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=9354">9354</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=9354&amp;MENU_SISTEMA=">Yissell
                                Francisca Zarzuela Espinal</a></strong>
                    </td>
                    <td align="left" valign="top">40209032875</td>
                    <td align="left" valign="top">yzarzuelaespinal@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=9354','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=9354&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">254 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=6559">6559</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6559&amp;MENU_SISTEMA=">Yodalberth
                                Pena Baez</a></strong>
                    </td>
                    <td align="left" valign="top">4020050263</td>
                    <td align="left" valign="top">yodalberth@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=6559','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=6559&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">255 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=4795">4795</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4795&amp;MENU_SISTEMA=">Yojansi
                                Franco</a></strong>
                    </td>
                    <td align="left" valign="top">40225671599</td>
                    <td align="left" valign="top">francoyojansi@gmail.com </td>
                    <td align="left" valign="top">OPS SANTO DOMINGO </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=4795','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=4795&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


                <tr>
                    <td align="right" valign="top">256 </td>
                    <td align="left" valign="top"><a
                            href="panel.php?OPTIONS=80&amp;MENU=Menu&amp;MENU1=&amp;IDMENU=108&amp;EDIT=Y&amp;AX=7&amp;cliente=2649">2649</a>
                    </td>
                    <td width="12%" align="left" valign="top">
                        <strong><a
                                href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2649&amp;MENU_SISTEMA=">Yulissa
                                Masiel RodrÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂÃÂ­guez De
                                Leon</a></strong>
                    </td>
                    <td align="left" valign="top">40210068462</td>
                    <td align="left" valign="top">rodriguezjulissa952@gmail.com </td>
                    <td align="left" valign="top">OPS SANTIAGO DE LOS CABALLEROS RD </td>
                    <td align="center" valign="top">
                        <a href="#"
                            onclick="window.open('view.php?VIEW=REP_PA_CLI&amp;cliente=2649','popuppage','width=800,height=500,top=100,left=250, scrollbars=yes, resizable=yes');">Ver
                            paquetes (1)</a>
                    </td>
                    <td align="center" valign="top">


                        <a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=2649&amp;MENU_SISTEMA="
                            class="boton gree">Seleccionar</a>

                    </td>
                </tr>


            </tbody>
        </table>

        <table width="98%" border="0" align="center" class="lista">
            <tbody>
                <tr>
                    <td align="left"><strong>Total cliente : 256&nbsp;</strong> <strong></strong><strong> </strong></td>
                </tr>
            </tbody>
        </table>


        <datalist id="CLIENTES">
        </datalist>












    </div>
</div>