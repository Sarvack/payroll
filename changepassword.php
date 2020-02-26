<!-- include head -->
<?php require "auth.php";?>
<?php include "includes/head.php";?>

<?php
require "Items.php";

$item = new Items();
$data = $item->find($_GET['id']);
$row = $data->fetch_assoc();

?>


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
              <h3 class="box-title">Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="stored_item.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Password Lama</label>
                  <input type="text" class="form-control" name="password" required="required" value="<?php echo $row['password']; ?>>
                </div>
  			        <div class="form-group">
                  <label>Password Baru</label>
                  <input type="text" class="form-control" name="password" required="required">
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
