<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\Pmailer;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function mailer(Request $request)
    {
        Mail::to('bianca.working@gmail.com')->send(new Pmailer($request->all()));
    }
}
