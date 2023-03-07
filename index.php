

<?php
session_start();
if (!isset($_SESSION['user_email'])) {
	
	include_once('inc/login.php');
} else {
	if (isset($_GET['MENU'])) {
		switch ($_GET['MENU']) {
			case 'Almacen':
				include("pages/Store.php");
				break;
			case 'Dashboard':
				include("pages/Dashboard.php");
				break;
			case 'Clientes':
				include("pages/Customer.php");
				break;
			case 'Aereo':
				include("pages/Aerial.php");
				break;
			case 'Cobros':
				include("pages/Collection.php");
				break;
			case 'Notificaciones':
				include("pages/Notifications.php");
				break;
			case 'Website':
				include("pages/Website.php");
				break;
			case 'Contabilidad':
				include("pages/Accounting.php");
				break;
			case 'Ncf':
				include("pages/Ncf.php");
				break;
			case 'BILLING':
				include("pages/Billing.php");
				break;
			case 'Aduanas':
				include("pages/Customs.php");
				break;
			case 'Mantenimiento':
				include("pages/Maintenance.php");
				break;
			case 'Configuracion':
				include("pages/Setting.php");
				break;
			case 'Despacho':
				include("pages/Dispatch.php");
				break;
			case 'Entregar':
				include("pages/Deliver.php");
				break;
			default:
				include("pages/Store.php");
				break;
		}
	} else {
		include('pages/Store.php');
	}
}
?>


