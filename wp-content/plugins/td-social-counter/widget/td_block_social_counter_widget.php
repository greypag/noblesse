<?php

/**
 * check if the class exists, to prevent errors, better decoupling - it allows us to remove the td_block_widget class if needed
 */
if (class_exists('td_block_widget')) {
    //register our widget
    class td_block_social_counter_widget extends td_block_widget {
        var $td_block_id = 'td_block_social_counter'; // change only the block id, the rest is autogenerated
    }
    add_action('widgets_init', create_function('', 'return register_widget("td_block_social_counter_widget");'));

	add_action('admin_enqueue_scripts', 'td_widget_admin_enqueue_scripts');
	function td_widget_admin_enqueue_scripts($admin_page) {
		if ('widgets.php' !== $admin_page) {
			return;
		}
		wp_enqueue_script('td_social_counter', plugin_dir_url( __FILE__ ) . '../js/td_social_counter.js', array('jquery'), false, true);
	}
}