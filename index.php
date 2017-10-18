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

    <!--Banner-->
    <div class="banner">
      <div class="bg-color">
        <div class="container">
          <div class="row">
            <div class="banner-text text-center">
  <br><br><br><br><br><br><br>
              <div class="intro-para text-center quote">
                <p class="big-text">Retrouvez les dernières affiches et actualités de film.</p>
                <p class="small-text">Plus de 5 ans d'existence et de stockage d'affiches.</p>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Banner-->
    <!--Feature-->
    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center">
            <h2>A l'affiche</h2>
            <p>Retrouvez ci-dessous les affiches des films les plus récents.</p>
            <hr class="bottom-line">
          </div>
          <div class="feature-info">

            <?php for ($i=1; $i < 7; $i++) {
              $query=$bdd->prepare('SELECT id, titre, description FROM films WHERE id = :id');
              $query->bindValue(':id',$i, PDO::PARAM_STR);
              $query->execute();
              $data=$query->fetch();
              $id = $i;
              $titre = $data['titre'];
              $description = $data['description'];
              $query->CloseCursor();

              ?>

              <div class="fea">
                <div class="col-md-4">
                  <div class="heading pull-right">
                    <img src="./img/films/<?php echo $id ?>.jpg" alt="">
                    <h4><?php echo $titre ?></h4>
                    <p style="text-align: justify;"><?php echo $description ?></p>
                  </div>
                  <div class="fea-img pull-left">

                  </div>
                </div>
              </div>
              <?php } ?>



        </div>
        </div>
      </div>
    </section>
    <!--/ feature-->

    
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
