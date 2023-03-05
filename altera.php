<?php
//seta o acesso
include('config.php');
$id=$_GET['id'];
//captura informação apos paertar o botao

// captura dos dados digitados
echo $id;
//pesquisar  no banco de dados
  $query="select * from telefones where id='$id'";
    $stmt = $conn->query($query);
    $stmt->execute(array());

    while($row = $stmt->fetch()) {
        $r_nome = $row['nome'];
        $r_fone = $row['telefone'];
		$r_id = $row['Id'];
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
					Alterar telefone
				</b>
			</font>
				<br><br>
			<form type="submit" method="post" action="altera.php">
				Nome:<input type="text" value=""  name="nome">
				<br><br>
				<button type="submit">Pesquisar</button>
			</form>
			<br><br>
			<?php if ($id != ''){?>
			<form type="submit" method="post" action="sal_pesq.php">
				<input type="hidden" value="<?php echo $r_id;?>"  name="id">
				Nome:<input type="text" value="<?php echo $r_nome;?>"  name="nome">
				<br><br>
				fone:<input type="text" value="<?php echo $r_fone;?>"  name="fone">
				<br><br>
				<button type="submit">alterar</button>
			</form>
			<?php } ?>
		</center>
		<center>
		<br><br>
		<a href="index.php">	
			Cadastrar
		</a>
	</center>
	</body>
</html>