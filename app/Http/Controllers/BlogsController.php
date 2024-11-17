<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
   public function index() {
     return view('blogs.index');
   }
   
   public function show() {
     return view('blogs.blog', ["id" => $id]);
   }
   
   public function create() {
     return view('blogs.create');
   }
   
   public function store() {
     return response()
            ->json(request()
            ->except('_token'));
   }
}
