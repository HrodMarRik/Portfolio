
<section class="heading-page header-text" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Mon BTS - SIO - SLAM</h2>
      </div>
      <div class="col-lg-12">
        <div class="main-button-red">
          <a href="/assets/document/tab_synthèse.pdf" download>Télécharger :<br> >Annexe 6-1 Tableau de synthèse < </a>
        </div>
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
                <img src="assets/images/single-meeting.jpg" alt="">
              </div>
              <div class="down-content">
                  <?php
                    require '../vendor/autoload.php';
                    $cheminFichier = '../partials/small/BTS.md';

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
