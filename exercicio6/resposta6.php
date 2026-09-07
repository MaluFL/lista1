<?php
    $fahrenheit = $_POST["fahrenheit"];
    $celsius = ($fahrenheit - 32) * 5/9;
    echo "A conversão da temperatura em Celsius é: $celsius °C";