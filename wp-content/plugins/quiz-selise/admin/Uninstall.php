<?php

namespace Admin;
/**
 * This file on Plugin uninstall
 * @package Quiz
 */
class Uninstall
{
    function uninstall()
    {
        if (!defined('WP_UNINSTALL_PLUGIN')) {
            die;
        }

        global $wpdb;
        $wpdb->query("delete from wp_posts where post_type='quiz'");
        $wpdb->query("delete from wp_postmata where post_id not in (select id from wp_posts)");
        $wpdb->query("delete from wp_relationships where object_id not in (select id from wp_posts)");
    }
}

