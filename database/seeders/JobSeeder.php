<?php

namespace Database\Seeders;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = Tag::factory()->count(3)->create();
        Job::factory(17)->hasAttached($tags)->create();
        Job::factory(3)->hasAttached($tags)->create([
            'featured' => true
        ]);
    }
}
