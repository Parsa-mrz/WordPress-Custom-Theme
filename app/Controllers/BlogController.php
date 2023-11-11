<?php

class BlogController
{
    public function __construct()
    {
        $this->add_image_size();
    }
    public function add_image_size()
    {
        add_image_size('single-post', 900, 700, true);
        add_image_size('archive-post', 400, 150, true);
    }
}
new BlogController();
