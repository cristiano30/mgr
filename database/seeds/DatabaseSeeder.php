<?php

use Illuminate\Database\Seeder;
use Faker\Factory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $faker = Factory::create('pl_PL');
        $isuers = 10;
        $password = 'password';
      
    
        for($i = 1; $i <= $isuers; $i++){
        	  if ($i === 1) {
     			 DB::table('users')->insert([
        		'name'=> 'Grzegorz Kaszuba',
        		'sex' => 'm',
        		'email' => 'kasza100-1993@o2.pl',
        		'password'=> Hash::make($password),
        		 
        		]);
    	  }else {


        	$sex = $faker -> randomElement($array = array ('m' , 'f'));

        	if($sex === 'm'){
				DB::table('users')->insert([
        		'name'=> $faker->firstNameMale . ' ' . $faker->lastNameMale,
        		'sex' => $sex,
        		'email' => $faker->email,
        		'password'=> Hash::make($password),
        		 
        		]);
        	}else  {
	        	DB::table('users')->insert([
	        	'name'=> $faker->firstNameFemale . ' ' . $faker->lastNameFemale,
	        	'sex' => $sex,
	        	'email' => $faker->email,
	        	'password'=> Hash::make($password),
	        	 
	        	]);
        	}
        	}
 		
        }

       

    }
}
