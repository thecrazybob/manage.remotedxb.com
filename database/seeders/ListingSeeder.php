<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;

class ListingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $listings = Http::get('https://remoteok.io/api');

        foreach($listings->json() as $index => $listing) {
            if ($index != 0) {
                DB::table('listings')->insert([
                    'slug'              => $listing['slug'],
                    'position'          => $listing['position'],
                    'description'       => $listing['description'],
                    'link'              => $listing['apply_url'],
                    'team_id'           => 1,
                ]);
            }
        };

        
    }
}
