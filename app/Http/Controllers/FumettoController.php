<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFumettoRequest;
use App\Http\Requests\UpdateFumettoRequest;
use App\Models\Fumetto;
use Illuminate\Http\Request;

class FumettoController extends Controller
{
    public function index()
    {
        $fumettos = Fumetto::all();

        return view('fumettos.index', compact('fumettos'));
    }

    public function show($id)
    {
        $fumetto = Fumetto::findOrFail($id);

        return view('fumettos.show', compact('fumetto'));
    }

    public function create()
    {
        return view('fumettos.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        //dd($data);
        /*    $new_fumetto = new Fumetto();
    $new_fumetto->title = $data['title'];
    $new_fumetto->description = $data['description'];
    $new_fumetto->thumb = $data['thumb'];
    $new_fumetto->price = $data['price'];
    $new_fumetto->series = $data['series'];
    $new_fumetto->sale_date = $data['sale_date'];
    $new_fumetto->type = $data['type'];

    $new_fumetto->save();*/

        $new_fumetto = Fumetto::create($data);

        return redirect()->route('fumettos.show', $new_fumetto);
    }

    public function edit(Fumetto $fumetto)
    {
        return view('fumettos.edit', compact('fumetto'));
    }

    public function update(Request $request, Fumetto $fumetto)
    {
        $data = $request->all();

        $fumetto->update($data);

        return redirect()->route('fumettos.show', $fumetto);
    }

    public function destroy(Fumetto $fumetto)
    {
        $fumetto->delete();
        return redirect()->route('fumettos.index');
    }
}
