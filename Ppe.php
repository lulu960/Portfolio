<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/Index.css" />
    <title>Mes PPE</title>
    <link rel="icon" href="img/logo.png">
  </head>
  <body class="corp">
    <!--header-->
    <?php require 'header.php' ?>
    <div class="Presentation">
      <h1 class="Page_division">PPE</h1>
    </div>
    <div class="Page_corp">
      <div class="Page_txt">
        <h1 class="Page_title_bts_sio">Le PPE c'est quoi ?</h1>
        <p class="Ppe_txt">
          Le projet personnalisé encadré (PPE) est une modalité d’enseignement
          et de formation possédant une cohérence thématique ancrée dans la
          pratique professionnelle. Chaque thème de PPE permet de développer un
          certains nombres de savoir-faire, attitudes et comportements
          professionnels en relation avec la production et la fourniture de
          services et de mobiliser les techniques de communication
          interpersonnelle et de coopération professionnelle.
        </p>
        <h2 class="Ppe_txt">Mes projets réalisés pendant ce BTS</h2>
        <div class="Ppe_container">
          <div class="Porojet_citygame">
            <h2 class="Projet_tittle">Citygame</h2>
            <p>
              Citygame est notre projet de première année, il a consisté à créer
              un site de vente en ligne fictif. Ce site vend donc des jeux
              vidéo. Au cours de ce projet les compétences utilisées ont été le
              HTML, CSS, PHP, et du Javascript. Vous pouvez retrouver le site à
              cette address :
              <a href="https://www.ppe1.lucas-taranne.fr/" target="_blank">www.ppe1.lucas-taranne.fr</a>
              ainsi que le code source <a href="https://github.com/lulu960/PPE1_Citygame" target="_blank">ici</a>
            </p>
            <img src="img/citygame.png" class="Ppe_img" alt="" />
          </div>
          <div class="Porojet_salle_marche">
            <h2 class="Projet_tittle">Salle de marché</h2>
            <p>
            Le projet de salle de marchés est le projet de deuxième année;
                c'est une application Windows formes qui a pour but de simuler un
                marché boursier. Mise à jour des cours de bourse, achat et vente
                d'action. Vous pouvez retrouver cette application à cette
                address :
                <a href="https://github.com/lulu960/PPE_Return" target="_blank">https://github.com</a> 
            </p>
            <img src="img/salle_marché.png" class="Ppe_img" alt="">
          </div>
        </div>
        <h2 class="Ppe_txt">Mon stage en BTS SIO</h2>
        <div class="Porojet_salle_marche">
            <h2 class="Projet_tittle">Apprentissage des bases de la programmation</h2>
            <p>
            Mon objectif durant ce stage à la mairie de Maisons-Laffitte était de mettre en place un 
            cours sur les bases de la programmation à l'aide de robots programmable, puis dispenser ce 
            cours dans toutes les classes de tous les niveaux d’une école primaire. Vous pouvez trouver
            ci-joint la présentation Powerpoint en cliquant <a href="veille/La programmation.pptx" target="_blank">ici</a>.   
            </p>
            <img src="img/boite-programmation-elementaire.jpg.png" class="Ppe_img" alt="">
          </div>
      </div>
    </div>
    <?php require 'footer.php' ?>
  </body>
</html>
