<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('faqs')->insert([
            'title' => Str::random(10),
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Et eos maiores, nihil atque impedit numquam consequatur voluptates accusamus corporis rem dolorem animi, neque, corrupti suscipit minima ducimus reprehenderit dignissimos, sapiente!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
