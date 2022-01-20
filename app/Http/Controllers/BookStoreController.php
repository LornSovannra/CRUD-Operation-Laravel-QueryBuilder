<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookStoreFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookStoreController extends Controller
{
    public function Home(){
        $authors = DB::table('authors')->get();

        return view("home", compact("authors"));
    }

    public function Create(){
        return view("create");
    }

    public function SaveCreate(BookStoreFormRequest $req){
        // $req -> validate([
        //     'name' => 'required|min:5|max:100',
        //     'email' => 'required|min:10|max:100',
        //     'address' => 'required|min:5|max:100',
        //     'website' => 'required|min:5|max:100'
        // ],[
        //     'name.required' => "Pleas fill in the field!",
        //     'name.min' => "Name at least 5 character long!"
        // ]);

        $information = $req -> except("_token");

        if(DB::table('authors') -> insert($information)){
            return redirect("/") -> with("message", "Author Created");
        }
    }

    public function Show($id){
        $author = DB::table("authors")->find($id);

        return view("show", compact("author"));
    }

    public function Edit($id){
        $author = DB::table('authors')->find($id);

        return view("edit", compact("author"));
    }

    public function Update(BookStoreFormRequest $req, $id){
        /* $req -> validate([
            'name' => 'required|min:5|max:100',
            'email' => 'required|min:10|max:100',
            'address' => 'required|min:5|max:100',
            'website' => 'required|min:5|max:100'
        ]); */

        $information = $req -> except(["_token", "_method"]);

        if(DB::table('authors') -> where("id", $id) -> update($information)){
            return redirect("/") -> with("message", "Updated Successfully");
        }
    }

    public function Remove($id){
        if(DB::table("authors") -> where("id", $id) -> delete()){
            return redirect("/") -> with("message", "Removed Successfully");
        }
    }
}