<?php
$adresse="julienr85@gmail.com";
$from="From: " . $_POST['Nom'] . " ". $_POST['Prenom'] ."<". $_POST['Email'] . $_POST['Telephone'] . ">\r\n";
$from.="Reply-To: " . $_POST['prenom'] . " ". $_POST['nom'] ."<". $_POST['email'] . ">\r\n";
$from.="X-priority:3\r\n";
$texte="<html>";
$texte.= $_POST['Message'];
$texte.="</html>";
$from.="MIME-Version: 1.0\r\n";
$from.="Content-Type: text/html";
if (mail($adresse,$sujet,$texte,$from))
echo("<center><font color=green><br><br><br><h2>Formulaire envoyé ! Je vous répondrais rapidement. Merci!</h2></font><br><a href=/>Cliquez ici pour revenir à l'accueil</a></center>" );
else
echo("<center><font color=red><br><br><br><h2>Problème à l'envoi du mail...désolé nous ne pouvons actuellement traiter votre demande</h2></font><br>Contactez nous plus <a href="mailto:$adresse">classiquement</a>" );
?>