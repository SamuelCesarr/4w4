<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4W4-Voyage</title>
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <img src="<?php echo get_template_directory_uri() . '/images/logo.avif' ?>" alt="logo voyage">
            </figure>
            <div class="entete__nav">
                <nav class="entete__menu">
                    <ul class="menu">
                        <li class="menu__li">
                            <a class="menu__a" href="#">Sport</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Pleine Nature</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">Croisière</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Aventure</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a" href="#">Culturel</a>
                        </li>
                        <li class="menu__li">
                            <a class="menu__a"  href="#">Repos</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Zen</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Économique</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Favorite</a>
                        </li>
                        <li class="menu__li">
                            <a  class="menu__a" href="#">Pays</a>
                        </li>
                    </ul>
                </nav>
                <div class="entete__recherche">
                    <form  class="recherche">
                        <input type="text" class="recherche__input" placeholder="Recherche...">
                        <img  class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="20" height="20">
                    </form>
                </div>
            </div>
        </div>
    </header>