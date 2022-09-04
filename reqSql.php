<?php
  try { 
   $bdd = new PDO('mysql:host=localhost;dbname=NOM_DB', 'user', 'pass');
  }catch(Exeption $e)
   {
     die('Erreur : '.$e->getMessage());
 }


$req = $bdd->query('SELECT * FROM affairetest');
while($data = $req->fetch()){
  echo $data;
}
?>


<!-- afficher des données : -->


<!-- $data['PRIX'];  -->
<!-- $data['VILLE']; -->
<!-- etc... -->