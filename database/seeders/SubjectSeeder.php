<?php

namespace Database\Seeders;

use App\Models\Question;
use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    public function run(): void
    {
        $subjects = [
            'Introduction to Neural Language Processing' => ['Lecture 1:%', 'Lecture 2:%', 'Abdullah Ghanem Questions%', 'NLP Lec %'],
            'Fundamental of Computer Graphics' => ['Lecture 3:%', 'Lecture 4:%', 'Graphics Lec %', 'Graphics Midterm:%'],
            'Mobile Applications Development' => ['Lecture 5:%', 'Lecture 6:%', 'Lecture 7:%', 'Lecture 8:%', 'Lecture 9:%', 'Lecture 10:%', 'Lecture 11:%', 'MAD Lec %', 'MAD Midterm%'],
        ];

        // Finished courses, hidden until this date (then they re-open automatically).
        // Any subject not listed here is always available (available_from = null).
        $lockedUntil = [
            'Introduction to Neural Language Processing' => '2026-06-20 00:00:00',
            'Fundamental of Computer Graphics' => '2026-06-20 00:00:00',
        ];

        foreach ($subjects as $name => $lecturePatterns) {
            $subject = Subject::firstOrCreate(['name' => $name]);

            $subject->available_from = $lockedUntil[$name] ?? null;
            $subject->save();

            foreach ($lecturePatterns as $pattern) {
                Question::where('lecture', 'like', $pattern)
                    ->update(['subject_id' => $subject->id]);
            }
        }
    }
}
