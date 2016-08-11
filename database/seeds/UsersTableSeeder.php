<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('users')->insert([
        //'name'=>'Joe',
        //'email' => 'joe@ejemplo.com'
        //]);
        //}        
        
        //factory(PlatziPHP\User::class,10)->create();
        
        PlatziPHP\User::truncate();
        PlatziPHP\Post::truncate();
        factory(PlatziPHP\User::class,10)->create()->each(function ($user){
            $post = factory(PlatziPHP\Post::class)->make();
            $user->posts()->save($post);            
        });
    }
}
