<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Biloud Film</title>

    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <?php include('./requires/dblog.php'); ?>
  </head>
  <body>
    <!--Navigation bar-->
    <?php include('./includes/navbar.php'); ?>
    <!--/ Navigation bar-->


    <!--Feature-->
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <br><br><h2>Contact</h2>
            <p>Contactez-nous par téléphone ou directement via le formulaire de contact.</p>
            <hr class="bottom-line">
          </div>
          <div class="feature-info">



            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <img src="./img/akkad.jpg" class="img-circle" width="100px;">
                  <h4>Akkad Saritas</h4>
                  <p style="text-align: justify;">Gestionnaire du site <br>0475/55.55.55</p>
                </div>
                <div class="fea-img pull-left">

                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <img src="./img/akkad.jpg" class="img-circle" width="100px;">
                  <h4>Akkad Saritas</h4>
                  <p style="text-align: justify;">Gestionnaire du site <br>0475/55.55.55</p>
                </div>
                <div class="fea-img pull-left">

                </div>
              </div>
            </div>
            <div class="fea">
              <div class="col-md-4">
                <div class="heading pull-right">
                  <img src="./img/akkad.jpg" class="img-circle" width="100px;">
                  <h4>Akkad Saritas</h4>
                  <p style="text-align: justify;">Gestionnaire du site <br>0475/55.55.55</p>
                </div>
                <div class="fea-img pull-left">

                </div>
              </div>
            </div>

        </div>
        </div>
      </div>
    </section>
    <!--/ feature-->

    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row" style="margin-left:75px;">


          <script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key= AIzaSyC7VJqLIuUdvFQEI4OQ3DN_bRX491W60dU '></script><div style='overflow:hidden;height:366px;width:934px;'><div id='gmap_canvas' style='height:366px;width:1000px;'></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div> <a href='https://embedmaps.net'>embedmaps.net</a> <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=b3544efd00073988aecba19be972c2ffe2a15225'></script><script type='text/javascript'>function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(50.845355,4.357285000000047),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.845355,4.357285000000047)});infowindow = new google.maps.InfoWindow({content:'<strong>BeCode</strong><br>BeCode, Cantersteen 10<br>1000 Bruxelles<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
      </div>
    </section>
    <!--Contact-->
    <section id ="contact" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>Formulaire de contact</h2>
            <hr class="bottom-line">
          </div>
          <div class="texteRight">
            <br>
              <?php
              if(!empty($_POST)){

                    /* EMAIL S£YSTEM
                    $destinataire = 'jonathan.caron04@gmail.com';
                    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
                    $expediteur = $_POST['email'];

                    $objet = "test";

                    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
                    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
                    $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
                    $headers .= 'From: "Nom_de_destinataire"<'.$expediteur.'>'."\n"; // Expediteur

                    $message =  '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour '.$_POST['name'].'!<br>
                                    '.$_POST['message'].'</div>';

                    if(mail($destinataire, $objet, $message, $headers))
                    {
                        echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
                    }
                    else // Non envoyé
                    {
                        echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
                    }
                    */
                ?>
                <p style="color:green">Votre message a bien été envoyé !</p>
                <?php
                error_reporting(E_ALL);
                ini_set('display_errors', 1);
                $pNom= $_POST["nom"];
                $pEmail= $_POST["email"];
                $pObjet= $_POST["objet"];
                $pMessage= $_POST["message"];
                $bdd->exec("INSERT INTO contact (nom, email, objet, message) VALUES ('$pNom', '$pEmail', '$pObjet', '$pMessage')");



                ?>

                <form action="contact.php" class="contactForm">
                    <div class="col-md-6 col-sm-6 col-xs-12 left">
                      <div class="form-group">
                          <input type="text" name="nom" class="form-control form" id="nom" value="<?php echo $pNom; ?>" data-rule="minlen:4" data-msg="Veuillez entrer au minimum 4 caractères" disabled />
                          <div class="validation"></div>
                      </div>
                      <div class="form-group">
                          <input type="email" class="form-control" name="email" id="email" value="<?php echo $pEmail; ?>" data-rule="email" data-msg="Veuillez entrer un mail valide" disabled />
                          <div class="validation"></div>
                      </div>
                      <div class="form-group">
                          <input type="text" class="form-control" name="objet" id="objet" value="<?php echo $pObjet; ?>" data-rule="minlen:4" data-msg="Veuillez entrer au minimum 8 caractères" disabled />
                          <div class="validation"></div>
                      </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12 right">
                      <div class="form-group">
                          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Veuillez inscrire un message" disabled><?php echo $pMessage; ?></textarea>
                          <div class="validation"></div>
                      </div>
                    </div>

                    <div class="col-xs-12">
                      <!-- Button -->
                      <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Retour</button>
                    </div>
                </form>

              <?php
              }
              else{
              ?>
              <form action="contact.php" method="post" role="form" class="contactForm">
                  <div class="col-md-6 col-sm-6 col-xs-12 left">
                    <div class="form-group">
                        <input type="text" name="nom" class="form-control form" id="nom" placeholder="Votre nom" data-rule="minlen:4" data-msg="Veuillez entrer au minimum 4 caractères" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Votre email" data-rule="email" data-msg="Veuillez entrer un mail valide" />
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="objet" id="objet" placeholder="Objet" data-rule="minlen:4" data-msg="Veuillez entrer au minimum 8 caractères" />
                        <div class="validation"></div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12 right">
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Veuillez inscrire un message" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                  </div>

                  <div class="col-xs-12">
                    <!-- Button -->
                    <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Envoyer</button>
                  </div>
              </form>
              <?php } ?>

            </div>

        </div>
      </div>
    </section>
    <!--/ Contact-->
    <!--Footer-->
    <?php include('./includes/footer.php'); ?>
    <!--/ Footer-->

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>

  </body>
</html>
