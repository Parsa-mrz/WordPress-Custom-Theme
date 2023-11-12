<?php

class WoocommerceController
{
    public function __construct()
    {
        // shop breadcrumb 
        remove_action("woocommerce_before_main_content", "woocommerce_breadcrumb", 20);

        // shop result 
        remove_action("woocommerce_before_shop_loop", "woocommerce_result_count", 20);

        // shop ordering 
        remove_action("woocommerce_before_shop_loop", "woocommerce_catalog_ordering", 30);

        // shop notice 
        remove_action("woocommerce_before_shop_loop", "woocommerce_output_all_notices", 10);

        // shop product title 
        remove_action("woocommerce_shop_loop_item_title", "woocommerce_template_loop_product_title", 10);
        add_action("woocommerce_shop_loop_item_title", [$this, "template_loop_product_title"], 10);

        // shop product rating
        remove_action("woocommerce_after_shop_loop_item_title", "woocommerce_template_loop_rating", 10);

        // shop product price 
        remove_action("woocommerce_after_shop_loop_item_title", "woocommerce_template_loop_price", 10);
        add_action("woocommerce_after_shop_loop_item_title", [$this, "template_loop_price"], 10);

        // shop add to cart button 
        remove_action("woocommerce_after_shop_loop_item", "woocommerce_template_loop_add_to_cart", 10);

        // single product image 
        remove_action("woocommerce_before_single_product_summary", "woocommerce_show_product_images", 20);
        add_action("woocommerce_before_single_product_summary", [$this, "show_product_images"], 20);

        // single product except 
        remove_action("woocommerce_single_product_summary", "woocommerce_template_single_price", 10);
        remove_action("woocommerce_single_product_summary", "woocommerce_template_single_excerpt", 10);
        remove_action("woocommerce_single_product_summary", "template_single_excerpt", 10);

        // single product meta 
        remove_action("woocommerce_single_product_summary", "woocommerce_template_single_meta", 40);

        // single product add to cart 
        remove_action("woocommerce_single_product_summary", "woocommerce_template_single_add_to_cart", 30);
        add_action("woocommerce_single_product_summary", [$this, "template_single_add_to_cart"], 30);

        // single product related
        remove_action("woocommerce_after_single_product_summary", "woocommerce_output_related_products", 20);

        // single product quantity 
    }
    public function template_loop_product_title()
    {
        global $product;

        $link = apply_filters('woocommerce_loop_product_link', get_the_permalink(), $product);
        echo ('<h3 class=' . esc_attr(apply_filters('woocommerce_product_loop_title_classes', 'woocommerce-loop-product__title')) . '> <a href=' . esc_url($link) . '>' . get_the_title() . '</a> </h3>');
    }

    public function template_loop_price()
    {
        global $product;
        if ($price_html = $product->get_price_html()) :
            echo ('<p class="price">' . $price_html . '</p>');
        endif;
    }

    public function show_product_images()
    {
        global $product;
        $gallery_ids = $product->get_gallery_image_ids(); ?>
        <div class="product_img_slide owl-carousel" dir="ltr">
            <?php foreach ($gallery_ids as $gallery_id) :
                $image = wp_get_attachment_url($gallery_id);
            ?>
                <div class="single_product_img">
                    <img src="<?= $image ?>" alt="#" class="img-fluid">
                </div>
            <?php endforeach; ?>
        </div>

    <?php

    }
    public function template_single_excerpt()
    {
        global $post;

        $short_description = apply_filters('woocommerce_short_description', $post->post_excerpt);

        if (!$short_description) {
            return;
        }
    ?>
        <p class="woocommerce-product-details__short-description">
            <?php echo $short_description; // WPCS: XSS ok. 
            ?>
        </p><?php
        }
        public function template_single_add_to_cart()
        {
            global $product;
            ?>
        <div class="card_area">
            <div class="product_count_area">
                <?php if ($product->is_in_stock()) : ?>

                    <?php do_action('woocommerce_before_add_to_cart_form'); ?>

                    <form class="cart" action="<?php echo esc_url(apply_filters('woocommerce_add_to_cart_form_action', $product->get_permalink())); ?>" method="post" enctype='multipart/form-data'>
                        <?php do_action('woocommerce_before_add_to_cart_button'); ?>

                        <?php
                        do_action('woocommerce_before_add_to_cart_quantity');

                        woocommerce_quantity_input(
                            array(
                                'classes'     => apply_filters('woocommerce_quantity_input_classes', array('product_count_item', 'input-number'), $product),
                                'min_value'   => apply_filters('woocommerce_quantity_input_min', $product->get_min_purchase_quantity(), $product),
                                'max_value'   => apply_filters('woocommerce_quantity_input_max', $product->get_max_purchase_quantity(), $product),
                                'input_value' => isset($_POST['quantity']) ? wc_stock_amount(wp_unslash($_POST['quantity'])) : $product->get_min_purchase_quantity(), // WPCS: CSRF ok, input var ok.
                            )
                        );

                        do_action('woocommerce_after_add_to_cart_quantity');
                        ?>
                        <p class="<?= esc_attr(apply_filters('woocommerce_product_price_class', 'price')); ?>"><?= $product->get_price_html(); ?></p>
                        <div class="add_to_cart">
                            <button type="submit" name="add-to-cart" value="<?php echo esc_attr($product->get_id()); ?>" class=" btn_3  ">اضافه کردن به سبد خرید</button>
                        </div>
                        <?php do_action('woocommerce_after_add_to_cart_button'); ?>
                    </form>

                    <?php do_action('woocommerce_after_add_to_cart_form'); ?>

                <?php endif; ?>
            </div>

        </div>
<?php
        }
    }
    new WoocommerceController();
