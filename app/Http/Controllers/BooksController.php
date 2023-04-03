<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Livre;
class BooksController extends Controller
{
    public  function index()
    {
        $livres = Livre::all();

        return view('index',['livres'=>$livres]);
    }
}
