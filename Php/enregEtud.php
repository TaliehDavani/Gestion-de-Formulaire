<!DOCTYP html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.center {
  margin: auto;
  width: 50%; 
}

</style>
</head>
<body class="w3-light-grey	">
<a href="../index.html" class="w3-btn w3-teal w3-padding-large">Accueil</a>
<?php
    $num=$_POST['numEtud'];
	$session=$_POST['session'];
	$numco=$_POST['numcou'];
	$numens=$_POST['numEns'];
	echo'<div class="center" >
     <div class="w3-card-4"  >';
	echo '<div class="w3-light-grey>	';
	echo'<div class="w3-card-4"  >';
	echo ' <div class="w3-container  w3-teal">
    <h2>Note de cours</h2>
     </div>';
	$dossier="../$session/$numens/$numco/Notes de cours/";
	if(is_dir($dossier)){
	 echo '<ul>';
       if($dossier = opendir($dossier)){     
           while(false !== ($fichier = readdir($dossier))){
               if($fichier != '.' && $fichier != '..'){
		           echo '<li><a href="../'.$session.'/'.$numens.'/'.$numco.'/Notes de cours/' . $fichier . '">' . $fichier . '</a></li>';
	            }
	   		}
			echo '</ul>';
	   }
    }
    else {
	   echo 'Le fichier n existe pas';
    }
	echo '</div>';
	echo ' <div class="w3-container  w3-teal">';
    echo '<h2>Labos</h2>';
	echo'</div>';
	$dossier="../$session/$numens/$numco/Labos/";
	if(is_dir($dossier)){
	  echo '<ul>';
        if($dossier = opendir($dossier)){     
            while(false !== ($fichier = readdir($dossier))){
                if($fichier != '.' && $fichier != '..'){
		             echo '<li><a href="../'.$session.'/'.$numens.'/'.$numco.'/Labos/' . $fichier . '">' . $fichier . '</a></li>';
	             }
	        }
	       echo '</ul>';
        }
    }
   else{
	   echo 'Le fichier n existe pas';
   }
   echo ' <div class="w3-container  w3-teal">';
   echo ' <h2>Note de cours</h2>';
   echo'</div>';
	$dossier="../$session/$numens/$numco/Exercices/";
	if(is_dir($dossier)){
	echo '<ul>';
     if($dossier = opendir($dossier)){     
       while(false !== ($fichier = readdir($dossier))){
          if($fichier != '.' && $fichier != '..'){
		    echo '<li><a href="../'.$session.'/'.$numens.'/'.$numco.'/Exercices/' . $fichier . '">' . $fichier . '</a></li>';
	       }
	    }
     }
	 echo '</ul>';
	}
	else{
		echo 'Le fichier n exist pas';
	}
	echo '</div>';
	echo '</div>';
?>
</body>
</html>
