<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Vladislav',
            'email' => 'dev4rweb@gmail.com',
            'password' => bcrypt('Artem1407')
        ]);
        User::factory(100)->create();
        $this->call(CardSeeder::class);
    }
}
