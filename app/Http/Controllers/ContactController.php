<?php
namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(ContactRequest $request)
    {
        $mail = (new ContactMail(...array_values($request->validated())));

        Mail::to(config('mail.contact'))
            ->send($mail);

        return response('ok');
    }
}
