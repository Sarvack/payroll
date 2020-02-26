<?php
require "auth.php";
require "Items.php";



$item = new Items();
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
	              <h3 class="box-title">DATA PEGAWAI</h3> </br></br>
	              <a href="add_employees.php" class="btn btn-info">Tambah Data</a>
	            </div>

	            <div class="box-body">
	              <table  id="example1" class="table table-bordered table-striped">
	                <thead>
		                 <tr>
		                   <th scope="col">No</th>
		                   <th scope="col">Nik</th>
		                   <th scope="col">Nama</th>
		                   <th scope="col">No Rekening</th>
		                   <th scope="col">Jabatan</th>
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
		                  <td><?php echo $row['bank_account'] ?></td>
		                  <td><?php echo $row['position_id'] ?></td>
		                  <td><?php echo $row['basic_salary'] ?></td>
		                  <td><?php echo $row['date_of_entry'] ?></td>
		                  <td>
		                  	<a href="detail.php?id=<?php echo $row['id'] ?>"><button class="btn btn-primary"><i class="fa fa-plus"> Detail</i></button></a>
		                  	 <a href="delete_item.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Delete</a>
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
