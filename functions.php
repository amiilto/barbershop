<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'barbershop');

    if (isset($_POST['save_user'])){
        $name = $_POST['new_user_name'];
        $user = $_POST['new_user_username'];
        $pass = $_POST['new_user_pass'];

        $sql = "INSERT INTO users (name, username, password) VALUES ('$name','$user','$pass')";
        mysqli_query($con, $sql);
        header('location: users.php');
    }

    if (isset($_POST['save_client'])){
        $name = $_POST['new_client_name'];
        $cpf = $_POST['new_client_cpf'];
        $email = $_POST['new_client_email'];

        $sql = "INSERT INTO clients (name, cpf, email) VALUES ('$name','$cpf','$email')";
        mysqli_query($con, $sql);
        header('location: clients.php');
    }

    if (isset($_POST['save_product'])){
        $name = $_POST['new_product_name'];
        $price = $_POST['new_product_price'];

        $sql = "INSERT INTO products (name, price) VALUES ('$name','$price')";
        mysqli_query($con, $sql);
        header('location: products.php');
    }

    if (isset($_POST['save_schedule'])){
        $name = $_POST['new_schedule_name'];
        $date = $_POST['new_schedule_date'];
        $time = $_POST['new_schedule_time'];

        $sql = "INSERT INTO schedule (name, date, time) VALUES ('$name','$date', '$time')";
        mysqli_query($con, $sql);
        header('location: schedule.php');
    }

    if (isset($_POST['save_sale'])){
        $client_name = $_POST['new_sale_client_name'];
        $product_name = $_POST['new_sale_product_name'];

        $sql = "INSERT INTO sales (client_name, product_name) VALUES ('$client_name','$product_name')";
        mysqli_query($con, $sql);
        header('location: sales.php');
    }

    if (isset($_GET['delete_sale'])){
        $id = $_GET['delete_sale'];

        $sql = "DELETE FROM sales WHERE id='$id'";
        mysqli_query($con, $sql);
        header('location: sales.php');
    }

    mysqli_close($con);

?>