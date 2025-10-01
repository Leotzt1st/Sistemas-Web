<?php
    $numeros = $_POST ["a"];

    $soma=0;
        for($divisor=1;$divisor<=$numeroint;$divisor++) {
            if($numeroint%$divisor==0) {
                $soma=$soma+1;
            }
        }
        if ($soma==2) {
            echo $numeroint."<br>";

        }

?>