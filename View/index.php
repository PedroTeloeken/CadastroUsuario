<html>
<head>
<title> Cadastro de Usuário </title>
</head>
<body>
<form method="POST" action="/cadastro/Controller/cadastro.php">
<label>E-mail:</label><input type="text" name="email" id="email"><br>
<label>Senha:</label><input type="text" name="password" id="password"><br>
<label>Confirm Password:</label><input type="text" name="passwordConfirm" id="passwordConfirm"><br>
<label>Cep:</label><input type="text" name="cep" id="cep"><br>
<label>Bairro:</label><input type="text" name="district" id="district"><br>
<label>Cidade:</label><input type="text" name="city" id="city"><br>
<label>Rua:</label><input type="text" name="street" id="street"><br>
<input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
<input type="submit" value="Deletar" id="deletar" name="deletar">
<input type="submit" value="Atualizar" id="Atualizar" name="atualizar">
</form>
<form method="POST" action="/cadastro/Controller/allUsers.php">
<input type="submit" value="Todos os usuarios" id="cadastrar" name="cadastrar">
</form>
<form method="GET" action="/cadastro/Controller/delete.php">
<label>E-mail:</label><input type="text" name="email" id="email"><br>
<input type="submit" value="Deletar usuario com email" id="cadastrar" name="cadastrar">
</form>
</body>
</html>