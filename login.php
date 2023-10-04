<?php
    session_start();
    include_once('db.php');
    $email = $_POST['email'];
    $pwrd = $_POST['pass'];
    // echo $email;
    // echo $mobile_no;

    if(isset($_POST['email']) && $_POST['email'] !='' 
        && isset($_POST['pass']) && $_POST['pass'] !=''
    ){
        $conn = new mysqli($servername, $username, $password,$dbname);
        $query ="select email,paasword from registration where email='".$email."'";
        if($result = mysqli_query($conn, $query)){

            $num_row = mysqli_num_rows($result);
            if($num_row == 1){
                $row = mysqli_fetch_assoc($result);
                $_SESSION['success_message']='Your are logedIn';
                header("location:home.php");
            }else{
                $_SESSION['error_message']='phone no or email is invalid';
                header('location:index.php'); 
            }
        }
    }else{
        $_SESSION['error_message']='Invalid e-mail or Phone no';
        

        header('location:index.php'); 
    }
?>