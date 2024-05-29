<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CvSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'phone' => '123456789',
            'address' => '123 Street, City, Country',
            'experience' => '5 years experience in software development.',
            'education' => 'B.Sc. in Computer Science.',
            'skills' => 'PHP, JavaScript, HTML, CSS, CodeIgniter 4',
        ];

        $this->db->table('cv')->insert($data);
    }
}
