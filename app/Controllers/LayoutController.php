<?php

class Layout
{
    public function __construct()
    {
        add_action('wp_enqueue_scripts', [$this, 'add_styles']);
        add_action('wp_enqueue_scripts', [$this, 'add_scripts']);
    }
    public function add_styles()
    {
        // !require css files 
        wp_enqueue_style('CMS-bootstrap.min', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
        wp_enqueue_style('CMS-bootstrap4-rtl.min', get_template_directory_uri() . '/assets/css/bootstrap4-rtl.min.css');
        wp_enqueue_style('CMS-font-awesome.min', get_template_directory_uri() . '/assets/css/font-awesome.min.css');

        // !theme css files 
        wp_enqueue_style('CMS-style', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('CMS-main', get_template_directory_uri() . '/assets/css/all.css');
        wp_enqueue_style('CMS-animate', get_template_directory_uri() . '/assets/css/animate.css');
        wp_enqueue_style('CMS-aos', get_template_directory_uri() . '/assets/css/aos.css');
        wp_enqueue_style('CMS-lightslider.min', get_template_directory_uri() . '/assets/css/lightslider.min.css');
        wp_enqueue_style('CMS-magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css');
        wp_enqueue_style('CMS-nice-select', get_template_directory_uri() . '/assets/css/nice-select.css');
        wp_enqueue_style('CMS-owl.carousel.min', get_template_directory_uri() . '/assets/css/owl.carousel.min.css');
        wp_enqueue_style('CMS-price_rangs', get_template_directory_uri() . '/assets/css/price_rangs.css');
        wp_enqueue_style('CMS-slick-theme.min', get_template_directory_uri() . '/assets/css/slick-theme.min.css');
        wp_enqueue_style('CMS-owl.slick', get_template_directory_uri() . '/assets/css/slick.css');
        wp_enqueue_style('CMS-swiper.min', get_template_directory_uri() . '/assets/css/swiper.min.css');
        wp_enqueue_style('CMS-themify-icons', get_template_directory_uri() . '/assets/css/themify-icons.css');
    }
    public function add_scripts()
    {
        // !require JS files 
        wp_enqueue_script('CMS-popper.min', get_template_directory_uri() . '/assets/js/popper.min.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquey'), '', true);

        // !theme JS files 
        wp_enqueue_script('CMS-jquery.magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-owl.carousel.min', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-jquery.nice-select.min', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-slick.min', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-jquery.counterup.min', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-waypoints.min', get_template_directory_uri() . '/assets/js/waypoints.min.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-contact', get_template_directory_uri() . '/assets/js/contact.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-jquery.ajaxchimp.min', get_template_directory_uri() . '/assets/js/jquery.ajaxchimp.min.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-jquery.form', get_template_directory_uri() . '/assets/js/jquery.form.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-jquery.validate.min', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-mail-script', get_template_directory_uri() . '/assets/js/mail-script.js', array('jquey'), '', true);
        wp_enqueue_script('CMS-custom.min', get_template_directory_uri() . '/assets/js/custom.js', array('jquey'), '', true);
    }
}
new Layout();
