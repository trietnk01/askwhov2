<?php
global $zController;
$hp_article_liste = get_field('hp_article_liste');
if (is_array($hp_article_liste)) {
    if (count($hp_article_liste) > 0) {
        ?>
<div class="featured_post">
    <?php
foreach ($hp_article_liste as $key => $val) {
            $hp_article_objet = $val["hp_article_objet"];
            $featured_image = '';
            if (!empty(get_the_post_thumbnail_url($hp_article_objet->ID, 'full'))) {
                $featured_image = get_the_post_thumbnail_url($hp_article_objet->ID, 'full');
            } else {
                $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
            }
            $date = get_the_date('Y-m-d', $hp_article_objet->ID);
            $date_vn = $zController->getHelper("CommonHelper")->datetimeConverterByFormat($date, "d.m.Y");
            ?>
    <div class="item">
        <a href="<?php echo get_the_permalink($hp_article_objet->ID); ?>" class="author_image">
            <img src="<?php echo $featured_image; ?>" alt="<?php echo get_bloginfo("name"); ?>" />
        </a>
        <div class="post_date"><?php echo $date_vn; ?></div>
        <div class="post_title">
            <a href="<?php echo get_the_permalink($hp_article_objet->ID); ?>">
                <?php echo wp_trim_words($hp_article_objet->post_title, '99', '...'); ?>
            </a>
        </div>
    </div>
    <?php
}
        ?>
</div>
<?php
}
}
?>