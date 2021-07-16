<div class="owl_carousel_author owl-carousel owl-theme owl-loaded">
    <?php
for ($i = 1; $i <= 16; $i++) {
    ?>
    <div class="item">
        <img class="author_image" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/author.jpg'; ?>"
            alt="author" />
        <div class="author_name">Prénom NOM</div>
        <div class="author_function">Fonction</div>
    </div>
    <?php
}
?>
</div>