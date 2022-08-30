<?php 
namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\GeneralMail;



class EmailService
{
  function envio_alumno_sendinblue($subject, $message, $email){
    $message = explode("\n", $message);
    
    $objContact = new \stdClass();

    $objContact->sender ='Athena-s';
    $objContact->from_email = 'rezi.sirbiladze2@gmail.com';
    $objContact->subject = $subject;
    $objContact->message = $message;
    $objContact->view = 'mails.generalMail';

    $mail_contacto = Mail::to($email)->send(new GeneralMail($objContact));

  }
}