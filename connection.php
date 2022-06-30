<?php 
 
// Fonction de connexion à la BD 
function connect_bd($nomBd) 
{ 
 $nomServeur='localhost';   //nom du seveur 
 $login='root';    //login de l'utilisateur  
 $passWd='';    // mot de passe 
 try 
 { 
  // Connexion  à la BD et définition du jeu de caractères UTF-8 
  $cnx = new PDO("mysql:host=localhost;dbname=$nomBd", $login, $passWd); 
  $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  $cnx->exec("SET CHARACTER SET utf8"); 
 
  return $cnx; 
 } 
 catch (PDOException $e)  
 { 
  print "Erreur !: " . $e->getMessage() . "<br/>"; 
  die(); 
  return 0; 
 } 
} 
 
// Fonction de deconnexion de la BD  
function deconnect_bd($nomBd)  
{  
 $nomBd = null;  
} 
?> 