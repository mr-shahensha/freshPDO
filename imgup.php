<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);
include "membersonly.inc.php";
include("fckeditor/fckeditor.php");

$Members  = new isLogged(1);
$grpnm = "";
if (isset($_REQUEST['pnm'])) {
    $page_title = base64_decode($_REQUEST['pnm']);
} else {
    $page_title = "Advertisement (Image) Setup";
}

$pic = 'pic/upload.png';

include "header.php";
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="images/favicon.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $Members->User_Details->name; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php echo include "left_bar.php"; ?>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            <?php echo $page_title; ?>
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo $page_title; ?></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">

            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title"><?php echo $page_title; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <div class="box-body">
                        <form method="POST" action="imgups.php" enctype="multipart/form-data">
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-3 -->
                                <div class="col-md-12">
                                    <!-- begin col-3 -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <font color="#ed2618"></font><label>Image: </label>
                                            <center>
                                                <label for="file"><img style=" cursor: pointer;" title="Select Picture" id="blah" src="<?php echo $pic; ?>" height="150px" width="400px" alt="your image" /></label>
                                                <div id="size" style="text-align:center; color:#F00;"></div>
                                            <div style="visibility: visible">
                                                <input required class="btn btn-info" type="file" name="file" id="file" onChange="readURL(this)" accept="image/*" />
                                            </div>
                                            <span>Dimenson : 1000 x 400 </span>
                                            </center>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                        <font color="#ed2618"></font><label>Test: </label>
                                            <select id="testid" name="testid[]" class="form-control select2" style="width:100%" multiple="multiple" required>

                                                <?php
                                                  $fld1['sl'] = '0';
                                                  $op1['sl'] = ">,";
  
                                                  $list1  = new Init_Table();
                                                  $list1->set_table("main_test", "sl");
                                                  $row = $list1->search_custom($fld1, $op1, '', array('sl' => 'ASC'));
                                                  foreach ($row as $value) {
                                                      $mnm = $value['ttl'];
                                                      $sl = $value['sl'];
                                                ?>
                                                    <option value="<?php echo $sl; ?>" > <?php echo $mnm; ?></option>
                                                <?php
                                                }

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group pull-right">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-sm btn-success">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                    <!-- /.box body -->
                </div>

                <!-- /.box body -->
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">

    <strong>Copyright &copy; 2019-2020 </strong> All rights reserved. Designed & Developed By <a href="http://onnetsolution.com">Onnet Solution Infotech Pvt. Ltd.</a>.
</footer>

<!-- Add the sidebar's background. This div must be placed
	immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="bower_components/raphael/raphael.min.js"></script>
<script src="bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!-- jQuery Knob Chart -->
<script src="bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- daterangepicker -->
<script src="bower_components/moment/min/moment.min.js"></script>
<script src="bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<!-- Slimscroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<link rel="stylesheet" href="chosen.css">
<script src="chosen.jquery.js" type="text/javascript"></script>
<script src="prism.js" type="text/javascript" charset="utf-8"></script>
<script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<script>


    function file_field(tp) {
        if (tp == 2) {
            $('#fl_fld').html('<label>Form Description</label><input type="file" name="fileToUpload" class="btn btn-sm btn-success" placeholder="Form Description" /></div>');
        } else {
            $('#fl_fld').html('');
        }
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#blah')
                    .attr('src', e.target.result)
                /*.width(900)
                .height(400);*/
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('.select2').select2();
</script>
</body>

</html>