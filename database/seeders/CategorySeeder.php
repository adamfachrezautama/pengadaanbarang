<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories= [
            [
                'keterangan' => 'Peralatan Elektronik',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
            ],
           [
                'keterangan' => 'Perabotan Kantor',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
           ],
           [
                'keterangan' => 'Peralatan Kebersihan',
                'created_at' => date('Y-m_d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s')
           ],
           [
                'keterangan' => 'Peralatan Pantry',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
           ],
           [
                'keterangan' => 'Perlengakan Operasional',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
           ],
           [
                'keterangan' => 'Peralatan Keamanan',
                'created_at' => date('Y-m-d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
           ],
           [
                'keterangan' => 'Alat Perbaikan / Maintenance',
                'created_at' => date('Y-m_d h:i:s'),
                'updated_at' => date('Y-m-d h:i:s'),
           ]
        ];

        Category::insert($categories);
    }
}
