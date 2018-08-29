<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome5/css/fontawesome-all.css">
    <style>
        .img-profile{
            width: 150px;
            height: 150px;
            margin: 0 auto;
            display: block;
        }
        .profile-top{
            margin-top: -100px;

        }
    </style>
</head>
<body>
<?php include_once('includes/navbar.php');?>

    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container my-5 my-sm-1">
            <h1 class="">Profile</h1>
        </div>
    </section>
    
    <section class="container my-3">
        <div class="row">
            <div class="col-12 profile-top">
                <img src="assets/images/user.png" class="my-3 img-profile rounded-circle img-thumbnail" alt="Image Profile">

                <div class="card">
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="username">UserName</label>
                                <input type="text" class="form-control" id="username" value="Tum" disabled>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="fname">ชื่อ</label>
                                <input type="text" class="form-control" id="fname" value="Tum"  disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lname">สกุล</label>
                                <input type="text" class="form-control"  id="lname" value="Tum"  disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mail">E-Mail</label>
                                <input type="email" class="form-control"  id="mail" value="Tum"  disabled>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control"  id="phone" value="Tum"  disabled>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="adds">ที่อยู่</label>
                            <textarea class="form-control"  id="adds" rows="5" disabled>กทม.</textarea>
                        </div>

                        <a href="edit.php" class="btn btn-warning float-right"> EDIT </a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    <footer class="card bg-dark text-center py-3 text-white">
                        CopyRight 2018  <a href="#">Footer</a> 
                        
    </footer>


    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/popper.js/dist/popper.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
</body>
</html>