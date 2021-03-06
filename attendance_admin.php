<!-- include head -->
<?php include "auth.php"; ?>
<?php include "includes/head.php";?>

<?php
require "AttendanceClass.php";

$item = new Attendance();
$rows = $item->all();
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
	
				<!-- tables -->
	          <div class="box">

	            <div class="box-header">
	              <h3 class="box-title">DATA ABSENSI PEGAWAI</h3> </br></br>
	              <a href="add_attendance.php" class="btn btn-info">Tambah Data</a>
	            </div>

	            <div class="box-body">
	              <table  id="example1" class="table table-bordered table-striped">
	                <thead>
		                 <tr>
		                   <th scope="col">No</th>
		                   <th scope="col">Nik</th>
		                   <th scope="col">Nama</th>
		                   <th scope="col">Tanggal</th>
		                   <th scope="col">Jam Masuk</th>
		                   <th scope="col">Jam Keluar</th>
						   <th scope="col">Total Jam Kerja</th>
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
		                  <td><?php echo $row['dates'] ?></td>
		                  <td><?php echo $row['time_in'] ?></td>
		                  <td><?php echo $row['time_out'] ?></td>
						  <td><?php echo $row['work_hour'] ?></td>
		                  <td>
						  	<a href="edit_attendance.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
		                  	<a href="delete_attendance.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Delete</a>
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
