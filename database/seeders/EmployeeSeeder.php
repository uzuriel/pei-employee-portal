<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = Employee::factory()->count(10)->create();

        foreach ($employees as $employee) {
            User::factory()->create([
                'employee_id' => $employee->employee_id,
                'role_id' => rand(1, 3),
            ]);
        }
        User::factory()->create([
            'employee_id' => 200000000,
            'role_id' => 0,
        ]);
    }
}
