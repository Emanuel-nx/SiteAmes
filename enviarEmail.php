<?php
	require '../bibliotecas/my_phpmailer.php';

	// Instancia a classe
	$mail 		= new my_phpmailer;

	//$para 		= "moises@amesteresina.netau.net";
	//$assunto 	= "Contato pelo Site";
	$nome 		= $_REQUEST['name'];
	$fone 		= $_REQUEST['phone'];
	$email 		= $_REQUEST['email'];
	$msg 		= $_REQUEST['message'];

	$corpo 		= "<strong>Mensagem de Contato </strong><br><br>";
	$corpo 		.= "<strong>Nome: </strong> ".$nome;
	$corpo 		.= "<br><strong>Telefone: </strong>".$fone;	
	$corpo 		.= "<br><strong>Email: </strong>".$email;	
	$corpo 		.= "<br><strong>Mensagem: </strong>".$msg;	

	/*$header		= "Content-type: text/html; charset=utf-8\n";
	$header		.= "From: $email Reply-to: $email\n";

	mail($para, $assunto, $corpo,$header);*/

	$mail->addAddress('info.rocha@yahoo.com.br', 'Davi Samuel');
	$mail->Subject = 'Contato pelo Site';
	$mail->Body    = $corpo;
	//$mail->addAttachment('c:/temp/11-10-00.zip', 'new_name.zip');  // optional name

	if(!$mail->send()) {
	   echo 'Houve um erro no envio da mensagem.';
	   exit;
	}

	echo 'Mensagem enviada com sucesso.';
?>
