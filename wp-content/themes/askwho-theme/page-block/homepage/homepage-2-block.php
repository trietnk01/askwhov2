<section class="uncarnet" id="section_2" attr_bg="#8ec9e9" style="background-color:#8ec9e9">
    <div class="dutex">
        <h2 class="uncarnet_addresses">
            <?php echo get_field('hp_2_extrait'); ?>
        </h2>
        <div class="humaine">
            <div class="box_content">
                <?php echo get_field('hp_2_contenu'); ?>
            </div>
        </div>
        <?php
$hp_2_auteur_liste = get_field('hp_2_auteur_liste');
if (is_array($hp_2_auteur_liste)) {
    if (count($hp_2_auteur_liste) > 0) {
        ?>
        <div class="owl_carousel_author owl-carousel owl-theme owl-loaded">
            <?php
foreach ($hp_2_auteur_liste as $key => $val) {
            ?>
            <div class="item">
                <a href="javascript:void(0);" class="author_image">
                    <img src="<?php echo $val['hp_2_auteur_avatar']; ?>" alt="<?php echo $val['hp_2_auteur_nom']; ?>" />
                </a>
                <h3 class="author_name"><?php echo $val['hp_2_auteur_nom']; ?></h3>
                <h4 class="author_function"><?php echo $val['hp_2_auteur_titre']; ?></h4>
            </div>
            <?php
}
        ?>
        </div>
        <?php
}
}
?>
        <a class="readmore" href="<?php echo get_field('hp_2_lire_la_suite'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowRight.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>">
            <span>
                En voir plus
            </span>
        </a>
    </div>
</section>