<?php
if (isset($_POST['save_user'])){
    $name = $_POST['new_user_name'];
    $user = $_POST['new_user_username'];
    $pass = $_POST['new_user_pass'];

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'barbershop');
    $sql = "INSERT INTO users (name, username, password) VALUES ('$name','$user','$pass')";
    mysqli_query($con, $sql);
    mysqli_close($con);
    header('location: users.php');
}

if (isset($_POST['save_client'])){
    $name = $_POST['new_client_name'];
    $cpf = $_POST['new_client_cpf'];
    $email = $_POST['new_client_email'];

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'barbershop');
    $sql = "INSERT INTO clients (name, cpf, email) VALUES ('$name','$cpf','$email')";
    mysqli_query($con, $sql);
    mysqli_close($con);
    header('location: clients.php');
}

if (isset($_POST['save_product'])){
    $name = $_POST['new_product_name'];
    $price = $_POST['new_product_price'];

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'barbershop');
    $sql = "INSERT INTO products (name, price) VALUES ('$name','$price')";
    mysqli_query($con, $sql);
    mysqli_close($con);
    header('location: products.php');
}

if (isset($_POST['save_schedule'])){
    $name = $_POST['new_schedule_name'];
    $date = $_POST['new_schedule_date'];
    $time = $_POST['new_schedule_time'];

    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'barbershop');
    $sql = "INSERT INTO schedule (name, date, time) VALUES ('$name','$date', '$time')";
    mysqli_query($con, $sql);
    mysqli_close($con);
    header('location: schedule.php');
}

?>