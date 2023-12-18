<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFumettoRequest;
use App\Http\Requests\UpdateFumettoRequest;
use App\Models\Fumetto;

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
}
