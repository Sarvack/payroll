<?php 
require "auth.php";
require "Items_employee.php"; 

$item = new Items();
$rows = $item->all();
?>
<!--==================include head========================-->
<?php include "includes/head.php";?>
<!--==================include header========================-->
<?php include "includes/header_employee.php"?>

<body class="layout-top-nav skin-blue-light">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

          <!-- Main content -->
		<section class="content">
	
				<!-- tables -->
	          <div class="box">

	            <div class="box-header">
	              <h3 class="box-title">MY PROFILE</h3>
	            </div>

	 			    <!-- Main content -->
			    <section class="content">

			      <div class="row">
			        <div class="col-md-3">

			          <!-- Profile Image -->
			          <div class="box box-primary">
			            <div class="box-body box-profile">
			              <img class="profile-user-img img-responsive img-circle" src="<?php echo $urlAvatar ?>" alt="User profile picture">
			              <h3 class="profile-username text-center"><?php echo $_SESSION['user']['username']?></h3>
			              <p class="text-muted text-center"><?php echo $_SESSION['user']['level']?></p>
						  <div class="text-center">
							<a href="employee_attendance.php">
								<button type="button" class="btn btn-danger">Absence Here!</button>
							</a>
						  </div>
			            </div>
			          </div>
			        </div>

			        <!-- /.col -->
			        <div class="col-md-9">
			          <div class="nav-tabs-custom">
			            <ul class="nav nav-tabs">
			              <li class="active"><a href="#activity" data-toggle="tab">Profile</a></li>
			              <li><a href="#timeline" data-toggle="tab">Payroll</a></li>
			            </ul>
			           <div class="tab-content">
			              <div class="active tab-pane" id="activity">
				               <!-- Post -->
				                <div class="post">
				                  <div class="user-block">
				                  	
				                  </div>
			                  	<!-- /.user-block -->
			                  	<div class="row margin-bottom">
			                   <!-- /.col -->
			                    <div class="col-md-3">
			                      <div class="row">
			                      	<img src="<?php echo $urlAvatar ?>" class="img-thumbnail">
			                      		<br/><br/>
								<table>
								<?php
									$i = 1;
									while ($row = $rows->fetch_assoc()) {
								?>
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
								<td colspan="3">
									<br>
									<!-- ========================diisi linknya ===================== -->
									<!-- <a href="#"  class="btn btn-warning"> <span>Edit Profil</span> </aAbsence> -->
									<a href="#"  class="btn btn-warning"> <span> Ganti Password</span>  </a></td>
								</tr>
								<?php
									$i++;
									}
								?>
								</table>
			                      </div>
			                      <!-- /.row -->
			                    </div>
			                    <!-- /.col -->
			                  </div>
			                  <!-- /.row -->
			                </div>
			                <!-- /.post -->
			              </div>
			              <!-- /.tab-pane -->
			              <div class="tab-pane" id="timeline">
			                <!-- Post -->
				                <div class="post">
				                  <div class="user-block">
				                  	
				                  </div>
			                  	<!-- /.user-block -->
			                  	<div class="row margin-bottom">
			                   <!-- /.col -->
			                    <div class="col-md-3">
			                      <div class="row">
			                             <!-- Date -->
						              <div class="form-group">
						                <label>Check Gaji Bulan :</label>

						                <div class="input-group date">
						                  <div class="input-group-addon">
						                    <i class="fa fa-calendar"></i>
						                  </div>
						                  <input type="date" class="form-control pull-right" id="datepicker">
						                </div>
						                <!-- /.input group -->
						                <br>
		               						<a href="#"><button class="btn btn-warning">Tampikan</button></a>
						              </div>


			                      </div>
			                      <!-- /.row -->
			                    </div>
			                    <!-- /.col -->
			                  </div>
			                  <!-- /.row -->
			                </div>
			                <!-- /.post -->
			              </div>
			              <!-- /.tab-pane -->
			              </div>
			            <!-- /.tab-content -->
			          </div>
			          <!-- /.nav-tabs-custom -->
			        </div>
			        <!-- /.col -->
			      </div>
			      <!-- /.row -->

			    </section>
			    <!-- /.content -->

	         </div>

         </section>

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
