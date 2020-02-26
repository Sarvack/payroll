<?php

require_once("LoginClass.php");
require "auth_login.php";

if (isset($_POST['login'])) {

    $Users = new Users();
    $payload = [
        'username' => $_POST['username'],
        'email' => $_POST['username']
    ];

    $query = $Users->login($payload);
    $data = $query->fetch_assoc();

    if ($data) {
        // verifikasi password
        // echo $data["password"];
        if (password_verify($_POST['password'], $data["password"])) {
            // buat Session
            session_start();
            if($data['level']=='administrator'){
               $_SESSION["user"] = $data;
               $_SESSION['level'] = "administrator";
               $_SESSION['avatar'] = $data['avatar'];
               // $_SESSION["Nama"] = $data['username'];
               // login sukses, alihkan ke halaman timeline
               header("Location: index.php");

            } elseif ($data['level']=='employee'){
               $_SESSION["user"] = $data;
               $_SESSION['level'] = "employee";
               $_SESSION['avatar'] = $data['avatar'];
               // $_SESSION["Nama"] = $data['username'];
               // login sukses, alihkan ke halaman timeline
               header("Location: employee_level.php?id=".$data['id'] );
              
            }

            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Payroll</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/css/login.css">
</head>

<body>
    <div class="container">
        <div class="row">
			<div class="col-md-5 mx-auto">
			<div id="first">
				<div class="myform form">
					 <div class="logo mb-3">
						 <div class="col-md-12 text-center">
							<h1>Login Payroll</h1>
						 </div>
					</div>
                   <form action="" method="POST">
                           <div class="form-group">
                              <label for="username">Username</label>
                              <input type="text" name="username" class="form-control" placeholder="Enter email">
                           </div>
                           <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" name="password" class="form-control" placeholder="Enter Password">
                           </div>
                           <div class="form-group">
                              <p class="text-center">By signing up you accept our <a href="#" style="color: #5cd3b4;">Terms Of Use</a></p>
                           </div>
                           <div class="col-md-12 text-center">
                              <button style="background: #5cd3b4; outline-color: none;" type="submit" name="login" class="btn btn-block mybtn btn-primary tx-tfm" >Login</button>
                           </div>
                           <div class="form-group">
                              <p class="text-center">Don't have account? <a href="signup.php" id="signup" style="color: #5cd3b4;">Sign up here</a></p>
                           </div>
                        </form>
				         </div>
			         </div>
                  </form>
               </div>
			</div>
		</div>
      </div>   
         
</body>
</html>