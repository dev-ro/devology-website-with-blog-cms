<?php

namespace Modules\Blog\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class SeedFakeBlogcategoriesBlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        for ($i=1; $i < 20; $i++) { 
            DB::table('blogcategories_blogs')->insert([
                'blog_id' => rand(1,20),
                'blogcategories_id' => rand(1,5),
            ]);
        }

        
    }
}
