<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Products extends Seeder
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
            'name'=>'Bánh sinh nhật Hồng',
            'Image'=>'public/Images/BanhKemLanh',640,480, null, false,
            'Description'=>'Phù hợp với các bạn nữ',
            'Quantity'=>'2',
            'Day'=>'2022/06/20'
        ]);
    }
}
