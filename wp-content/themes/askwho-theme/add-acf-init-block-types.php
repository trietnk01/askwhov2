<?php
add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{
    if (function_exists('acf_register_block_type')) {
        acf_register_block_type(array(
            'name' => 'author-block',
            'title' => __('author-block'),
            'description' => __('author-block'),
            'render_template' => 'template-parts/homepage/author-block.php',
            'icon' => 'editor-paste-text',
            'keyword' => array('AuthorBlock'),
        ));
        acf_register_block_type(array(
            'name' => 'featured-post-block',
            'title' => __('featured-post-block'),
            'description' => __('featured-post-block'),
            'render_template' => 'template-parts/homepage/featured-post-block.php',
            'icon' => 'editor-paste-text',
            'keyword' => array('FeaturedBlock'),
        ));
    }
}