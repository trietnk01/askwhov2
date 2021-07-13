<section class="boss_box" id="section_4" attr_bg="#ecc3b3" style="background-color:#ecc3b3">
    <div class="container_ask_who">
        <div class="ask_who_col_left">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Logo_AskWho.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>" class="logo">
            <h2 class="ask_who_title"><?php echo get_field('hp_4_titre'); ?></h2>
            <p class="ask_who_description">
                <?php echo get_field('hp_4_extrait'); ?>
            </p>
            <a class="readmore" href="<?php echo get_field('hp_4_lire_la_suite'); ?>">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowRight.svg'; ?>"
                    alt="<?php echo get_bloginfo('name'); ?>">
                <span>
                    En voir plus
                </span>
            </a>
        </div>
        <div class="ask_who_col_right">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Logo_AskWho.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>" class="logo">
            <img class="ask_who_avatar" src="<?php echo get_field('hp_4_banniere'); ?>"
                alt="<?php echo get_bloginfo('name'); ?>">
        </div>
    </div>
</section>