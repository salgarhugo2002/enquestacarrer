<?php

namespace App\Http\Controllers;

use App\Models\Enquestador;
use Illuminate\Http\Request;

class EnquestadorsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquestadors = Enquestador::all();
        return view('enquestadors.index', compact('enquestadors'));
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('enquestadors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $en = new Enquestador();
        $en->nom = $_POST['nom'];
        $en->localitat = $_POST['localitat'];
        $en->password = $_POST['password'];

        $en->save();
        $enquestadors = Enquestador::all();
        return view('enquestadors.index', compact('enquestadors'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enquestadors = Enquestador::all();
        return view('enquestadors.show', compact('enquestadors','id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enquestadors = Enquestador::all();
        return view('enquestadors.edit', compact('enquestadors','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $en = Enquestador::where('id', '=', $id)->first();
            $en->nom = $_POST['nom'];
            $en->localitat = $_POST['localitat'];
            $en->password = $_POST['password'];
    
            $en->update();
            return 'saved';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $enquestador = Enquestador::findOrFail($id);
        $enquestador ->delete();
        return redirect()->route('enquestadors.index');
     }
}
