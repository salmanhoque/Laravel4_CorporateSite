<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('posts')->delete();

        $posts = array(
        	'slug'		=>'contact_us',
            'position' 	=> 1,
            'title' 	=>'Contact Us',
			'body'		=>'This is the Contact Us page :D',
            'visibility'=>1,
        );

        // Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
    }

}