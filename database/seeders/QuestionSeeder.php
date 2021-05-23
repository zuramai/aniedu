<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $questions = [
            [
                'question' => 'Tentukan variabel dari 2x +3y = 16!',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Berapakah nilai y dari 2y = 10? ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Tentukan konstanta dari 5a + 2b = 13! ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Manakah dibawah ini yang BUKAN fungsi aljabar? ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Tentukan bentuk sederhana dari 7(x + 5y)! ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Hasil dari (4x)2 adalah... ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Tentukan koefisien dari 25y + x = 18! ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Manakah sifat operasi aljabar yang SALAH? ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Manakah sifat operasi aljabar yang BENAR? ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Jika x = 25 berapakah jumlah x yang benar? ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Jika 5x = 25, maka x = ... ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Berapakah hasil dari -7xy + 5xy?',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Berapakah hasil dari 9xy : 3x? ',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Hasil dari (2x + 3)(3x – 2) adalah...',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Hasil dari (6x2 + x – 5) : (x + 1) adalah...',
                'type' => 'Aljabar'
            ],
            [
                'question' => 'Ubah 30% menjadi pecahan biasa paling sederhana! ',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Nilai yang sama pada pecahan 2/3 adalah... ',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Ubah pecahan 5 2/7 menjadi pecahan biasa! ',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Bentuk pecahan 9 1/3 merupakan jenis pecahan...',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Bentuk desimal dari pecahan 4 2/5 adalah... ',
                'type' => 'Pecahan'
            ],
            [
                'question' => '5/6 ...... 6/30 ',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Hasil dari 9/25 + 3,52 = ...',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Hasil dari 20% + 3 1/2 = ... ',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Bentuk pecahan yang benar dari 3,75 adalah... ',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Bentuk persentase dari pecahan 3/4 adalah... ',
                'type' => 'Pecahan'
            ],
            [
                'question' => '2/8 .... 3/6 ',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Bentuk persentase dari 17/25 adalah… ',
                'type' => 'Pecahan'
            ],
            [
                'question' => 'Hasil dari 5 ¼ + 6/16 = … ',
                'type' => 'Pecahan'
            ],
            [
                'question' => ' Pecahan paling sederhana dibawah ini adalah… ',
                'type' => 'Pecahan'
            ],
            [
                'question' => '1/4 dari 25 adalah…',
                'type' => 'Pecahan'
            ],
        ];

        Question::insert($questions);
    }
}
