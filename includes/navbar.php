<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">Fucking Code</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">

            <?php if(isset($_SESSION['id'])){ ?>
            <li class="nav-item dropdown ml-auto">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   
                    <?php echo $_SESSION['name']; ?>
                    <img src="assets/images/<?php echo $_SESSION['image']?>" class="rounded-circle"  width = "30px">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="profile.php">Profile</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="php/logout.php">LogOut</a>
                </div>
            </li>
            <?php }else{ ?>

            <li class="nav-item ml-auto">
                <a class="btn btn-success mt-1 m-md-1 px-4" href="login.php">Login</a>
            </li>
            <li class="nav-item ml-auto">
                <a class="btn btn-info mt-1 m-md-1 px-3" href="regis.php">Regis</a>
            </li>
            <?php } ?>
        </ul>
    </div>
</nav>