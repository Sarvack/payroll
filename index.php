<?php
require "auth.php";
require "Items.php";

$item = new Items();
$rows = $item->all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
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
          <!-- Content Header (Page header) -->
          <section class="content-header">
            <h1>
              <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-info-circle"></i> Selamat Datang di Halaman Administrator Payroll</a></li>
              </ol>
            </h1>
          </section>

          <!-- Main content -->
          <section class="content">

            <!-- Small boxes (Stat box) -->
            <div class="row">
              <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3 align="center"><i class="fa fa-home"></i></h3>
                    <p align="center">HOME</p>
                  </div>
                  <a href="index.php" class="small-box-footer"> <i class="fa fa-arrow-circle-up"></i></a>
                </div>
              </div>
              <!-- ./col -->

              <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3 align="center"><i class="fa fa-money"></i></h3>
                    <p align="center">DATA GAJI</p>
                  </div>
                  <a href="salary.php" class="small-box-footer"> <i class="fa fa-arrow-circle-up"></i></a>
                </div>
              </div>
              <!-- ./col -->

              <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3 align="center"><i class="fa fa-hourglass-half"></i></h3>
                    <p align="center">DATA LEMBUR </p>
                  </div>
                  <a href="overtime.php" class="small-box-footer"> <i class="fa fa-arrow-circle-up"></i></a>
                </div>
              </div>
              <!-- ./col -->

              <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3 align="center"><i class="fa fa-users"></i></h3>
                    <p align="center">DATA JABATAN</p>
                  </div>
                  <a href="positions.php" class="small-box-footer"> <i class="fa fa-arrow-circle-up"></i></a>
                </div>
              </div>
              <!-- ./col -->

              <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3 align="center"><i class="fa fa-folder-o"></i></h3>
                    <p align="center">LAPORAN PEGAWAI</p>
                  </div>
                  <a href="employees_report.php" target="_blank" class="small-box-footer"> <i class="fa fa-arrow-circle-up"></i></a>
                </div>
              </div>
              <!-- ./col -->


              <div class="col-lg-2 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-aqua">
                  <div class="inner">
                    <h3 align="center"><i class="fa fa-sign-out"></i></h3>
                    <p align="center">LOGOUT</p>
                  </div>
                  <a href="Logout.php" class="small-box-footer"> <i class="fa fa-arrow-circle-up"></i></a>
                </div>
              </div>
              <!-- ./col -->

            </div>
            <!-- /.row -->
<!-- tables -->
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Pegawai</h3> </br></br>
              <a href="add_employees.php" class="btn btn-info">Tambah Data</a>
            </div>
            <div class="box-body">
              <table  id="example1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nik</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Gaji Pokok</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 1;
                     while ($row = $rows->fetch_assoc()) {
                    ?>
                  <tr>
                  <td scope="row"><?php echo $i;?></td>
                  <td><?php echo $row['nik'] ?></td>
                  <td><?php echo $row['name'] ?></td>
                  <td><?php echo number_format($row['basic_salary'],2) ?></td>
                  <td><?php echo $row['date_of_entry'] ?></td>
                  <td>
                    <a href="detail.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Detail</a>
                    <a href="edit_item.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
                    <a href="delete_item.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Delete</a>
                    <a href="transfer.php?id=<?php echo $row['id'] ?>" class="btn btn-warning">Transfer</a>
                  </td>
                </tr>
                    <?php
                    $i++;
                    }
                    ?>
                </tbody>
    
              </table>
            </div>
          </div>

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
