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
      $param = [
      'id' => '20',
      'string' => '191',
      'timestamp' => 'created_at',
      'timestamp' => 'update_at',
    ];
     Todo::class
  }
}