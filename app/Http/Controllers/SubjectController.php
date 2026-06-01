<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::withCount('questions')->orderBy('id')->get();

        return view('subjects.index', compact('subjects'));
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
