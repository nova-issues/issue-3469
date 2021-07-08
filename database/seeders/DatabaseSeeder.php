<?php

namespace Database\Seeders;

use App\Models\Collection;
use App\Models\Program;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);

        foreach (['Laravel', 'Inertia', 'Vue', 'Livewire', 'Tailwind'] as $name) {
            Collection::forceCreate(['name' => $name]);
        }

        foreach (['Laravel Nova', 'Laravel Vapor', 'Laravel Spark', 'Laravel Envoyer', 'Laravel Forge'] as $name) {
            Program::forceCreate(['name' => $name]);
        }
    }
}
