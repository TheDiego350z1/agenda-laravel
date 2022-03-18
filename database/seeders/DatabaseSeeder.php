<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Contact;
use App\Models\Event;

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

        
        $this->call(RoleSeeder::class);

        User::factory(2)->create(); 

        User::Create([
            'name' => 'Diego',
            'email' => 'admin@gmail.com',
            'password' => bcsqrt('12344'), 
            'remember_token' => Str::random(10),
        ])->assignRole('admin');

        Contact::factory(10)->create();
        Event::factory(10)->create();

    }
}
