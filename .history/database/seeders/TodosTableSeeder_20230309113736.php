<?php

namespace Database\Seeders;

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
      '' => 'tony',
      'age' => 35,
      'nationality' => 'American'
    ];
    Author::create($param);
    $param = [
      'name' => 'jack',
      'age' => 20,
      'nationality' => 'British'
    ];
    }
}