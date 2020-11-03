<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Modules\Blog\Database\Seeders\BlogDatabaseSeeder;
use Modules\Portfolio\Database\Seeders\PortfolioDatabaseSeeder;
use Modules\Services\Database\Seeders\ServicesDatabaseSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [
                CompanySeeder::class,
                TeamSeeder::class,
                BlogDatabaseSeeder::class,
                PortfolioDatabaseSeeder::class,
                ServicesDatabaseSeeder::class
            ]
        );
    }
}
