<?php
    if(isset($_POST['send-btn'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        if(empty($username) || empty($email) || empty($subject) || empty($message)){
            header('location:contact.php?error');
        }
        else{
            $to = "iqracoaching49@gmail.com";
            if(mail($to, $subject, $message, $email)){
                header('location:contact.php?success');
            }
        }

    }
    else{
        header('location:contact.php');
    }
?>