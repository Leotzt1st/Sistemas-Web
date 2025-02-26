<html>
<body>
<?php
	$x = $_POST["a"];
	$p = $_POST["b"];
	
    if ($p=='dinheiro')
        $valor=$x - ($x*0.15);

    elseif($p=='2x')
        $valor=($x - ($x*0.05))/2;

    elseif($p=='3x')
        $valor=($x + ($x*0.05))/3;

	echo "O valor R$ $x com o pagamento $p tem a parcela de R$ $valor";
?>
</body>
</html>