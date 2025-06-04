<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

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

$bd = mysqli_connect("localhost","root","","imobiliaria") OR DIE ("Erro ao conectar!");

$es=mysqli_query($bd,"update imobiliaria set imovel='$imovel', 
                                    			endereco='$endereco',
									       	 	cidade='$cidade',
									       	 	estado='$estado',
									   	     	preco='$preco',
									      	  	area='$area',
									       	 	quartos='$quartos', 
									        	banheiros='$banheiros', 
									       		vagas_garagem='$vagas_garagem',
                                    			descricao='$descricao'; 
										  		where placa='$tipo'");
if ($es==1)
{
    echo "tipo: $tipo<br>
            endereco: $endereco<br>
			cidade: $cidade<br>
            estado: $estado<br>
			preco: $preco<br>
			area: $area<br>
			quartos: $quartos<br>
			banheiros: $banheiros<br>
            vagas_garagem: $vagas_garagem<br>
            descricao: $descricao<br>
		  <hr>";
	echo "Obrigado por participar - Registro Alterado. <br><br>  ";
}
else
{
    echo "ERRO - Registro não Alterado. <br><br> ";
}
	echo "<a href=consultar.html>Voltar para nova Consulta";
?>
</body>
</html>
