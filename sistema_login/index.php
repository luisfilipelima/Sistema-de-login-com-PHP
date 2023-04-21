 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <style>
        .login{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
    <title>Sistema de loign</title>
 </head>
 <body style="background-color: #f2f2f2">
    <div class="login">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 offset-lg-4">
                    <div class="card">
                            <div class="card-body">
                                <h3>Acesso Restrito</h3>
                            </div>
                            <div class="card-body">
                                <form action="login.php" method="POST">
                                    <div class="mb-3">
                                         <label>Usuário</label>
                                          <input type="text" name="usuario" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                    <label>Senha</label>
                                          <input type="password" name="senha"       class="form-control">
                                    </div>
                                    <div>
                                           <div class="mb-3">
                                               <button type="submit" class="btn btn-primary">Enviar </button>
                                           </div>
                                    </div>
                                </form>
                            </div>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
 </body>
 </html>