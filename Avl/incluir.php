<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php
$titulo=			$_POST["titulo"];
$artista=			$_POST["artista"];
$album=		$_POST["album"];
$genero= 		   $_POST["genero"];
$ano_lancamento=			   $_POST["ano_lancamento"];
$duracao=			   $_POST["duracao"];
$gravadora=			   $_POST["gravadora"];
$compositor=	$_POST["compositor"];
$letra=		$_POST["letra"];
$caminho_arquivo=			   $_POST["caminho_arquivo"];
$data_cadastro=			   $_POST["data_cadastro"];
$con=mysqli_connect("localhost","root","","repertorio") or die ("erro!");

$in = "insert into musicas values ( null,
                                    '$titulo',
                                    '$artista',
									         '$album',
									         '$genero',
									         '$ano_lancamento',
									         '$duracao',
                                    '$gravadora',
									         '$compositor', 
                                    '$letra',
                                    '$caminho_arquivo',
                                    '$data_cadastro')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   titulo:       $titulo<BR>
   artista:		$artista<BR>
   album:		$album<BR>
   genero:		$genero<BR>
   ano_lancamento:			$ano_lancamento<BR>
   duracao:			$duracao<BR>
   compositor:    $compositor<BR>
   gravadora:     $gravadora<br>
   letra:     $letra<br>
   caminho_arquivo:  $caminho_arquivo<br>
   data_cadastro:    $data_cadastro<br>";
   
   echo "Registro incluído com sucesso!<BR>";
}
else
{
   echo "Registro NÃO incluído!<BR>";
}
echo "<a href='incluir.html'>Voltar</a><BR>";
?>
</BODY>
</HTML>

