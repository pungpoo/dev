<?php 
    //print_r($_POST);
    require_once('connect.php');
    if (isset($_POST['submit'])) {
        $secretKey = "6LdJqW8UAAAAAKOamvmvbAvwPTTFdrtGZkMvZO8w";
        $responseKey = $_POST['g-recaptcha-response'];
        $remoteIP = $_SERVER['REMOTE_ADDR'];
        $url ="https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$remoteIP";  
        $response = json_decode(file_get_contents($url));
        if( $response->success){
            //echo '<pre>',print_r($_POST),'</pre>';

            $check_sql ="SELECT * FROM tbl_member WHERE username = '".$_POST[username]."' ";
            $check_user  = $conn->query($check_sql) or die($conn->error);

            if(!$check_user->num_rows){
                
            }else {
                echo "<script> alert('User ซ้ำ'); </script>";
                header('Refresh:0; url=../regis.php');
            }




        }else{
            echo "<script> alert('Verification Failed'); </script>";
            header('Refresh:0; url=../regis.php');
        }

    }else{
        header('Refresh:0; url=../regis.php');
    }
?>