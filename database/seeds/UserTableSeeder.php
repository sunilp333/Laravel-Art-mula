<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Http\Controllers\Auth\Request;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $role_employee = Role::where('name', 'user')->first();
       $role_manager  = Role::where('name', 'admin')->first();

	   $employee = new User();
       $employee->name = 'Employee Name';
       $employee->email = 'employee@example.com';
       $employee->password = bcrypt('12345678');
	   $employee->phone_number = '12345678';
	   $employee->contact_address ='344444';
	   $employee->user_slug = '3333';
	  
       $employee->save();
       $employee->roles()->attach($role_employee);
       $manager = new User();
       $manager->name = 'Manager Name';
       $manager->email = 'manager@example.com';
       $manager->password = bcrypt('12345678');
	   $manager->phone_number = '12345678';
	   $manager->contact_address ='344444';
	   $manager->user_slug = '3333';
       $manager->save();
       $manager->roles()->attach($role_manager);
    }
}
