<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProviderRequest;
use App\Models\Provider;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    public function index()
    {
        $providers = Provider::all();
        return view('providers.index', compact('providers'));
    }

    public function create()
    {
        return view('providers.create');
    }

    public function store(Request $request)
    {
        $provider = new Provider();
        $this->save($provider, $request);
        return redirect()->route('providers.index');
    }

    public function show(string $id)
    {
        return view('providers.show', compact('provider'));

    }

    public function edit(string $id)
    {
        return view('providers.edit', compact('provider'));

    }

    public function update(Request $request, Provider $provider)
    {
        $this->save($provider, $request);
        return redirect()->route('providers.index');
    }

    public function destroy(Provider $provider)
    {
        $provider->delete();
        return redirect()->route('providers.index');
    }

    private function save(Provider $provider, Request $request)
    {
        $provider->firstname = $request->firstname;
        $provider->lastname = $request->lastname;
        $provider->email = $request->email;
        $provider->phonenumber = $request->phonenumber;
        $provider->address = $request->address;
        $provider->city = $request->city;
        $provider->save();
    }
}
