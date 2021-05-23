<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\QuestionChoice;

class ChoicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $choices = [
            // ==============
            //  PECAHAN
            // ==============
            ['question_id' => 1 + 15, 'answer' => '3/10', 'is_correct' => true ],
            ['question_id' => 1 + 15, 'answer' => '10/3', 'is_correct' => false],
            ['question_id' => 1 + 15, 'answer' => '0,3 ', 'is_correct' => false],
            ['question_id' => 1 + 15, 'answer' => '30', 'is_correct' => false],
            // ==============
            ['question_id' => 2 + 15, 'answer' => '3/6', 'is_correct' => false],
            ['question_id' => 2 + 15, 'answer' => '6/9', 'is_correct' => true],
            ['question_id' => 2 + 15, 'answer' => '2/6 ', 'is_correct' => false],
            ['question_id' => 2 + 15, 'answer' => '5/10 ', 'is_correct' => false],
            // ==============
            ['question_id' => 3 + 15, 'answer' => '33/7', 'is_correct' => false],
            ['question_id' => 3 + 15, 'answer' => '10/7', 'is_correct' => false],
            ['question_id' => 3 + 15, 'answer' => '35/7', 'is_correct' => false],
            ['question_id' => 3 + 15, 'answer' => '37/7', 'is_correct' => true],
            // ==============
            ['question_id' => 4 + 15, 'answer' => 'Desimal ', 'is_correct' => false],
            ['question_id' => 4 + 15, 'answer' => 'Biasa ', 'is_correct' => false],
            ['question_id' => 4 + 15, 'answer' => 'Campuran ', 'is_correct' => true],
            ['question_id' => 4 + 15, 'answer' => 'Persentase  ', 'is_correct' => false],
            // ==============
            ['question_id' => 5 + 15, 'answer' => '4,40', 'is_correct' => true],
            ['question_id' => 5 + 15, 'answer' => '2,20', 'is_correct' => false],
            ['question_id' => 5 + 15, 'answer' => '4,50', 'is_correct' => false],
            ['question_id' => 5 + 15, 'answer' => '5,40 ', 'is_correct' => false],
            // ==============
            ['question_id' => 6 + 15, 'answer' => '<', 'is_correct' => false],
            ['question_id' => 6 + 15, 'answer' => '>', 'is_correct' => true],
            ['question_id' => 6 + 15, 'answer' => '=', 'is_correct' => false],
            ['question_id' => 6 + 15, 'answer' => '≤', 'is_correct' => false],
            // ==============
            ['question_id' => 7 + 15, 'answer' => '96/25', 'is_correct' => false],
            ['question_id' => 7 + 15, 'answer' => '3,98', 'is_correct' => false],
            ['question_id' => 7 + 15, 'answer' => '97/25', 'is_correct' => true],
            ['question_id' => 7 + 15, 'answer' => '3,78', 'is_correct' => false],
            // ==============
            ['question_id' => 8 + 15, 'answer' => '4,0', 'is_correct' => false],
            ['question_id' => 8 + 15, 'answer' => '3,9', 'is_correct' => false],
            ['question_id' => 8 + 15, 'answer' => '3,8', 'is_correct' => false],
            ['question_id' => 8 + 15, 'answer' => '3,7', 'is_correct' => true],
            // ==============
            ['question_id' => 9 + 15, 'answer' => '3 ¼ ', 'is_correct' => false],
            ['question_id' => 9 + 15, 'answer' => '3 ¾','is_correct' => true],
            ['question_id' => 9 + 15, 'answer' => '3 5/4 ', 'is_correct' => false],
            ['question_id' => 9 + 15, 'answer' => '3 6/4 ', 'is_correct' => false],
            // ==============
            ['question_id' => 10 + 15, 'answer' => '25% ', 'is_correct' => false],
            ['question_id' => 10 + 15, 'answer' => '50% ', 'is_correct' => false],
            ['question_id' => 10 + 15, 'answer' => '75% ','is_correct' => true],
            ['question_id' => 10 + 15, 'answer' => '85% ', 'is_correct' => false],
            // ==============
            ['question_id' => 11 + 15, 'answer' => '<','is_correct' => true],
            ['question_id' => 11 + 15, 'answer' => '>', 'is_correct' => false],
            ['question_id' => 11 + 15, 'answer' => '=', 'is_correct' => false],
            ['question_id' => 11 + 15, 'answer' => '≤', 'is_correct' => false],
            // ==============
            ['question_id' => 12 + 15, 'answer' => '56%', 'is_correct' => false],
            ['question_id' => 12 + 15, 'answer' => '76%', 'is_correct' => false],
            ['question_id' => 12 + 15, 'answer' => '58%', 'is_correct' => false],
            ['question_id' => 12 + 15, 'answer' => '68%','is_correct' => true],
            // ==============
            ['question_id' => 13 + 15, 'answer' => '5,845', 'is_correct' => false],
            ['question_id' => 13 + 15, 'answer' => '5,735', 'is_correct' => false],
            ['question_id' => 13 + 15, 'answer' => '5,625','is_correct' => true],
            ['question_id' => 13 + 15, 'answer' => '5,525', 'is_correct' => false],
            // ==============
            ['question_id' => 14 + 15, 'answer' => '3/15', 'is_correct' => false],
            ['question_id' => 14 + 15, 'answer' => '7/21', 'is_correct' => false],
            ['question_id' => 14 + 15, 'answer' => '2/10', 'is_correct' => false],
            ['question_id' => 14 + 15, 'answer' => '5/12','is_correct' => true],
            // ==============
            ['question_id' => 15 + 15, 'answer' => 'a. 8,65 ', 'is_correct' => false],
            ['question_id' => 15 + 15, 'answer' => 'b. 6,25 ','is_correct' => true],
            ['question_id' => 15 + 15, 'answer' => 'c. 5,55 ', 'is_correct' => false],
            ['question_id' => 15 + 15, 'answer' => 'd. 7,35', 'is_correct' => false],
            
            // ==============
            //  ALJABAR
            // ==============

            ['question_id' => 16-15, 'answer' => '2 dan 3 ', 'is_correct' => false],
            ['question_id' => 16-15, 'answer' => '2 saja ', 'is_correct' => false],
            ['question_id' => 16-15, 'answer' => '16 ', 'is_correct' => true],
            ['question_id' => 16-15, 'answer' => 'x dan y ', 'is_correct' => false],
            // ==============
            ['question_id' => 17-15, 'answer' => '5 ', 'is_correct' => true],
            ['question_id' => 17-15, 'answer' => '8 ', 'is_correct' => false],
            ['question_id' => 17-15, 'answer' => '12 ', 'is_correct' => false],
            ['question_id' => 17-15, 'answer' => '20 ', 'is_correct' => false],
            // ==============
            ['question_id' => 18-15, 'answer' => '2 dan 5 ', 'is_correct' => false],
            ['question_id' => 18-15, 'answer' => '13 ', 'is_correct' => true],
            ['question_id' => 18-15, 'answer' => 'a dan b ', 'is_correct' => false],
            ['question_id' => 18-15, 'answer' => '13 dan 5 ', 'is_correct' => false],
            // ==============
            ['question_id' => 19-15, 'answer' => '5 + 21 = x ', 'is_correct' => false],
            ['question_id' => 19-15, 'answer' => 'y + 8 = 7 ', 'is_correct' => false],
            ['question_id' => 19-15, 'answer' => 'x = 2y ', 'is_correct' => false],
            ['question_id' => 19-15, 'answer' => '25 = 13 + 12 ', 'is_correct' => true],
            // ==============
            ['question_id' => 20-15, 'answer' => '7 + x + 5y ', 'is_correct' => false],
            ['question_id' => 20-15, 'answer' => '7x + 35y ', 'is_correct' => true],
            ['question_id' => 20-15, 'answer' => '7 + x +35y ', 'is_correct' => false],
            ['question_id' => 20-15, 'answer' => '7x + 5y ', 'is_correct' => false],
            // ==============
            ['question_id' => 21-15, 'answer' => '16x ', 'is_correct' => false],
            ['question_id' => 21-15, 'answer' => '4x2 ', 'is_correct' => false],
            ['question_id' => 21-15, 'answer' => '8x2 ', 'is_correct' => false],
            ['question_id' => 21-15, 'answer' => '16x2 ', 'is_correct' => true],
            // ==============
            ['question_id' => 22-15, 'answer' => '25 ', 'is_correct' => true],
            ['question_id' => 22-15, 'answer' => 'y + x ', 'is_correct' => false],
            ['question_id' => 22-15, 'answer' => 'x saja ', 'is_correct' => false],
            ['question_id' => 22-15, 'answer' => '18 ', 'is_correct' => false],
            // ==============
            ['question_id' => 23-15, 'answer' => 'x + x + x = 3x ', 'is_correct' => false],
            ['question_id' => 23-15, 'answer' => 'y . y = y2 ', 'is_correct' => false],
            ['question_id' => 23-15, 'answer' => '(x – y)2 = x2 – xy + y2 ', 'is_correct' => true],
            ['question_id' => 23-15, 'answer' => '(x – y)(x + y) = x2 – y2 ', 'is_correct' => false],
            // ==============
            ['question_id' => 24-15, 'answer' => '(x + y)2 = x2 + 2xy + y2 ', 'is_correct' => true],
            ['question_id' => 24-15, 'answer' => 'x + x + x + x = 4 + x', 'is_correct' => false],
            ['question_id' => 24-15, 'answer' => 'y . y . y = 3y ', 'is_correct' => false],
            ['question_id' => 24-15, 'answer' => 'x2 – y2 = x2 – 2xy + y2 ', 'is_correct' => false],
            // ==============
            ['question_id' => 25-15, 'answer' => '16 ', 'is_correct' => false],
            ['question_id' => 25-15, 'answer' => '32 ', 'is_correct' => true],
            ['question_id' => 25-15, 'answer' => '10 ', 'is_correct' => false],
            ['question_id' => 25-15, 'answer' => '25 ', 'is_correct' => false],
            // ==============
            ['question_id' => 26-15, 'answer' => '1/5 ', 'is_correct' => false],
            ['question_id' => 26-15, 'answer' => '20 ', 'is_correct' => false],
            ['question_id' => 26-15, 'answer' => '5 ', 'is_correct' => true],
            ['question_id' => 26-15, 'answer' => '30 ', 'is_correct' => false],
            // ==============
            ['question_id' => 27-15, 'answer' => '2 ', 'is_correct' => false],
            ['question_id' => 27-15, 'answer' => '-2 ', 'is_correct' => false],
            ['question_id' => 27-15, 'answer' => '2xy ', 'is_correct' => false],
            ['question_id' => 27-15, 'answer' => '-2xy ', 'is_correct' => true],
            // ==============
            ['question_id' => 28-15, 'answer' => '6xy ', 'is_correct' => false],
            ['question_id' => 28-15, 'answer' => '3y ', 'is_correct' => true],
            ['question_id' => 28-15, 'answer' => '3x ', 'is_correct' => false],
            ['question_id' => 28-15, 'answer' => '3xy ', 'is_correct' => false],
            // ==============
            ['question_id' => 29-15, 'answer' => '6x2 + 6x – 5 ', 'is_correct' => false],
            ['question_id' => 29-15, 'answer' => '6x2- 6x - 5 ', 'is_correct' => false],
            ['question_id' => 29-15, 'answer' => '6x2- 5x - 6 ', 'is_correct' => false],
            ['question_id' => 29-15, 'answer' => '6x2 + 5x - 6 ', 'is_correct' => true],
            // ==============
            ['question_id' => 30-15, 'answer' => '6x – 1 ', 'is_correct' => false],
            ['question_id' => 30-15, 'answer' => '6x + 1 ', 'is_correct' => false],
            ['question_id' => 30-15, 'answer' => '6x – 5 ', 'is_correct' => true],
            ['question_id' => 30-15, 'answer' => '6x + 5', 'is_correct' => false],
        ];

        QuestionChoice::insert($choices);
    }
}
