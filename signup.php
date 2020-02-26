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
    if($create) header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- =============================== font family ============================= -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
<!-- =============================== icons ============================= -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Sign Up | Payroll</title>
<!-- =============================== bootstrap ============================= -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- =============================== manual css ============================= -->
<link rel="stylesheet" href="includes/css/style.css">
<!-- =============================== javascript ============================= -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="signup-form">
    <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
		<div class="col-xs-8 col-xs-offset-4">
			<h2><i class="fa fa-user"></i> &nbsp; Sign Up</h2>
		</div>		
        <div class="form-group">
			<label for="username" class="control-label col-xs-4">Username</label>
			<div class="col-xs-8">
                <input type="text" class="form-control" name="username" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label for="email" class="control-label col-xs-4">Email Address</label>
			<div class="col-xs-8">
                <input type="email" class="form-control" name="email" required="required">
            </div>        	
        </div>
		<div class="form-group">
			<label class="control-label col-xs-4" for="password">Password</label>
			<div class="col-xs-8">
                <input type="password" class="form-control" name="password" required="required">
            </div>        	
        </div>
        <div class="form-group">
        <label for="level" class="control-label col-xs-4">Position</label>
			<div class="col-xs-8">
                <select name="level" class="control-label col-md-12">
                    <option selected>Choose Position</option>
                    <option value="administrator">Administrator</option>
                    <option value="employee">Employee</option>
                </select>
            </div>        	
        </div>
        <div class="form-group">
            <label for="avatar" class="control-label col-xs-4">Insert Photo</label>
            <div class="col-xs-8">
                <input type="file" class="form-control-file" name="avatar">
            </div>
        </div>
		<div class="form-group">
			<div class="col-xs-8 col-xs-offset-4">
				<label><label class="checkbox-inline"><input type="checkbox" required="required"> I accept the <a href="#">Terms of Use</a> &amp; <a href="#">Privacy Policy</a>.</label></p>
				<button type="submit" class="btn btn-primary btn-lg" name="register">Sign Up</button>
			</div>  
		</div>
    </form>
	<div class="text-center">Already have an account? <a href="login.php">Login here</a></div>
</div>
</body>
</html>