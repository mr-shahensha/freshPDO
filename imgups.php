<?php
ini_set("display_errors", "1");
date_default_timezone_set("Asia/Calcutta");	

error_reporting(E_ALL);
include "membersonly.inc.php";
include "function.php";
include "SimpleImage.php";
$Members  = new isLogged(0);

$_POST["eby"] = $Members->User_Details->username;
$_POST["edt"] = date('Y-m-d');
$_POST["edtm"] = date('Y-m-d H:i:s A');
$testid=$_POST['testid'];
$testid1=implode(',',$testid);


$pdo_obj  = new Init_Table();
$pdo_obj->set_table("main_img", "sl");

if (isset($_POST["sl"])) {
    
    $pdo_obj->sl=$_POST["sl"];
    $pdo_obj->testid=$testid1;
    $pdo_obj->save();


    $path = "images/test_img";
    $newFilePath = $path . "/" . $_POST["sl"] . ".jpg";
    if (!file_exists($path)) {
        mkdir($path, 0777);
    }
    move_uploaded_file($_FILES['file']['tmp_name'], $newFilePath);
    $image = new SimpleImage();
    $image->load($newFilePath);
    $image->resize(1000, 400);
    $image->save($newFilePath);


    $pdo_obj->sl=$_POST["sl"];
    $pdo_obj->path=$newFilePath;
    $pdo_obj->save();

    $msg = "Data Updated Successfully...";
} else {


    $pdo_obj->testid=$testid1;
    $pdo_obj->eby=$_POST["eby"];
    $pdo_obj->edt=$_POST["edt"];
    $pdo_obj->edtm=$_POST["edtm"];
    $sls=$pdo_obj->create();


    $path = "images/test_img";
    $newFilePath = $path . "/" . $sls . ".jpg";
    if (!file_exists($path)) {
        mkdir($path, 0777);
    }
    move_uploaded_file($_FILES['file']['tmp_name'], $newFilePath);
    $image = new SimpleImage();
    $image->load($newFilePath);
    $image->resize(1000, 400);
    $image->save($newFilePath);


    $pdo_obj->sl=$sls;
    $pdo_obj->path=$newFilePath;
    $pdo_obj->save();

    $msg = "Data Submited Successfully...";
}
?>
<script>
		alert("<?php echo $msg; ?>");
		window.document.location = "imgup_list.php";
	</script>