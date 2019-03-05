<?php
session_start();
include 'serv.php';

if(isset($_SESSION['user'])) {?>
  <?php
    $username = $_SESSION['user'];

    // Preparar la orden SQL
    $consulta= "SELECT * FROM admin t1
    INNER JOIN contenido t2 ON t1.id=t2.id where user = '$username'";

    // Ejecutar la orden y obtener datos
    $datos= mysql_query ($consulta);

    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Panel de Control</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylePanel.css">
</head>
<body>
    
        <ul class="sidebar">
                <li>Home</li>
              </ul>
              
              <input type="checkbox" id="sidebar-btn" class="sidebar-btn" checked/>
              <label for="sidebar-btn"></label>
              <?php
                while ($fila =mysql_fetch_array($datos)){?>
              <div class="content">
              
                <h1>Bienvenidos - <?php echo $fila ["user"]; ?> </h1>
                <h2><?php echo $fila ["titulo"]; ?></h2>
                <h5><?php echo $fila ["texto"]; ?></h5>
                <a href="logout.php"><button class="btn btn-primary">Salir</button></a>
              </div>
              <?php } ?>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
<?php

}else{
	echo '<script> window.location="index.php"; </script>';
}
?>