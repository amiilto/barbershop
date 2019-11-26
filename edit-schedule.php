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
                    <h3>Novo Agendamento</h3><br>
                    <form class="new-user-form" method="POST" action="functions.php">
                        <select name="new_schedule_name">
                            <option value="" disabled selected>Selecione o cliente</option>
                            <?php
                                $con = mysqli_connect('localhost','root');
                                mysqli_select_db($con, 'barbershop');
                                $sql = "SELECT name FROM clients";
                                $result = $con->query($sql);
                                while($rows = $result->fetch_assoc()){
                                    $name = $rows['name'];
                                    echo "<option value='$name'>$name</option>";
                                }
                            ?>
                        </select><br>
                        <input type="date" name="new_schedule_date" placeholder="Data"><br>
                        <input type="time" name="new_schedule_time" placeholder="Horário"><br>
                        <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
                        <input type="submit" value="Salvar" name="edit_schedule">
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>