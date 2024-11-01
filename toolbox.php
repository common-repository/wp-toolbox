<?php
/*
Plugin Name: WP Toolbox
Plugin URI: http://www.adrianfraguela.com
Description: A plugin to give theme developers a toolbox of weapons to use in their themes
Version: 1.3.1
Author: Adrian Fraguela
Author URI: http://www.adrianfraguela.com
*/

/**
* A plugin to give theme developers a toolbox of weapons to use in their themes
* @package WP_Toolbox
* @author Adrian Fraguela <hello@adrianfraguela.com>
*
*/

class WP_Toolbox
{
/**
	* 	Method to limit the string that is passed into it. Usage: WP_Toolbox::limitString("some random string", 10, "char", "&raquo;");
	*	@param string $string The string you want to limit
	*	@param integer $count The number of characters or words you'd like to limit to
	*	@param string $charWord Do you want to limit by 'characters' or 'words' 
	*	@param string $ellipsis What to append at the end of the string, if NULL then nothing gets added, default is ...
*/

	public static function LimitString( $string = "Please enter a string", $count = 3, $charWord = "char", $ellipsis = "...")
	{	
		//remove any nastiness from the string
		$string = filter_var($string, FILTER_SANITIZE_STRING);

		//by word
		if($charWord == "word"){
			$string = explode(" ", $string); 
			if (count($string) > $count) {
				$string = implode(" ", array_slice($string, 0, $count)) . "..."; 
			}
		}

		//by char
		if($charWord == "char"){
			if (strlen($string) > $count)
			$string = substr($string, 0, $count) . $ellipsis;
		}

		//Output the result
		return $string;
	}

/**
	* Method to return the content by id, stripped of all tags if needed
	* @param string $id The ID of the post you want to get
	* @param boolean $stripped If you want the content stripped of tags
*/
	public static function ContentByID($id, $stripped = true)
	{
		//first check to see if the post, exists, if not throw exception
		global $wpdb;
		if(!$wpdb->get_results( "SELECT * FROM ".$wpdb->prefix."posts WHERE ID = $id", OBJECT )) {
			return "Post does not exist - ($id) passed";
		}
		
		$contentByID = get_page($id);
		if ($contentByID) {
			if($stripped){
				$contentByID = strip_tags($contentByID->post_content);
			}

			return $contentByID;
		}
	}

/**
	* Method to return a random post
	* @param string $post_type The post type you wish to return, default is post.
*/
	public static function RandomPost($post_type = 'post')
	{
		$args = array('post_type' => $post_type, 'orderby' => 'rand', 'posts_per_page' => 1);
		$the_query = new WP_Query( $args );
		
		if($the_query->have_posts()){
		  
		    while ( $the_query->have_posts() ) : $the_query->the_post();
		        $return_post = get_the_id(); 
		    endwhile; 
				
				$return_post = get_post($return_post);

			return $return_post;

			wp_reset_postdata();
		}
	}

/**
	* Method to return a string hyphenated
	* @param string $post_type The post type you wish to return, default is post.
*/
	public static function Spaces2Hyphens($string = "")
	{
		//clean all special characters
		$string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
		return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
	}	

}