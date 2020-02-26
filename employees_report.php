<?php
// require "auth.php";
require "Items.php";


$item = new Items();
$rows = $item->all();
?>

<!-- include head -->
<?php include "includes/head.php";?>

<body>
<div class="wrapper">

 <!-- Content Wrapper. Contains page content -->
 <!--     <div class="content-wrapper"> -->

          <!-- Main content -->
		<section class="content">
	
				<!-- tables -->
	          <div class="box">

	            <div class="box-header">
	              <h3 class="box-title">LAPORAN GAJI PEGAWAI</h3> <!-- </br></br> -->
	              <!-- <a href="#" class="btn btn-info">Tambah Data</a> -->
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
                  <td><?php echo $row['basic_salary'] ?></td>
                  <td><?php echo $row['date_of_entry'] ?></td>
                  <td>
                    <a href="detail.php?id=<?php echo $row['id'] ?>" class="btn btn-success">Detail</a>
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

	      <a href="#"><button class="btn btn-warning">Cetak Halaman</button></a>

          </section>
          <!-- /.content -->
      </div>


</div>
<!-- ./wrapper -->

<!-- include javascript -->
<?php
include "includes/script.php";
?>


</body>

</html>