<!DOCTYPE html>
<html>

<head>
  <title> demande effectuee</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Style des icons -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Style de la page -->
  <link rel="stylesheet" href="demande_effectuee.css" type="text/css" />
  <!-- icon de la page -->
  <link rel="SHORTCUT ICON" href="./icon.png" />
  <!-- ******** -->
</head>

<body>
  <header>
    <div class="row">
      <div class="logo">
        <img src="projet/g-salle.png" / alt="graduation" class="logo-img">
      </div>
      <ul class="main-nav">
        <!-- barre de navigation -->
        <li><a href="home.php"><i class="fa fa-home"></i><span> Retourner Ã  la page principale</span> &nbspACCUEIL</a></li>
             <li   class="active"><a href="deconnexion.php"><i class="fa fa-lock"></i><span> Cliquer ici pour vous deconnecter</span> &nbspDECONNEXION</a></li>
             <li><a href="aide.php"><i class="fa fa-question-circle-o"></i><span> Obtenir de l'aide</span> &nbspAIDE</a></li>
             <li><a href="a_propos.php"><i class="fa fa-info-circle"></i><span> Lire Ã  propos de nous</span> &nbspA PROPOS</a></li>
      </ul>
    </div>
    
    <div>
      <h1 id="some" style="margin-top:150px;"> annulation terminée,un mail est envoyé au responsable pour l'informer </h1>
      
    </div>
<form> 
        <input type="button" class="form1" value="retour" name="button" onclick="history.go(-2);"> 
    </form>
  </header>
</body>

</html>





























<?php
/* envoi du mail en utilisant phpmailer*/
require 'C:\wamp64\PHPMailer-master\PHPMailer-5.2-stable/PHPMailerAutoload.php'; 
include 'form.php'; 
if(isset($_POST['send']))  
{  
    $checkbox1=$_POST['check'];
    $word="";
    foreach ($checkbox1 as $word2)
{   $queries="SELECT * from reservation where id= '".$word2."'"; 
    $reeesults = mysqli_query($conn,$queries); 
     

    while ($rowww= mysqli_fetch_assoc($reeesults)) 
   { 
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username ="wiss0508@gmail.com";
   $mail ->Password ="080519wiss";
   $mail ->SetFrom("wiss0508@gmail.com",$rowww['club']);
   $mail ->Subject = "Gsalle";
   $mail ->Body = " le club ".$rowww['club']. " a annulé son reservation de salle " .$rowww['Salle']." ";
   $mail ->AddAddress($rowww['Email']); //* on écrit ici le mail du responsable
   $mini="DELETE FROM reservation WHERE id= '".$word2."'"; 
   $reesults = mysqli_query($conn,$mini);   
   mysqli_query ($conn,$mini); 
     
  

 
} 
} 
} 











 


