<?php
date_default_timezone_set('Brazil/East');
/* * *****************************************
  DEFINIÇÃO DA BASE DE INFORMAÇÕES DO SISTEMA
 * ***************************************** */
define("SITENAME", "Contemporâneo");
define("SITEDESC", "Ajudando você com as suas dificuldades na escola");
define("SITETAGS", "Ainda não sei o que colocar aqui ");
define("SUPPORT", "suport@n2y.com.br");
define("SUPORTNAME", "Equipe de Suporte ao Cliente");
define("NOREPLY", "ainda não tem");
define("NOREPLYNAME", "Não Responda");
/* * *****************************************
  DEFINIÇÃO DO SERVIDOR DE EMAILS
 * ***************************************** */
define("MAILUSER", "...");
define("MAILPASS", "...");
define("MAILPORT", "...");
define("MAILHOST", "...");

/* * ***************************
  ENVIA O EMAIL
 * *************************** */

function sendMail($assunto, $mensagem, $mensagemSemHTML, $remetente, $nomeRemetente, $destino, $nomeDestino, $reply = NULL, $replyNome = NULL) {

    require 'mail/PHPMailerAutoload.php';
    //$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail = new PHPMailer;
    $mail->isSMTP();                                      // Habilita o envio via SMTP
    $mail->SMTPAuth = true;                               // Ativa autenticação
    $mail->isHTML(true);                                  // Configura o email como HTML


    $mail->Host = MAILHOST;                               // Nome do Servidor de Envio
    $mail->Port = MAILPORT;                               // Porta de Envio de Email
    $mail->Username = MAILUSER;                           // e-mail SMTP para autenticação
    $mail->Password = MAILPASS;                           // senha do email com SMTP definido
    $mail->SMTPSecure = 'tsl';                            // Ativar autenticação TSL, SSL também é aceita


    $mail->setFrom(utf8_decode($remetente), utf8_decode($nomeRemetente)); //Remetente
    $mail->addAddress(utf8_decode(MAILUSER), utf8_decode(SITENAME));     // Destinatário

    if ($reply != NULL) {
        $mail->addReplyTo($reply, $replyNome);               //Responder para
    }

    $mail->Subject = $assunto; //assunto
    $mail->Body = $mensagem; //mensagem
    $mail->AltBody = $mensagemSemHTML; //mensagem sem HTML

    if ($mail->send()) {
        return true;
    } else {
        return false;
    }
}
