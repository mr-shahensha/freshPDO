<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include "membersonly.inc.php";
$Members  = new isLogged(1);
?>
<?php

$fld1['sl'] = '0';
$op1['sl'] = ">,";

$list1  = new Init_Table();
$list1->set_table("main_test", "sl");
$row = $list1->search_custom($fld1, $op1, '', array('sl' => 'ASC'));
$path1 = "";
?>
<table class="table">
	<tr>
		<th width="10%">SL</th>
		<th width="60%">Test Type</th>
		<th width="30%">Action</th>
	</tr>
	<?php
	$cnt = 0;
	$pdo = new MainPDO();
	foreach ($row as $value) {
		$cnt++;
		$sl = $value['sl'];
	?>
		<tr>
			<td><?php echo $cnt; ?></td>
			<td><?php echo $value['ttl']; ?></td>
			<td>
				<?php
				if ($value['stat'] == '0') {
				?>
					<!-- <a title="Click to de-activate" href="actv_deact.php?sl=<?php echo $sl; ?>&tbl=main_test&val=1&pg=test.php" class="btn btn-xs btn-danger">De-activated</a> -->

					<span title="Click to de-activate" class="btn btn-xs btn-danger" onclick="actdct('<?php echo $sl; ?>','main_test','1','test.php')">De-activate</span>
				<?php
				}
				?>
				<?php
				if ($value['stat'] == '1') {
				?>
					<!-- <a title="Click to activate" href="actv_deact.php?sl=<?php echo $sl; ?>&tbl=main_test&val=0&pg=test.php" class="btn btn-xs btn-primary">Activated</a> -->

					<span class="btn btn-xs btn-success"  title="Click to activate" onclick="actdct('<?php echo $sl; ?>','main_test','0','test.php')">Activate</span>
				<?php
				}
				?>
				<a href="test_edt.php?sl=<?php echo base64_encode($sl); ?>"><input type="button" class="btn btn-primary btn-xs" value="Edit">
				</a>
                    <span class="btn btn-xs btn-warning" onclick="delt('<?php echo $sl; ?>','main_test','test.php')">Delete</span>
			</td>
		</tr>
	<?php
	}
	?>

</table>