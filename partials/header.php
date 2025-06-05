<?php require_once __DIR__ . '/../config/config.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
  <meta name="description" content="Portfolio de Romaric Chanavat">
  <meta name="author" content="Romaric Chanavat">
  <meta name="copyright" content="Romaric Chanavat"/>

  <title>R.Chanavat</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?php echo asset('assets/css/templatemo-edu-meeting.css'); ?>">
  <link rel="stylesheet" href="<?php echo asset('assets/css/owl.css'); ?>">
  <link rel="stylesheet" href="<?php echo asset('assets/css/lightbox.css'); ?>">

  <style>
    section h1 {
      font-size: 2.5rem;
      margin: 1rem 0;
    }
  </style>
</head>


<header class="header-area header-sticky">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <nav class="main-nav">
                  <a href="/pages/Acceuil.php" class="logo">R.Chanavat</a>

                  
                  <ul class="nav">
                      <div class="main-button-red">
                        <div><a href="/pages/BTS.php">Mon Tableau de synthèse BTS</a></div>
                      </div>
                      <li></li>
                      <li><a href="/index.php">Accueil</a></li>
                      <li class="has-sub">
                          <a href="javascript:void(0)">Projets</a>
                          <ul class="sub-menu">
                              <li><a href="/pages/Projets/GestionBar.php">Gestion Bar</a></li>
                              <li><a href="/pages/Projets/Garage.php">Garage</a></li>
                              <li><a href="/pages/Projets/InitLaravel.php">InitLaravel</a></li>
                              <li class="separator"></li>
                              <li><a href="/pages/Projets/ClicknEat.php">ClicknEat</a></li>
                              <li><a href="/pages/Projets/FranceBoulangerie.php">France Boulangerie</a></li>
                          </ul>
                      </li>

                      <li class="has-sub">
                          <a href="javascript:void(0)">Compétences</a>
                          <ul class="sub-menu">
                              <li><a href="/pages/Competences/GestionPatrimoine.php">Patrimoine Info...</a></li>
                              <li><a href="/pages/Competences/RepondreIncidents.php">Répondre aux incidents</a></li>
                              <li><a href="/pages/Competences/DevelopperLigne.php">Développer la présence</a></li>
                              <li><a href="/pages/Competences/TravaillerProjet.php">Travailler en projet</a></li>
                              <li><a href="/pages/Competences/MettreDisposition.php">Mettre à disposition</a></li>
                              <li><a href="/pages/Competences/OrganiserDeveloppement.php">Organiser le dev...</a></li>
                          </ul>
                      </li>
                      <li><a href="/pages/Veille.php">Veille</a></li>
                      <li><a href="#contact">Contact</a></li>
                  </ul>

                  <a class='menu-trigger'><span>Menu</span></a>
              </nav>
          </div>
      </div>
  </div>
</header>

<style type="">
  .separator {
    border-top: 1px solid #ddd; /* Couleur de la ligne de séparation */
    margin: 10px 0; /* Espacement au-dessus et en dessous de la ligne */
}

</style>