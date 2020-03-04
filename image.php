<?php
$img =$_POST["img"]; // recupère le nom de l'image du formulaire
$photo = $_FILES["fichier"]; // récupère le fichier 
$extension = substr(strrchr($_FILES["fichier"]["name"], "."), 1); // fonction qui récupère l'extension
move_uploaded_file($_FILES["fichier"]["tmp_name"], "img/$img.$extension");  // télécharge la photo que tu envois xd

echo "<img src='img/$img.$extension'>"; // envoit l'image 
var_dump($photo);

?>