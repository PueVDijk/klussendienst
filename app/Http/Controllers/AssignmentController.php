<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignmentRequest;
use App\Models\Assignment;
use App\Models\User;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{

    public function index()
    {
        $assignments = Assignment::all();
        return view('assignments.index', compact('assignments'));
    }

    public function create()
    {
        return view('assignments.create');
    }


    public function store(AssignmentRequest $request)
    {
        $assignment = new Assignment();
        $this->save($assignment, $request);
        return redirect()->route('assignments.index');
    }


    public function show(string $id)
    {
        $assignment = Assignment::find($id);
        return view('assignments.show', compact('assignment'));

    }

    public function edit(string $id)
    {
        $assignment = Assignment::find($id);
        $handymen = User::where('role', 'handyman')->get();
        return view('assignments.edit', compact('assignment', 'handymen'));
    }

    public function update(AssignmentRequest $request, Assignment $assignment)
    {
        $this->save($assignment, $request);
        return redirect()->route('assignments.index');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect()->route('assignments.index');
    }

    private function save(Assignment $assignment, Request $request)
    {
        $assignment->name = $request->name;
        $assignment->description = $request->description;
        $assignment->street = $request->street;
        $assignment->housenumber = $request->housenumber;
        $assignment->postal_code = $request->postal_code;
        $assignment->city = $request->city;
        $assignment->deadline = $request->deadline;
        $assignment->status = $request->status;
        $assignment->budget = $request->budget;
        $assignment->handyman_id = $request->user->id ?? 1;
        $assignment->save();
    }
}
