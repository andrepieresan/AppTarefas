<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tasks = [
            'Non culpa qui voluptate ut proident ipsum enim.',
            'Veniam ex est exercitation aliquip laboris amet Lorem officia.',
            'Lorem culpa ad velit irure.',
            'Dolor tempor sit cillum ex.',
            'Proident eiusmod sint mollit cupidatat ex aute velit nostrud minim eu ea proident.',
            'Esse ad fugiat ea ex laborum amet.',
            'Magna proident minim mollit dolore amet laborum excepteur reprehenderit do.',
        ];

        foreach ($tasks as $task) {
            Todo::create([
                'task' => $task
            ]);
        }
    }
}
