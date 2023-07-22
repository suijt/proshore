<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Physics questions (type 0)
        $physicsQuestions = [
            'What is the formula for the force of gravity?',
            'What is the speed of light in a vacuum?',
            "What is Newton's first law of motion?",
            'Explain the concept of momentum.',
            'What are the three laws of thermodynamics?',
            'Define voltage and current.',
            'What is the Doppler effect?',
            'Explain the difference between mass and weight.',
            'What is the principle of conservation of energy?',
            'Describe the process of nuclear fusion.',
        ];

        // Chemistry questions (type 1)
        $chemistryQuestions = [
            'What is the atomic number of hydrogen?',
            'What is the chemical symbol for gold?',
            'What is the pH scale used to measure?',
            'Define oxidation and reduction.',
            'What are isotopes?',
            'Explain the concept of chemical equilibrium.',
            'What is the periodic table and how is it organized?',
            'What are the properties of noble gases?',
            'Describe the structure of an atom.',
            'Explain the differences between acids and bases.',
        ];

        // Insert physics questions into the database
        foreach ($physicsQuestions as $question) {
            DB::table('questions')->insert([
                'question' => $question,
                'type' => 0,
            ]);
        }

        // Insert chemistry questions into the database
        foreach ($chemistryQuestions as $question) {
            DB::table('questions')->insert([
                'question' => $question,
                'type' => 1,
            ]);
        }
    }
}
