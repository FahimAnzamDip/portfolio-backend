<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void {
        About::create([
            'name'          => '',
            'designation'   => '',
            'about_content' => '',
            'resume_link'   => '',
            'email'         => '',
            'whatsapp'      => '',
            'facebook'      => '',
            'linkedin'      => '',
            'twitter'       => '',
        ]);
    }
}
