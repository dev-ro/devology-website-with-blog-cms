<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Company;
class CompanySeeder extends Seeder
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

        Company::create([
            'company_name' => 'Dev',
            'company_logo_header' => '',
            'company_logo_footer' => '',
            'company_favicon' => '',
            'tagline' => 'Devology',
            'copyright' => '&copy; Copyrights '. date('Y') .' Dev All rights reserved.',
            'company_description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ea iusto accusamus dolorum vero exercitationem excepturi, similique et aspernatur saepe ipsa modi quisquam odio eius iure labore quas rem quidem maxime.',
            'company_social'    => $social,
            'company_email'     => 'dev.rohit256@gmail.com',
            'company_contact'   => '+917779834191',
            'company_address'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, ipsum.',
        ]);
    }
}
