<?php

class AdminsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('admins')->delete();
       
        $admins = array(
                    'username' => 'administrator', 
                    'password' => Hash::make('password')
        ); 

        // Uncomment the below to run the seeder
        //DB::table('admins')->insert($admins);
    }

}