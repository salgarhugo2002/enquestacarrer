<?php

namespace App\Http\Controllers;

use App\Models\pregunta;
use App\Models\Enquesta;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $preguntas = pregunta::all();
        return view('preguntas.index', compact('preguntas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $enquesta = Enquesta::all();
        return view('preguntas.create', compact('enquesta'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $en = new pregunta();
        $en->numero = $_POST['numero'];
        $en->enunciat = $_POST['enunciat'];
        $en->enquestas_id = $_POST['enquesta'];

        $en->save();
        $enquestas = Enquesta::all();
        return view('enquestes.index', compact('enquestas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $preguntas = pregunta::all();
        return view('preguntas.show', compact('preguntas', 'id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $preguntas = pregunta::all();
        return view('preguntas.edit', compact('preguntas', 'id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { {
            $en = pregunta::where('id', '=', $id)->first();
            $en->numero = $_POST['numero'];
            $en->enunciat = $_POST['enunciat'];
            $en->enquesta = $_POST['enquesta'];

            $en->update();
            $enquestas = Enquesta::all();
            return view('enquestes.index', compact('enquestas'));
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $pregunta = pregunta::findOrFail($id);
        $pregunta->delete();
        return redirect()->route('preguntas.index');
    }



}