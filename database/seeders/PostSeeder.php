<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;
use Illuminate\Support\Facades\Hash;
class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Post::factory(10)->create();
       
       
        //DB::table('posts')->insert([
            
            //'title' => Str::random(100),
            //'description' => Str::random(255),
        //]);




    }
}
