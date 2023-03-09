<?php

namespace Database\Seeders;

use App\Models\Todo;
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $todo = [
      'id',
      'string',
      'timestamp',
      'timestamp'
    ];
    Todo::create($todo);
    $todo = [
      'name' => 'jack',
      'age' => 20,
      'nationality' => 'British'
    ];
    }
}