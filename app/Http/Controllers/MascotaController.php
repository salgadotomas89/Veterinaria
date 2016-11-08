<?php
namespace App\Http\Controllers;
use App\Mascota;
use App\Http\Requests\MascotaRequest;
class MascotaController extends Controller
{

    public function index()
    {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create()
    {
        return view('mascotas.create');
    }

    public function store(MascotaRequest $request)
    {
        Mascota::create($request -> all());
        return redirect()->route('mascotas.index')->with('message','item ha sido añadido');
    }

    public function show($id)
    {
        //
    }

    public function edit(Mascota $mascota)
    {
        return view('mascotas.edit',compact('mascota'));
    }

    public function update(MascotaRequest $request, Mascota $mascota)
    {
        $mascota->update($request->all());
        return redirect()->route('mascotas.index');
    }


    public function destroy(Mascota $mascota)
    {
        $mascota->delete();
        return redirect()->route('mascotas.index');
    }
}