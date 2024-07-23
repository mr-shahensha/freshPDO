<?php
ini_set("display_errors", "1");
date_default_timezone_set("Asia/Calcutta");	

error_reporting(E_ALL);
include "membersonly.inc.php";
$Members  = new isLogged(1);

function array_except($array, $keys)
{
	return array_diff_key($array, array_flip((array) $keys));
}
$_POST["eby"] = $Members->User_Details->username;
$_POST["edt"] = date('Y-m-d');
$_POST["edtm"] = date('Y-m-d H:i:s A');
$tbl_nm = $_POST['table_name'];
$page_name = $_POST['page_name'];

$fld['sl'] = "0";
$op['sl'] = ">,";
$list  = new Init_Table();
$list->set_table($tbl_nm, "sl");
$count = $list->row_count_custom($fld, $op, '', array('sl' => 'ASC'));
$msg = "";

if ($count > 0) {
	$msg = "Data Already Exists!!!";
}

if ($msg == "") {


	$pdo_obj  = new Init_Table();
	$pdo_obj->set_table($tbl_nm, "sl");

	if (isset($_POST["sl"])) {

		$pdo_obj->edt=$_POST["edt"];
		$pdo_obj->edtm=$_POST["edtm"];
		$pdo_obj->eby=$_POST["eby"];
		$pdo_obj->save();
		$msg = "Data Updated Successfully...";
	} else {
		$pdo_obj->edt=$_POST["edt"];
		$pdo_obj->edtm=$_POST["edtm"];
		$pdo_obj->eby=$_POST["eby"];
		$pdo_obj->create();
		$msg = "Data Submited Successfully...";
	}

?>
	<script>
		alert("<?php echo $msg; ?>");
		window.document.location = "<?php echo $page_name; ?>";
	</script>
<?php
} else {
?>
	<script>
		alert("<?php echo $msg; ?>");
		history.go(-1);;
	</script>
<?php
}
?>