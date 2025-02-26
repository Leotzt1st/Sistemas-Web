<html>
<body>
<?php
	$nota1 = $_POST["a"];
	$nota2 = $_POST["b"];
    $nota3 = $_POST["c"];
	$media = ($nota1 + $nota2 + $nota3)/3;

    if($media>=6)
        $situacao = "aprovado";

    if($media<6) 
        $situacao = "reprovado";
	echo "A $media e vc esta $situacao";
?>
</body>
</html>