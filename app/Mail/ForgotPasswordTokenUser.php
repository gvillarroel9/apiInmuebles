<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;

class ForgotPasswordTokenUser extends Mailable
{
    use Queueable, SerializesModels;

    public $enlace = '/verifyTokenPassword/';
    public $appName;
    public $urlAppFrontend;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $token, String $email)
    {
        $this->appName = env("APP_NAME", "INMUEBLE API");
        $this->urlAppFrontend = env("APP_FRONTEND_URL", "http://localhost:4200");
        $currentPath = $this->urlAppFrontend . '/reset/';
        $this->enlace = $currentPath . $token . '/'.$email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->from('no-reply@appinmueble.com')
                    ->subject('Recovery password')
                    ->view('emailPassword');
    }
}
