<?php

    $destinataire = 'fondateurs@auroria-rp.websr.fr';
    $copie = 'oui';
    $message_envoye = "Votre message nous est bien parvenu !";
    $message_non_envoye = "L'envoi du message a &eacute;chou&eacute;, veuillez r&eacute;essayer SVP.";
    $message_formulaire_invalide = "V&eacute;rifiez que tous les champs soient bien remplis et que l'email soit sans erreur.";

    if (!isset($_POST['envoi']))
    {
    }else{
    	function Rec($text){
    		$text = htmlspecialchars(trim($text), ENT_QUOTES);
    		if (1 === get_magic_quotes_gpc()){
    			$text = stripslashes($text);
    		}
           $text = nl2br($text);
    	   return $text;
    	};
    	function IsEmail($email){
    		$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
    		return (($value === 0) || ($value === false)) ? false : true;
    	}
    	$nom     = (isset($_GET['nom']))     ? Rec($_GET['nom'])     : '';
    	$email   = (isset($_GET['email']))   ? Rec($_GET['email'])   : '';
    	$objet   = (isset($_GET['objet']))   ? Rec($_GET['objet'])   : '';
    	$message = (isset($_GET['message'])) ? Rec($_GET['message']) : '';
    	$email = (IsEmail($email)) ? $email : '';
     
    	if (($nom != '') && ($email != '') && ($objet != '') && ($message != '')){
    		$headers  = 'MIME-Version: 1.0' . "\r\n";
    		$headers .= 'From:'.$nom.' <'.$email.'>' . "\r\n" .
    				'Reply-To:'.$email. "\r\n" .
    				'Content-Type: text/plain; charset="utf-8"; DelSp="Yes"; format=flowed '."\r\n" .
    				'Content-Disposition: inline'. "\r\n" .
    				'Content-Transfer-Encoding: 7bit'." \r\n" .
    				'X-Mailer:PHP/'.phpversion();

    		if ($copie == 'oui'){
    			$cible = $destinataire.';'.$email;
    		}else{
    			$cible = $destinataire;
    		};

    		$caracteres_speciaux     = array('&#039;', '&#8217;', '&quot;', '<br>', '<br />', '&lt;', '&gt;', '&amp;', '…',   '&rsquo;', '&lsquo;');
    		$caracteres_remplacement = array("'",      "'",        '"',      '',    '',       '<',    '>',    '&',     '...', '>>',      '<<'     );
     
    		$objet = html_entity_decode($objet);
    		$objet = str_replace($caracteres_speciaux, $caracteres_remplacement, $objet);
     
    		$message = html_entity_decode($message);
    		$message = str_replace($caracteres_speciaux, $caracteres_remplacement, $message);

    		$num_emails = 0;
    		$tmp = explode(';', $cible);
    		foreach($tmp as $email_destinataire){
    			if (mail($email_destinataire, $objet, $message, $headers))
    				$num_emails++;
    		}
            if ((($copie == 'oui') && ($num_emails == 2)) || (($copie == 'non') && ($num_emails == 1))){
    			
    		}else{
    			//echo '<p>'.$message_non_envoye.'</p>';
    		};
    	}else{
    		//header('Location: http://auroria.intranet-ice-life.fr/index.php');
    	};
    };
?>