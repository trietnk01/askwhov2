<?php
get_header();
$post_id = 0;
$title = '';
$featured_image = '';
$date_vn = '';
$content = '';
if (have_posts()) {
    while (have_posts()) {
        the_post();
        $post_id = get_the_ID();
        $title = get_the_title();
        $featured_image = '';
        if (!empty(get_the_post_thumbnail_url(get_the_ID(), 'full'))) {
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
        }
        $date_en = get_the_date('Y-m-d');
        $date_vn = datetimeConverterByFormat($date_en, "d.m.Y");
        $content = wpautop(get_the_content());
    }
}
wp_reset_postdata();
?>
<div class="box_section single_post">
    <div class="single_col">
        <h1 class="single_title"><?php echo $title; ?></h1>
        <div class="single_date"><?php echo $date_vn; ?></div>
        <div class="single_content">
            <?php echo $content; ?>
        </div>
    </div>
    <div class="single_col">
        <img src="<?php echo $featured_image; ?>" alt="<?php echo $title; ?>">
    </div>
</div>
<?php
get_footer();