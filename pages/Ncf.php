<?php
include_once('inc/header.php');
?>
<div class="act-nav">
        <div class="nav-h left">
                <ul>
                        <li class="blue actMenu"><a class="flaticon-eye130" href="#">Ncf</a>
                                <ul>

                                        <li><a class="flaticon-stats9"
                                                        href="?OPTIONS=39&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Dashboard&amp;IDMENU=39">Dashboard</a>
                                        </li>


                                        <li><a class="flaticon-internet17"
                                                        href="?OPTIONS=5&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Clientes&amp;IDMENU=5">Clientes</a>
                                        </li>


                                        <li><a class="flaticon-airplane68"
                                                        href="?OPTIONS=8&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Aereo&amp;IDMENU=8">Aereo</a>
                                        </li>


                                        <li><a class="flaticon-dollar6"
                                                        href="?OPTIONS=80&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Cobros&amp;IDMENU=80">Cobros</a>
                                        </li>


                                        <li><a class="flaticon-email147"
                                                        href="?OPTIONS=14&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Notificaciones&amp;IDMENU=14">Notificaciones</a>
                                        </li>

                                        <li><a class="flaticon-web58"
                                                        href="?OPTIONS=19&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Website&amp;IDMENU=19">Website</a>
                                        </li>


                                        <li><a class="flaticon-storage17"
                                                        href="?OPTIONS=22&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Almacen&amp;IDMENU=22">Almacen</a>
                                        </li>


                                        <li><a class="flaticon-accounting"
                                                        href="?OPTIONS=60&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Contabilidad&amp;IDMENU=60">Contabilidad</a>
                                        </li>


                                        <li><a class="flaticon-eye130"
                                                        href="?OPTIONS=77&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Ncf&amp;IDMENU=77">Ncf</a>
                                        </li>


                                        <li><a class="flaticon-finance-and-business4"
                                                        href="?OPTIONS=151&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=BILLING&amp;IDMENU=151">Billing</a>
                                        </li>


                                        <li><a class="flaticon-cogs2"
                                                        href="?OPTIONS=190&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Aduanas&amp;IDMENU=190">Aduanas</a>
                                        </li>


                                        <li><a class="flaticon-gear74"
                                                        href="?OPTIONS=1&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Mantenimiento&amp;IDMENU=1">Mantenimiento</a>
                                        </li>


                                        <li><a class="flaticon-wrenches8"
                                                        href="?OPTIONS=104&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Configuracion&amp;IDMENU=104">Configuracion</a>
                                        </li>


                                        <li><a class="flaticon-list6"
                                                        href="?OPTIONS=98&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Despacho&amp;IDMENU=98">Despacho</a>
                                        </li>


                                        <li><a class="flaticon-team2"
                                                        href="?OPTIONS=206&amp;SESSION=PrimUt7EpJd34QVp1pWYd0&amp;IDS=40&amp;MENU=Entregar&amp;IDMENU=206">Entregar</a>
                                        </li>


                                </ul>

                        </li>
                </ul>

        </div>
        <div class="nav-h right">
                <ul>

                        <li> <a class="flaticon-eye130"
                                        href="?OPTIONS=77&amp;SESSION=3SADioSkzT,WjqquBdSPx3&amp;IDS=40&amp;MENU=Ncf&amp;IDMENU=78&amp;AX=1&amp;MENU2=Listar"
                                        title="Listar">Listar</a></li>

                        <li> <a class="flaticon-hand119"
                                        href="?OPTIONS=77&amp;SESSION=3SADioSkzT,WjqquBdSPx3&amp;IDS=40&amp;MENU=Ncf&amp;IDMENU=197&amp;AX=5&amp;MENU2=NCF-606"
                                        title="Ncf-606">Ncf-606</a></li>
                </ul>
        </div>
</div>

<?php
if (isset($_GET['MENU2'])) {
	
	switch ($_GET['MENU2']) {
		case 'Listar':
			include("pages/components/ncf/lists.php");
			break;
		case 'NCF-606':
			include("pages/components/ncf/ncf_606.php");
			break;
		
		default:

			break;
	}
}
else{
	 include("pages/components/ncf/ncf.php");
}
?>
<?php
include('inc/footer.php'); ?>