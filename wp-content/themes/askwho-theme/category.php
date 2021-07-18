<?php
get_header();
?>
<div class="box_section child_page" style="background:#a6e0d4" id="section_1" attr_bg="#a6e0d4">
    <form class="container_ask_who" name="frm_category" method="POST" action="">
        <h1 class="category_name">Blog</h1>
        <div class="lactualite">
            <h2 class="name">L’actualité AskWho</h2>
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowDown.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>" />
        </div>
        <?php
if (have_posts()) {
    ?>
        <div class="blog_wrapper">
            <?php
while (have_posts()) {
        the_post();
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
                    <img src="<?php echo $featured_image; ?>" alt="<?php echo get_the_title(); ?>" />
                </a>
                <div class="post_date"><?php echo $date_vn; ?></div>
                <div class="post_title">
                    <a href="<?php echo get_the_permalink(); ?>">
                        <?php echo wp_trim_words(get_the_title(), '14', '(...)'); ?>
                    </a>
                </div>
            </div>
            <?php
}
    ?>
        </div>
        <div class="box_readmore">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowRight.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>">
            <button type="button" name="btn_plus_articles">Voir plus d'articles</button>
        </div>
        <?php
}
wp_reset_postdata();
?>
    </form>
</div>
<?php
get_footer();