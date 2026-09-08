<?php
    $capital = $_POST["capital"];
    $taxa = $_POST["taxa"];
    $tempo = $_POST["tempo"];
    $juros = ($capital * $taxa * $tempo) / 100;
    echo "Os juros são: R$ $juros";