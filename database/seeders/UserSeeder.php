<?php

namespace Database\Seeders;
use App\Models\User;
use DB;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
        	array(
        		'username' => 'jlustre',
        		'name' => 'Joey Lustre',
        		'email' => 'jclustre@gmail.com',
        		'password' => bcrypt('jocolus7'),
        		'email_verified_at' => now(),
        		'created_at' => now(),
        		'updated_at' => now(),
        	),
        	array(
        		'username' => 'jblustre',
        		'name' => 'Joane Lustre',
        		'email' => 'bongosia.joane@yahoo.com',
        		'password' => bcrypt('jocolus7'),
        		'email_verified_at' => now(),
        		'created_at' => now(),
        		'updated_at' => now(),
        	),
        ));
    }
}
