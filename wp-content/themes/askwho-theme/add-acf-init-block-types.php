<?php
function ff_block_category($categories, $post)
{
    if (get_post_type($post) == 'page') {
        $welcoop_blocks = array(
            array(
                'slug' => 'template-part-block-page',
                'title' => __('WELCOOP Headers', 'mlp-admin'),
            ),
        );
        return $welcoop_blocks;
    }
    return $categories;
}
add_filter('block_categories', 'ff_block_category', 10, 2);
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
    if (function_exists('acf_register_block_type')) {
        /* begin block homepage */
        acf_register_block_type(array(
            'name' => 'homepage-1-block',
            'title' => __('homepage-1-block'),
            'description' => __('homepage-1-block'),
            'render_template' => 'page-block/homepage/homepage-1-block.php',
            'category' => 'template-part-block-page',
            'icon' => 'book-alt',
        ));
        acf_register_block_type(array(
            'name' => 'homepage-2-block',
            'title' => __('homepage-2-block'),
            'description' => __('homepage-2-block'),
            'render_template' => 'page-block/homepage/homepage-2-block.php',
            'category' => 'template-part-block-page',
            'icon' => 'book-alt',
        ));
        acf_register_block_type(array(
            'name' => 'homepage-3-block',
            'title' => __('homepage-3-block'),
            'description' => __('homepage-3-block'),
            'render_template' => 'page-block/homepage/homepage-3-block.php',
            'category' => 'template-part-block-page',
            'icon' => 'book-alt',
        ));
        acf_register_block_type(array(
            'name' => 'homepage-4-block',
            'title' => __('homepage-4-block'),
            'description' => __('homepage-4-block'),
            'render_template' => 'page-block/homepage/homepage-4-block.php',
            'category' => 'template-part-block-page',
            'icon' => 'book-alt',
        ));
        acf_register_block_type(array(
            'name' => 'homepage-5-block',
            'title' => __('homepage-5-block'),
            'description' => __('homepage-5-block'),
            'render_template' => 'page-block/homepage/homepage-5-block.php',
            'category' => 'template-part-block-page',
            'icon' => 'book-alt',
        ));
        /* begin block homepage */
    }
}