<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('posts')->delete();

        $posts = array(
        	'slug'		=>'our_aim',
            'position' 	=> 1,
            'title' 	=>'Our Aim',
			'body'		=>'Our Aim Is To Build This Site Using Laravel! :D',
            'visibility'=>1
        );

        // Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
    }

}