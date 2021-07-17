<?php
$hp_auteur_liste = get_field('hp_auteur_liste');
if (is_array($hp_auteur_liste)) {
    if (count($hp_auteur_liste) > 0) {
        ?>
<div class="owl_carousel_author owl-carousel owl-theme owl-loaded">
    <?php
foreach ($hp_auteur_liste as $key => $val) {
            ?>
    <div class="item">
        <img class="author_image" src="<?php echo $val['hp_auteur_avatar']; ?>" alt="author" />
        <div class="author_name"><?php echo $val['hp_auteur_nom']; ?></div>
        <div class="author_function"><?php echo $val['hp_auteur_titre']; ?></div>
    </div>
    <?php
}
        ?>
</div>
<?php
}
}
?>