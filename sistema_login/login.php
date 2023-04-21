 <?php
     session_start();
    
     // validação se o usuário está cadastrado no banco de dados
    
     if(empty($_POST) or (empty($_POST["usuario"]) or (empty($_POST["senha"] ))));{
        echo "<script>locarion.href='index.php';</script>";
     }

     include('config.php');
    
    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // selecione todos da tabela USUARIOS ONDE O NOSSO USUARIO É == $usuario E  senha == $senha
     // o usuario da digitado no formulario tem que ser igual ao da base de dados ja cadastrada
     // a senha digitada no formulario tem que ser igual ao da base de dados ja cadastrada 
     // se não dará erro

    $sql = "SELECT * FROM usuarios
        WHERE usuarios = '{$usuario}'
        AND senha = '{$senha}'";
       
       //execução da query (requisução ao banco de dados)

       // executar a conexao com a query que criamos lá em cima // or die == mensagem de erro , caso a conexão não seja feita
    $res = $conn->query($sql) or die($conn->error);
        
    // tras como resultado um array de objetos
    $row = $res->fetch_object();
    $qtd = $res->num_rows;

    if($qtd > 0){
        $_SESSION["usuario"] = $usuario;
        $_SESSION["nome"] = $row->nome;
        $_SESSION["tipo"] = $row->tipo;
    echo "<script>location.href='dashboard.php';</script>";
    }else{
        echo "<script>alert('Usuário e / ou senha incorreto')</script>";
        echo "<script>location.href='index.php';</script>";
    }