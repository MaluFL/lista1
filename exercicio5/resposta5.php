<?php
    $celsius = $_POST["celsius"];
    $fahrenheit = ($celsius * 9/5) + 32;
    echo "A conversão da temperatura em Fahrenheit é: $fahrenheit °F";