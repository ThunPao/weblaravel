<?php

namespace Database\Seeders;

use App\Models\brands;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class brandseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

            $brands = [
                ['Name' => 'ASUS',],
                ['Name' => 'ACER',]
            ];



            brands::insert($brands);
    }
}
