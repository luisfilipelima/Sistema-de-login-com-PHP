<?php 
 session_start();
 if(empty($_SESSION)){
    echo "<scrit>location.href='index.php'</script>";
 }
?>

<!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   
    <title>Sistema de loign</title>
 </head>
 <body>
     <nav class="navbar navbar-light bg-light">
         <div class="container-fluid">
                <a class="navbar-brand">Sistema X</a>
                <?php 
                  echo "olá," . $_SESSION["nome"];
                  echo "<a href='logout.php' class='btn btn-danger'>Sair</a>";
                ?>
         </div>
     </nav>
     coloque seu conteudo
 </body>
 </html>