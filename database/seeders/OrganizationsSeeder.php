<?php

namespace Database\Seeders;

use App\Models\Application;
use Illuminate\Database\Seeder;

class OrganizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Application::factory()->times(5)->create();
    }
}
