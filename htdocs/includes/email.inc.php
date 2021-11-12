<?php

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (strlen($email) <= 0) {
        Header("Location: ../about.php?email=nomail");
        exit();
    }else{
        Header("Location: ../about.php?email=$email");
        exit();
    }
}