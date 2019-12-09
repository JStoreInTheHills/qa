<?php

use Illuminate\Database\Seeder;
use App\Model\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       factory(User::class, 3)->create()->each(function ($user){
            $user->questions()
                ->saveMany(
                    factory(App\Model\Question::class, rand(1,5))->make()
                );
       });
    }
}
