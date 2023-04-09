<?php

namespace Database\Seeders;

use App\Models\Listing;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Listing::factory(6)->create();
        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@examlple.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia laboriosam quibusdam recusandae voluptatibus error, culpa, suscipit nihil doloribus dolorem, delectus magni. Rerum quidem explicabo exercitationem itaque corrupti voluptatem, qui non!',
        // ]);

        // Listing::create([
        //     'title' => 'Full-Stack Engineer',
        //     'tags' => 'laravel, backend, api',
        //     'company' => 'Stark Industries',
        //     'location' => 'New York, NY',
        //     'email' => 'email2@examlple.com',
        //     'website' => 'https://www.starkindustries.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia laboriosam quibusdam recusandae voluptatibus error, culpa, suscipit nihil doloribus dolorem, delectus magni. Rerum quidem explicabo exercitationem itaque corrupti voluptatem, qui non!',
        // ]);

        // Listing::create([
        //     'title' => 'Laravel Senior Developer',
        //     'tags' => 'laravel, javascript',
        //     'company' => 'Acme Corp',
        //     'location' => 'Boston, MA',
        //     'email' => 'email1@examlple.com',
        //     'website' => 'https://www.acme.com',
        //     'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officia laboriosam quibusdam recusandae voluptatibus error, culpa, suscipit nihil doloribus dolorem, delectus magni. Rerum quidem explicabo exercitationem itaque corrupti voluptatem, qui non!',
        // ]);
    }
}
