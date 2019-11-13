<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location: login.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" tyle="text/css" href="Assets/style.css">
        <title>Barber Shop</title>
    </head>
    <body>
        <div class="container">
            <div class="header">
                <img class="logo_img_2" src="Assets/barbershop.png">
            </div>
            <div class="content-area">
                <div class="left-panel">
                    <?php
                        include 'navigation.php';
                    ?>
                </div>
                <div class="right-panel">
                    <h3>Novo Cliente</h3><br>
                    <form class="new-user-form" method="POST" action="functions.php">
                        <input type="text" name="new_client_name" placeholder="Nome completo"><br>
                        <input type="number" name="new_client_cpf" placeholder="CPF" maxlength = "11"><br>
                        <input type="text" name="new_client_email" placeholder="Email"><br>
                        <input type="submit" value="Salvar" name="save_client">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>