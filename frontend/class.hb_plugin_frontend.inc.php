<?php

/*
 * Fails if this class wasn't loaded by the plugin boot script 
 */
if (!defined('HB_PLUGIN_VERSION')) {
    header( 'HTTP/1.0 403 Forbidden' );
    die;
}

/**
 * A sample plugin class for building Hoverboard things that happen on the 
 * front-end side of WordPress
 */
class HB_Plugin_Frontend
{
    /**
     * Constructor
     */
    public function __construct(  ) {
        add_action('after_setup_theme', array($this, 'init'), 20);
    }

    /**
     * Performs plugin setup tasks, such as registering shortcodes
     * @return void
     */
    public function init (  ) {
        $this->register_shortcodes();
    }

    /**
     * Registers a custom shortcode
     * @return void
     */
    protected function register_shortcodes(  ) {
        add_shortcode('hoverboard_plugin', array($this, 'custom_shortcode'));
    }

    /**
     * A custom shortcode to display a message
     * @return string The shortcode's markup
     */
    public function custom_shortcode(  ) {
        return '<p>I love Hoverboard!</p>';
    }
}
