<?php

namespace App\Http\Controllers;

use App\Http\Requests\AssignmentRequest;
use App\Models\Assignment;
use Illuminate\Http\Request;

class AssignmentController extends Controller
{

    public function index()
    {
        $assignment = Assignment::all();
        return view('assignments.index', compact('assignments'));
    }

    public function create()
    {
        return view('assignments.create');
    }


    public function store(AssignmentRequest $request)
    {
        Assignment::create($request->all());
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
        $assignment->update($request->all());
        return redirect('/assignments');
    }

    public function destroy(Assignment $assignment)
    {
        $assignment->delete();
        return redirect('/assignments');
    }
}
