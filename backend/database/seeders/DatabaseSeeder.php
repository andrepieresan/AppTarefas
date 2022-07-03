<?php

namespace Database\Seeders;

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
        factory(Task::class)->create({
            'date' => '22/06 as 19h', 'task' => 'suiahuashus', 'status' => 'true'
        })
    }
}
 