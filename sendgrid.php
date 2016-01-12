<?php
/**
   *String que armazena o email de onde partirá os emails (remetente).
   *@var string
   */
   const GUSER = 'deyvescarvalho@gmail.com';

   /**
   *String que armazena a senha do email de onde partirá os emails (remetente).
   *@var string
   */
   const GPWD = 'abstratooi%#d';

   /**
   *String que armazena o email para qual as mensagens serão enviadas (destinatário).
   *@var string
   */
   const GSEND = 'deyvescarvalho@gmail.com';


  static function contactUsEmail(){

       $emailRemetente = $_POST['email'];
       $name = $_POST['name'];
       $subject = $_POST['subject'];
       $mensagem = $_POST["message"];
       $corpoMensagem = '<b>CONCTACT US EMAIL</b>'.'<br /><b>Email Remetente: </b>'.$emailRemetente.
       '<br /><b>Nome:</b>'.$name.'<br /><b>Assunto:</b>'.$subject.'<br /><b>Mensagem:</b>'.$mensagem;

       $sendResult = SendEmail::smtpMailer(SendEmail::GSEND, SendEmail::GUSER, $name, $subject, $corpoMensagem);

       if($sendResult === true){
            echo 'Mensagem Enviada com Sucesso';
       }else{
           echo $sendResult;
       }
   }
 ?>
