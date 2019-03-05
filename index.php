<?php
	session_start();
	include 'serv.php';
	if(isset($_SESSION['user'])){
	echo '<script> window.location="panel.php"; </script>';
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper w-25 m-auto magia">
        <form class="form-signin"  method="post" action="validar.php">       
          <h3 class="form-signin-heading  mb-5">Inicia sesion con tu cuenta</h3>
          <input type="text" class="form-control mb-2" name="user" autocomplete="off" placeholder="Username" required="" autofocus="" />
          <input type="password" class="form-control mb-2" name="pw" autocomplete="off" placeholder="Password" required=""/>      
          <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recordar Contraseña
          </label>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name="login" >Login</button>   
        </form>
      </div>
</body>
</html>