<?php
    include_once("helpers/url.php");
    include_once("data/categories.php");
    include_once("data/posts.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de code</title>
<!-- Estilo do projeto-->
    <link rel="stylesheet" href="<?= $BASE_URL?>/css/style.css">
<!--Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

</head>
<body>
    <header>
        <a href="<?= $BASE_URL?>" id="logo">
            <img src = "<?= $BASE_URL?>/images/logo.svg" alt="Blog de code">
        </a>
        <nav>
            <ul id="navbar">
                <li><a href="<?= $BASE_URL?>" class="nav_link">Home</a></li>
                <li><a href="" class="nav_link">Categorias</a></li>
                <li><a href="" class="nav_link">Sobre</a></li>
                <li><a href="<?= $BASE_URL?>/contato.php" class="nav_link">Contatos</a></li>
            </ul>
        </nav>
    </header>
</body>