<html>
<head>
<title> Cadastro de Usuário </title>
</head>
<body>
<form method="POST" action="/cadastro/Controller/login.php">
<label>E-mail:</label><input type="text" name="email" id="email"><br>
<label>Senha:</label><input type="text" name="password" id="password"><br>
<input type="submit" value="entrar" id="entrar" name="entrar">
</form>
<form method="POST" action="/cadastro/View/index.php">
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
</form>
</body>
</html>