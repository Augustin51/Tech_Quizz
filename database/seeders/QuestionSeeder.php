<?php
namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questions = [
            [
                'id_quiz' => 1,
                'nb_question' => 1,
                'name_question' => 'What keyword is used to declare a variable in JavaScript?',
                'f_answer' => 'let',
                's_answer' => 'var',
                't_answer' => 'const',
                'fth_answer' => 'All of the above',
                'real_answer' => 'All of the above',
            ],
            [
                'id_quiz' => 1,
                'nb_question' => 2,
                'name_question' => 'What is the output of console.log(typeof []) ?',
                'f_answer' => '"array"',
                's_answer' => '"object"',
                't_answer' => '"undefined"',
                'fth_answer' => '"function"',
                'real_answer' => '"object"',
            ],
            [
                'id_quiz' => 1,
                'nb_question' => 3,
                'name_question' => 'How do you write a single-line comment in JavaScript?',
                'f_answer' => '# This is a comment',
                's_answer' => '/* This is a comment */',
                't_answer' => '// This is a comment',
                'fth_answer' => '-- This is a comment',
                'real_answer' => '// This is a comment',
            ],
            [
                'id_quiz' => 1,
                'nb_question' => 4,
                'name_question' => "What does the expression Boolean('false') return?",
                'f_answer' => 'true',
                's_answer' => 'false',
                't_answer' => 'undefined',
                'fth_answer' => 'NaN',
                'real_answer' => 'true',
            ],
            [
                'id_quiz' => 1,
                'nb_question' => 5,
                'name_question' => 'Which method is used to add an element to the end of an array in JavaScript?',
                'f_answer' => '.push()',
                's_answer' => '.pop()',
                't_answer' => '.shift()',
                'fth_answer' => '.unshift()',
                'real_answer' => '.push()',
            ],
            [
                'id_quiz' => 1,
                'nb_question' => 6,
                'name_question' => "What is the output of console.log(2 + '2') ?",
                'f_answer' => '4',
                's_answer' => '22',
                't_answer' => 'NaN',
                'fth_answer' => 'TypeError',
                'real_answer' => '22',
            ],
            [
                'id_quiz' => 1,
                'nb_question' => 7,
                'name_question' => 'Which structure is used to execute code repeatedly?',
                'f_answer' => 'if',
                's_answer' => 'switch',
                't_answer' => 'loop',
                'fth_answer' => 'for',
                'real_answer' => 'for',
            ],
            [
                'id_quiz' => 1,
                'nb_question' => 8,
                'name_question' => 'Which object is used to manipulate dates in JavaScript?',
                'f_answer' => 'Date',
                's_answer' => 'Time',
                't_answer' => 'Clock',
                'fth_answer' => 'Calendar',
                'real_answer' => 'Date',
            ],
            [
                'id_quiz' => 1,
                'nb_question' => 9,
                'name_question' => 'What does the JSON.stringify() method do?',
                'f_answer' => 'Converts a JavaScript object to a JSON string',
                's_answer' => 'Converts a JSON string to a JavaScript object',
                't_answer' => 'Checks if a string is in JSON format',
                'fth_answer' => 'None of the above',
                'real_answer' => 'Converts a JavaScript object to a JSON string',
            ],
            [
                'id_quiz' => 1,
                'nb_question' => 10,
                'name_question' => 'What is the difference between == and === in JavaScript?',
                'f_answer' => 'No difference',
                's_answer' => '== compares values only, while === compares both values and types',
                't_answer' => '=== compares values only',
                'fth_answer' => '== compares memory references',
                'real_answer' => '== compares values only, while === compares both values and types',
            ],
            [
                'id_quiz' => 2,
                'nb_question' => 1,
                'name_question' => 'What is the role of HTML?',
                'f_answer' => 'Defines the structure of a webpage',
                's_answer' => 'Applies style to webpages',
                't_answer' => 'Adds interactivity',
                'fth_answer' => 'Stores data',
                'real_answer' => 'Defines the structure of a webpage',
            ],
            [
                'id_quiz' => 2,
                'nb_question' => 2,
                'name_question' => 'What is the correct tag to insert an image in HTML?',
                'f_answer' => '<image>',
                's_answer' => '<img>',
                't_answer' => '<picture>',
                'fth_answer' => '<photo>',
                'real_answer' => '<img>',
            ],
            [
                'id_quiz' => 2,
                'nb_question' => 3,
                'name_question' => 'Which tag is used to create a hyperlink?',
                'f_answer' => '<link>',
                's_answer' => '<a>',
                't_answer' => '<href>',
                'fth_answer' => '<url>',
                'real_answer' => '<a>',
            ],
            [
                'id_quiz' => 2,
                'nb_question' => 4,
                'name_question' => 'What is the basic structure of an HTML document?',
                'f_answer' => '<html><head><title></title></head><body></body></html>',
                's_answer' => '<header><body><footer>',
                't_answer' => '<main><article><section>',
                'fth_answer' => '<head><content><footer>',
                'real_answer' => '<html><head><title></title></head><body></body></html>',
            ],
            [
                'id_quiz' => 2,
                'nb_question' => 5,
                'name_question' => 'Which tag is used to insert an unordered list?',
                'f_answer' => '<ol>',
                's_answer' => '<ul>',
                't_answer' => '<li>',
                'fth_answer' => '<list>',
                'real_answer' => '<ul>',
            ],
            [
                'id_quiz' => 2,
                'nb_question' => 6,
                'name_question' => 'How do you create an input field for a form in HTML?',
                'f_answer' => '<text>',
                's_answer' => '<input type="text">',
                't_answer' => '<textbox>',
                'fth_answer' => '<field>',
                'real_answer' => '<input type="text">',
            ],
            [
                'id_quiz' => 2,
                'nb_question' => 7,
                'name_question' => 'Which tag is used to create a table in HTML?',
                'f_answer' => '<table>',
                's_answer' => '<tr>',
                't_answer' => '<td>',
                'fth_answer' => '<tab>',
                'real_answer' => '<table>',
            ],
            [
                'id_quiz' => 2,
                'nb_question' => 8,
                'name_question' => 'Which attribute allows you to open a link in a new tab?',
                'f_answer' => 'target="_self"',
                's_answer' => 'target="_new"',
                't_answer' => 'target="_blank"',
                'fth_answer' => 'target="new_tab"',
                'real_answer' => 'target="_blank"',
            ],
            [
                'id_quiz' => 2,
                'nb_question' => 9,
                'name_question' => 'Which tag is used to define a navigation section?',
                'f_answer' => '<nav>',
                's_answer' => '<menu>',
                't_answer' => '<section>',
                'fth_answer' => '<header>',
                'real_answer' => '<nav>',
            ],
        ];

        foreach ($questions as $question) {
            Question::create($question);
        }
    }
}
