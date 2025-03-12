<html>
<body>
<?php
	$n1 = $_POST["a"];
	$n2 = $_POST["b"];
    $n3 = $_POST["c"];
	$n1f = $n1*0.2;
    $n2f = $n2*0.3;
    $n3f = $n3*0.5;
    $media = ($n1f+$n2f+$n3f)/3;
	echo "a media de $n1f, $n2f e $n3f é $media";
?>
</body>
</html>