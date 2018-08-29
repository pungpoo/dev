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
<?php include_once('includes/navbar.php'); ?>

    <section class="jumbotron jumbotron-fluid text-center">
        <div class="container my-5 my-sm-1">
            <h1>Profile</h1>
        </div>
    </section>
    
    <section class="container my-3">
        <div class="row">
            <div class="col-12 profile-top">
                <img src="assets/images/user.png" class="img-profile rounded-circle img-thumbnail" alt="Image Profile">

                <!-- Button trigger modal -->
                    <button type="button" class="btn mx-auto d-block btn-primary my-3" data-toggle="modal" data-target="#exampleModal">
                    เปลี่ยนรูป
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Upload รูป</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <input type="file" onchange="readURL(this)">
                                <figure class="figure text-center d-none">
                                    <img id="imgUpload" class="figure-img img-fluid rounded" alt="">
                                </figure>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                            </div>
                        </div>
                    </div>

                <div class="card">
                    <div class="card-body">

                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="username">UserName</label>
                                    <input type="text" class="form-control" id="username" value="Tum">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="fname">ชื่อ</label>
                                    <input type="text" class="form-control" id="fname" value="Tum">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lname">สกุล</label>
                                    <input type="text" class="form-control"  id="lname" value="Tum">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="mail">E-Mail</label>
                                    <input type="email" class="form-control"  id="mail" value="Tum">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control"  id="phone" value="Tum">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="adds">ที่อยู่</label>
                                <textarea class="form-control"  id="adds" rows="5" > กทม </textarea>
                            </div>
                            <a href="profile.php" class="btn btn-warning float-left"> BACK </a>

                            <input type="sunmit" class="btn btn-primary float-right" value="SAVE">
                        </form>

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

    <script>
        function readURL(input){
            if (input.files[0]){
                var reader = new FileReader()
                $('.figure').addClass('d-block')
                reader.onload = function(e){ 
                    $('#imgUpload').attr('src', e.target.result).width(240)
                }
                reader.readAsDataURL(input.files[0])

                
            }
        }
    </script>
    
</body>
</html>