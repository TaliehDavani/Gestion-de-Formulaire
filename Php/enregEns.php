<!DOCTYPE html>
<html>
<head>
<title>Formulaire de enseignant</title>
  <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.center {
  margin: auto;
  width: 50%;
  
 
}

</style>
</head>
<body lass="w3-light-grey	">
<a href="../index.html" class="w3-btn w3-teal w3-padding-large">Accueil</a>
<?php
	$num=$_POST['numEns'];
	$session=$_POST['session'];
	$numco=$_POST['numcou'];
	$typ=$_POST['type'];
	$titre=$_POST['titre'];
	$dossier="../$session/";
	@mkdir($dossier);
	$dossier=$dossier."$num/";
	@mkdir($dossier);
	$dossier=$dossier."$numco/";
	@mkdir($dossier);
	$dossier=$dossier."$typ/";
	@mkdir($dossier);
	$nomfichier=sha1($titre.time());
    if($_FILES['fichier']['tmp_name']!==""){
		$tmp = $_FILES['fichier']['tmp_name'];
		$fichier= $_FILES['fichier']['name'];
		$extension=strrchr($fichier,'.');
		@move_uploaded_file($tmp,$dossier.$nomfichier.$extension);
		// Enlever le fichier temporaire chargé
		@unlink($tmp); //effacer le fichier temporaire
		$fichier=$nomfichier.$extension;
		//renommer le fichier
		rename("../$session/$num/$numco/$typ/$fichier","../$session/$num/$numco/$typ/$numco.$titre.$extension");
echo '<br><br><br><div class="center" >
<div class="w3-card-4"  >';
echo ' <div class="w3-container  w3-teal">
    <h2>Le fichier enregistrer avec succes</h2>
     </div>';
echo '</div>
      </div>';		
}else{
	echo '<br><br><br><div class="center" >
<div class="w3-card-4"  >';
echo ' <div class="w3-container  w3-teal">
    <h2>choisir un fichier</h2>
     </div>';
echo '</div>
      </div>';	
	
}
?>
</body>
</html>
