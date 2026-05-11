<?php

namespace App\Http\Controllers;

class StudyGuideController extends Controller
{
    private array $subjects = [
        'nlp' => ['lectures' => ['1', '2', '3', '4', '5', '6', '7']],
        'mobile' => ['lectures' => ['1', '2', '3', '4', '5', '6', '7', '8', '9']],
        'graphics' => ['lectures' => ['1', '2', '3', '4', '5']],
    ];

    public function index()
    {
        return view('study.index');
    }

    public function subject($subject)
    {
        if (!array_key_exists($subject, $this->subjects)) {
            abort(404);
        }

        return view("study.{$subject}.index");
    }

    public function show($subject, $lecture)
    {
        if (!array_key_exists($subject, $this->subjects)) {
            abort(404);
        }

        if (!in_array($lecture, $this->subjects[$subject]['lectures'])) {
            abort(404);
        }

        return view("study.{$subject}.lecture{$lecture}");
    }
}
