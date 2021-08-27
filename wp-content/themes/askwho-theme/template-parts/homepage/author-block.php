<?php
$hp_personne_liste = get_field('hp_personne_liste');
if (is_array($hp_personne_liste)) {
    if (count($hp_personne_liste) > 0) {
        ?>
<div class="owl_carousel_author owl-carousel owl-theme owl-loaded">
    <?php
foreach ($hp_personne_liste as $key => $val) {
            $hp_personne_objet = $val['hp_personne_objet'];
            $featured_image = '';
            if (!empty(get_the_post_thumbnail_url($hp_personne_objet->ID, 'full'))) {
                $featured_image = get_the_post_thumbnail_url($hp_personne_objet->ID, 'full');
            } else {
                $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
            }
            $post_personne_url = get_field('post_personne_url', $hp_personne_objet->ID);
            if (!empty($post_personne_url)) {
                ?>
    <div class="item">
        <a href="<?php echo $post_personne_url; ?>" target="_blank">
            <img class="author_image" src="<?php echo $featured_image; ?>"
                alt="<?php echo $hp_personne_objet->post_title; ?>" />
            <div class="author_name"><?php echo $hp_personne_objet->post_title; ?></div>
            <div class="author_function"><?php echo get_field('post_personne_fonction', $hp_personne_objet->ID); ?>
            </div>
        </a>
    </div>
    <?php
} else {
                ?>
    <div class="item">
        <img class="author_image" src="<?php echo $featured_image; ?>"
            alt="<?php echo $hp_personne_objet->post_title; ?>" />
        <div class="author_name"><?php echo $hp_personne_objet->post_title; ?></div>
        <div class="author_function"><?php echo get_field('post_personne_fonction', $hp_personne_objet->ID); ?>
        </div>
    </div>
    <?php
}
        }
        ?>
</div>
<?php
}
}
?>