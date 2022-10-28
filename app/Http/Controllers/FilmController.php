<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;
use App\Http\Requests\FilmRequest;

class FilmController extends Controller
{
    public function createFilm(){
        return view('film.createFilm');
    }

    public function storeFilm(FilmRequest $request){
        // dd($request->all());
        // $film = new film();
        // $film->title = $request->input('title');
        // $film->author = $request->input('author');
        // $film->year = $request->input('year');
        // $film->description = $request->input('description');

        // // dd($film);
        // //!funzione di salvataggio
        // $film->save();

        // creazione dell'oggetto nel DB col
        // MASS ASSIGNAMENT
        $film = film::create(
            [
                'title'=> $request->input('title'),
                'author'=> $request->input('author'),
                'year'=> $request->input('year'),
                'description'=> $request->input('description'),
            ]
        );
        // dd($film);
        return redirect(route('indexFilm'));
    }

    public function indexFilm(){
        $films = film::all();
        return view('film.indexFilm', compact('films'));
    }

    public function detFilm(film $film){
        // dd($film);
        // $film = film::find($film);
        // dd($film);
        return view('film.detFilm', compact ('film'));
    }
}
