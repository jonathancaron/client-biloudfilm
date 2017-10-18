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


    <section id ="feature" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="header-section text-center"><br><br>
            <h2>Bibliothèque</h2>
            <p>Retrouvez ci-dessous les affiches des films les plus récents.</p>
            <hr class="bottom-line">
          </div>
          <div class="feature-info">

            <?php for ($i=1; $i < 7; $i++) {
              $query=$bdd->prepare('SELECT id, titre, description FROM films WHERE id = :id ORDER BY date');
              $query->bindValue(':id',$i, PDO::PARAM_STR);
              $query->execute();
              $data=$query->fetch();
              $id = $i;
              $titre = $data['titre'];
              $description = $data['description'];
              $query->CloseCursor();

              ?>

              <div class="row" style="border:1px solid #dbdbdb; border-radius:5px;">


                <div class="col-md-2">
                    <img src="./img/films/<?php echo $id ?>.jpg" width="150px;">

                </div>
                <div class="col-md-10">
                    <h4><?php echo $titre ?></h4>
                    <span style=" "><?php echo $description ?>
                </div>


              </div>
              <br>
              <?php } ?>



        </div>
        </div>
      </div>
    </section>
    <!--/ feature-->


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
