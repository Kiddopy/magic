<html>
<head>
	<meta charset="UTF-8">
</head>

<body>
<?php
include_once("configura.php");

if(isset($_POST['submit'])) {	
	$nome = $_POST['nomedacarta'];
	$tipo = $_POST['tipo'];
	$descrssicao = $_POST['descricao'];
	$atq = $_POST['atq'];
	$def = $_POST['def'];
	$edicao = $_POST['edicao'];
	$preco = $_POST['preco'];
	$data = $_POST['data'];

		$result = mysql_query("INSERT INTO cartas(nome,tipo,descricao,ataque,defesa,edicao,preco,data) VALUES('$nome','$tipo','$descricao','$atq','$def','$edicao','$preco','$data')");
		
		echo "Dados inseridos com sucesso";
}
?>
</body>
</html>