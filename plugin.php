<?php 
/*
Plugin Name: Redirect Homepage After Logout
Plugin URI: http://tcoderbd.com
Description: This plugin will enable to redirect user homepage after logout.
Author: Md Touhidul Sadeek
Author URI: http://tcoderbd.com
Version: 1.0
*/


/*  Copyright 2016 tCoderBD (email: info@tcoderbd.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

add_action('wp_logout','auto_redirect_after_logout');
function auto_redirect_after_logout(){
	wp_redirect( home_url() );
	exit();
}