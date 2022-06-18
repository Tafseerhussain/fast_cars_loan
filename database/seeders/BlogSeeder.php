<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('blogs')->insert([
            'user_id' => 1,
            'title' => Str::random(10),
            'image' => 'https://www.alro-group.com/wp-content/uploads/2014/12/placeholder.jpg',
            'short_description' => 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Et eos maiores, nihil atque impedit numquam consequatur voluptates accusamus corporis rem dolorem animi, neque, corrupti suscipit minima ducimus reprehenderit dignissimos, sapiente!',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing, elit. Et eos maiores, nihil atque impedit numquam consequatur voluptates accusamus corporis rem dolorem animi, neque, corrupti suscipit minima ducimus reprehenderit dignissimos, sapiente!
        Sed omnis minus porro blanditiis dolores at, iure, totam voluptates maiores quod tempore enim voluptatem fugiat, similique nam iusto incidunt iste nihil. Perferendis molestiae quam excepturi culpa rem dignissimos eveniet?
        Fuga delectus voluptate quas quis neque ipsum animi illum eum optio unde, suscipit perspiciatis inventore dicta error temporibus ipsam laboriosam obcaecati consequuntur praesentium explicabo, aspernatur voluptatem! Adipisci, optio doloremque? Temporibus!',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
