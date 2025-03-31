<?php

namespace Database\Seeders;

use App\Models\Quiz;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quizzes = [
            [
                'name_quiz' => 'JavaScript Quiz'
            ],
            [
                'name_quiz' => 'HTML Quiz'
            ],
            [
                'name_quiz' => 'CSS Quiz'
            ],
            [
                'name_quiz' => 'Web Accessibility Quiz'
            ],
            [
                'name_quiz' => 'HTML Quiz'
            ],
        ];

        foreach ($quizzes as $quiz) {
            Quiz::create($quiz);
        }
    }
}
