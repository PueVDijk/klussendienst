<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignmentRequest;
use App\Models\Assignment;
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
        return redirect('/assignments');
    }


    public function show(string $id)
    {
        return view('assignments.show', compact('assignment'));

    }

    public function edit(string $id)
    {
        return view('assignments.edit', compact('assignment'));

    }

    public function update(AssignmentRequest $request, Assignment $assignment)
    {
        $this->save($assignment, $request);
        return redirect()->route('assignments.index');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect('/assignments');
    }

    private function save(Assignment $assignment, Request $request)
    {
        $assignment->name = $request->name;
        $assignment->description = $request->description;
        $assignment->street = $request->street;
        $assignment->house_number = $request->house_number;
        $assignment->postal_code = $request->postal_code;
        $assignment->city = $request->city;
        $assignment->deadline = $request->deadline;
        $assignment->status = $request->status;
        $assignment->budget = $request->budget;
        $assignment->save();
    }
}
