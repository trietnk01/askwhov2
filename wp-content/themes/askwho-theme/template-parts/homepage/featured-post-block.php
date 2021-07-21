<?php
global $zController;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 4,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'blog',
        ),
    ),
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    ?>
<div class="featured_post">
    <?php
while ($the_query->have_posts()) {
        $the_query->the_post();
        $featured_image = '';
        if (!empty(get_the_post_thumbnail_url(get_the_ID(), 'full'))) {
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
        }
        $date_en = get_the_date('Y-m-d');
        $date_vn = datetimeConverterByFormat($date_en, "d.m.Y");
        ?>
    <div class="item">
        <a href="<?php echo get_the_permalink(); ?>" class="author_image">
            <img src="<?php echo $featured_image; ?>" alt="<?php echo get_the_title(); ?>" />
        </a>
        <div class="post_date"><?php echo $date_vn; ?></div>
        <div class="post_title">
            <a href="<?php echo get_the_permalink(); ?>">
                <?php echo wp_trim_words(get_the_title(), '10', '(...)'); ?>
            </a>
        </div>
    </div>
    <?php
}
    ?>
</div>
<?php
}
wp_reset_postdata();
?>