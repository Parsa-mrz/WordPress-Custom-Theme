<?php
if(is_shop()){
    require_once(__DIR__ . '/templates/shop/sidebar.php');
}elseif(is_archive() && get_post_type() === 'post'){
    require_once(__DIR__ . '/templates/blog/sidebar-archive.php');
}