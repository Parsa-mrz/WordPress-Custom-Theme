<?php

class WoocommerceController
{
    public function __construct()
    {
        remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
        add_action('woocommerce_shop_loop_item_title', [$this, 'shop_loop_item_title'], 10);


        remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
        remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

        add_action('woocommerce_before_shop_loop_item_title', [$this, 'before_shop_loop_item_title'], 10);

        add_action('woocommerce_after_shop_loop_item_title', [$this, 'after_shop_loop_item_title'], 10);

        remove_action("woocommerce_after_shop_loop_item_title", 'woocommerce_template_loop_rating', 5);

        remove_action("woocommerce_after_shop_loop_item_title", 'woocommerce_template_loop_price', 10);

        remove_action("woocommerce_before_shop_loop", "woocommerce_result_count", 20);
        remove_action("woocommerce_before_shop_loop", "woocommerce_catalog_ordering", 30);
    }
    public function shop_loop_item_title()
    {
        echo ('<h2><a class="title" href="' . get_the_permalink() . '">' . get_the_title()  . '</a></h2>');
    }
    public function before_shop_loop_item_title()
    {
        echo woocommerce_get_product_thumbnail('img-fluid spilet-photo');
        echo ('<div class="d-flex flex-column justify-content-evenly">');
    }
    public function after_shop_loop_item_title()
    {
        global $product;
        echo ('<div class="text-start ms-3"><small>' . '2.2' . '</small></div>
        <div class="d-flex justify-content-between my-2 mx-2">
            <div class="background-color-main rounded p-1">2%</div>
            <div>' . $product->get_price_html() . '</div>
        </div>
    </div>');
    }
}
new WoocommerceController();
