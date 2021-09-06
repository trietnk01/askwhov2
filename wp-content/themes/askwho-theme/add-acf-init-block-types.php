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
        acf_register_block_type(array(
            'name' => 'author-personnalites-part',
            'title' => __('author-personnalites-part'),
            'description' => __('author-personnalites-part'),
            'render_template' => 'template-parts/homepage/author-personnalites-part.php',
            'icon' => 'editor-paste-text',
            'keyword' => array('PersonnalitesAuthorPart'),
        ));
        acf_register_block_type(array(
            'name' => 'et-bien-plus-encore-part',
            'title' => __('et-bien-plus-encore-part'),
            'description' => __('et-bien-plus-encore-part'),
            'render_template' => 'template-parts/personnalites/et-bien-plus-encore-block.php',
            'icon' => 'editor-paste-text',
            'keyword' => array('Et bien plus encore'),
        ));
    }
}