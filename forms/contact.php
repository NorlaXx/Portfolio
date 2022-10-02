<?php
  if(isset($_POST["message"])){
    $sendMail = mail("alexis.rochefort35@gmail.com", $_POST["subject"], $_POST["message"], "From:contact@portfoliorochefort.com" . "\r\n" . "Reply-to:" . $_POST["email"]);
    //Si l'email a été envoyé
    if($sendMail){
      echo("<p>Votre message a été envoyé, Merci !</p>");
    }else{
      echo("<p>Votre message n'a pas été envoyé </p>");
    }
  }
?>
