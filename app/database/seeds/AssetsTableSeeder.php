<?php

class AssetsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('upload_assets')->delete();

        $upload_assets = array(
        	'asset_name' => 'test.txt',
			'url'		=> 'http://localhost:8000/public/uploads/07_2013/'.time().'_test.txt',
            'created_at'=> date('Y-m-d H:i:s'),
            'updated_at'=> date('Y-m-d H:i:s'),           
        );

        // Uncomment the below to run the seeder
        DB::table('assets')->insert($upload_assets);
    }

}