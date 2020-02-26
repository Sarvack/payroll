<?php
require "auth.php";
require "Items.php";

$item = new Items();
$data = $item->find($_GET['id']);
$row = $data->fetch_assoc();

?>
<!-- the questions is how to include 2 tables in 1 function and payrolls and employee-->

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
              <h3 class="box-title">Transfer Gaji Pegawai  <?php echo $row['name'] ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="stored_transfer.php" method="POST">
              <input class="hidden" name="id" value="<?php echo $row['id'] ?>">
              <div class="box-body">
                <div class="form-group">
                  <label>NIP</label>
                  <input type="number" class="form-control" name="nik" required="required" value="<?php echo $row['nik'] ?>">
                </div>
  				      <div class="form-group">
                  <label>Nama Pegawai</label>
                  <input type="text" class="form-control" name="name" required="required" value="<?php echo $row['name'] ?>">
                </div>
                 <div class="form-group">
                  <label name="position_id">No Rekening</label>
                  <input type="text" class="form-control" name="bank_account" required="required" value="<?php echo $row['bank_account'] ?>">
                </div>
                  <div class="form-group">
                  <label>Jam Lembur</label>
                  <!-- from overtimes table -->
                  <input type="text" class="form-control" name="overtime_hour" required>
                </div>
                <div class="form-group">
                  <label>Gaji Utama</label>
                  <input type="text" class="form-control" name="basic_salary" required="required" value="<?php echo $row['basic_salary'] ?>">
                </div>
                <div class="form-group">
                <!-- from overtime and payrolls -->
                  <label>Uang Lembur</label>
                  <input type="text" class="form-control" name="overtime_pay" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Total Gaji</label>
                  <!-- from payroll table -->
                  <input type="text" class="form-control" name="total_salary" required>
                </div>
                <div class="form-group">
                <!-- from payroll table -->
                  <label>Bulan Transfer</label>
                  <select class="form-control" name="month_pay">
                    <option>- Pilih Bulan -</option>
                      <option value="january">Januari</option>
                      <option value="february">Februari</option>
                      <option value="march">Maret</option>
                      <option value="april">April</option>
                      <option value="may">Mei</option>
                      <option value="june">Juni</option>
                      <option value="july">Juli</option>
                      <option value="august">Agustus</option>
                      <option value="september">September</option>
                      <option value="october">Oktober</option>
                      <option value="november">November</option>
                      <option value="december">Desember</option>
                    </select>                
                  </div>
                <div class="form-group">
                  <label>Tanggal Transfer</label>
                  <input type="date" class="form-control" name="payment_date" required>
                </div>
                <!-- <div class="form-group">
                  <label>Jam Transfer</label>
                  <input type="time" class="form-control" name="payment_hours" required>
                </div> -->
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
