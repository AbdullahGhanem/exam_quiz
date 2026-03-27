<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function home()
    {
        $subjects = Subject::withCount('questions')->get();
        $lectures = Question::select('lecture')->distinct()->pluck('lecture');
        $totalQuestions = Question::count();

        return view('quiz.home', compact('subjects', 'lectures', 'totalQuestions'));
    }

    public function start(Request $request)
    {
        $request->validate([
            'num_questions' => 'required|integer|min:1|max:160',
            'subjects' => 'nullable|array',
            'lectures' => 'nullable|array',
        ]);

        $numQuestions = $request->input('num_questions', 20);
        $selectedSubjects = $request->input('subjects', []);
        $selectedLectures = $request->input('lectures', []);
        $shuffle = $request->boolean('shuffle', true);
        $showDescriptions = $request->boolean('show_descriptions', true);

        $query = Question::query();

        if (!empty($selectedSubjects)) {
            $query->whereIn('subject_id', $selectedSubjects);
        }

        if (!empty($selectedLectures)) {
            $query->whereIn('lecture', $selectedLectures);
        }

        if ($shuffle) {
            $query->inRandomOrder();
        }

        $questions = $query->limit($numQuestions)->get();

        if ($questions->isEmpty()) {
            return redirect()->route('quiz.home')->with('error', 'No questions found for selected lectures.');
        }

        $questionIds = $questions->pluck('id')->toArray();

        session([
            'quiz_question_ids' => $questionIds,
            'quiz_answers' => [],
            'quiz_current' => 0,
            'quiz_shuffle' => $shuffle,
            'quiz_show_descriptions' => $showDescriptions,
        ]);

        return redirect()->route('quiz.question', ['index' => 0]);
    }

    public function question($index)
    {
        $questionIds = session('quiz_question_ids', []);

        if (empty($questionIds) || $index >= count($questionIds)) {
            return redirect()->route('quiz.result');
        }

        $question = Question::find($questionIds[$index]);

        $options = [
            'A' => $question->option_a,
            'B' => $question->option_b,
            'C' => $question->option_c,
            'D' => $question->option_d,
        ];

        $shuffle = session('quiz_shuffle', true);

        if ($shuffle) {
            $optionKeys = array_keys($options);
            shuffle($optionKeys);
            $shuffledOptions = [];
            $newCorrectKey = null;
            $newKey = 'A';
            foreach ($optionKeys as $originalKey) {
                $shuffledOptions[$newKey] = $options[$originalKey];
                if ($originalKey === $question->correct_answer) {
                    $newCorrectKey = $newKey;
                }
                $newKey = chr(ord($newKey) + 1);
            }
        } else {
            $shuffledOptions = $options;
            $newCorrectKey = $question->correct_answer;
        }

        $totalQuestions = count($questionIds);
        $answers = session('quiz_answers', []);
        $showDescriptions = session('quiz_show_descriptions', true);

        return view('quiz.question', [
            'question' => $question,
            'options' => $shuffledOptions,
            'correctKey' => $newCorrectKey,
            'index' => $index,
            'totalQuestions' => $totalQuestions,
            'previousAnswer' => $answers[$index] ?? null,
            'showDescriptions' => $showDescriptions,
        ]);
    }

    public function answer(Request $request, $index)
    {
        $request->validate([
            'answer' => 'required|in:A,B,C,D',
            'correct_key' => 'required|in:A,B,C,D',
        ]);

        $answers = session('quiz_answers', []);
        $answers[$index] = [
            'selected' => $request->input('answer'),
            'correct' => $request->input('correct_key'),
        ];
        session(['quiz_answers' => $answers]);

        $questionIds = session('quiz_question_ids', []);
        $nextIndex = $index + 1;

        if ($nextIndex >= count($questionIds)) {
            return redirect()->route('quiz.result');
        }

        return redirect()->route('quiz.question', ['index' => $nextIndex]);
    }

    public function result()
    {
        $questionIds = session('quiz_question_ids', []);
        $answers = session('quiz_answers', []);

        if (empty($questionIds)) {
            return redirect()->route('quiz.home');
        }

        $questions = Question::whereIn('id', $questionIds)->get()->keyBy('id');

        $results = [];
        $correct = 0;
        $total = count($questionIds);

        foreach ($questionIds as $index => $qId) {
            $question = $questions[$qId];
            $answer = $answers[$index] ?? null;

            $isCorrect = $answer && $answer['selected'] === $answer['correct'];
            if ($isCorrect) {
                $correct++;
            }

            $results[] = [
                'question' => $question,
                'selected' => $answer['selected'] ?? null,
                'correct_key' => $answer['correct'] ?? null,
                'is_correct' => $isCorrect,
            ];
        }

        $percentage = $total > 0 ? round(($correct / $total) * 100) : 0;
        $showDescriptions = session('quiz_show_descriptions', true);

        return view('quiz.result', compact('results', 'correct', 'total', 'percentage', 'showDescriptions'));
    }
}
