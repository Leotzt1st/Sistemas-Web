<html>
<body>
<?php
	$fouc = $_POST["a"];
	$t = $_POST["b"];

    if ($fouc == 1)
        $c=($t * 5/9)+32;
    elseif ($fouc == 2)
        $c=($t - 32) * 5/9;

	echo "$c";
?>
</body>
</html>