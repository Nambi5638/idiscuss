<?php
$showError = "false";

if($_SERVER["REQUEST_METHOD"]=="POST"){

    include "_dbconnect.php";
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPassword'];
    $cpass = $_POST['signupcPassword'];

    $exitSql = "select * from `users` where user_email = `$user_email`";
    $result = mysqli_query($conn,$exitSql);
    $numRows = mysqli_num_rows($result);

    if($numRows > 0){
        $showError = "This useremail already exist please change useremail";
    }
    else{
        if($pass == $cpass){
            $hash = password_hash($pass,PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `user_email`, `user_pass`, `datetime`) VALUES ('$user_email', '$hash', current_timestamp())";
            $result = mysqli_query($conn,$sql);
            if($result){
                $showAlert = true;
                header("Location: /forums/index.php?signupsuccess=true");
                exit();
            }

        }
        else{
            $showError = "your password does not match";

        }

    }
        header("Location: /forums/index.php?signupsuccess=false&error=$showError");

}



?>