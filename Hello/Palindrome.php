<?php

// Crie um método para verificar se as frases a seguir são Palíndromos:
// A grama e amarga
// Anotaram os dados da maratona
// assim a aluna anula a missa
function palindrome($phrase)
{
    $original = $phrase;
    $phrase = strtolower($phrase);
    $phrase = str_replace(' ', '', $phrase);
    $reverse = strrev($phrase);

    if ($phrase == $reverse) {
        return "A frase {$original} é um palíndromos";
    }
    return "A frase {$original} não é um palíndromos";
}

echo palindrome('A grama e amarga') . PHP_EOL;
echo palindrome('Anotaram os dados da maratona') . PHP_EOL;
echo palindrome('assim a aluna anula a missa') . PHP_EOL;