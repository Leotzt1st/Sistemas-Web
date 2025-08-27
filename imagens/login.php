<html>
<body>
<?php
$bd = mysqli_connect("localhost", "root", "", "empresa");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
    $consulta = mysqli_query($bd, $query);

    if (mysqli_num_rows($consulta) == 1) {
        $usuario = mysqli_fetch_array($consulta);
        echo "Login bem-sucedido!<br><br>";
        echo "Nome: {$usuario['nome']}<br>";
        echo "Email: {$usuario['email']}<br>";
        echo "Telefone: {$usuario['fone']}<br>";
        echo "Senha: {$usuario['senha']}<Br>";
        echo "Foto: {$usuario['foto']}<br>";
        echo "<img src='img/{$usuario['foto']}' width='100' height='100'><br>";
    } else {
        echo "Usuário ou senha inválidos.";
    }
}

mysqli_close($bd);
?>
<br><a href="consultar.html">Voltar</a><br>
</body>
</html>
