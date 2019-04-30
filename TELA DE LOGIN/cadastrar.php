<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Projeto Login</title>
	<link rel="stylesheet" href="CSS/estiloCadastrar.css">
</head>
<body>
	<div id="corpo-form">
	<h1>Cadastrar</h1>
	<form method="POST" action="processaCadastrar.php">
		<input type="text" name="nome" placeholder="Nome Completo" maxlength="40">
		<input type="text" name="telefone" placeholder="Telefone" maxlength="30">
		<input type="email" name="email" placeholder="Email" maxlength="40">
		<input type="password" name="senha" placeholder="Senha" maxlength="20">
		<input type="password" name="confsenha" placeholder="Confirmar Senha" maxlength="20">
		<input type="submit" value="Cadastrar">
		
	</form>
</div>
</body>
</html>