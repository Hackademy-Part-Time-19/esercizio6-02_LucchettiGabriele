<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    public function index(){
        $response=Http::get('http://api.jikan.moe/v4/genres/anime')->json()['data'];
        
        return view('index',['response'=>$response]);
    }

    public function byGenres($genre){
        $response=Http::get('http://api.jikan.moe/v4/anime?genres=' . $genre)->json()['data'];
       
        return view('byGenres',['response'=>$response]);
    }

    public function show($id){
        $response=Http::get('http://api.jikan.moe/v4/anime/'. $id)->json()['data'];

        return view('show',['anime'=>$response]);
    }
}
