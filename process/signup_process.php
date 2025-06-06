<?php
    session_start();
    require_once '../includes/connection.php';

    if($_POST['password'] !== $_POST['confirm-password']){
        header('Location: ../public/signup-page.php?error=Passwords do not match!');
        exit();
    }
    if(strlen($_POST['password']) < 8){
    header('Location: ../public/signup-page.php?error=Password must be at least 8 characters long!');
    exit();
    }   
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hashed_password = password_hash($password, PASSWORD_DEFAULT); //hash the password for security
    //check if the username already exists in the database
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        header('Location: ../signup-page.php?error=Username already exists!');
        exit();
    }

    // Insert new user into the database
    $sql = "INSERT INTO users (name, last_name, username, password) VALUES ('$name', '$lastname', '$username', '$hashed_password')";

    if($conn->query($sql) === TRUE) {
        header('Location: ../public/login-page.php?success=Account created successfully! Please log in.');
        exit();
    } else {
        header('Location: ../signup-page.php?error=Error creating account!');
        exit();
    }