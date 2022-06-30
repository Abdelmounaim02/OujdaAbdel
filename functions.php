<?php 
//inclure les fonctions pour la base  
include("connection.php"); 
 
//Insertion de données  
$cnx=connect_bd('siteprof');  
 
if($cnx)  
{  
 // On prépare la requête (une seule fois) 
 $result = $cnx->prepare('INSERT INTO contacte (m1, m2, m3, m4) VALUES (:m1, :m2, :m3, :m4)'); 
 
 // On lie chaque marqueur à une variable en précisant le type de données 

 
 // On affecte aux variables les valeurs des données postées du formulaire 
 $m1 = $_POST["m1"];  
 $m2 = $_POST["m2"];  
 $m3 = $_POST["m3"];  
 $m4 = $_POST["m4"];
 
  $result->bindParam(':m1', $m1, PDO::PARAM_STR); 
 $result->bindParam(':m2', $m2, PDO::PARAM_STR); 
 $result->bindParam(':m3', $m3, PDO::PARAM_STR); 
 $result->bindParam(':m4', $m4, PDO::PARAM_STR); 


 // On exécute la requête 
 $result->execute(); 
 
 // Résultats 
//include('selection.php');
 include('index.html');
    
} 
else 
{ 
 echo "erreur"; 
} 


?>