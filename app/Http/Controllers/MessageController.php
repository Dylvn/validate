<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{

    public function __construct(){
        // Autre methode pour restreindre l'accés
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Mail::All()->where('lu', '=', '0');
        $messages = $messages->reverse();
        if ( Auth::check() ) {
            return view('pages.messages', ['messages' => $messages]);
        }

        session()->flash('message', 'Vous ne pouvez pas entrer ici sans être connecté');
        session()->flash('messageType', 'alert');

        return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Mail::find($id);
        $message->lu = 1;
        $message->save();
        return view('pages.messageShow', ['message' => $message]);
    }

    public function marquerCommeLu($id) 
    {
        $message = Mail::find($id);
        $message->lu = 1;
        $message->save();
        return redirect('/messages');
    }

    public function marquerCommeNonLu($id) 
    {
        $message = Mail::find($id);
        $message->lu = 0;
        $message->save();
        return redirect('/allMessages');
    }

    public function allMessages()
    {
        $messages = Mail::All();
        $messages = $messages->reverse();
        return view('pages.allMessages', ['messages' => $messages]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
