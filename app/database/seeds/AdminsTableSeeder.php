<?php

class AdminsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('admins')->delete();
       /* $pass       = 'password';
        $salt       = 'I am giving a BIT of SALT on your PASS-WORD'
        $password   = Hash::make($salt.$pass);*/

        $admins = array(
            array('username' => 'salman', 'password' => 'pass'),
        	array('username' => 'admin', 'password' => md5('I am giving a BIT of SALT on your PASS-WORD password'))
        ); 

        // Uncomment the below to run the seeder
        DB::table('admins')->insert($admins);
    }

}