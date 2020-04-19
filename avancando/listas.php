<?php

$idadeList = [21, 23, 28, 25, 19, 20, 30];
$umaIdade = $idadeList[0];

$idadeList[] = 55;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}
