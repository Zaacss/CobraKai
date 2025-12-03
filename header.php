<?php
if (!isset($titulo_pagina)) {
    $titulo_pagina = "Cobra Kai";
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?php echo $titulo_pagina; ?></title>
    <link rel="stylesheet" href="css/style.css">

    
</head>

<body>

<header>
    <h1><?php echo $titulo_pagina; ?></h1>

    <nav>
        <a href="index.php">Início</a>
        <a href="personagens.php">Personagens</a>
        <a href="temporadas.php">Temporadas</a>
        <a href="desenvolvedores.php">Desenvolvedores</a>
    </nav>
</header>

<div class="container">