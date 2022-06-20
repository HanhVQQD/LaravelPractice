<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Categories')->insert([
            'id'=>'1',
            'name'=>'Bánh gato'
        ]);
        DB::table('Categories')->insert([
            'id'=>'2',
            'name'=>'Bánh Truyền Thống'
        ]);
        DB::table('Categories')->insert([
            'id'=>'3',
            'name'=>'Bánh Nhập khẩu'
        ]); 
    }
}
