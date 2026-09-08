<?php
    $dias = $_POST["dias"];
    $horas = $dias * 24;
    $minutos = $horas * 60;
    $segundos = $minutos * 60;
    echo "O valor em horas é: $horas";
    echo "<p>";
    echo "O valor em minutos é: $minutos";
    echo "<p>";
    echo "O valor em segundos é: $segundos";