<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OwnerAccount;
use App\Models\CustomerAccount;
use App\Models\Book;
use App\Models\Place;
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

        OwnerAccount::factory(20)->create();
        CustomerAccount::factory(20)->create();
        Place::factory(20)->create();
        Book::factory(20)->create();



    }


}