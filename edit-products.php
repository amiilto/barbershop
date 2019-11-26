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
                    <h3>Novo Serviço</h3><br>
                    <form class="new-user-form" method="POST" action="functions.php">
                        <input type="text" name="new_product_name" placeholder="Nome do serviço"><br>
                        <input type="text" name="new_product_price" placeholder="Preço"><br>
                        <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
                        <input type="submit" value="Salvar" name="edit_products">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>