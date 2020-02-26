<?php
require "auth.php";
require "Users.php";

$item = new Users();
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
	              <h3 class="box-title">DATA USER</h3> </br></br>
	              <a href="add_level.php" class="btn btn-info">Tambah Data</a>
	            </div>

	            <div class="box-body">
	              <table  id="example1" class="table table-bordered table-striped">
	                <thead>
		                 <tr>
		                   <th scope="col">No</th>
		                   <th scope="col">Username</th>
		                   <th scope="col">Email</th>
		                   <th scope="col">Level</th>
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
		                  <td><?php echo $row['username'] ?></td>
		                  <td><?php echo $row['email'] ?></td>
		                  <td><?php echo $row['level'] ?></td>
		                  <td>
						  	<a href="edit_user.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Edit</a>
		                  	<a href="delete_user.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus item ini ?')">Delete</a>
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
