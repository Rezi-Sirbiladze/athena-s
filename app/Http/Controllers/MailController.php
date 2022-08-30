<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\EmailService;

class MailController extends Controller
{
    private $emailService;

    public function __construct(EmailService $emailService)
    {
        $this->emailService = $emailService;
    }

    public function send_mail(Request $request)
    {
        $name = $request['name'];
        $mail = $request['mail'];
        $text = $request['text'];
        $mensaje = "Hola Maquina,\n \n$name - $mail te manda un mensaje: \n \n$text";

        $this->emailService->envio_alumno_sendinblue("Stonks", $mensaje, "rezi.sirbiladze2@gmail.com");
    }
}
