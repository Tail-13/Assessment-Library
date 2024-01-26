<?php

namespace App\Http\Controllers;

use App\Models\authors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class authorRESTController extends Controller
{
    public function create(Request $req)
    {
        // No need to manually check for validation errors here

        $author = new authors([
            'name' => $req->name,
            'dob' => $req->dob
        ]);
        $author->save();

        // Save the author to the database

        // Optionally, you can return a response or redirect back
        return Redirect::back();
    }

    public function edit(Request $req)
    {
        // No need to manually check for validation errors here
        $author = authors::find($req->id);

        $author->name = $req->name;
        $author->dob = $req->dob;
        $author->update();

        // Save the author to the database

        // Optionally, you can return a response or redirect back
        return Redirect::back();
    }
    public function delete(Request $req)
    {
        // No need to manually check for validation errors here
        $author = authors::find($req->id);
        $author->delete();

        // Save the author to the database

        // Optionally, you can return a response or redirect back
        return Redirect::back();

    }
}
