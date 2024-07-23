<?php
include "membersonly.inc.php";



$pno = '';
$ps = '';

if (isset($_REQUEST['pno'])) {
    $pno = rawurldecode($_REQUEST['pno']);
}
if (isset($_REQUEST['ps'])) {
    $ps = rawurldecode($_REQUEST['ps']);
}

if ($ps == "" || $ps==0) {
    $ps = 10;
}
if ($pno == "") {
    $pno = 1;
}
$start = ($pno - 1) * $ps;

$sl = 0;
$sln = $start;
$limit1 = "limit " . $start . "," . $ps;



$fld1['sl'] = '0';
$op1['sl'] = ">,";

$list1  = new Init_Table();
$list1->set_table("main_img", "sl");
$row = $list1->search_custom($fld1, $op1, $limit1, array('sl' => 'DESC'));
$rows = $list1->search_custom($fld1, $op1, '', array('sl' => 'DESC'));

$rcntttl = count($rows);
$rcnt =$rcntttl;
$path1 = "";
?>
<div align="left">
    <input type="text" style="width: 5%;" name="ps" id="ps" value="<?php echo $ps; ?>" onblur="pagnt1(this.value)">
</div>
<table class="table">
    <tr>
        <th width="10%">SL</th>
        <th width="30%">Banner</th>
        <th width="30%">Sub Divison</th>
        <th width="30%">Action</th>
    </tr>
    <?php
    $n=0;
    $cnt = 0;
    $pdo = new MainPDO();
    foreach ($row as $value) {
        $n++;
        $cnt++;
        $sl = $value['sl'];
    ?>
        <tr>
            <td><?php echo $n; ?></td>
            <td><a href="<?php echo $value['path']; ?>" target="_blank"><img src="<?php echo $value['path']; ?>" alt="Banner" height="100px" width="250px"></a></td>
            <td><?php
                $v = $value['testid'];
                $val = explode(',', $v);
                $cnt = count($val);
                $v = 0;
                for ($i = 0; $i < $cnt; $i++) {
                    $fld11['sl'] = $val[$i];
                    $op11['sl'] = "=,";

                    $list11  = new Init_Table();
                    $list11->set_table("main_test", "sl");
                    $row1 = $list11->search_custom($fld11, $op11, '', array('ttl' => 'ASC'));
                    $v++;
                    foreach ($row1 as $value1) {
                        echo $v . ' ) ' . $value1['ttl'] . '<br>';
                    }
                }
                ?></td>
            <td>
                <?php
                if ($value['stat'] == '0') {
                ?>
                   
                    <span title="Click to de-activate" class="btn btn-xs btn-danger" onclick="actdct('<?php echo $sl; ?>','main_img','1','imgup_list.php')">De-activate</span>

                <?php
                }
                ?>
                <?php
                if ($value['stat'] == '1') {
                ?>
                    <span class="btn btn-xs btn-success"  title="Click to activate" onclick="actdct('<?php echo $sl; ?>','main_img','0','imgup_list.php')">Activate</span>

                <?php
                }
                ?>
                <a href="imgup_edt.php?sl=<?php echo base64_encode($sl); ?>"><input type="button" class="btn btn-warning btn-xs" value="Edit">
                </a>

            </td>
        </tr>
    <?php
    }
    ?>

</table>

<br><br><br>

<?php
$tp = $rcnt / $ps;
if (($rcnt % $ps) > 0) {
    $tp = floor($tp) + 1;
}
if ($pno == 1) {
    $prev = 1;
} else {
    $prev = $pno - 1;
}
if ($pno == $tp) {
    $next = $tp;
} else {
    $next = $pno + 1;
}
$flt = "";
if ($rcnt != $rcntttl) {
    $flt = "(filtered from " . $rcntttl . " total entries)";
}
echo "<b>Showing " . ($start + 1) . " to " . ($sln+$n) . " of " . $rcnt . " entries" . $flt . '</b>';
?>
<div align="left"><input type="text" size="10" id="pgn" name="pgn" value="<?php echo $pno; ?>"><input Type="button" value="Go" onclick="pagnt1('')"></div>

<div class="pagination pagination-centered">
    <ul class="pagination pagination-sm inline">
        <li <?php if ($pno == 0) {
                echo "class=\"disabled\"";
            } ?>><a onclick="pagnt('1')" class="btn btn-success btn-xs" style="cursor:pointer;"><i class="icon-circle-arrow-left"></i>First</a></li> &nbsp;
        <li <?php if ($pno == 1) {
                echo "class=\"disabled\"";
            } ?>><a onclick="pagnt('<?php echo $prev; ?>')" class="btn btn-success btn-xs" style="cursor:pointer;"><i class="icon-circle-arrow-left"></i>Previous</a></li> &nbsp;
        <?php

        if ($tp <= 5) {
            $n = 1;
            while ($n <= $tp) {
        ?>
                <li <?php if ($pno == $n) {
                        echo "class=\"active\"";
                    } ?>><a onclick="pagnt('<?php echo $n; ?>')" class="btn btn-info btn-xs" style="cursor:pointer;"><?php echo $n; ?></a></li> &nbsp;
                <?php
                $n += 1;
            }
        } else {
            if ($pno < 4) {
                $n = 1;
                while ($n <= 5) {
                ?>
                    <li <?php if ($pno == $n) {
                            echo "class=\"active\"";
                        } ?>><a onclick="pagnt('<?php echo $n; ?>')" class="btn btn-info btn-xs" style="cursor:pointer;"><?php echo $n; ?></a></li> &nbsp;
                <?php
                    $n += 1;
                }
            } elseif ($pno > $tp - 3) {
                $n = $tp - 5;
                while ($n <= 5) {
                ?>
                    <li <?php if ($pno == $n) {
                            echo "class=\"active\"";
                        } ?>><a onclick="pagnt('<?php echo $n; ?>')" class="btn btn-info btn-xs" style="cursor:pointer;"><?php echo $n; ?></a></li> &nbsp;
                <?php
                    $n += 1;
                }
            } else {
                $n = $pno - 2;
                while ($n <= $pno + 2) {
                ?>
                    <li <?php if ($pno == $n) {
                            echo "class=\"active\"";
                        } ?>><a onclick="pagnt('<?php echo $n; ?>')" class="btn btn-info btn-xs" style="cursor:pointer;"><?php echo $n; ?></a></li> &nbsp;
        <?php
                    $n += 1;
                }
            }
        }
        ?>
        <li <?php if ($pno == $tp) {
                echo "class=\"disabled\"";
            } ?>><a onclick="pagnt('<?php echo $next; ?>')" class="btn btn-warning btn-xs" style="cursor:pointer;">Next<i class="icon-circle-arrow-right"></i></a>
        </li> &nbsp;
        <li <?php if ($pno == $tp) {
                echo "class=\"disabled\"";
            } ?>><a onclick="pagnt('<?php echo $tp; ?>')" class="btn btn-warning  btn-xs" style="cursor:pointer;">Last<i class="icon-circle-arrow-right"></i></a>
        </li>
    </ul>
</div>