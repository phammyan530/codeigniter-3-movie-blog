<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  CI - Blog
*
* Version: 0.1
*
* Author: Sugiarto
*		  sugiarto@gie-art.com
*         @gieart_dotcom
*
*/

$config['ci_blog_theme'] = 'default';
$config['ci_blog_sitename'] = 'CI Blog';
$config['ci_blog_tagline'] = 'Simple CMS based on CodeIgniter 3.x';

$config['ci_blog_admin_theme'] = 'default';
$config['api_get_all_movies'] = "http://127.0.0.1:8888/api/movie/get_all";
$config['api_get_random_movies'] = "http://127.0.0.1:8888/api/movie/get_random";
$config['api_get_movie_by_id'] = "http://127.0.0.1:8888/api/movie/get";

$config['active_menu'] = array(
	array('id' => 1, 'parent_id' => 0, 'name' => 'Home', 'url' => 'home'),
	array('id' => 2, 'parent_id' => 0, 'name' => 'About', 'url' => 'about-us'),
	array('id' => 3, 'parent_id' => 0, 'name' => 'Blog', 'url' => 'posts'),
	array('id' => 4, 'parent_id' => 0, 'name' => 'Sign In', 'url' => 'signin')
);
