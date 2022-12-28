<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class EmployeeStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employee_statuses')->insert([
            'name' => 'Worker',
            'display_name' => 'Worker',
            'description' => 'Worker',
        ]);

        DB::table('employee_statuses')->insert([
            'name' => 'Employee',
            'display_name' => 'Employee',
            'description' => 'Employee',
        ]);

        DB::table('employee_statuses')->insert([
            'name' => 'Self-employed',
            'display_name' => 'Self-employed',
            'description' => 'Self-employed',
        ]);

        DB::table('employee_statuses')->insert([
            'name' => 'Unemployed',
            'display_name' => 'Unemployed',
            'description' => 'Unemployed',
        ]);
    }
}
