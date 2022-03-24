<?php
    // ========Navbar Active Coding Here=========
        $nav_id = '';
        if(isset($_GET['a'])){
            $nav_id = $_GET['a'];
        }else{
          $nav_id = "";
        }
        if($nav_id=='' || $nav_id=='1'){
          $classAc1='active';
        }elseif($nav_id=='2'){
          $classAc2='active';
        }elseif($nav_id=='3'){
          $classAc3='active';
        }elseif($nav_id=='4'){
          $classAc4='active';
        }elseif($nav_id=='5'){
          $classAc5='active';
        }
    // ======X==Navbar Active Coding Here==X=======
?>

<!-- ----------------------------  Navigation ---------------------------------------------- -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo FRONT_SITE_PATH ?>">
              <img src="<?php echo FRONT_SITE_PATH ?>/assets/logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse nav_menu navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link <?php echo $classAc1 ?>" href="<?php echo FRONT_SITE_PATH ?>?a=1">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?php echo $classAc2 ?>" href="<?php echo FRONT_SITE_PATH ?>/about?a=2">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?php echo $classAc3 ?>" href="<?php echo FRONT_SITE_PATH ?>/clubs?a=3">Clubs Information</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?php echo $classAc4 ?>" href="<?php echo FRONT_SITE_PATH ?>/events?a=4">Events</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?php echo $classAc5 ?>" href="<?php echo FRONT_SITE_PATH ?>/contact?a=5">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- ------------x---------------  Navigation --------------------------x------------------- -->