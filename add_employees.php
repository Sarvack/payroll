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
              <h3 class="box-title">Data Pegawai</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="stored_item.php" method="POST">
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
                  <label name="position_id">Jabatan</label>
                    <select class="form-control" name="position_id">
                      <option>- Pilih Jabatan -</option>
                      <option value="1">Supervisor</option>
                      <option value="2">Driver</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" rows="3" placeholder="Alamat" name="address" required></textarea>
                </div>
                <div class="form-group">
                  <label>Phone</label>
                  <input type="number" class="form-control" placeholder="Phone" name="phone_numbers" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat Lahir</label>
                  <input type="text" class="form-control" placeholder="Tempat Lahir" name="place_of_birth" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Tanggal Lahir</label>
                  <input type="date" class="form-control" placeholder="Tanggal Lahir" name="date_of_birth" required>
                </div>
                <div class="form-group">
                  <label>Status</label>
                  <select class="form-control" name="marital_status">
                    <option>- Pilih Status -</option>
                    <option value="single">Single</option>
                    <option value="married">Married</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" class="form-control" placeholder="Tanggal Masuk" name="date_of_entry" required>
                </div>
                <div class="form-group">
                  <label>Gaji Pokok</label>
                  <input type="text" class="form-control" placeholder="Gaji Pokok" name="basic_salary" required>
                </div>
                <div class="form-group">
                  <label name="gender">Gender</label>
                    <select class="form-control" name="gender">
                      <option>- Pilih Gender -</option>
                      <option value="1">Female</option>
                      <option value="2">Male</option>
                    </select>
                </div>
                <div class="form-group">
                  <label>No Rekening</label>
                  <input type="number" class="form-control" placeholder="No Rekening" name="bank_account" required>
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
