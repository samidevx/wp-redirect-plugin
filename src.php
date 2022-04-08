/*
Plugin Name: WP-redirect-timer
Plugin URI: https://github.com/samidevx/wp-redirect-plugin
Description: This plugin allows you to add a shortcode to a page or post. 
Author: Islam samidevx
Version: 1.0.02
Author URI: 

GNU General Public License, Free Software Foundation <http://creativecommons.org/licenses/GPL/2.0/>
This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

add_shortcode('redirect', 'scr_do_redirect');
function scr_do_redirect($atts)
{
	ob_start();
	$myURL = (isset($atts['url']) && !empty($atts['url']))?esc_url($atts['url']):"";
	$mySEC = (isset($atts['sec']) && !empty($atts['sec']))?esc_attr($atts['sec']):"0";
	if(!empty($myURL))
  {
?>
		<meta http-equiv="refresh" content="<?php echo $mySEC; ?>; url=<?php echo $myURL; ?>">
		<h2>Please wait for <b> <?php echo $mySEC; ?> <b> while you are redirected to next post  </h2>
<?php
	}
	return ob_get_clean();
}
?>