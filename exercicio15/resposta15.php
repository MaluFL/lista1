<?php
    $preco = $_POST["preco"];
    $percentual = $_POST["percentual"];
    $desconto = $preco * ($percentual / 100);
    $preco_final = $preco - $desconto;
    echo "<p>O valor do desconto é: R$ $desconto</p>";
    echo "<p>O preço final é: R$ $preco_final</p>";