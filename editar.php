<?php
	require_once("model/crud.class.php");
	$id_usuario= "";
	$nome="";
	$email="";

	if(isset($_GET['id_usuario'])) {
			$usuario= new Crud("usuarios");
			$filtro= array("id_usuario" => $_GET['id_usuario']);
			$resposta= $usuario->selectCrud("*", true, $filtro);
			$nome= $resposta[0]->nome;
			$id_usuario = $resposta[0]-> id_usuario;
			$email=$resposta[0]->email;
			
}

if(isset($_POST['editar'])){
	$usuario=new Crud("usuarios");
	$array_dados= array("nome" => $_POST['nome'], "email" => $_POST['email'], "senha" => $_POST['senha']);
	$array_id= array("id_usuario"=> $_POST["id_usuario"]);

	$resposta= $usuario ->atualizaCrud($array_dados, $array_id);
	if($resposta) header("Location: index.php");

}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Editar usuário</title>
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
				<h2>Editar de usuário</h2>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12">
				<form action="editar.php" method="POST" class="was-validated">
				<input type="hidden" name="id_usuario" value="<?php echo $id_usuario;?>">
					<div class="form-group">
					  <label for="nome">Nome:</label>
					  <input type="text" class="form-control" id="nome" placeholder="Nome do usuário" name="nome" value="<?php echo htmlspecialchars($nome); ?>" required>				  
					</div>	
					<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" class="form-control" id="email" placeholder="Email do usuário" name="email" value="<?php echo htmlspecialchars($email); ?>" required>				  
					</div>
					<div class="form-group">
						<label for="senha">Senha:</label>
						<input type="password" class="form-control" id="senha" placeholder="***********" name="senha" value="<?php echo htmlspecialchars($senha); ?>"required>				  
					</div>
					<button type="submit" name="editar" class="btn btn-primary">Salvar alterações</button>
				</form>  
			</div>
			<div class="col-sm-12 col-md-12 col-lg-12 text-center mt-4">
				<a class="btn btn-danger" href="index.php">Voltar</a>
			</div>
		</div>
	</div>
</body>
</html>
