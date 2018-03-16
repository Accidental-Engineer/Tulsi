<?php

    $conn=mysqli_connect("localhost","root","","tulsi") or die(mysqli_error($con));
    $response = '';
    if ($conn->connect_error) {
        $response = $response.'3';
    }
    else{
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $response = $response.'0';
        }else{
                $pass = sha1($pass);
                $sql = "SELECT * FROM `user` WHERE email = '".$email."' AND password = '".$pass."'";
                $result = $conn->query($sql);
                if($result && $result->num_rows > 0){
                    $dataObj = $result->fetch_assoc();
                    session_start();
                    $_SESSION['logged_in'] = 1;
                    $_SESSION['data'] = $dataObj;
                    $response = $response.'2';
                } else {
                    $response = $response.'1';
                }
      }
    }
    echo $response;
    $conn->close();
?>
