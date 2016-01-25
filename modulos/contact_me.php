<?php
/*require_once('../bibliotecas/PHPMailer/class.phpmailer.php');
include("../bibliotecas/PHPMailer/class.smtp.php");*/
// Check for empty fields
/*if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
	
// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;*/
   //require '../bibliotecas/my_phpmailer.php';

   // Instancia a classe
//   $mail       = new PHPMailer();

   //$para     = "moises@amesteresina.netau.net";
   //$assunto  = "Contato pelo Site";
   $nome       = $_REQUEST['name'];
   $fone       = $_REQUEST['phone'];
   $email      = $_REQUEST['email'];
   $msg        = $_REQUEST['message'];
   //$body       = file_get_contents('contents.html');
   //$body       = eregi_replace("[\]",'',$body);
//print_r($_REQUEST);die;
   $corpo      = "<strong>Mensagem de Contato </strong><br><br>";
   $corpo      .= "<strong>Nome: </strong> ".$nome;
   $corpo      .= "<br><strong>Telefone: </strong>".$fone;  
   $corpo      .= "<br><strong>Email: </strong>".$email; 
   $corpo      .= "<br><strong>Mensagem: </strong>".$msg;   

   /*$header      = "Content-type: text/html; charset=utf-8\n";
   $header     .= "From: $email Reply-to: $email\n";

   mail($para, $assunto, $corpo,$header);*/

   //$mail->addAddress('info.rocha@yahoo.com.br', 'Davi Samuel');

/*   $mail->IsSMTP();
   $mail->SMTPAuth = true; //Habilitamos a autenticação do SMTP. (true ou false) 
   $mail->SMTPSecure = "tls"; //Estabelecemos qual protocolo de segurança será usado.
   $mail->Host = "smtp.gmail.com"; //Endereço do servidor SMTP. Podemos usar o servidor do gMail "smtp.gmail.com" para enviar.  
   $mail->Port = 465; //Estabelecemos a porta utilizada pelo servidor.
   $mail->Username = "info.rocha2@gmail.com"; //Usuário do servidor SMTP.
   $mail->Password = "!11235813"; //Senha do servidor SMTP.
   //$mail->SetFrom('info.rocha2@gmail.com', 'teste'); //Quem está enviando o e-mail.
   //$mail->AddReplyTo("info.rocha2@gmail.com", "teste"); //Para que a resposta será enviada.
   // Define a mensagem (Texto e Assunto)
   $mail->Subject    = 'Contato pelo Site'; //Assunto do e-mail.
   $mail->MsgHTML($corpo);
   $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
   $mail->AddAddress('info.rocha@yahoo.com.br', 'Davi Samuel');

   if(!$mail->send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;;
      exit;
   } else {
      echo 1;
   }*/



require '../bibliotecas/PHPMailer/class.phpmailer.php';
$codescafeMail = new PHPMailer();
$codescafeMail->IsSMTP();
$codescafeMail->Mailer = 'smtp';
$codescafeMail->SMTPAuth = true;
$codescafeMail->Host = 'smtp.gmail.com'; 
$codescafeMail->Port = 465;
$codescafeMail->SMTPSecure = 'ssl';
// or try these settings (worked on XAMPP and WAMP):
//$codescafeMail->Port = 587;
//$codescafeMail->SMTPSecure = 'tls';
$codescafeMail->Username = "info.rocha2@gmail.com";
$codescafeMail->Password = "!11235813";
$codescafeMail->IsHTML(true); // For HTML formatted mails
$codescafeMail->SingleTo = true; 
$codescafeMail->From = "info.rocha2@gmail.com";
$codescafeMail->FromName = "Your Name";
$codescafeMail->Subject = "CodesCafe mail test with Phpmailer";
$codescafeMail->Body = "The mail is working!! SUCCESS!";
 if(!$codescafeMail->Send()){
        echo "Something Wrong! Message was not send!! " . $codescafeMail->ErrorInfo;
}
else{
        echo "Oh Yea!!! Message sent succesfully!!";
}
?>