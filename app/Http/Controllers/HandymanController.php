<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\Handyman;
use Illuminate\Http\Request;

class HandymanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $handymen = Handyman::all();
        return view('handymen.index', compact('handymen'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('handymen.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $handyman = new Handyman();
        $this->save($handyman, $request);
        return redirect()->route('handymen.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('handymen.show', compact('handyman'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('handymen.edit', compact('handyman'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, Handyman $handyman)
    {
        $this->save($handyman, $request);
        return redirect()->route('handymen.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Handyman $handyman)
    {
        $handyman->delete();
        return redirect()->route('handymen.index');
    }

    private function save(Handyman $handyman, Request $request)
    {
        $handyman->firstname = $request->firstname;
        $handyman->lastname = $request->lastname;
        $handyman->email = $request->email;
        $handyman->phonenumber = $request->phonenumber;
        $handyman->address = $request->address;
        $handyman->city = $request->city;
        $handyman->save();
    }

}
