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
        Tag::create($param);

        $param = [
          'name' => '勉強',
        ];
        Author::create($param);

        $param = [
          'name' => 'sara',
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