<?php
require "auth.php";
require "Items.php";

$item = new Items();
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
              <h3 class="box-title">Edit Data Pegawai <?php echo $row['name'] ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="update_item.php?id=<?php echo $row['id'] ?>" method="POST">
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
                  <label>Jabatan</label>
                  <select class="form-control" name="position_id" id="position_id" value="<?php echo $row['position_id'] ?>">
                    <option value="1">Supervisor</option>
                    <option value="2">Driver</option>
                  </select>
                </div>
                  <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" name="address"><?php echo $row['address'] ?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="number" class="form-control" placeholder="Phone" name="phone_numbers" required="required" value="<?php echo $row['phone_numbers'] ?>">
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" placeholder="Tempat Lahir" name="place_of_birth" required="required" value="<?php echo $row['place_of_birth'] ?>">
                </div>
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" placeholder="Tanggal Lahir" name="date_of_birth" required="required" value="<?php echo $row['date_of_birth']; ?>">
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="marital_status" id="marital_status" value="<?php echo $row['marital_status'] ?>">
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" class="form-control" placeholder="Tanggal Masuk" name="date_of_entry" required="required" value="<?php echo $row['date_of_entry'] ?>">
                </div>
                <div class="form-group">
                  <label>Gaji Pokok</label>
                  <input type="text" class="form-control" placeholder="Gaji Pokok" name="basic_salary" required="required" value="<?php echo $row['basic_salary'] ?>">
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <select class="form-control" name="gender" id="gender" value="<?php echo $row['gender'] ?>">
                    <option value="male">male</option>
                    <option value="female">female</option>
                  </select>
                </div>
              <div class="form-group">
                  <label>No Rekening</label>
                  <input type="number" class="form-control" placeholder="No Rekening" name="bank_account" required="required" value="<?php echo $row['bank_account'] ?>">
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
