<?php
    $con = mysqli_connect('localhost','root');
    mysqli_select_db($con, 'barbershop');

    $variable = "";

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
        $sql = "SELECT price FROM products WHERE name = '$product_name'";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $price = $row['price'];
        $sql = "INSERT INTO sales (client_name, product_name, price) VALUES ('$client_name','$product_name', '$price')";
        mysqli_query($con, $sql);
        header('location: sales.php');
    }

    if (isset($_GET['delete_sale'])){
        $id = $_GET['delete_sale'];

        $sql = "DELETE FROM sales WHERE id='$id'";
        mysqli_query($con, $sql);
        header('location: sales.php');
    }

    if (isset($_GET['delete_product'])){
        $id = $_GET['delete_product'];

        $sql = "DELETE FROM products WHERE id='$id'";
        mysqli_query($con, $sql);
        header('location: products.php');
    }

    if (isset($_GET['delete_schedule'])){
        $id = $_GET['delete_schedule'];

        $sql = "DELETE FROM schedule WHERE id='$id'";
        mysqli_query($con, $sql);
        header('location: schedule.php');
    }

    if (isset($_GET['delete_users'])){
        $id = $_GET['delete_users'];

        $sql = "DELETE FROM users WHERE id='$id'";
        mysqli_query($con, $sql);
        header('location: users.php');
    }

    if (isset($_GET['delete_clients'])){
        $id = $_GET['delete_clients'];

        $sql = "DELETE FROM clients WHERE id='$id'";
        mysqli_query($con, $sql);
        header('location: clients.php');
    }

    if (isset($_GET['edit_sale'])){
        $id = $_GET['edit_sale'];
        
        header('location: edit-sale.php?id='.$id);
    }

    if (isset($_POST['edit_sale'])){
        $client_name = $_POST['new_sale_client_name'];
        $product_name = $_POST['new_sale_product_name'];
        $id = $_POST['id'];

        $sql = "UPDATE sales SET client_name = '$client_name', product_name = '$product_name' WHERE id = '$id'";
        mysqli_query($con, $sql);
        header('location: sales.php');  
    }

    if (isset($_GET['edit_schedule'])){
        $id = $_GET['edit_schedule'];

        header('location: edit-schedule.php?id='.$id);
    }

    if (isset($_POST['edit_schedule'])){
        $name = $_POST['new_schedule_name'];
        $date = $_POST['new_schedule_date'];
        $time = $_POST['new_schedule_time'];
        $id = $_POST['id'];

        $sql = "UPDATE schedule SET name = '$name', date = '$date', time = '$time' WHERE id = '$id'";
        mysqli_query($con, $sql);
        header('location: schedule.php');  
    }

    if (isset($_GET['edit_products'])){
        $id = $_GET['edit_products'];

        header('location: edit-products.php?id='.$id);
    }

    if (isset($_POST['edit_products'])){
        $name = $_POST['new_product_name'];
        $price = $_POST['new_product_price'];
        $id = $_POST['id'];

        $sql = "UPDATE products SET name = '$name', price = '$price' WHERE id = '$id'";
        mysqli_query($con, $sql);
        header('location: products.php');  
    }

    if (isset($_GET['edit_users'])){
        $id = $_GET['edit_users'];

        header('location: edit-users.php?id='.$id);
    }

    if (isset($_POST['edit_users'])){
        $name = $_POST['new_user_name'];
        $user = $_POST['new_user_username'];
        $pass = $_POST['new_user_pass'];
        $id = $_POST['id'];

        $sql = "UPDATE users SET name = '$name', username = '$user', password = '$pass' WHERE id = '$id'";
        mysqli_query($con, $sql);
        header('location: users.php');  
    }

    if (isset($_GET['edit_clients'])){
        $id = $_GET['edit_clients'];

        header('location: edit-clients.php?id='.$id);
    }

    if (isset($_POST['edit_clients'])){
        $name = $_POST['new_client_name'];
        $cpf = $_POST['new_client_cpf'];
        $email = $_POST['new_client_email'];
        $id = $_POST['id'];

        $sql = "UPDATE clients SET name = '$name', cpf = '$cpf', email = '$email' WHERE id = '$id'";
        mysqli_query($con, $sql);
        header('location: clients.php');  
    }

    mysqli_close($con);
?>