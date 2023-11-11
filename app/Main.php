<?php

namespace HiisunApp;

use WPMVC\Bridge;

/**
 * Main class.
 * Bridge between WordPress and App.
 * Class contains declaration of hooks and filters.
 *
 * @author Parsa Mirzaie <https://github.com/Parsa-mrz>
 * @package my-app
 * @version 1.0.0
 */
class Main extends Bridge
{
    /**
     * Declaration of public WordPress hooks.
     */
    public function init()
    {
        $this->add_action('wp_enqueue_scripts', 'LayoutController@add_style');
        $this->add_action('after_setup_theme', 'OptionController@theme_setup');
        $this->add_action('widgets_init', 'OptionController@hiisun_widgets');
    }
    /**
     * Declaration of admin only WordPress hooks.
     * For WordPress admin dashboard.
     */
    public function on_admin()
    {
    }
}
