<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::withCount('questions')->latest()->get();

        return view('subjects.index', compact('subjects'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name',
        ]);

        Subject::create(['name' => $request->name]);

        return redirect()->route('subjects.index')->with('success', 'Subject created successfully.');
    }

    public function update(Request $request, Subject $subject)
    {
        $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name,' . $subject->id,
        ]);

        $subject->update(['name' => $request->name]);

        return redirect()->route('subjects.index')->with('success', 'Subject updated successfully.');
    }

    public function destroy(Subject $subject)
    {
        $subject->delete();

        return redirect()->route('subjects.index')->with('success', 'Subject deleted successfully.');
    }

    public function assign()
    {
        $subjects = Subject::all();
        $lectures = Question::select('lecture')
            ->selectRaw('count(*) as questions_count')
            ->selectRaw('max(subject_id) as current_subject_id')
            ->groupBy('lecture')
            ->get();

        return view('subjects.assign', compact('subjects', 'lectures'));
    }

    public function assignUpdate(Request $request)
    {
        $request->validate([
            'assignments' => 'required|array',
            'assignments.*' => 'nullable|exists:subjects,id',
        ]);

        foreach ($request->assignments as $lecture => $subjectId) {
            Question::where('lecture', $lecture)
                ->update(['subject_id' => $subjectId ?: null]);
        }

        return redirect()->route('subjects.assign')->with('success', 'Subjects assigned successfully.');
    }
}
