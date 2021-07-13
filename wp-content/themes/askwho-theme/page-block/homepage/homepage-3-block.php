<?php
global $zController;
?>
<section class="askwho_block" id="section_3" attr_bg="#a6e0d4" style="background-color:#a6e0d4">
    <div class="banner_parat">
        <div class="text-center">
            <img src="<?php echo get_field('hp_3_banniere'); ?>" alt="<?php echo get_bloginfo("name") ?>">
        </div>
        <div class="actulites">
            <h2 class="ask_who_label"><?php echo get_field('hp_3_titre'); ?></h2>
        </div>
        <?php
$hp_3_article_liste = get_field('hp_3_article_liste');
if (is_array($hp_3_article_liste)) {
    if (count($hp_3_article_liste) > 0) {
        ?>
        <div class="featured_post">
            <?php
foreach ($hp_3_article_liste as $key => $val) {
            $hp_3_article_objet = $val["hp_3_article_objet"];
            $featured_image = '';
            if (!empty(get_the_post_thumbnail_url($hp_3_article_objet->ID, 'full'))) {
                $featured_image = get_the_post_thumbnail_url($hp_3_article_objet->ID, 'full');
            } else {
                $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
            }
            $date = get_the_date('Y-m-d', $hp_3_article_objet->ID);
            $date_vn = $zController->getHelper("CommonHelper")->datetimeConverterByFormat($date, "d.m.Y");
            ?>
            <div class="item">
                <a href="<?php echo get_the_permalink($hp_3_article_objet->ID); ?>" class="author_image">
                    <img src="<?php echo $featured_image; ?>" alt="<?php echo get_bloginfo("name"); ?>" />
                </a>
                <h4 class="post_date"><?php echo $date_vn; ?></h4>
                <h3 class="post_title">
                    <a href="<?php echo get_the_permalink($hp_3_article_objet->ID); ?>">
                        <?php echo wp_trim_words($hp_3_article_objet->post_title, '99', '...'); ?>
                    </a>
                </h3>
            </div>
            <?php
}
        ?>
        </div>
        <?php
}
}
?>
        <a class="readmore" href="<?php echo get_field('hp_3_lire_la_suite'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowRight.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>">
            <span>
                En voir plus
            </span>
        </a>
    </div>
</section>