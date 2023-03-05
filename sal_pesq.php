<?php
//seta o acesso
include('config.php');

//captura informação apos paertar o botao
if (getenv("REQUEST_METHOD") == "POST") {

// captura dos dados digitados
$nome=$_POST['nome'];
$fone=$_POST['fone'];
$id=$_POST['id'];

$data=[
$nome,
$fone,
$id
];

    $query="UPDATE telefones SET nome=?,telefone=? WHERE Id=?";
    $stmt = $conn->prepare($query);
    $stmt->execute($data);
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Alterar </title>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<font size=8 color=blue>
				<b>
					Registro alterado com sucesso!
				</b>
			</font>
			
		<center>
		<br><br>
		<a href="index.php">	
			Voltar
		</a>
	</center>
	</body>
</html>