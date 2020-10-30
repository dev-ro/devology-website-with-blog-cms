<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Settings;
class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $social = [
            [   
                'icon' => '<i class="fab fa-facebook"></i>',
                'url' => '#'        
            ],
            [   
                'icon' => '<i class="fab fa-twitter"></i>',
                'url' => '#'        
            ],
            [   
                'icon' => '<i class="fab fa-linkedin-in"></i>',
                'url' => '#'        
            ],
            [   
                'icon' => '<i class="fab fa-instagram"></i>',
                'url' => '#'        
            ],
        ];

        Settings::create([
            'website_name' => 'Dev',
            'website_logo' => '',
            'tagline' => 'Devology',
            'copyright' => '&copy; Copyrights '. date('Y') .' Dev All rights reserved.',
            'website_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea iusto accusamus dolorum vero exercitationem excepturi, similique et aspernatur saepe ipsa modi quisquam odio eius iure labore quas rem quidem maxime.',
            'social' => $social
        ]);
    }
}
