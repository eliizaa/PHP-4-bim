<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="stylesheet" href="./css/index.css"/>
		<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
		
	</head>
	<body>
		<div class="log">
			<img class="logo" src="./img/logo.png"/>
			<h1 class="title">Bem-vindo ao Flasher</h1>
			<form action="loginphp.php" method="post" class="login">
				<input type="text" placeholder="Nome de usuário" name="username" class="box"/></br></br>
				<input type="password" placeholder="Senha" name="senha"class="box"/></br></br>
				
				<a href="home.php"><input type="submit" value="Entrar" id="ent"/></a>
			</form>
			<button class="cad"><a href="cadastrar.php">Cadastrar-se</a></button>
		</div>
	</body>
</html>