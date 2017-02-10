<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;

class ContactController extends Controller
{
    public function __invoke(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'content' => 'required|min:5',
        ]);

        $mail = Mail::create(['name' => $request->name, 'email' => $request->email, 'content' => $request->content]);

        session()->flash('message', 'Votre message a bien était envoyé');
        session()->flash('messageType', 'success');
        
        return redirect('/');
    }
}
