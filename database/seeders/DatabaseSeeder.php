<?php

namespace Database\Seeders;

use App\Models\User;
use Database\Seeders\TonerSeeder;
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
        User::factory(15)->create();

        $this->call([TonerSeeder::class]);
    }
}
