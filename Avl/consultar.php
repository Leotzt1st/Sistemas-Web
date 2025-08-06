<HTML>
<BODY>
<?php
$expressao = $_POST["expressao"];
$bd = mysqli_connect("localhost", "root", "", "repertorio") or die("erro!");
 
if (isset($_POST["op"])) {
    $op = $_POST["op"];
 
    if ($op == "titulo")
        $consulta = mysqli_query($bd, "select * from musicas where titulo='$expressao'") or die(mysqli_error($bd));
    if ($op == "genero")
        $consulta = mysqli_query($bd, "select * from musicas where genero='$expressao'") or die(mysqli_error($bd));
    if ($op == "artista")
        $consulta = mysqli_query($bd, "select * from musicas where artista like '%$expressao%'") or die(mysqli_error($bd));
    if ($op == "ano_lancamento")
        $consulta = mysqli_query($bd, "select * from musicas where ano_lancamento >= '$expressao'") or die(mysqli_error($bd));
} else {
    echo "Volte à página e escolha o campo que fará a pesquisa";
    exit;
}
 
if (!$consulta) {
    echo "Erro na consulta: " . mysqli_error($bd);
    exit;
}
 
$reg = mysqli_fetch_array($consulta);
if (!$reg) {
    echo "Não existem registros para a pesquisa!";
    exit;
}
 
while ($reg) {
   $titulo=         $reg["titulo"];
$artista=           $reg["artista"];
$album=     $reg["album"];
$genero=           $reg["genero"];
$ano_lancamento=               $reg["ano_lancamento"];
$duracao=              $reg["duracao_segundos"];
$gravadora=            $reg["gravadora"];
$compositor=    $reg["compositor"];
$letra=     $reg["letra"];
$caminho_arquivo=              $reg["caminho_arquivo"];
$data_cadastro=            $reg["data_cadastro"];;
 
    echo "
    titulo:       $titulo<BR>
    artista:        $artista<BR>
    album:      $album<BR>
    genero:     $genero<BR>
    ano_lancamento:         $ano_lancamento<BR>
    duracao:            $duracao<BR>
    compositor:    $compositor<BR>
    gravadora:     $gravadora<br>
    letra:     $letra<br>
    caminho_arquivo:  $caminho_arquivo<br>
    data_cadastro:    $data_cadastro<br>";
 
    ?>
    <a href="excluir.php?id=<?php echo $artista; ?>" onclick="return confirm('Excluir o registro?');">Excluir</a>
    <a href="alterar.php?id=<?php echo $artista; ?>">Alterar</a><hr>
    <?php
 
    $reg = mysqli_fetch_array($consulta);
}
?>
<br><a href="consultar.html">Voltar</a><br>
</body>
</html>