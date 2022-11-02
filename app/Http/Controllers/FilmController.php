<?php

namespace App\Http\Controllers;

use App\Models\film;
use Illuminate\Http\Request;
use App\Http\Requests\FilmRequest;
use Illuminate\Support\Facades\Auth;

class FilmController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('indexFilm');
    }

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
        $user=Auth::user();

            $user->films()->create(
            [
                'title'=> $request->input('title'),
                //'author'=> Auth::user()->name,
                'year'=> $request->input('year'),
                'description'=> $request->input('description'),
                'img'=>$request->file('img')->store('public/img'),
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

    public function editFilm(film $film){
        return view('film.editFilm', compact('film'));
    }

    public function upadateFilm(film $film, Request $req){
        // dd($req, $film);
        $film->update(
            [
                'title'=>$req->title,
                'author'=>$req->author,
                'year'=>$req->year,
                'description'=>$req->description,
                'img'=>$req->file('img')->store('public/img'),
            ]
        );
        return redirect(route('indexFilm'));
    }

    public function deleteFilm(film $film){
        $film->delete();
        return redirect(route('indexFilm'));
    }

    public function user(){
        //$films=film::where('author', Auth::user()->name)->get();
        $films = Auth::user()->films()->get();
        return view('user', compact('films'));
    }
}
