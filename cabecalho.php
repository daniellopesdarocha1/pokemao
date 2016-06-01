<html>
<head>
    <?php include('logica-usuario.php');?>
    <title>Sistema de compartilhamento Pokémon</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
</head>

<body>

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
            	<a href="index.php" class="navbar-brand">Index Pokemao</a></div>
        	</div>
        <div>
            <ul class="nav navbar-nav">
                <li><a href="produto-formulario.php">Adiciona Tipo</a></li>
                <li><a href="pokemon-formulario.php">Adiciona Pokémon</a></li>
                <li><a href="time-formulario.php">Criar Time</a></li>
                <li><a href="lista-produto.php">Produtos</a></li>
                <!--<li><a href="#">Sobre</a></li> -->
            </ul>
        </div>
        <?php 

                if(usuarioEstaLogado()) { ?>
                    <div class='col-md-02 col-md-offset-10'>
                            <ul class='nav navbar-nav'>
                                <li><a href='logout.php'>Logout</a></li>
                            </ul>
                         </div>
        <?php  }?>

        
    </div>

    <div class="container">
    	<div class="principal">