<?php 
include('includes/constants.php');
$title = 'Accueil';
include('partials/_header.php');
?>


  <div id="main-content">
    <div class="container">

      <div class="jumbotron">
        <h1><?= WEBSITE_NAME ;?> ,</h1>
        <?= WEBSITE_NAME ;?> est le réseau social des développeurs. <br>
        Et qui dit développeurs, dit également code source. <br>
        Grâce à cette plateform, vous avez la possibilité de tisser des 
        liens d'amitiés avec d'autres développeurs, échanger des codes
        source, recevoir à l'aide si vous recontrez des problèmes sur l'un de vos projets
        et bien plus encore ! <br>
        Alors n'hésitez plus et <a href="register.php">et rejoingnez la communauté boom !</a>  <br><br>
            <button class="btn btn-lg btn-primary">Créer un compte</button>
      </div>
    </div><!-- /.container -->
  </div>
  <?php 
    include('partials/_footer.php');
  ?>