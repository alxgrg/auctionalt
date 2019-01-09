<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactFormRequest;
use App\Mail\MailSent;
use Illuminate\Support\Facades\Mail;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContactFormRequest $request)
    {
        Mail::to('info@auctionalternative.ca')->send(new MailSent($request));
    }
}