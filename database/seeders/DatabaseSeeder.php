<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

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

        $user = User::factory()->create([
            'name' => 'John Doe',
            'email' => 'john@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email@email.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum minus neque sint, culpa voluptate ipsa sapiente earum tempora consequuntur odio consectetur quo quisquam. Totam atque mollitia quo natus dicta enim.'
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Aspire Technologies',
        //     'location' => 'Ilorin, Nigeria',
        //     'email' => 'info@aspiretech.com',
        //     'website' => 'https://aspiretech.com',
        //     'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatum minus neque sint, culpa voluptate ipsa sapiente earum tempora consequuntur odio consectetur quo quisquam. Totam atque mollitia quo natus dicta enim.'
        // ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
