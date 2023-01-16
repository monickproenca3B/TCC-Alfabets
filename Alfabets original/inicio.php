<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/styleinicio.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="imagex/png" href="img/BETINHO.png">
    <title>INICIO</title>
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
        <img class="betinho" src="img/BETINHO.png"> 
        <div class="h2">
        <h2>Está na hora de aprender!!</h2><br>
        <p>Com sua ajuda, o Betinho vai auxiliar seu filho(a) no aprendizado!!</p><br></div>
        <br><br>
        <h1 class="botao">
            <a href="#ativ" title="COMEÇAR">        
            <img src="img/VAMOS LÁ seta.png"></a>
        </h1>
        



    </header>
    <br><br><br><br><br>
    
    <header id="ativ" class="atividades1">
    <h1>1-ATIVIDADES PARA APRENDIZAGEM DAS LETRAS</h1>

            <img src="img/ATIVIADE 1.png">
            
            <img src="img/ATIVIDADE 2.png">

            <img src="img/ATIVIDADE 3.png">

           
           
            <a href="atividade1.html"><img class="um" src="img/veratividade.png"></a> 

            <a href="atividade2.html"><img class="dois" src="img/veratividade.png"></a> 
 
            <a href="atividade3.html"><img class="tres" src="img/veratividade.png"></a> 

     
   </header>

    <br><br><br><br>

   <header class="atividades2">
    <h1>2-APRENDENDO</h1>
       
            <img src="img/atv4.png">
  
            <img src="img/atv5.png">
  
            <img src="img/atv6.png">

            <a href="atividade4.html"><img class="um" src="img/veratividade.png"></a> 

            <a href="atividade5.html"><img class="dois" src="img/veratividade.png"></a> 
 
            <a href="atividade6.html"><img class="tres" src="img/veratividade.png"></a> 

</header>
<br>





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