
<!DOCTYPE html>
<html>
<head>
	<title>modification</title>
	<link rel="stylesheet" type="text/css" href="modif.css">
	<meta charset="utf-8"> 
	<script type="text/javascript" src="C:\wamp64\www\site\jequery.js"></script> 


</head>
<body >
 <header>
  <div class="row">

	
     <div class="logo">
        <img src="projet/g-salle.png" / alt="graduation" class="logo-img">
          </div>
           <ul class="main-nav">
             <li><a href="home.php"><i class="fa fa-home"></i><span> Retourner Ã  la page principale</span> &nbspACCUEIL</a></li>
             <li   class="active"><a href="deconnexion.php"><i class="fa fa-lock"></i><span> Cliquer ici pour vous deconnecter</span> &nbspDECONNEXION</a></li>
             <li><a href="aide.php"><i class="fa fa-question-circle-o"></i><span> Obtenir de l'aide</span> &nbspAIDE</a></li>
             <li><a href="a_propos.php"><i class="fa fa-info-circle"></i><span> Lire Ã  propos de nous</span> &nbspA PROPOS</a></li>
             
           </ul>
         </div>



<?php 
include ('form.php'); 
include ('function.php'); 


/*la fonction qui visualise les demandes de modification par les clubs*/
visualiser_demande_modif($conn); 
?> 
</header>
</body>
</html>