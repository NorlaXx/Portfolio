<?php
  
  //Le mail sera envoyé à cette addresse
  $receiving_email_address = 'alexis.rochefort35@gmail.com';

  //Si le bouton "envoyé" a été appuyé
  if(isset($_POST["submit"])){
    $sendMail = mail($receiving_email_address, $_POST["subject"], $_POST["message"], "From:contact@portfoliorochefort.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
    //Si l'email a été envoyé
    if($sendMail){
      echo("<div class=\"sent-message\">Votre message a été envoyé, Merci !</div>");
    }else{
      echo("<div class=\"error-message\">Votre message n'a pas été envoyé");
    }
  }
?>
