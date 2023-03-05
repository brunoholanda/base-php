<?php
//seta o acesso
include('config.php');

$id=$_GET['id'];

echo $id;

    $query="DELETE FROM telefones WHERE Id=?";
    $stmt = $conn->prepare($query);
    $stmt->execute([$id]);

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
					Registro Excluido com sucesso!
				</b>
			</font>
			
		<center>
		<br><br>
		<a href="pesquisar.php">	
			Voltar
		</a>
	</center>
	</body>
</html>