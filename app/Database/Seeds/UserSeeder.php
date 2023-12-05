<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //
        $data = [
            [
                'title' => 'Codeigniter 3 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],
            [
                'title' => 'Codeigniter 4 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],
            [
                'title' => 'Codeigniter 5 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],
            [
                'title' => 'Codeigniter 6 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],
            [
                'title' => 'Codeigniter 7 for Dummies',
                'author' => 'CI Community',
                'year' => '2023',
            ],
        ];

        $this->db->table('tbbooks')->InsertBatch($data);
    }
}
