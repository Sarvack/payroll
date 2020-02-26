<?php
require "auth.php";
require "TransferClass.php";

$item = new Transfer();
$rows = $item->all();
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
	
				<!-- tables -->
	          <div class="box">

	            <div class="box-header">
	              <h3 class="box-title">DATA GAJI PEGAWAI</h3> </br></br>
	              <a href="print.php" class="btn btn-info">Print Slip Gaji</a>
	            </div>

	            <div class="box-body">
	              <table  id="example1" class="table table-bordered table-striped">
	                <thead>
		                 <tr>
		                   <th scope="col">No</th>
		                   <th scope="col">Nama</th>
						   <th scope="col">Gaji Pokok</th>
		                   <th scope="col">Gaji Dibayarkan</th>
		                   <th scope="col">Jam Lembur</th>
		                   <th scope="col">Uang Lembur</th>
		                   <th scope="col">Tanggal Transfer</th>
		                 </tr>
	                </thead>
	                <tbody>
					<?php
                    $i = 1;
                     while ($row = $rows->fetch_assoc()) {
                    ?>
		                <tr>
		                  <td scope="row"><?php echo $i;?></td>
		                  <td><?php echo $row['name'] ?></td>
						  <td><?php echo $row['basic_salary'] ?></td>
		                  <td><?php echo $row['total_salary'] ?></td>
		                  <td><?php echo $row['overtime_hour'] ?></td>
		                  <td><?php echo $row['overtime_pay'] ?></td>
		                  <td><?php echo $row['daTex'] ?></td>
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
