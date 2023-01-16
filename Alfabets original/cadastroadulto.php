<html> 
	<head>
		<meta charset="utf-8">
		<title>Incluir Login - Tarefa6</title>
	</head>
	<body>
<?php
	include_once("conexao.php");
	
	$nomeR=$_POST['nomeR'];
	$nomeC=$_POST['nomeC'];
	$idade=$_POST['idade'];
	$email=$_POST['email'];
	$senha=$_POST['senha'];
	

	
		
		$sqlselect= "SELECT * FROM Usuarios WHERE email = '$email'";
		$resultadoselect = @mysqli_query($conect,$sqlselect);
			
			if (@mysqli_num_rows($resultadoselect)==0){
				$sql = "insert into usuarios (nomeResponsavel,email,senha,nomeCrianca,aniversarioCrianca) values ('$nomeR','$email','$senha','$nomeC','$idade')";
				$resultado = @mysqli_query($conect,$sql);


				$procurar = "select * from usuarios where email = '$email'";
				$resultadoProcurar= @mysqli_query($conect,$procurar);
				$exibe = mysqli_fetch_assoc($resultadoProcurar);  

				$id = $exibe['idUser'];

				$atividade1 = "insert into resultado(situacao,codUser,codFase) values ('Incompleto','$id',1)"; 
				$resultadoAtividade1 = @mysqli_query($conect,$atividade1);
				$atividade2 = "insert into resultado(situacao,codUser,codFase) values ('Incompleto','$id',2)"; 
				$resultadoAtividade2 = @mysqli_query($conect,$atividade2);
				$atividade3 = "insert into resultado(situacao,codUser,codFase) values ('Incompleto','$id',3)"; 
				$resultadoAtividade3 = @mysqli_query($conect,$atividade3);
				$atividade4 = "insert into resultado(situacao,codUser,codFase) values ('Incompleto','$id',4)"; 
				$resultadoAtividade4 = @mysqli_query($conect,$atividade4);
				$atividade5 = "insert into resultado(situacao,codUser,codFase) values ('Incompleto','$id',5)"; 
				$resultadoAtividade5 = @mysqli_query($conect,$atividade5);
				$atividade6 = "insert into resultado(situacao,codUser,codFase) values ('Incompleto','$id',6)"; 
				$resultadoAtividade6 = @mysqli_query($conect,$atividade6);
				$questionario = "insert into resultado(situacao,codUser,codFase) values ('Incompleto','$id',7)"; 
				$resultadoQuestionario = @mysqli_query($conect,$questionario);

				header('Location:index.html');

				if (!$resultado){
					die ('Query Inválida: ' . @mysqli_error($conect));
					exit;
				}else{
					mysqli_close($conect);
				}
			}
			else{
				echo "Esse nome de login já existe, tente um novo!";
			}
		
?>
	</body>
</html> 