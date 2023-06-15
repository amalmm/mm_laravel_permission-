<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


         /**
         * admin user 
         * */ 
        
        $test_user =  User::where('email','test@test.com')->first();
        
        if(is_null($test_user)){
             User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'password' =>  Hash::make('test@test.com'),
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
        ]);
        
        // command
        $this->command->info('test user generated');
       }
       else{
        
        $this->command->info('test user exist');
       }
       

    }
}
