<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $e = new Employee;
        $e->id = 1;
        $e->user_id = 1;
        $e->dept = 'Marketing';
        $e->office_line = '07774131391';
        $e->save();

        Employee::factory()->count(5)->create();
    }
}
