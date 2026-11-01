<?php
$scores = [100, 65, 30, 85];

foreach ($scores as $score) {
    if ($score >= 80){
        echo $score. "点:よくできました\n";
    } elseif ($score >= 60) {
        echo $score . "点:合格です\n";
    }else {
        echo $score ."点:不合格です\n";
    }
}