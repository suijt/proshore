<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Physics questions' answers (type 0)
        $physicsAnswers = [
            // For the first physics question
            [
                'question_id' => 1,
                'answer' => '9.8 m/s²',
                'is_correct' => 1,
            ],
            [
                'question_id' => 1,
                'answer' => '6.7 m/s²',
                'is_correct' => 0,
            ],
            [
                'question_id' => 1,
                'answer' => '3.4 m/s²',
                'is_correct' => 0,
            ],
            [
                'question_id' => 1,
                'answer' => '2.2 m/s²',
                'is_correct' => 0,
            ],

            // For the second physics question
            [
                'question_id' => 2,
                'answer' => '299,792,458 m/s',
                'is_correct' => 1,
            ],
            [
                'question_id' => 2,
                'answer' => '350,000,000 m/s',
                'is_correct' => 0,
            ],
            [
                'question_id' => 2,
                'answer' => '200,000,000 m/s',
                'is_correct' => 0,
            ],
            [
                'question_id' => 2,
                'answer' => '500,000,000 m/s',
                'is_correct' => 0,
            ],

            // For the third physics question
            [
                'question_id' => 3,
                'answer' => 'An object at rest remains at rest, and an object in motion remains in motion at a constant velocity unless acted upon by an external force.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 3,
                'answer' => 'The force applied to an object is equal to the mass of the object multiplied by its acceleration.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 3,
                'answer' => 'For every action, there is an equal and opposite reaction.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 3,
                'answer' => 'The rate of change of momentum of an object is directly proportional to the net external force acting on it.',
                'is_correct' => 0,
            ],

            // For the fourth physics question
            [
                'question_id' => 4,
                'answer' => 'The quantity of motion of a moving body, measured as a product of its mass and velocity.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 4,
                'answer' => 'The force required to accelerate an object with a mass of 1 kg by 1 meter per second squared.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 4,
                'answer' => 'The force that opposes the relative motion or tendency of such motion of two surfaces in contact.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 4,
                'answer' => 'The amount of matter in an object.',
                'is_correct' => 0,
            ],

            // For the fifth physics question
            [
                'question_id' => 5,
                'answer' => 'The first law of thermodynamics states that energy cannot be created or destroyed; it can only change forms.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 5,
                'answer' => 'The second law of thermodynamics states that the entropy of a closed system will always increase over time.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 5,
                'answer' => 'The third law of thermodynamics states that absolute zero cannot be reached.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 5,
                'answer' => 'The zeroth law of thermodynamics defines temperature and thermal equilibrium.',
                'is_correct' => 0,
            ],

            // For the sixth physics question
            [
                'question_id' => 6,
                'answer' => 'Voltage is the electrical potential difference between two points, and current is the flow of electric charge.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 6,
                'answer' => 'Voltage is the flow of electric charge, and current is the electrical potential difference between two points.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 6,
                'answer' => 'Voltage and current are the same concepts, representing the flow of electric charge.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 6,
                'answer' => 'Voltage and current are unrelated to electricity and are used in other scientific fields.',
                'is_correct' => 0,
            ],

            // For the seventh physics question
            [
                'question_id' => 7,
                'answer' => 'The change in frequency or wavelength of a wave in relation to an observer who is moving relative to the wave source.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 7,
                'answer' => 'The bending of light as it passes through different mediums.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 7,
                'answer' => 'The interference pattern created when two waves overlap in space.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 7,
                'answer' => 'The propagation of sound waves in a particular direction.',
                'is_correct' => 0,
            ],

            // For the eighth physics question
            [
                'question_id' => 8,
                'answer' => 'Mass is the amount of matter in an object, whereas weight is the force of gravity acting on that mass.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 8,
                'answer' => 'Mass and weight are the same concept and can be used interchangeably.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 8,
                'answer' => 'Mass is the force of gravity acting on an object, whereas weight is the amount of matter in that object.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 8,
                'answer' => 'Mass and weight are unrelated to each other and do not affect each other.',
                'is_correct' => 0,
            ],

            // For the ninth physics question
            [
                'question_id' => 9,
                'answer' => 'Energy cannot be created or destroyed; it can only change from one form to another.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 9,
                'answer' => 'Energy is a force that drives motion in an object.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 9,
                'answer' => 'Energy is the measure of an object\'s mass and velocity.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 9,
                'answer' => 'Energy is a property that depends on an object\'s temperature.',
                'is_correct' => 0,
            ],

            // For the tenth physics question
            [
                'question_id' => 10,
                'answer' => 'A process where two atomic nuclei combine to form a heavier nucleus',
                'is_correct' => 1,
            ],
            [
                'question_id' => 10,
                'answer' => 'A process where a heavy nucleus splits into two lighter nuclei',
                'is_correct' => 0,
            ],
            [
                'question_id' => 10,
                'answer' => 'A process where electrons move from one energy level to another',
                'is_correct' => 0,
            ],
            [
                'question_id' => 10,
                'answer' => 'A process where two atomic nuclei break apart into smaller fragments',
                'is_correct' => 0,
            ],
        ];

