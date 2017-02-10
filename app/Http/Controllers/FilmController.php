<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Categorie;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $films = Film::paginate(3);
        return view('pages.product', ['films' => $films]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('pages.addProduct', ['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3',
            'synopsis' => 'required|min:15',
            'realisateur' => 'required|min:5',
        ]);


        $film = Film::create([
            'name' => $request->name,
            'img' => str_slug($request->name, '_'),
            'synopsis' => $request->synopsis,
            'realisateur' => $request->realisateur,
            ]);
        $addCat = Film::find($film->id);
        $addCat->categories()->attach($request->categorie);

        //$file = $request->file('image')->storeAs('img', str_slug($request->name, '_'), 'public');
        //$ext = $request->image;
        /* j'aurais essayer... */
   
        session()->flash('message', 'Le film a bien était créé');
        session()->flash('messageType', 'success');
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $film = Film::find($id);
        return view('pages.show', ['film' => $film]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $film = Film::find($id);
        return view('pages.editProduct', ['film' => $film]);
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
        $this->validate($request, [
            'name' => 'required|min:3',
            'synopsis' => 'required|min:15',
            'realisateur' => 'required|min:5',
        ]);

        $film = Film::find($id);

        $film->name = $request->name;
        $film->img = str_slug($request->name, '_');
        $film->realisateur = $request->realisateur;
        $film->synopsis = $request->synopsis;

        $film->save();

        session()->flash('message', 'Le film a bien était modifié');
        session()->flash('messageType', 'success');
        
        return redirect('/');
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

    public function createImage() {
        return view('pages.addImage');
    }

    public function storeImage(Request $request){
        dd($request->file('image'));
    }
}
