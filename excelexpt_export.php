<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include "include.class.php";


$fld1['sl'] = "0";
$op1['sl'] = ">, ";
$list1  = new Init_Table();
$list1->set_table("main_test", "sl");
$row = $list1->search_custom($fld1, $op1, '', array('sl' => 'ASC'));



date_default_timezone_set('Asia/Kolkata');
$dt = date('d/m/Y h:i:s a', time());
$file = "Excel Export (As On" . $dt . ").xls"; //.doc
header("Content-type: application/vnd.ms-excel"); //ms-word
header("Content-Disposition: attachment; filename=$file");
?>


<table>
    <tr>
        <th><b>SL</b></th>
        <th><b>Name</b></th>
    
    </tr>
    
    <?php
    $count = 0;
    foreach ($row as $value) {
        $count++;
        $sl = $value['sl'];
    ?>
        <tr>

            <td><?php echo $count; ?></td>
            <td><?php echo $value['ttl']; ?></td>
        </tr>


    <?php
    }
    ?>
</table>