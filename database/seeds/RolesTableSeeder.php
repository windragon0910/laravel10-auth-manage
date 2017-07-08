<?php

use App\User;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\Models\Permission;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    /**
	     * Add Roles
	     *
	     */
    	if (Role::where('slug', '=', 'admin')->first() === null) {
	        $adminRole = Role::create([
	            'name' => 'Admin',
	            'slug' => 'admin',
	            'description' => 'Admin Role',
	            'level' => 5,
        	]);
	    }

    	if (Role::where('slug', '=', 'user')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'User',
	            'slug' => 'user',
	            'description' => 'User Role',
	            'level' => 1,
	        ]);
	    }

    	if (Role::where('slug', '=', 'unverified')->first() === null) {
	        $userRole = Role::create([
	            'name' => 'Unverified',
	            'slug' => 'unverified',
	            'description' => 'Unverified Role',
	            'level' => 0,
	        ]);
	    }

    }

}