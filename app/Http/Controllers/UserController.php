<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $handymen = User::where('role', 'handyman')->get();
        $providers = User::where('role', 'provider')->get();
        return view('users.index', compact('handymen', 'providers'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $this->saveUser($user, $request);
        return redirect()->route('users.index');
    }

    public function show(string $id)
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, string $id)
    {
        $user = User::find($id);
        $this->saveUser($user, $request);
        return redirect()->route('users.index');
    }

    public function destroy(string $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    private function saveUser(User $user, Request $request)
    {
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->phonenumber = $request->phonenumber;
        $user->street = $request->street;
        $user->housenumber = $request->housenumber;
        $user->postal_code = $request->postal_code;
        $user->city = $request->city;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();
    }
}