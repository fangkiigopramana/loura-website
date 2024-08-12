<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'name' => 'Admin',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Murid',
                'guard_name' => 'web',
            ],
            [
                'name' => 'Ustaz',
                'guard_name' => 'web',
            ],
        ];
        DB::table('roles')->insert($datas);
    }
}
