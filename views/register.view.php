<?php 
// include('includes/constants.php');
$title = 'Inscription';
include('partials/_header.php');
?>
    

  <div id="main-content">
    <div class="container">
        <h1 class="lead">Devenez dès à present membre !</h1>
        <?php
        include('partials/_errors.php');
        ?>
        <form action="" method="post" class="well col-md-6">
            <div class="form-group">
                <label for="name" class="control-label">Nom</label>
                <input type="text" class="form-control" id="name" name="name"  value="<?= get_input('name');?>">
            </div>

            <div class="form-group">
                <label for="pseudo" class="control-label">Pseudo</label>
                <input type="text" class="form-control" id="pseudo" name="pseudo"   value="<?= get_input('pseudo')?>">
            </div>

            <div class="form-group">
                <label for="email" class="control-label">Adresse Email</label>
                <input type="text" class="form-control" id="email" name="email"  value="<?= get_input('email');?>">
            </div>

            <div class="form-group">
                <label for="password" class="control-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" >
            </div>

            <div class="form-group">
                <label for="password_confirm" class="control-label">Confirmer votre mot de passe</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm">
            </div>

            <button type="submit" class="btn btn-lg btn-primary" name="register">Register</button>
        </form>
    </div><!-- /.container -->
  </div>
  <?php 
    include('partials/_footer.php');
  ?>