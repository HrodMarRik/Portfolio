<?php
// Définir le chemin de base du site
define('BASE_PATH', '/');

// Fonction helper pour générer les URLs
function asset($path) {
    // Nettoyer le chemin
    $path = ltrim($path, '/');
    
    // Construire l'URL complète
    return BASE_PATH . $path;
}

// Fonction pour obtenir l'URL complète
function url($path = '') {
    $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
    $host = $_SERVER['HTTP_HOST'];
    return $protocol . $host . BASE_PATH . ltrim($path, '/');
}

// Fonction pour les images
function image($path) {
    return asset('assets/images/' . ltrim($path, '/'));
}

define('BASE_URL', '/');  // Si le site est à la racine
// OU
// define('BASE_URL', '/Portfolio/');  // Si le site est dans un sous-dossier Portfolio
?> 

