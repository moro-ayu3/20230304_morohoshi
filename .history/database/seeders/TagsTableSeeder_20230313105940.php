<?php

namespace Database\Seeders;

use App\Models\Tag;
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
        Tag::create($param);

        $param = [
          'name' => 'sara',
        ];
        Tag::create($param);

        $param = [
          'name' => 'saly',
        ];
        Tag::create($param);

        $param = [
          'name' => 'saly',
        ];
        Tag::create($param);
    }
}
