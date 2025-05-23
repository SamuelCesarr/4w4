<?php
/**
 * Traitement des images svg
 */

function vague($couleur){ ?>

<svg 
xmlns="http://www.w3.org/2000/svg" 
class="vague"
style="top:10px;"
viewBox="0 0 1440 320">
    <path 
        fill="<?= $couleur ?>" 
        fill-opacity="1" 
        d="M0,128L48,154.7C96,181,192,235,288,229.3C384,224,480,160,576,154.7C672,149,768,203,864,213.3C960,224,1056,192,1152,176C1248,160,1344,160,1392,160L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>

<?php

function afficher_icones_sociaux() {
    ?>
    <a href="https://facebook.com" target="_blank" rel="noopener">
        <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20" alt="Facebook">
    </a>
    <a href="https://instagram.com" target="_blank" rel="noopener">
        <img src="https://s2.svgbox.net/social.svg?ic=instagram&color=000" width="20" height="20" alt="Instagram">
    </a>
    <a href="https://github.com/SamuelCesarr/4w4" target="_blank" rel="noopener">
        <img src="https://s2.svgbox.net/social.svg?ic=github&color=000" width="20" height="20" alt="GitHub">
    </a>
    <?php
} 

function creer_vague($couleur_haut, $couleur_bas) {
    echo '
    <div class="vague-separateur" style="background: linear-gradient(to bottom, '.$couleur_haut.' 0%, '.$couleur_bas.' 100%);">
        <svg viewBox="0 0 1440 120" width="100%" height="120" preserveAspectRatio="none">
            <path d="M0,0 C480,120 960,0 1440,120 L1440,0 L0,0 Z" fill="'.$couleur_bas.'"/>
        </svg>
    </div>';
}
}