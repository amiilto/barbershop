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
                    <h3>Clientes</h3>
                    <table class="users-table">
                        <tr>
                            <th>Nome</th>
                            <th>CPF</th>
                            <th>Email</th>
                            <th>Ações</th>
                        </tr>
                        <?php
                            $con = mysqli_connect('localhost','root');
                            mysqli_select_db($con, 'barbershop');
                            $sql = "SELECT id, name, cpf, email FROM clients";
                            $result = $con->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["cpf"] . "</td><td>" . $row["email"] .
                                    "<td><a href='functions.php?edit_clients=" . $row["id"] . "'>Editar</a>
                                    <a href='functions.php?delete_clients=" . $row["id"] . "'>Excluir</a>";
                                }
                            }
                            mysqli_close($con);
                        ?>
                    </table>
                    <a href="new-client.php"><div class="new-user-button">Novo Cliente</div></a>
                </div>
            </div>
        </div>
    </body>
</html>