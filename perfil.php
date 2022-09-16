<?php
include "connect.php";
SESSION_START();  //RECUPERA A SESSÃO
if(isset($_SESSION["login_user"]) && isset($_SESSION["senha_user"])){
  header('location:user.php');
}
?>

<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <title>Ajudai</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">


  </head>
  <body class="text-center">
    <!----ACESSIBILIDADE----->
  <section >  
<?php include "acessibilidade.php"; ?>
</section>
    
<main class="form-signin w-100 m-auto">
  
<div class="img">
    <a href="index.php" class="classe1"><img src="img/Ajudai.png" /></a>
    </div>  
  <br>
    <h1 class="h3 mb-3 fw-normal">Login do Cliente </h1>
      <form action="login.php" method="post" >

    <div class="form-floating">
      <input type="text" name="login" class="form-control" placeholder="name@example.com" required>
      <label >Email address</label>
    </div>

    <div class="form-floating">

      <input type="password" name="senha" class="form-control" placeholder="Password" required>
      <label>Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    
    <input type="submit" value="Entrar" class="w-100 btn btn-lg btn-primary" >
<br>
<br>
    <p class=" mb-3 text-muted">Ainda não é inscrito <a href="cadastre.php"><b>Cadastre-se!</b></a></p>
    <p class="mt-5 mb-3 text-muted">&copy;2021–2022 Ajudaí</p>
  
</main>


    
  </body>
</html>
