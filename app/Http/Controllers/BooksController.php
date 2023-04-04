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

    public  function addBookform(Request $req)
    {
        if ($req->input('titre')=="") return view('addBookform',['res'=>null]);
        try {
            $livre = new Livre();
            $livre->titre = $req->input('titre');
            $livre->annee_de_publication = $req->input('annee_de_publication');
            $livre->nb_pages = $req->input('nb_pages');
            $livre->auteur_id = $req->input('auteur_id');
            $livre->save();
            // return view('addBookform',['res'=>"done !!"]);
            $livres = Livre::all();
            return view('index',['livres'=>$livres]);
        } catch (\Throwable $th) {
            return view('addBookform',['res'=>"err !!"]);
        }

    }

    public  function edit($id)
    {
        // $id = request('id');
        $livre = Livre::where('id',$id)->get();
        return view('editBookform',['livre'=>$livre[0]]);
    }

    public  function editBook(Request $req)
    {

        // return $req->input('id');
        if ($req->input('titre')=="" && $req->input('id')=="") return view('edit',['res'=>null]);
        try {
            Livre::where('id',$req->input('id'))->delete();
            $livre = new Livre();
            $livre->titre = $req->input('titre');
            $livre->annee_de_publication = $req->input('annee_de_publication');
            $livre->nb_pages = $req->input('nb_pages');
            $livre->auteur_id = $req->input('auteur_id');
            $livre->save();
            return view('addBookform',['res'=>"done !!"]);
        } catch (\Throwable $th) {
            return view('addBookform',['res'=>"err !!"]);
        }

    }

    public  function deleteBook($id)
    {
        $livre = Livre::where('id',$id)->delete();
        $livres = Livre::all();
        return view('index',['livres'=>$livres]);
    }

}
