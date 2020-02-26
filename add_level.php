<?php

require_once("LoginClass.php");

if(isset($_POST['register'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["avatar"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["avatar"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

    // jika cancel maka akan di redirect ke user.php

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

    $user = new Users();
    $payload =[
        'username' => $_POST['username'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
        'level' => $_POST['level'],
        'avatar' => $_FILES['avatar']['name']
    ];

    $create = $user->create($payload);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($create) header("Location: user.php");
}
?>
<!-- include head -->
<?php require "auth.php";?>
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
              <h3 class="box-title">Data User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Username</label>
                  <input type="text" class="form-control" placeholder="username" name="username" required>
                </div>
  				    <div class="form-group">
                  <label>Email</label>
                  <input type="text" class="form-control" placeholder="email" name="email" required>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <input type="password" class="form-control" placeholder="password" name="password" required>
                </div>
                 <div class="form-group">
                  <label name="level">Level</label>
                    <select class="form-control" name="level">
                      <option selected>-Choose Position-</option>
                      <option value="administrator">Administrator</option>
                      <option value="employee">Employee</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="avatar">Insert Photo</label>
                        <input type="file" class="form-control-file" name="avatar">
                </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-warning" name="register">Simpan</button>
                <button type="submit" class="btn btn-normal" name="cancel">Batal</button>
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
