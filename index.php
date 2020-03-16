<?php
require_once("model/crud.class.php");

if(isset($_POST['cadastrar'])) {
	
	/*
	pra testar o retorno
	echo "Nome digitado: " . $_POST['nome'];
	echo "<br>";
	echo "Preço digitado: " . $_POST['preco'];*/

	
	$array_dados= array(
		"nome" => $_POST['nome'],
		"email" => $_POST['email'],
		"senha" =>hash("sha256",$_POST['senha']));
		//a senha não deve aparecer em texto claro, por isso ela é diferente na hora de mostrar.
	
		$usuario = new Crud("usuarios");
	$resposta = $usuario -> insereCrud($array_dados);

	//colocando os dados abaixo ele nao cadastra novamente automatico
	if ($resposta)
		header("Location: index.php?cadastrar=sucesso") ;
		else
		header("Location: index.php?cadasatrar=erro");
	


}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Cadastro</title>
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

		   <div class="col-sm-12 col-md-6 col-lg-6">
				<h2>Lista de usuários</h2>			
		   </div>
		   <div class="col-sm-12 col-md-6 col-lg-6 text-right">
				<button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#myModal">Cadastro de usuários</button>
				<!-- The Modal -->
				<div class="modal fade" id="myModal">
				  <div class="modal-dialog">
					<div class="modal-content">
					  <!-- Modal Header -->
					  <div class="modal-header">
						<h4 class="modal-title">Cadastro de usuários</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					  </div>
					  <!-- Modal body -->
					  <div class="modal-body">
							<form action="index.php" method="POST" class="was-validated">
								<div class="form-group">
								  <label for="nome">Nome:</label>
								  <input type="text" class="form-control" id="nome" placeholder="Nome do usuário" name="nome" required>				  
								</div>	
								<div class="form-group">
									<label for="email">Email:</label>
									<input type="email" class="form-control" id="email" placeholder="Email do usuário" name="email" required>				  
								</div>
								<div class="form-group text-left">
									<label for="senha">Senha:</label>
									<input type="password" class="form-control" id="senha" placeholder="***********" name="senha" required>				  
								</div>
								<button name="cadastrar" type="submit" class="btn btn-primary">Cadastrar</button>
							</form>   
						</div>
					  <!-- Modal footer -->
					  <div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
					  </div>
					</div>
				  </div>
				</div>
		   </div>
		</div>
		
		<table class="table table-striped">
		<thead>
		  <tr>
			<th>Id</th>
			<th>Nome</th>
			<th>Email</th>
			<th>Senha</th>
			<th class="text-center">Ações</th>
		  </tr>
		</thead>
		<tbody>
		<?php
			#retorna produtos do banco

			$usuarios = new Crud("usuarios");
			$resposta= $usuarios->selectCrud("*");
			foreach($resposta as $indice => $valor) { 
			echo '<tr>';
			echo '	<td>' . $valor->id_usuario . '</td>';
			echo '	<td>' . htmlspecialchars($valor->nome) .'</td>';
			echo '	<td>' . htmlspecialchars($valor->email) . '</td>';
			echo '	<td>' . htmlspecialchars($valor->senha) . '</td>';
			echo '	<td class="text-center">';
			echo '		<a href="editar.php?id_usuario=' . $valor->id_usuario . '" title="Editar"><i class="fa fa-pencil"></i></a>';
			echo '		<a href="excluir.php?id_usuario=' . $valor->id_usuario . '" title="Excluir"><i class="fa fa-trash-o text-danger"></i></a>';
			echo '	</td>';
			echo '  </tr>';
			}


			?>
		  
		 
		</tbody>
		</table>
	</div>
</body>
</html>
			}
		