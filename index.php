
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Sistema ContaPagos</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/login.css" rel="stylesheet">
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <form class="form-signin" role="form" method="post" action="">
<center><img src="img/contalogo.png" alt="logo" class="img-responsive"><br></center>
        <input type="text" name="user" class="form-control" placeholder="Usuario" required autofocus><br>
        <input type="password" name="pass" class="form-control" placeholder="Password" required>
        <button name="entrar" class="btn btn-lg btn-primary btn-block" type="submit">Iniciar Sesión</button>
      </form>
        <a href="http://arkebit.com"><div class="arkebit">
<img src="img/arkebit-logo.png" class="img-responsive row ">
        </div></a>
    </div> <!-- /container -->
    <?php
      include 'database.php';
      if(isset($_REQUEST['entrar'])){
        $db = new database('localhost','JCMS','arkebit','mat23net90');
        $db->conectaDB();
        $db->validaUsuario($_POST['user'],$_POST['pass']);
        
    }
    ?>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>
