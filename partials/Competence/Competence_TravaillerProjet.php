<section class="heading-page header-text" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Competence 4</h2>
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
                    $file = "TravaillerProjet";
                    $cheminFichier = '../../partials/Competence/' . $file .".md";

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

<div class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-heading">
                    <h4>Cybersécurité <em>Web</em></h4>
                    <div class="line-dec"></div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Compétences en Sécurité Web</h5>
                        <p class="card-text">Expertise dans l'identification et la protection contre les vulnérabilités web courantes.</p>
                        
                        <h6 class="mt-4">Domaines de compétence :</h6>
                        <ul>
                            <li>Maîtrise du Top 10 OWASP et des vulnérabilités courantes</li>
                            <li>Réalisation de tests de pénétration web</li>
                            <li>Configuration de pare-feu applicatifs (WAF)</li>
                            <li>Sécurisation des API REST</li>
                        </ul>

                        <h6 class="mt-4">Projets associés :</h6>
                        <div class="row">
                            <!-- Insérez ici vos projets liés à la cybersécurité web -->
                            <div class="col-md-6 mb-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="card-title">Projet 1</h5>
                                        <p class="card-text">Description du projet de sécurité web...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
