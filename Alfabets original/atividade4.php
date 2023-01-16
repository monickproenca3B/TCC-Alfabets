<html> 
	<head>
		<meta charset="UTF-8">
    	<link rel="stylesheet" type="text/css" href="css/stylehome.css">
    	<link rel="shortcut icon" type="imagex/png" href="img/BETINHO.png">
		<title>Atividade 1</title>
	</head>
	<body>
        <?php

            session_start();
            
            $login = $_SESSION['email'];

            include_once("conexao.php");
            include_once("loginCrianca.php");

            $procurarId = "select * from usuarios where email = '$login'";
            $resultadoProcurarId= @mysqli_query($conect,$procurarId);
            $exibe = mysqli_fetch_assoc($resultadoProcurarId);  
            $id = $exibe['idUser'];

            $feito = "UPDATE resultado SET situacao = 'Realizada :)' WHERE codUser = '$id' AND codFase = 4";
            $resultadoFeito = @mysqli_query($conect,$feito);

            header('Location:Inicio.php');

        ?>
    </body>
</hmtl>