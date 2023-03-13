<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name' => '家事',
        ];
    　　Tag.php::create($param);
    $param = [
      'name' => 'jack',
      'age' => 20,
      'nationality' => 'British'
    ];
    Author::create($param);
    $param = [
      'name' => 'sara',
      'age' => 45,
      'nationality' => 'Egyptian'
    ];
    Author::create($param);
    $param = [
      'name' => 'saly',
      'age' => 31,
      'nationality' => 'Chinese'
    ];
    Author::create($param);
    }
}