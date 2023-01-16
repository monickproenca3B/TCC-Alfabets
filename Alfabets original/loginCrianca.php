<html> 
	<head>
		<meta charset="UTF-8">
    	<link rel="stylesheet" type="text/css" href="css/stylehome.css">
    	<link rel="shortcut icon" type="imagex/png" href="img/BETINHO.png">
		<title>Sobre seu Cadastro</title>
	</head>
	<body>
        <?php

            if(!empty($_POST['login']) and !empty($_POST['senha'])) {
		
                session_start();
                include_once("conexao.php");
                $login = $_POST['login'];
                $senha = $_POST['senha'];
    

    
                $sql = ("SELECT * FROM Usuarios WHERE email='$login' AND senha='$senha'");
                $resultado = @mysqli_query($conect,$sql);
    

    
                $sql = ("SELECT * FROM Usuarios WHERE email='$login' AND senha='$senha'");
                $resultado = @mysqli_query($conect,$sql);
    
                if (@mysqli_num_rows($resultado)==0){
        
                    echo "Senha ou Usuário incorretos! </br> Caso o erro persista faça um novo cadastro"."</br>"; // CRIAR TELA INICIAL DA CRIANCA
                 exit;
        
                }
                else {

                    $_SESSION['email'] = $login;
                    header('Location:inicio.php');

                }
    
            }           

        ?>
    </body>
</hmtl>