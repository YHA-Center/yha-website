<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AboutDesc;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        AboutDesc::create([
            'desc' => '
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. At deserunt cupiditate minima totam! Necessitatibus aliquid quisquam consequuntur sunt excepturi praesentium ipsam, exercitationem earum rerum distinctio laborum eos ipsum aliquam voluptates.
            ',
        ]);
    }
}
