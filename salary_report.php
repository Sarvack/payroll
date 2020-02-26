<!-- include head -->
<?php include "includes/head.php";?>
<?php include "auth.php";?>

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
		              <h3 class="box-title">LAPORAN GAJI PEGAWAI</h3>
		            </div>
	        	</div>
		 <!-- radio -->
	                <div class="form-group">
	                  <div class="radio">
	                    <label>
	                      <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
	                      Semua Data
	                    </label>
	                  </div>
	                  <div class="radio">
	                    <label>
	                      <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
	                      Pencarian Kata
	                    </label>
	                  </div>
	                  <div class="col-lg-6">
	                  	<div class="input-group input-group-md">
						      <td><select name="field" id="field">
						        <option>Pilih Field</option>
						          <option value="nip">Nip</option>
						          <option value="nama">Nama Pegawai</option>
						          <option value="bulan_transfer">Bulan</option>
						      </select></td>
						      <td><input name="kata" type="text" id="kata" class="textbox" /></td>
						      </tr>
		            	</div>
		            		<!-- Button Print -->
							<br>
		               		<a href="#"><button class="btn btn-warning">Tampikan</button></a>
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
