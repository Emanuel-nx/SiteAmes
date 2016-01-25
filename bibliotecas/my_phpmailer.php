<?php
    require 'PHPMailer/PHPMailerAutoload.php';

    class my_phpmailer extends PHPMailer {
        // Configuando as variaveis padrões
        //public $From     = 'moises@amesteresina.netau.ne';
        public $From     = 'info.rocha@yahoo.com.br';
        public $FromName = 'Site';
        //public $Host     = 'smtp.gmail.com';
        public $Mailer   = 'smtp';                         // Alternative to isSMTP()
        public $WordWrap = 75;
        public $mensagem = '';



        // Replace the default debug output function
        protected function edebug($msg) {
            print('Erro');
            print('Descrição:');
            printf('%s', $msg);
            exit;
        }

        //Extend the send function
        public function send() {
            $this->configuraEnvio();
            //$this->Subject = '[Yay for me!] '.$this->Subject;
            return parent::send();
        }

        private function configuraEnvio() {
            $this->IsSMTP();
            $this->SMTPAuth = true; //Habilitamos a autenticação do SMTP. (true ou false) 
            $this->SMTPSecure = "tls"; //Estabelecemos qual protocolo de segurança será usado.
            $this->Host = "smtp.gmail.com"; //Endereço do servidor SMTP. Podemos usar o servidor do gMail "smtp.gmail.com" para enviar.  
            $this->Port = 465; //Estabelecemos a porta utilizada pelo servidor.
            $this->Username = "info.rocha2@gmail.com"; //Usuário do servidor SMTP.
            $this->Password = "!11235813"; //Senha do servidor SMTP.
            $this->mail->SetFrom('info.rocha2@gmail.com', 'teste'); //Quem está enviando o e-mail.
            $this->mail->AddReplyTo("info.rocha2@gmail.com", "teste"); //Para que a resposta será enviada.
            // Define a mensagem (Texto e Assunto)
            $this->Subject = $this->Subject; //Assunto do e-mail.
            $this->IsHTML(true);
            $this->Body = $mensagem;
            $this->AddAddress('info.rocha@yahoo.com.br', 'Davi Samuel');
        }
        // Create an additional function
        public function do_something($something) {
            // Place your new code here
        }
    }