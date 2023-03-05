<?php
//seta o acesso
include('config.php');

    $r_nome = '';
    $r_fone = '';
    $r_id = '';

//captura informação apos paertar o botao
if (getenv("REQUEST_METHOD") == "POST") {

// captura dos dados digitados
$nome=$_POST['nome'];

//pesquisar  no banco de dados
    $query="select * from telefones where nome like'%$nome%'";
    $stmt = $conn->query($query);
    $stmt->execute(array());

    while($row = $stmt->fetch()) {
        $r_nome = $row['nome'];
        $r_fone = $row['telefone'];
		$r_id = $row['Id'];
    }

}
?>

<!DOCTYPE html>
<html>
	<head>
		<title> Pesquisa </title>
	</head>
	<body>
		<br><br><br><br>
		<center>
			<font size=8 color=blue>
				<b>
					Pesquisar telefone
				</b>
			</font>
				<br><br>
			<form type="submit" method="post" action="pesquisar.php">
				Nome:<input type="text" value=""  name="nome">
				<br><br>
				<button type="submit">Pesquisar</button>
			</form>
			<br>
			<form type="submit" method="POST" action="excluir.php?id=<?php echo $r_id?>">
				<button type="submit">excluir</button>
			</form>

			<br><br>
			<?php echo $r_nome;?>
			<br>
			<?php echo $r_fone;?>
			<br>
			<?php echo $r_id;?>
            &nbsp;,&nbsp;
		<a href="altera.php?id=<?php echo $r_id?>">	
			Alterar
		</a>
		</center>

	</body>
</html>