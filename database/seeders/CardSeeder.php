<?php

namespace Database\Seeders;

use App\Models\Card;
use Illuminate\Database\Seeder;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = json_decode(file_get_contents(public_path('cards.json'), true));

        for ($i = 0; $i < 7; $i++) {
            Card::create([
                'category' => 'week_days',
                'name' => $cards[0]->name[$i],
                'transcription' => $cards[2]->trans[$i],
                'image' => 'img/calendar/week/' . $cards[1]->img[$i] . '.jpg',
            ]);
        }

        $trans_count = count($cards[3]->item);
        for ($i = 0; $i < $trans_count; $i++) {
            Card::create([
                'category' => 'transcription',
                'name' => $cards[3]->item[$i],
                'transcription' => $cards[5]->item[$i],
                'image' => 'img/alphabet/transcription/' . $cards[4]->item[$i] . '.jpg',
            ]);
        }

        $alphabet_count = count($cards[6]->item);
        for ($i = 0; $i < $alphabet_count; $i++) {
            Card::create([
                'category' => 'alphabet',
                'name' => $cards[6]->item[$i],
                'transcription' => $cards[8]->item[$i],
                'image' => 'img/alphabet/russian/' . $cards[7]->item[$i] . '.jpg',
            ]);
        }

        $months_count = count($cards[9]->item);
        for ($i = 0; $i < $months_count; $i++) {
            Card::create([
                'category' => 'months',
                'name' => $cards[9]->item[$i],
                'transcription' => $cards[11]->item[$i],
                'image' => 'img/calendar/month/' . $cards[10]->item[$i] . '.jpg',
            ]);
        }

        $alphabet_en_count = count($cards[12]->item);
        for ($i = 0; $i < $alphabet_en_count; $i++) {
            Card::create([
                'category' => 'alphabet_en',
                'name' => $cards[12]->item[$i],
                'transcription' => $cards[14]->item[$i],
                'image' => 'img/alphabet/english/' . $cards[13]->item[$i] . '.jpg',
            ]);
        }

        $hundred_count = count($cards[15]->item);
        for ($i = 0; $i < $hundred_count; $i++) {
            Card::create([
                'category' => 'hundred',
                'name' => $cards[15]->item[$i],
                'transcription' => $cards[16]->item[$i],
                'image' => 'img/numbers/hundred/' . $cards[17]->item[$i] . '.jpg',
            ]);
        }

        $carts_count = count($cards[18]->item);
        for ($i = 0; $i < $carts_count; $i++) {
            Card::create([
                'category' => 'carts',
                'name' => $cards[20]->item[$i],
                'add_image' => 'img/addition/play_cards/cards/' . $cards[18]->item[$i] . '.png',
                'image' => 'img/addition/play_cards/transcriptions/' . $cards[19]->item[$i] . '.jpg',
            ]);
        }


        $thousand_count = count($cards[21]->item);
        $folders = ['one_hundred', 'two_hundred', 'three_hundred', 'four_hundred', 'five_hundred', 'six_hundred',
            'seven_hundred', 'eight_hundred', 'nine_hundred' ];
        for ($i = 0; $i < $thousand_count; $i++) {
            $folder = 'one_hundred';
            $number =  $i;
            if ($i < 100) $number = '0' . $i;
            if ($i < 10) $number = '00' . $i;
            switch ($i) {
                case $i > 100 && $i <= 200:
                    $folder = 'two_hundred';
                    break;
                case $i >= 200 && $i < 300:
                    $folder = 'three_hundred';
                    break;
                case $i >= 300 && $i < 400:
                    $folder = 'four_hundred';
                    break;
                case $i >= 400 && $i < 500:
                    $folder = 'five_hundred';
                    break;
                case $i >= 500 && $i < 600:
                    $folder = 'six_hundred';
                    break;
                case $i >= 600 && $i < 700:
                    $folder = 'seven_hundred';
                    break;
                case $i >= 700 && $i < 800:
                    $folder = 'eight_hundred';
                    break;
                case $i >= 800 && $i < 900:
                    $folder = 'nine_hundred';
                    break;
                case $i >= 900 && $i < 1000:
                    $folder = 'thousand';
                    break;
            }
            Card::create([
                'category' => 'thousand',
                'name' => $number,
                'transcription' => $cards[21]->item[$i],
                'image' => 'img/numbers/' . $folder . '/' .  $cards[22]->item[$i] . '.jpg',
            ]);
        }
    }
}
