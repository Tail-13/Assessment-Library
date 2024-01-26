<?php

namespace App\Http\Controllers;

use App\Models\authors;
use Illuminate\Http\Request;

class authorController extends Controller
{
    public function index(){
        $author = authors::get();
        return view('authors.index', ['authors' => $author]);
    }

    public function editForm($id){
        $author = authors::find($id);
        return view('authors.editForm', ['authors' => $author]);
    }

    public function deleteForm($id){
        $author = authors::find($id);
        return view('authors.deleteForm', ['authors' => $author]);
    }
}
