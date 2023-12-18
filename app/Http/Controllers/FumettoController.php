<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFumettoRequest;
use App\Http\Requests\UpdateFumettoRequest;
use App\Models\Fumetto;
use Illuminate\Http\Request;

class FumettoController extends Controller
{
 public function index() {
    $fumettos = Fumetto::all();

    return view('fumettos.index', compact('fumettos'));
 }

 public function show($id){
    $fumetto = Fumetto::findOrFail($id);

    return view('fumettos.show', compact('fumetto'));
 }

 public function create(){
    return view('fumettos.create');
}

public function store(Request $request){
    $data = $request->all();

    dd($data);
}
}
