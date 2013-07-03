<?php

class PostsTableSeeder extends Seeder {

    public function run()
    {
    	// Uncomment the below to wipe the table clean before populating
    	// DB::table('posts')->delete();

        /*$posts = array(
        	'slug'		=>'home',
            'position' 	=> 1,
            'title' 	=>'Home',
			'body'		=>'This is home page',
            'visibility'=>1,
        );

        $posts = array(
            'slug'      =>'our_aim',
            'position'  => 2,
            'title'     =>'Our Aim',
            'body'      =>'This is our aim page :D',
            'visibility'=>1,
        );

        $posts = array(
            'slug'      =>'services',
            'position'  => 3,
            'title'     =>'Services',
            'body'      =>'This is services page',
            'visibility'=>1,
        );

        $posts = array(
            'slug'      =>'contact_us',
            'position'  => 4,
            'title'     =>'Contact Us',
            'body'      =>'This is contact us page',
            'visibility'=>1,
        );*/

        $posts = array(
            'slug'      =>'our_product',
            'position'  => 5,
            'title'     =>'Our Product',
            'body'      =>'This is our product page',
            'visibility'=> 0,
        );
        
        // Uncomment the below to run the seeder
        //DB::table('posts')->insert($posts);
    }

}