// Chemistry questions' answers (type 1)
        $chemistryAnswers = [
            // For the first chemistry question
            [
                'question_id' => 11,
                'answer' => '1',
                'is_correct' => 0,
            ],
            [
                'question_id' => 11,
                'answer' => '79',
                'is_correct' => 1,
            ],
            [
                'question_id' => 11,
                'answer' => '8',
                'is_correct' => 0,
            ],
            [
                'question_id' => 11,
                'answer' => '32',
                'is_correct' => 0,
            ],

            // For the second chemistry question
            [
                'question_id' => 12,
                'answer' => 'Au',
                'is_correct' => 1,
            ],
            [
                'question_id' => 12,
                'answer' => 'Ag',
                'is_correct' => 0,
            ],
            [
                'question_id' => 12,
                'answer' => 'Go',
                'is_correct' => 0,
            ],
            [
                'question_id' => 12,
                'answer' => 'Gl',
                'is_correct' => 0,
            ],

            // For the third chemistry question
            [
                'question_id' => 13,
                'answer' => 'A scale used to measure the acidity or basicity of a solution.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 13,
                'answer' => 'A scale used to measure the concentration of salt in a solution.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 13,
                'answer' => 'A scale used to measure the hardness of a mineral.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 13,
                'answer' => 'A scale used to measure the density of a liquid.',
                'is_correct' => 0,
            ],

            // For the fourth chemistry question
            [
                'question_id' => 14,
                'answer' => 'The loss of electrons by a chemical species.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 14,
                'answer' => 'The gain of electrons by a chemical species.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 14,
                'answer' => 'The process of breaking down a chemical compound into its constituent elements.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 14,
                'answer' => 'The process of combining two or more chemical elements to form a new compound.',
                'is_correct' => 0,
            ],

            // For the fifth chemistry question
            [
                'question_id' => 15,
                'answer' => 'Atoms of the same element with different numbers of neutrons.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 15,
                'answer' => 'Atoms of different elements with the same number of protons.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 15,
                'answer' => 'Atoms that have gained or lost electrons and have a net electrical charge.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 15,
                'answer' => 'Atoms that have gained or lost protons and have a different atomic number.',
                'is_correct' => 0,
            ],

            // For the sixth chemistry question
            [
                'question_id' => 16,
                'answer' => 'The state in which the rate of the forward reaction equals the rate of the reverse reaction.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 16,
                'answer' => 'The state in which a chemical reaction has reached its maximum potential energy.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 16,
                'answer' => 'The state in which a chemical reaction has come to a complete stop.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 16,
                'answer' => 'The state in which a chemical reaction is about to occur.',
                'is_correct' => 0,
            ],

            // For the seventh chemistry question
            [
                'question_id' => 17,
                'answer' => 'A table that organizes elements based on their atomic number and chemical properties.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 17,
                'answer' => 'A table that organizes elements based on their mass number and physical properties.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 17,
                'answer' => 'A table that organizes elements based on their density and reactivity.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 17,
                'answer' => 'A table that organizes elements based on their melting and boiling points.',
                'is_correct' => 0,
            ],

            // For the eighth chemistry question
            [
                'question_id' => 18,
                'answer' => 'They are generally unreactive and have a full outer electron shell.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 18,
                'answer' => 'They are highly reactive and readily form compounds with other elements.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 18,
                'answer' => 'They are synthetic elements not found in nature.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 18,
                'answer' => 'They are radioactive and have unstable nuclei.',
                'is_correct' => 0,
            ],

            // For the ninth chemistry question
            [
                'question_id' => 19,
                'answer' => 'Atoms consist of a nucleus composed of protons and neutrons, with electrons orbiting the nucleus.',
                'is_correct' => 1,
            ],
            [
                'question_id' => 19,
                'answer' => 'Atoms consist of a positively charged core surrounded by a cloud of electrons.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 19,
                'answer' => 'Atoms consist of a positively charged nucleus with electrons embedded in it.',
                'is_correct' => 0,
            ],
            [
                'question_id' => 19,
                'answer' => 'Atoms consist of a nucleus composed of electrons and protons, with neutrons orbiting the nucleus.',
                'is_correct' => 0,
            ],

            // For the tenth chemistry question
            [
                'question_id' => 20,
                'answer' => 'A substance that donates protons (H+ ions)',
                'is_correct' => 1,
            ],
            [
                'question_id' => 20,
                'answer' => 'A substance that accepts protons (H+ ions)',
                'is_correct' => 0,
            ],
            [
                'question_id' => 20,
                'answer' => 'A substance that increases the concentration of hydroxide ions (OH-) in a solution',
                'is_correct' => 0,
            ],
            [
                'question_id' => 20,
                'answer' => 'A substance that decreases the concentration of hydroxide ions (OH-) in a solution',
                'is_correct' => 0,
            ],
        ];

        // Insert physics answers into the database
        foreach ($physicsAnswers as $answer) {
            DB::table('answers')->insert($answer);
        }

        // Insert chemistry answers into the database
        foreach ($chemistryAnswers as $answer) {
            DB::table('answers')->insert($answer);
        }
    }
}
