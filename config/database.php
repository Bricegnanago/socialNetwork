<?php
    //database
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $DB_Name = 'boom';


    try{
        $db = new PDO('mysql:host='.$hostname.';dbname='.$DB_Name, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // $db->query("SELEC * FORM users");
        // echo 'coucou';
    } catch(PDOException $e){
        die('Erreur : '. $e->getMessage());
    }
  
?>