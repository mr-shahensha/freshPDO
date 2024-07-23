<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include "membersonly.inc.php";
$Members  = new isLogged(1);

function array_except($array, $keys)
{
	return array_diff_key($array, array_flip((array) $keys));
}


$sl = $_REQUEST['sl'];
$tbl = $_REQUEST['tbl'];
$page_name = $_REQUEST['pg'];

$pdo_obj  = new Init_Table();
$pdo_obj->set_table($tbl, "sl");

$pdo_obj->sl = $sl;
$pdo_obj->delete();


?>
<script>
	alert('Data Deleted Successfully...');
	window.document.location = "<?php echo $page_name; ?>";</script>