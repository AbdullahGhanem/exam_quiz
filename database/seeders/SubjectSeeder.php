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
            'Introduction to Neural Language Processing' => ['Lecture 1:%', 'Lecture 2:%', 'Abdullah Ghanem Questions%'],
            'Fundamental of Computer Graphics' => ['Lecture 3:%', 'Lecture 4:%'],
            'Mobile Applications Development' => ['Lecture 5:%', 'Lecture 6:%', 'Lecture 7:%', 'Lecture 8:%'],
        ];

        foreach ($subjects as $name => $lecturePatterns) {
            $subject = Subject::firstOrCreate(['name' => $name]);

            foreach ($lecturePatterns as $pattern) {
                Question::where('lecture', 'like', $pattern)
                    ->update(['subject_id' => $subject->id]);
            }
        }
    }
}
