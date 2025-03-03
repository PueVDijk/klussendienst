<?php

namespace App\Http\Controllers;

use App\Models\Klusser;
use Illuminate\Http\Request;

class KlusserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $klussers = Klusser::all();
        return view('klussers.index', compact('klussers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('klussers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $klusser = new Klusser();
        $this->save($klusser, $request);
        return redirect()->route('klussers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Klusser $klusser)
    {
        return view('klussers.show', compact('klusser'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
