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
	
				<!-- tables -->
	          <div class="box">

	            <div class="box-header">
	              <h3 class="box-title">Data Pegawai <?php echo $row['name'];?></h3> </br>
	            </div>


	          </div>

				<div class="centercontent">
				    <div id="contentwrapper" class="contentwrapper">
				    <div id='contentwrapper' class='contentwrapper'>
					<div class='contenttitle2'>
				</div>
				<div class='detailpegawai'>
					<!-- <div class='foto'><img src='image_peg/no.jpg' width='200'/></div> -->
				<table class='tabelform tabpad'>
					<tr>
						<td>Nip</td><td>:</td><td>&nbsp;<?php echo $row['id'];?></td>
					</tr>
					<tr>
						<td>Nama Pegawai</td><td>:</td><td>&nbsp;<?php echo $row['name'];?></td>
					</tr>
					<tr>
						<td>Jabatan</td><td>:</td><td>&nbsp;<?php echo $row['position_id'];?></td>
					</tr>
					<tr>
						<td>Alamat</td><td>:</td><td>&nbsp;<?php echo $row['address'];?></td>
					</tr>
					<tr>
						<td>Phone</td><td>:</td><td>&nbsp;<?php echo $row['phone_numbers'];?></td>
					</tr>
					<tr>
						<td>Tempat Lahir</td><td>:</td><td>&nbsp;<?php echo $row['place_of_birth'];?></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td><td>:</td><td>&nbsp;<?php echo $row['date_of_birth'];?></td>
					</tr>
					<tr>
						<td>Status</td><td>:</td><td>&nbsp;<?php echo $row['marital_status'];?></td>
					</tr>
					<tr>
						<td>Tanggal Masuk</td><td>:</td><td>&nbsp;<?php echo $row['date_of_entry'];?></td>
					</tr>
					<tr>
						<td>Gaji Pokok</td><td>:</td><td>&nbsp;<?php echo $row['basic_salary'];?></td>
					</tr>
					<tr>
						<td>Gender</td><td>:</td><td>&nbsp;<?php echo $row['gender'];?></td>
					</tr>
					<tr>
						<td>No Rekening</td><td>:</td><td>&nbsp;<?php echo $row['bank_account'];?></td>
					</tr>
					<tr>
						<td colspan='3'>
						<br />
						<a href="edit_item.php?id=<?php echo $row['id'] ?>"  class="btn btn-primary"> <span>Edit Profil</span> </a>
					 <!-- <a href="changepassword.php?id=<?php echo $row['id'] ?>"  class="btn btn-success"> <span> Ganti Password</span>  </a></td> -->
					</tr>
				
				</table>
				<div style='clear:both'></div>
				
				</div>                
			         </div>       
				</div><!-- centercontent -->
			    
			    
			</div><!--bodywrapper-->


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
