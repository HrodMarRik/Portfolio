
  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h2>Tableau de Synthèse</h2>
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
                  <img src="../assets/images/single-meeting.jpg" alt="">
                </div>
                <div class="down-content">
                    <?php 
                      require '../vendor/autoload.php';
                      $cheminFichier = '../partials/small/tab_synthese.md';

                      // Vérifier si le fichier existe
                      if (file_exists($cheminFichier)) {
                          // Lire le contenu du fichier
                          $contenuMarkdown = file_get_contents($cheminFichier);

                          // Créer une instance de Parsedown
                          $parsedown = new Parsedown();
                          $parsedown->setSafeMode(true); // Activer le mode sûr si le contenu peut provenir de sources externes

                          // Convertir le Markdown en HTML
                          $html = $parsedown->text($contenuMarkdown);

                          // Afficher le HTML
                          echo $html;
                      } else {
                          echo "Le fichier $cheminFichier n'existe pas.";
                      }
                    ?>
                    <div class="col-lg-12">
                      <div class="share">
                        <h5>Projet rattachés:</h5>
                        <ul>
                          <li><a href="#">lien Projet</a>,</li>
                          <li><a href="#">lien Projet</a>,</li>
                          <li><a href="#">lien Projet</a>,</li>
                          <li><a href="#">lien Projet</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="Acceuil.php">Retour vers l'Acceuil</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <br>
    </div>
  </section>
