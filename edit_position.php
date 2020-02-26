<?php
require "Auth.php";
require "Position.php";

$item = new Positions();
$data = $item->find($_GET['id']);
$row = $data->fetch_assoc();

?>

<!-- include head -->
<?php include "includes/head.php";?>


<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- include header -->
  <?php include "includes/header.php"?>

  <!-- include sidebar -->
  <?php include "includes/sidebar.php"?>

  <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">

          <!-- Main content -->
		<section class="content">
			  <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Jabatan</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="updated_position.php?id=<?php echo $row['id'] ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label>Position Code</label>
                  <input type="number" name="position_code" class="form-control" id="position_code" required="required" value="<?php echo $row['position_code'] ?>">
                </div>
  				    <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" name="position_name" class="form-control" id="position_name" required="required" value="<?php echo $row['position_name'] ?>">
                </div>
                 <div class="form-group">
                  <label>Tarif Lembur</label>
                    <input type="text" name="overtimes_pay_hour" class="form-control" id="overtimes_pay_hour" required="required" value="<?php echo $row['overtimes_pay_hour'] ?>">
                </div>
   
              <div class="box-footer">
                <button type="submit" class="btn btn-warning">Simpan</button>
                <button type="submit" class="btn btn-normal">Batal</button>
              </div>
              </div>
            </form>
          </div>
          <!-- /.box -->

        </section>
          <!-- /.content -->
      </div>



  <!-- include footer -->
  <?php include "includes/footer.php";?>

</div>
<!-- ./wrapper -->

<!-- include javascript -->
<?php
include "includes/script.php";
?>


</body>

</html>
