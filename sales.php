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
                    <h3>Atendimentos</h3>
                    <table class="users-table">
                        <tr>
                            <th>Cliente</th>
                            <th>Serviço</th>
                            <th>Valor</th>
                            <th>Ações</th>
                        </tr>
                        <?php
                            $con = mysqli_connect('localhost','root');
                            mysqli_select_db($con, 'barbershop');
                            $sql = "SELECT id, client_name, product_name, price FROM sales";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo 
                                    "<tr><td>" . $row["client_name"]. "</td>
                                    <td>" . $row["product_name"] . "</td>
                                    <td>" . $row["price"] . "</td>
                                    <td><a href='functions.php?edit_sale=" . $row["id"] . "'>Editar</a>
                                    <a href='functions.php?delete_sale=" . $row["id"] . "'>Excluir</a>";
                                }
                            }
                            mysqli_close($con);
                        ?>
                        </tr>
                    </table>
                    <a href="new-sale.php"><div class="new-schedule-button">Novo Atendimento</div></a>
                </div>
            </div>
        </div>
    </body>
</html>