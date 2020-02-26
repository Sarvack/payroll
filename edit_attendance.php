<?php
require "auth.php";
require "AttendanceClass.php";

$item = new Attendance();
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
              <h3 class="box-title">Edit Data Kehadiran</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="updated_item.php?id=<?php echo $row['id'] ?>" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="number" name="nik" class="form-control" id="nik" required="required" value="<?php echo $row['nik'] ?>">
                </div>
  				    <div class="form-group">
                  <label>Nama Pegawai</label>
                  <input type="text" name="name" class="form-control" id="name" required="required" value="<?php echo $row['name'] ?>">
                </div>
                <div class="form-group">
                  <label>Time In</label>
                  <input type="number" class="form-control" placeholder="Phone" name="time_in" required="required" value="<?php echo $row['phone_numbers'] ?>">
                </div>
                <div class="form-group">
                  <label>Time Out</label>
                  <input type="text" class="form-control" placeholder="Tempat Lahir" name="time_out" required="required" value="<?php echo $row['place_of_birth'] ?>">
                </div>
                <div class="form-group">
                  <label>Work Out</label>
                  <input type="text" class="form-control" placeholder="Tempat Lahir" name="work_out" required="required" value="<?php echo $row['place_of_birth'] ?>">
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
