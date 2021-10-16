<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
        ['category_name' => '果樹類'],
        ['category_name' => '野菜類'],
        ['category_name' => 'キノコ類'],
        ['category_name' => '穀類'],
        ['category_name' => 'その他'],
    ]);
    }
}
