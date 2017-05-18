<?php

/*
 * Repita um range de 0...100 e conte apenas os números impares.
 */
for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . PHP_EOL;
    }
}