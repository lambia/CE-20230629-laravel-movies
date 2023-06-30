<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        // $movies = Movie::all(["title", "original_title", "vote", "cover"]);

        // $movies = Movie::where("vote", ">", "9")->get();
        
        // $movies = Movie::where("vote", ">", "5")
        //     ->orderBy('vote', 'desc')
        //     ->limit(3)
        //     ->get();

        
        // $movies = [
        //     Movie::where("vote", ">=", "0")->first(),
        //     Movie::where("id", "4")->first(),
        //     Movie::find(5) //id=5
        // ];


        // $starwars = new Movie();
        // $starwars->title = "Star Wars: una nuova speranza";
        // $starwars->original_title = "Star Wars: A new hope";
        // $starwars->vote = "8";
        // $starwars->save();

        $movies = Movie::all(["title", "original_title", "vote", "cover"]);

        return view('welcome', compact("movies") );
    }
    
    // public function other() {

    //     $movies = Movie::all(["title", "original_title", "vote", "cover"]);

    //     return view('welcome', compact("movies") );
    // }
}
