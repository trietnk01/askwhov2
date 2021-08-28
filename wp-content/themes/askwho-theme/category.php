<?php
get_header();
$posts_per_page = intval(get_option('posts_per_page'));
$offset = $posts_per_page;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_per_page,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'blog',
        ),
    ),
);
$the_query = new WP_Query($args);
?>
<div class="box_section blog_post">
    <form class="askwho_container" name="frm_category" method="POST" action="">
        <input type="hidden" name="offset" value="<?php echo $offset; ?>">
        <h1 class="category_name">Blog</h1>
        <div class="lactualite">
            <h2 class="name">L’actualité Ask Who</h2>
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowDown.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>" />
        </div>
        <?php
if ($the_query->have_posts()) {
    ?>
        <div class="blog_wrapper">
            <?php
while ($the_query->have_posts()) {
        $the_query->the_post();
        $featured_image = '';
        if (!empty(get_the_post_thumbnail_url(get_the_ID(), 'full'))) {
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
        }
        $date = get_the_date('Y-m-d');
        $date_vn = datetimeConverterByFormat($date, "d.m.Y");
        ?>
            <div class="item">
                <a href="<?php echo get_the_permalink(); ?>" class="author_image">
                    <div style="background-image:url('<?php echo $featured_image; ?>')"></div>
                </a>
                <div class="post_date"><?php echo $date_vn; ?></div>
                <div class="post_title">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <?php echo wp_trim_words(get_the_title(), '12', '(...)'); ?>
                    </a>
                </div>
            </div>
            <?php
}
    ?>
        </div>
        <?php
if (intval($posts_per_page) < intval($the_query->found_posts)) {
        ?>
        <div class="box_readmore">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowRight.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>">
            <button type="button" name="btn_plus_articles">Voir plus d'articles</button>
        </div>
        <?php
}
}
wp_reset_postdata();
?>
    </form>
</div>
<?php
get_footer();