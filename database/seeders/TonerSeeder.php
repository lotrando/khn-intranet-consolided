<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TonerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('toners')->insert([
            'item_type' => '2612',
            'item_code' => 'Q2612A',
            'item_description' => "1018, 1020, 1022",
        ]);
    }
}
