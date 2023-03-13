<div class="body">
    <div class="cont">
        <h1>Generar Factura</h1>
        <div class="body">
            <div class="cont">
                <div class="module-menu">

                    <div class="menu">
                        <h2>Facturas</h2>
                        <div class="nav-v">
                            <ul>
                                <li><a href="panel.php?OPTIONS=80&amp;AX=33&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=487&amp;MENU_SISTEMA=#"
                                        class="flaticon-dollar6">Consolidado</a></li>
                                <li><a href="panel.php?OPTIONS=80&amp;AX=33x&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=487&amp;MENU_SISTEMA=#"
                                        class="flaticon-dollar6">Ges. Aduanal</a></li>
                                <li><a href="panel.php?OPTIONS=80&amp;AX=33y&amp;IDMENU=108&amp;MENU=Menu&amp;cliente=487&amp;MENU_SISTEMA=#"
                                        class="flaticon-dollar6">Expreso</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="all-cont">
                    <div class="toolbar">
                        <div class="nav-h left">
                            <ul>
                                <li><a class="flaticon-back57"
                                        href="panel.php?OPTIONS=80&amp;SESSION=jilN8nj913b7yWHBFmfaI0&amp;IDS=40&amp;MENU=Menu&amp;IDMENU=25&amp;AX=33&amp;MENU2=Facturar">Retornar
                                        Atras</a></li>
                                <li><a class="flaticon-triangular42" href="javascript:history.go(0);">Actualizar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="toolbar-item-form right">
                        </div>
                    </div>
                    <form action="panel.php" enctype="multipart/form-data" method="post" autocomplete="off">

                        <div class="row div">
                            <div class="col2">
                                <h2>Buscar cliente CONTADO</h2>
                                <div class="row-line">
                                    <span class="label">Codigo</span>
                                    <span class="details">

                                        <input name="codigob" type="text" class="buscador" id="codigob" value="-"
                                            placeholder="CODIGO-00" list="CLIENTES" autocomplete="off">
                                    </span>
                                </div>
                                <div class="row-line">
                                    <span class="label">Nombre</span>
                                    <span class="details">
                                        <input name="nombreb" type="text" class="buscador" id="nombreb"
                                            placeholder="NOMBRE Y APELLIDO" list="CLIENTES" autocomplete="off">
                                    </span>
                                </div>

                                <div class="row-line">
                                    <span class="label">Idenficacion</span>
                                    <span class="details">
                                        <input name="identificacionb" type="text" class="buscador" id="identificacionb"
                                            placeholder="000-0000000-0 " list="CLIENTES" autocomplete="off">
                                    </span>
                                </div>

                                <div class="row-line">
                                    <span class="label">Telefono</span>
                                    <span class="details">
                                        <input name="telefonob" type="text" class="buscador" id="telefonob"
                                            placeholder="99999999" list="CLIENTES" autocomplete="off">
                                    </span>
                                </div>
                                <div class="row-line">
                                    <span class="label">&nbsp; </span>
                                    <span class="details">
                                        <input name="submit" type="submit" class="buscador" value="Buscar">
                                    </span>
                                </div>
                            </div>
                            <div class="col2">
                                <h2>Notas a tener pendiente</h2>
                                <div class="row-line">
                                    <span class="label">Nombre</span>
                                    <span class="details">
                                        <span>
                                            Busque el cliente por uno de los criterios permitidos, luego presione
                                            Buscar, si el cliente tiene paquetes disponibles para entrega se le abrira
                                            la pantalla de facturar de lo contrario le mostrara un mensaje.
                                        </span>

                                    </span>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="id_cliente" value="" readonly="YES">
                        <input type="hidden" name="id_cliente_tmp" value="" readonly="YES">
                        <input type="hidden" name="OPTIONS" value="80" readonly="YES">
                        <input type="hidden" name="MENU" value="Menu" readonly="YES">
                        <input type="hidden" name="MENU1" value="" readonly="YES">
                        <input type="hidden" name="IDMENU" value="25" readonly="YES">
                        <input type="hidden" name="AX" value="33" readonly="YES">
                        <input type="hidden" name="EDIT" value="" readonly="YES">
                        <input type="hidden" name="cliente" value="" readonly="YES">
                        <input type="hidden" name="busqueda" value="1" readonly="YES">
                        <input type="hidden" name="MENU_SISTEMA" value="" readonly="YES">
                    </form>
                    <datalist id="listretirados">
                        <option value="">
                        </option>
                    </datalist>
                </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="js/jquery.validate.min.js"></script>
            <script src="js/app.js"></script>
        </div>
    </div>
</div>