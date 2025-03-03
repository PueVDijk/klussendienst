<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProviderRequest;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $provider = Provider::all();
        return view('providers.index', compact('providers'));
    }

    public function create()
    {
        return view('providers.create');
    }


    public function store(ProviderRequest $request)
    {
        Provider::create($request->all());
        return redirect('/providers');
    }


    public function show(string $id)
    {
        return view('providers.show', compact('provider'));

    }

    public function edit(string $id)
    {
        return view('providers.edit', compact('provider'));

    }

    public function update(ProviderRequest $request, Provider $provider)
    {
        $provider->update($request->all());
        return redirect('/providers');
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect('/providers');
    }
}
