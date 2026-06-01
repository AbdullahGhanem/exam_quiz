<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    public function run(): void
    {
        $files = [
            'questions.json',
            'abdullah_nlp_questions.json',
            'mobile_new_questions.json',
            'mobile_java_exam_questions.json',
            'mobile_layouts_questions.json',
            'mobile_loops_methods_questions.json',
            'graphics_extra_questions.json',
            'graphics_midterm_questions.json',
            'nlp_lectures_3_to_7_questions.json',
            'nlp_exam_bank_questions.json',
        ];

        foreach ($files as $file) {
            $path = database_path($file);
            if (!file_exists($path)) {
                continue;
            }
            $questions = json_decode(file_get_contents($path), true);
            foreach ($questions as $q) {
                Question::create($q);
            }
        }
    }
}
