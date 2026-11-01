<?php
$name = "たくみ";
$score = 75;

echo $name . "さんの点数は".$score."点です\n";


if ($score >= 80) {
    echo "よくできました\n";
} elseif ($score >= 60) {
    echo "合格です\n";
} else {
    echo "不合格です\n";
}
    