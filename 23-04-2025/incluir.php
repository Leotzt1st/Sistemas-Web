<HTML>
<HEAD>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <TITLE>Incluir</TITLE>
</HEAD>
<BODY>
<?php
$tipo=			$_POST["tipo"];
$endereco=			$_POST["endereco"];
$cidade=		$_POST["cidade"];
$estado= 		   $_POST["estado"];
$preco=			   $_POST["preco"];
$area=			   $_POST["area"];
$quartos=	$_POST["quartos"];
$banheiros=			$_POST["banheiros"];
$vagas_garagem=		$_POST["vagas_garagem"];
$descricao=		$_POST["descricao"];
$con=mysqli_connect("localhost","root","","Imobiliaria") or die ("erro!"); //faz a conexão com o banco de dados detran

$in = "insert into imoveis values ( null,
                                    '$tipo',
                                    '$endereco',
									         '$cidade',
									         '$estado',
									         '$preco',
									         '$area',
									         '$quartos', 
									         '$banheiros', 
									         '$vagas_garagem',
                                    '$descricao')";
$incluir=mysqli_query($con,$in);
if ($incluir==1)
{
   echo "
   tipo:       $tipo<BR>
   endereco:		$endereco<BR>
   cidade:		$cidade<BR>
   estado:		$estado<BR>
   preco:			$preco<BR>
   area:			$area<BR>
   quartos:    $quartos<BR>
   banheiros:		$banheiros<BR>
   vagas_garagem: 	$vagas_garagem<br>
   descricao:     $descricao<br>";
   
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

