<?php
  $urlAvatar = "uploads/".$_SESSION['avatar'];
?>
<header class="main-header">
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
            
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?php echo $urlAvatar ?>" class="user-image" alt="Image">
                  <span class="hidden-xs"><?php echo $_SESSION['user']['username']?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?php echo $urlAvatar ?>" class="img-circle" alt="User Image">
                    <br/>
                    <p>
                      <?php echo $_SESSION['user']['username']?>
                      <small><?php echo $_SESSION['user']['level']?></small>
                    </p>
                  </li>
        
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-right">
                      <a href="Logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>