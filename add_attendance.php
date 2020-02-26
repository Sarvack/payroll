<!-- include head -->
<?php require "auth.php";?>
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
              <h3 class="box-title">Tambah Data Hadir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="number" class="form-control" placeholder="NIP" name="nik" required>
                </div>
  				      <div class="form-group">
                  <label>Nama Pegawai</label>
                  <input type="text" class="form-control" placeholder="Nama" name="name" required>
                </div>
                <div class="form-group">
                  <label>Time In</label>
                  <input type="number" class="form-control" placeholder="Time in" name="time_im" required>
                </div>
                <div class="form-group">
                  <label>Time Out</label>
                  <input type="number" class="form-control" placeholder="Time out" name="time_out" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Work Hour</label>
                  <input type="text" class="form-control" placeholder="Work hour" name="work_hour" required>
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
