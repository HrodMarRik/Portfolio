<section class="heading-page header-text" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Mentions Légales</h2>
      </div>
    </div>
  </div>
</section>

<section class="meetings-page" id="meetings">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="row">
          <div class="col-lg-12">
            <div class="meeting-single-item">
              <div class="thumb">
                <img src="../../assets/images/single-meeting.jpg" alt="">
              </div>
              <div class="down-content">
                  <?php
                    require '../../vendor/autoload.php';
                    $file = "Projet1";
                    $cheminFichier = '../../partials/Projet/' . $file .".md";

                    // Vérifier si le fichier existe
                    if (file_exists($cheminFichier)) {
                        // Lire le contenu du fichier
                        $contenuMarkdown = file_get_contents($cheminFichier);

                        // Créer une instance de Parsedown
                        $parsedown = new Parsedown();

                        // Convertir le Markdown en HTML
                        $html = $parsedown->text($contenuMarkdown);

                        // Afficher le HTML
                        echo $html;
                    } else {
                        echo "Le fichier $cheminFichier n'existe pas.";
                    }
                  ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <br>
</section>

<div class="col-lg-12">
  <h2>France Boulangerie</h2>
  <div class="project-item">
    <h4>Stage en entreprise - Seconde année</h4>
    <div class="missions">
      <h5>Missions réalisées</h5>
      <ul>
        <li>Gestion du parc informatique</li>
        <li>Support utilisateur</li>
        <li>Développement web</li>
        <li>Maintenance applicative</li>
      </ul>
    </div>
    <div class="competences">
      <h5>Compétences mises en œuvre</h5>
      <ul>
        <li>Gérer le patrimoine informatique</li>
        <li>Répondre aux incidents</li>
        <li>Développer la présence en ligne</li>
        <li>Travailler en mode projet</li>
        <li>Mettre à disposition</li>
        <li>Organiser son développement</li>
      </ul>
    </div>
  </div>
</div>
