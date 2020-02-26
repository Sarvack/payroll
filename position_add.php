<!-- include head -->
<?php include "includes/head.php";?>
<?php require "auth.php"; ?>

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
              <h3 class="box-title">Data Jabatan Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="stored_position.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label>Kode Jabatan</label>
                  <input type="text" class="form-control" placeholder="kode jabatan" name="position_code" required>
                </div>
  				  <div class="form-group">
                  <label>Jabatan</label>
                  <input type="text" class="form-control" placeholder="nama jabatan" name="position_name" required>
                </div>
                  <div class="form-group">
                  <label>Tarif Lembur</label>
                  <input type="number" class="form-control" placeholder="tarif lembur" name="overtimes_pay_hour" required>
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
