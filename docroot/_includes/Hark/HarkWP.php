<?php
/**
 * Provides functionality to enable the use of Hark in tandem with WordPress.
 *
 * @author Nathan J. Brauer
 * @web http://NathanBrauer.com
 * @project Hark Framework
 */

class HarkWP {

	/**
	 * @return null|string
	 */
	static public function wp_head() {
		if (!function_exists('wp_head')) return null;
		ob_start();
		wp_head();
		$wp_head = ob_get_contents();
		ob_end_clean();
		return $wp_head;
	}

	/**
	 * @return null|string
	 */
	static public function wp_footer() {
		if (!function_exists('wp_footer')) return null;
		ob_start();
		wp_footer();
		$wp_head = ob_get_contents();
		ob_end_clean();
		return $wp_head;
	}

} 