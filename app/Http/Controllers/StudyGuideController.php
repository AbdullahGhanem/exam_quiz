<?php

namespace App\Http\Controllers;

class StudyGuideController extends Controller
{
    public function index()
    {
        return view('study.index');
    }

    public function show($lecture)
    {
        if (!in_array($lecture, ['1', '2'])) {
            abort(404);
        }

        return view('study.lecture' . $lecture);
    }
}
