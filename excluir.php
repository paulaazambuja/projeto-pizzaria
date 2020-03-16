<?php
	require_once("model/crud.class.php");
	
	$id_usuario= "";
	$nome="";
	

	if(isset($_GET['id_usuario'])) {
			$usuario= new Crud("usuarios");
			$filtro= array("id_usuario" => $_GET['id_usuario']);
			$resposta= $usuario->selectCrud("*", true, $filtro);
			$nome= $resposta[0]->nome;
			$id_usuario = $resposta[0]-> id_usuario;
	

	if(isset($_GET['confirmar'])) {
		$resposta= $usuario->excluiCrud($filtro);
		if ($resposta)
		header("Location: index.php?excluir=sucesso");
		else
		header("Location: index.php?excluir=erro");
	}


}



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Excluir usuário</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">	
		<div class="row pt-4">
			<div class="col-sm-12 col-md-12 col-lg-12">
				<h2>Excluir o usuário "<?php echo htmlspecialchars ($nome); ?>?"</h2>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 mt-4">
				<a class="btn btn-danger" href="excluir.php?id_usuario=<?php echo $id_usuario; ?>&confirmar">Confirmar</a>
				<a class="btn btn-secondary" href="index.php">Cancelar</a>
			</div>
		</div>
	</div>
</body>
</html>
