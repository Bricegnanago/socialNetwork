
<?php
    session_start();
    require('config/database.php');
    require('includes/function.php');
    require('includes/constants.php');
    

    if(isset($_POST['register'])){

       if(not_empty(['name', 'pseudo', 'email', 'password', 'password_confirm'])){
           
            $errors = [];
            extract($_POST);

            //verification pseudo
            if(mb_strlen($pseudo) < 3) {
                $errors[] = "Pseudo trop court (Minimum trop caractères)";
            }

            //verification email
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors[] = 'Adresse Email invalide !';
            }

            if(mb_strlen($password) < 6){
                $errors[] = 'Mot de passe trop court (Minimum 6 caractère) !';
            }else{
                if($password != $password_confirm){
                    $errors[] = 'Les deux mots de passe ne concordent pas';
                }
            }
            if(is_already_in_use('pseudo', $pseudo, 'users')){
                $errors = 'pseudonyme déjà utilisé !';
            }
            
            if(is_already_in_use('email', $email, 'users')){
                $errors = 'Adresse email déjà utilisé !';
            }

            if(count($errors) == 0){
                //Aucune erreur
                //Enregistrment de l'utilisateur
                //Redirection vers sa page de profil
                //Envoi d'un email d'activation
                $to = $email;
                $subject = WEBSITE_NAME. " - ACTIVATION DE COMPTE";
                $token = sha1($pseudo.$email.$password);

                ob_start();
                require('templates/emails/activation.tmpl.php');
                $content = ob_get_clean();

                $headers = 'MIME-Version : 1.0' . "\r\n";
                $headers .= "Content-Type : text/html; charset=iso-8859-1" . "\r\n";

                mail($to , $subject, $content, $headers);                
                //informer l'utilisateur
               set_flash("Mail d'activation envoyé !","success") ;
               
            //    header("Location :  /index.php");
            //     exit();
            }

        }else{
            $errors[] = 'Veuillez remplir tous les champs';
        }
    }
?>


<?php
    include('views/register.view.php');
    
?>