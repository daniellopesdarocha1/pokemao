<?php  
	include("cabecalho.php"); 
?>

<?php if(isset($_GET["login"]) && $_GET["login"]==true) { ?>
	<p class="alert-success">Logado com sucesso!</p>
<?php }?>

<?php if(isset($_GET["login"]) && $_GET["login"]==false){ ?>
	<p class="alert-danger">Usuário ou senha inválida</p>
<?php }?>

<?php if(isset($_GET["falhaDeSeguranca"]) && $_GET["falhaDeSeguranca"]==true){ ?>
	<p class="alert-danger">Você não tem acesso a esta funcionalidade!</p>
<?php }?>

	<h1>Sistema Pokémon</h1>
	
	<?php if(usuarioEstaLogado()) { ?>

		<p class="text-success">Você está logado como <?=usuarioLogado()?> - <?=tipoUsuarioLogado()?>.</p>

	<?php } else { ?>

	<br>
	<p> "Sistema para Compartilhamento de Pokémons"</p>

	<h2>Login</h2>
	<form action="login.php" method="post">
			<div class="form-horizontal col-md-offset-1">
				<div class="form-group col-md-12">
					<div class="col-md-4">
						<label>Usuario:</label>
					</div>
					<div class="col-md-4">
						<input class="form-control" type="text" name="UserName"/>
					</div>
				</div>
				<div class="form-group col-md-12">
					<div class="col-md-4">
						<label>Senha:</label>
					</div>
					<div class="col-md-4">
						<input class="form-control" type="password" name="senha" />
					</div>
				</div>
			</div>
			<div class="form-groucol-md-12">
					<center><button class="btn btn-primary">Login</button></center>
					
			</div>
	</form>
<?php } ?>
<?php include("rodape.php") ?>