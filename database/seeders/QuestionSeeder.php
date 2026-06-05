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
            'graphics_lec1_questions.json',
            'graphics_lec2_questions.json',
            'graphics_extra_questions.json',
            'graphics_midterm_questions.json',
            'nlp_lectures_3_to_7_questions.json',
            'nlp_exam_bank_questions.json',
            'mad_lec1_intro_questions.json',
            'mad_lec2_java_fundamentals_questions.json',
            'mad_lec3_input_questions.json',
            'mad_lec4_conditionals_questions.json',
            'mad_lec5_loops_methods_questions.json',
            'mad_lec6_android_questions.json',
            'mad_midterm_exam_questions.json',
        ];

        // Idempotent reference-data seed: clear the bank, then reload it entirely
        // from the JSON files. This makes the seeder safe to run on every deploy
        // (no duplicate rows) and ensures question additions AND removals in the
        // JSON propagate to the database exactly. SubjectSeeder re-maps subject_id
        // afterwards, so clearing it here is fine.
        Question::query()->delete();

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
