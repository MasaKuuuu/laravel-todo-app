<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('todos')->insert([
            'task' => 'PHPの勉強'
        ]);
        DB::table('todos')->insert([
            'task' => 'Laravelの勉強'
        ]);
        DB::table('todos')->insert([
            'task' => 'PHPTechCafeへの参加'
        ]);
    }
}
