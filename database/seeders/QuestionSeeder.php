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
