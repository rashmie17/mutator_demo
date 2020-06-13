<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employeeData=array([
                'name'=>'Jane Goodall',
                'state'=>'London',
                'country'=>'UK'
            ],
            [
                'name'=>'Max Planck',
                'state'=>'Kiel',
                'country'=>'Germany'
            ],
            [
                'name'=>'Rosalind Franklin',
                'state'=>'London',
                'country'=>'UK'
            ],
            [
                'name'=>'Niels Bohr',
                'state'=>'Copenhagen',
                'country'=>'Denmark'
        ]);
        foreach ($employeeData as $value) {
            $employee = new Employee;
            $employee->name =$value['name'];
            $employee->state = $value['state'];
            $employee->country = $value['country'];
            $employee->save();
        }
    }
}
