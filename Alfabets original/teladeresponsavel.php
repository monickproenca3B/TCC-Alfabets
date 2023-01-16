<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/responsavel.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="imagex/png" href="img/BETINHO.png">
    <title>ADULTO</title>
</head>
<body>

    <?php

        session_start();

        $login = $_SESSION['email'];

        include_once("conexao.php");
        include_once("loginAdulto.php");

        $procurarId = "select * from usuarios where email = '$login'";
		$resultadoProcurarId= @mysqli_query($conect,$procurarId);
        $exibe = mysqli_fetch_assoc($resultadoProcurarId);  
        $id = $exibe['idUser'];



        /* SELECT INDIVIDUAL DE CADA ATIVIDADE */


        $procurarAtividade1 = "select * from resultado where codUser = '$id' and codFase = 1";
        $resultadoProcurarAtividade1= @mysqli_query($conect,$procurarAtividade1);
        $exibe1 = mysqli_fetch_assoc($resultadoProcurarAtividade1);
        $status1 = $exibe1['situacao'];

        $procurarAtividade2 = "select * from resultado where codUser = '$id' and codFase = 2";
        $resultadoProcurarAtividade2= @mysqli_query($conect,$procurarAtividade2);
        $exibe2 = mysqli_fetch_assoc($resultadoProcurarAtividade2);
        $status2 = $exibe2['situacao'];

        $procurarAtividade3 = "select * from resultado where codUser = '$id' and codFase = 3";
        $resultadoProcurarAtividade3= @mysqli_query($conect,$procurarAtividade3);
        $exibe3 = mysqli_fetch_assoc($resultadoProcurarAtividade3);
        $status3 = $exibe3['situacao'];

        $procurarAtividade4 = "select * from resultado where codUser = '$id' and codFase = 4";
        $resultadoProcurarAtividade4= @mysqli_query($conect,$procurarAtividade4);
        $exibe4 = mysqli_fetch_assoc($resultadoProcurarAtividade4);
        $status4 = $exibe4['situacao'];

        $procurarAtividade5 = "select * from resultado where codUser = '$id' and codFase = 5";
        $resultadoProcurarAtividade5= @mysqli_query($conect,$procurarAtividade5);
        $exibe5 = mysqli_fetch_assoc($resultadoProcurarAtividade5);
        $status5 = $exibe5['situacao'];

        $procurarAtividade6 = "select * from resultado where codUser = '$id' and codFase = 6";
        $resultadoProcurarAtividade6= @mysqli_query($conect,$procurarAtividade6);
        $exibe6 = mysqli_fetch_assoc($resultadoProcurarAtividade6);
        $status6 = $exibe6['situacao'];

    ?>

<nav class="menu">
    <ul>
    <li><a href="tela de cadastro.html">Novo Cadastro</a></li>
    <li><a href="index.html">Trocar de conta</a></li>
    <li><a href="jogoexperimental.html">Jogo Experimental</a></li>
    <li><a href="home.html">Home</a></li>
    </ul>
    </nav>
    
    <header class="cabecalho">
        <div class="h2">
        <h2>Seja Bem Vindo(a) Responsável</h2><br>
        <p>Aqui você irá verificar as atividades do seu pequeno<br>
        Que tal dar uma olhada?</p>
        </div>
        <h1 class="botao">
            <a href ="#ver" title="VISUALIZAR">
            <img src="img/VAMOS LÁ seta.png"></a>
        </h1>

    </header>

    <br><br><br>
    
    <header id="ver"class="visualizacao">
        <img src="img/respatv1.png"><p class="php"> <?php echo $status1; ?></p> <a href="visuatv1.html"><img src="img/visualizar.png"></a>
        <br>
        <img src="img/respatv2.png"><p class="php"> <?php echo $status2; ?></p><a href="visuatv2.html"><img src="img/visualizar.png"></a>
        <br>
        <img src="img/respatv3.png"><p class="php"> <?php echo $status3; ?></p><a href="visuatv3.html"><img src="img/visualizar.png"></a>
        <br>
        <img src="img/respatv4.png"><p class="php"> <?php echo $status4; ?></p><a href="visuatv4.html"><img src="img/visualizar.png"></a>
        <br>
        <img src="img/respatv5.png"><p class="php"> <?php echo $status5; ?></p><a href="visuatv5.html"><img src="img/visualizar.png"></a>
        <br>
        <img src="img/respatv6.png"><p class="php"> <?php echo $status6; ?></p><a href="visuatv6.html"><img src="img/visualizar.png"></a>
        <br>
    </header>

    



<br><br><br>


<footer>
    <div class="footer-bottom">
        <div class="redes">
            <p>Acesse nosso Instagram:</p>
        </div>

        <a href="https://www.instagram.com/its.alfabets/" target="_blank"><i class="fa fa-instagram"></i></a>
        <br><br>
        <div class="copyright">
            <p>By IsabellyAlves, MayaraGabrielle e MonickProença</p>
        </div>
    </div>
</footer>
</body>
</html>
    