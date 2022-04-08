<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Index.css">
    <title>BTS SIO - Portfolio Lucas Taranne</title>
</head>
<body class="corp">
<!--header-->
    <header>
        <div id="Acceuil">
            <a href="Index.html"><img src="img/logo.png" alt="" class="Img_acceuil"></a>
            <nav class="container">            
                <ul class="Nav_bar">
                    <li class="Nav_items"><a href="Index.html" class="Nav_txt">Acceuil</a></li>
                    <li class="Nav_items"><a href="Bts_sio.html" class="Nav_txt">BTS SIO</a></li>
                    <li class="Nav_items"><a href="Ppe.html" class="Nav_txt">PPE</a></li>
                    <li class="Nav_items"><a href="Competences.html" class="Nav_txt">Compétences</a></li>
                    <li class="Nav_items"><a href="Veille.html" class="Nav_txt">Veille</a></li>
                    <li class="Nav_items"><a href="Stage.html" class="Nav_txt">Stage</a></li>
                    <li class="Nav_items"><a href="Contact.html" class="Nav_txt">Contact</a></li>
                </ul>
            </nav>
        </div>
        <div class="acceuil">
        </div>
<!--Corps de la page-->
    </header>
    <div class="Presentation">
        <h1 class="Page_division">Contact</h1>
    </div>
    <div class="Page_corp">
        <div class="Page_txt">
            <h1 class="Page_title_bts_sio">Me contacter</h1>
            <form method="post">
                <label>Votre email</label>
                <input type="email" name="email" required>
                <label>Message</label>
                <textarea name="message" required></textarea>
                <input type="submit">
            </form>
            <?php
            if (isset($_POST['message'])) {
                $entete  = 'MIME-Version: 1.0' . "\r\n";
                $entete .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $entete .= 'From: webmaster@monsite.fr' . "\r\n";
                $entete .= 'Reply-to: ' . $_POST['email'];
        
                $message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
                <p><b>Email : </b>' . $_POST['email'] . '<br>
                <b>Message : </b>' . htmlspecialchars($_POST['message']) . '</p>';
        
                $retour = mail('lucas.tara960@gmail.com', 'Envoi depuis page Contact', $message, $entete);
                if($retour)
                    echo '<p>Votre message a bien été envoyé.</p>';
            }
            ?>
        </div>
    </div>
    <footer class="footer">
        <div class="Footer_copyright_container">
            <p>Copyright © 2022 Lucas Taranne</p>
        </div>
        <div class="Footer_images_container">
            <a href="https://github.com/lulu960" target="_blank"><img src="img/git.png" alt="" class="Footer_images"></a>
            <a href="https://www.linkedin.com/in/lucas-taranne-5487711b9"target="_blank"><img src="img/linkedIn.png" alt="" class="Footer_images"></a>
        </div>
        <div class="Footer_links_container">
            <a href="#" class="Footer_links">Contact</a>
        </div>
    </footer>
</body>
</html>