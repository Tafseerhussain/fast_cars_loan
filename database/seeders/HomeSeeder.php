<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $home = DB::table('homes')->where('id', 1)->first();
        if ($home === null) {
           DB::table('homes')->insert([
                'hero_head' => 'Lorem Ipsum dolor sit amet consectetur.',
                'hero_text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam obcaecati, repudiandae est perferendis odio suscipit ea inventore laudantium expedita.',
                'hero_btn' => 'Apply for Loan',
                'form_head' => 'Have your cash in hand with a few clicks!',
           ]);
        } else {
            DB::table('homes')->where('id', 1)->update([
                'hero_head' => 'Lorem Ipsum dolor sit amet consectetur.',
                'hero_text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam obcaecati, repudiandae est perferendis odio suscipit ea inventore laudantium expedita.',
                'hero_btn' => 'Apply for Loan',
                'form_head' => 'Have your cash in hand with a few clicks!',
            ]);
        }
    }
}
