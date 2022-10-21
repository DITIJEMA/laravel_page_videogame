<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function __invoke()
    {
        return view('crud.administration.create');
    }

    public function index(){

    }

    public function create(){
        return view('crud.administration.create');
    }

    public function show(){
        return view('crud.administration.show');
    }

    public function update(){
        return view('crud.administration.edit');
    }

    public function edit(){
        
    }

    public function destroy(){

    }
}
