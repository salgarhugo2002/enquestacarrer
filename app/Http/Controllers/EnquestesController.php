<?php

namespace App\Http\Controllers;
use App\Models\Enquesta;
use Illuminate\Http\Request;

class EnquestesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquestas = Enquesta::all();
        return view('enquestes.index', compact('enquestas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('enquestes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $en = new Enquesta();
        $en->descripcio = $_POST['descripcio'];
        $en->localitat = $_POST['localitat'];
        $en->data = $_POST['data'];

        $en->save();
        $enquestas = Enquesta::all();
        return view('enquestes.index', compact('enquestas'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enquestas = Enquesta::all();
        return view('enquestes.show', compact('enquestas','id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enquestas = Enquesta::all();
        return view('enquestes.edit', compact('enquestas','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        {
            $en = Enquesta::where('id', '=', $id)->first();
            $en->descripcio = $_POST['descripcio'];
            $en->localitat = $_POST['localitat'];
            $en->data = $_POST['data'];
    
            $en->update();
            return 'saved';
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        $enquesta = Enquesta::findOrFail($id);
        $enquesta ->delete();
        return redirect()->route('enquestas.index');
    }
}
