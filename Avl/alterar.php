<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Alteração</TITLE>
</HEAD>
<?php

$artista=trim($_GET["artista"]);

$bd=mysqli_connect("localhost","root","","repertorio") or die ("erro!");


$sql="select * from musicas where artista = '$artista'";

$consulta=mysqli_query($bd, $sql);
$reg=mysqli_fetch_array($consulta);

if ($reg==0)
{
	 echo "ERRO - Registro não Existe.  ";
	 exit;
}
else
{
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
}
?>
<center><h2>Alterar Registros</center>
	<?php echo "artista: $artista<br><br>" ?>
	titulo:		<input type="text" size="40" name="titulo"><BR><br>
artista:			<input type="text" size="07" name="artista" maxlength="07"><br><br>
album:		<input type="text" size="40" name="album"><BR><br>
genero:			<input type="text" size="20" name="genero"><BR><br>
ano_lancamento:			<input type="text" size="20" name="ano_lancamento"><BR><br>
duracao:			<input type="text" size="04" name="duracao"><BR><br>
gravadora:			<input type="text" size="20" name="gravadora"><BR><br>
compositor:	<input type="text" size="30" name="compositor"><BR><br>
letra:		<textarea rows="6" cols ="60" name = "letra"></textarea><br>
caminho_arquivo:			<input type="text" size="20" name="caminho_arquivo"><BR><br>
data_cadastro:			<input type="text" size="20" name="data_cadastro"><BR><br>
				<input type="submit" value="Alterar">
 	</form>	
	
</body>
</html>
