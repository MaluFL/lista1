<?php
    $base = $_POST["base"];
    $expoente = $_POST["expoente"];
    $potencia = pow($base, $expoente);
    echo "A potência é: $potencia";