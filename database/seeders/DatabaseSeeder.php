<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

       // User::trnucate();
        //Category::trnucate();
        //Post::truncate();


         $user = User::factory()->create();

         $personal = Category::create([
             'name' =>'personal',
             'slug' => 'personal'
         ]);

        $family = Category::create([
            'name' =>'family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' =>'Work',
            'slug' => 'Work'
        ]);

        Post::create([
            'user_id'=> $user -> id,
            'category_id'=> $family -> id,
            'title'=>'My family post',
            'slug' =>'my-first-post',
            'excerpt' => 'ldzakldlzadjkzakd',
            'body' => 'dkzadkjznakjdjzbahdbhbdkzadkjznakjdjzbahdbhbdkzadkjznakjdjzbahdbhb'
        ]);
        Post::create([
            'user_id'=> $user -> id,
            'category_id'=> $work -> id,
            'title'=>'My work post',
            'slug' =>'my-second-post',
            'excerpt' => 'ldzakldlzadjkzakd',
            'body' => 'dkzadkjznakjdjzbahdbhbdkzadkjznakjdjzbahdbhbdkzadkjznakjdjzbahdbhb'
        ]);
        Post::create([
            'user_id'=> $user -> id,
            'category_id'=> $personal -> id,
            'title'=>'My personal post',
            'slug' =>'my-third-post',
            'excerpt' => 'ldzakldlzadjkzakd',
            'body' => 'dkzadkjznakjdjzbahdbhbdkzadkjznakjdjzbahdbhbdkzadkjznakjdjzbahdbhb'
        ]);
    }
}
