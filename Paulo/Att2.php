<?php
    $numeros = 1000;

    $soma=0;
    $totalidade=0;
    for($numeroint=2;$totalidade<1000;$numeroint++) {
        $soma=0;
        for($divisor=1;$divisor<=$numeroint;$divisor++) {
            if($numeroint%$divisor==0) {
                $soma=$soma+1;
            }
        }
        if ($soma==2) {
            echo $numeroint."<br>";
            $totalidade=$totalidade+1;

        }

    }
?>