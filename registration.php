<?php
session_start();
include_once('db.php');
    $names = $_POST['name'];
    $useremail = $_POST['email'];
    $userpass = $_POST['pass'];
    if(isset($_POST['name']) && $_POST['name'] !='' 
        && isset($_POST['email']) && $_POST['email'] !=''
        && isset($_POST['pass']) && $_POST['pass'] !=''
    ){
        $conn = new mysqli($servername, $username, $password,$dbname);
        if (!$conn) {
            $_SESSION['error_message']='Something went wrong.';

          header('location:index.php');
        }
        $sql = "INSERT INTO registration (name, email, paasword)
        VALUES ('$names','$useremail','$userpass')";
            $result = mysqli_query($conn, $sql); 
            if ($result) {
                $_SESSION['success_message']='Your account create successfully';
                header("location:loginform.php");
            } else {
                $_SESSION['error_message']='Something went wrong.';
                header('location:index.php');

                }
    }else{
        $_SESSION['error_message']='All fields are reqiured. Please fill all the fields';
        header('location:index.php');     
    }

?>