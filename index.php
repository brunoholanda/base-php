<?php

include('config.php');


//captura informação apos paertar o botao
if (getenv("REQUEST_METHOD") == "POST") {

// captura dos dados digitados
$nome=$_POST['nome'];
$fone=$_POST['fone'];

//exibe dados digitados
echo $nome;	
echo "<br>";
echo $fone;	

//salvar no banco de dados
$data=[
'nome' => $nome,
'fone' => $fone
];

    $query="INSERT INTO telefones (nome,telefone) values (:nome, :fone)";
    $stmt = $conn->prepare($query);
    $stmt->execute($data);
    echo "Registro Salvo com sucesso!";

}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Cadastro</title>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<font size=8 color=blue>
				<b>
					Agenda telefonica
					
				</b>
			</font>
				<br><br>
			<form type="submit" method="post" action="index.php">
				Nome:<input type="text" value=""  name="nome">
				<br><br>
				fone:<input type="text" value=""  name="fone">
				<br><br>
				<button type="submit">salvar</button>
			</form>
		</center>
	</body>
	<center>
		<br><br>
		<a href="pesquisar.php">	
			Pesquisa
		</a>
	</center>
</html>