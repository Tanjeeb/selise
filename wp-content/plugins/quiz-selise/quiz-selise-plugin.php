<?php
/**
 * @package SeliseQuizPlugin
 * plugin Name: Selise quiz plugin
 * Description: Just a Quiz
 * Version: 1.0.0
 * Author: Tanjeeb Ahsan
 */
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

use Admin\Activate;
use Admin\Deactivate;
use Admin\Uninstall;


$activate = Activate::class;
$deactivate = Deactivate::class;
$uninstall = Uninstall::class;

//var_dump($quiz_plugin);

//activation
register_activation_hook(__FILE__, array($activate, 'Activate'));

//deactivation
register_activation_hook(__FILE__, array($deactivate, 'Deactivate'));
//uninstall
register_activation_hook(__FILE__, array($uninstall, 'uninstall'));
class SeliseQuizPlugin
{
    function __construct()
    {
        add_action('init', array($this, 'custom_post_type'));
    }

    public static function custom_post_type()
    {
        register_post_type('quiz', ['public' => true, 'label' => 'Quiz']);
    }
}

$test= new SeliseQuizPlugin();
