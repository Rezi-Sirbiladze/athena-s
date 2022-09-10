<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmailService;
use App\Services\RecaptchaService;

class MailController extends Controller
{
    private $emailService;
    private $recaptchaService;

    public function __construct(EmailService $emailService, RecaptchaService $recaptchaService)
    {
        $this->emailService = $emailService;
        $this->recaptchaService = $recaptchaService;
    }

    public function send_mail(Request $request)
    {
        $google_response_rc = $this->recaptchaService->comprobar_rc($_SERVER['REMOTE_ADDR'], $request['g-recaptcha-response']);

        if($google_response_rc["success"]){
            $name = $request['name'];
            $mail = $request['mail'];
            $text = $request['text'];
            $mensaje = "Hola Maquina,\n \n$name - $mail te manda un mensaje: \n \n$text";
    
            $this->emailService->envio_alumno_sendinblue("Stonks", $mensaje, "rezi.sirbiladze2@gmail.com");
    
            return redirect()->back()->with('message', 'Email enviado');
        }

        return redirect()->back()->with('error', 'Error al enviar email');
    }
}
