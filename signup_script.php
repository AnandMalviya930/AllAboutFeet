<?php
    require "./includes/common.php";
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $name = mysqli_real_escape_string($conn, $_POST["name"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $contact = mysqli_real_escape_string($conn, $_POST["contact"]);
    $city = mysqli_real_escape_string($conn, $_POST["city"]);
    $address = mysqli_real_escape_string($conn, $_POST["address"]);
    $hashed_password = md5($password);
    $query1 = "SELECT id FROM users WHERE email = '$email' AND password = '$hashed_password'";
    $query1 = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('$name', '$email', '$hashed_password', '$contact', '$city', '$address')";

    $result = mysqli_query($conn, $query1);
    if(mysqli_num_rows($result) > 0){
        echo "Email id already exists. Try another";
    }else{
        $result = mysqli_query($conn, $query2);
        $_SESSION["email_id"] = $email;
        $_SESSION["id"] = mysqli_insert_id($conn);

        header("location: products.php");
    }
?>