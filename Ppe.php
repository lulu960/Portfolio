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
          certain nombre de savoir-faire, attitudes et comportements
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
              <a href="https://www.ppe1.lucas-taranne.fr/">www.ppe1.lucas-taranne.fr</a>
            </p>
            <img src="img/citygame.png" class="Ppe_img" alt="" />
          </div>
          <div class="Porojet_salle_marche">
            <h2 class="Projet_tittle">Salle de marché</h2>
            <p>
                Le projet de salle de marché est le projet de deuxième année,
                c'est une application Windows forms qui a pour but de simuler un
                marché boursier. Mise à jour des cours de bourse, achat et vente
                d'action. Vous pouvez retrouver cette application a cette
                address :
                <a href="">www.blalbl.fr</a> 
            </p>
            <img src="img/salle_marché.png" class="Ppe_img" alt="">
          </div>
        </div>
      </div>
    </div>
    <?php require 'footer.php' ?>
  </body>
</html>
