<?php
$posts_per_page = 9999;
$offset = $posts_per_page;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_per_page,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'personne',
        ),
    ),
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    ?>
<form action="" method="POST" name="personnalites_frm" class="personnalites_frm">
    <input type="hidden" name="offset" value="<?php echo $offset; ?>">
    <div class="personnalites_author_part">
        <?php
while ($the_query->have_posts()) {
        $the_query->the_post();
        $featured_image = '';
        if (!empty(get_the_post_thumbnail_url(get_the_ID(), 'full'))) {
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
        }
        $post_personne_url = get_field('post_personne_url', $hp_personne_objet->ID);
        if (!empty($post_personne_url)) {
            ?>
        <div class="item">
            <a href="<?php echo $post_personne_url; ?>" target="_blank">
                <img class="author_image" src="<?php echo $featured_image; ?>" alt="<?php echo get_the_title(); ?>" />
                <div class="author_name"><?php echo get_the_title(); ?></div>
                <div class="author_function"><?php echo get_field('post_personne_fonction', get_the_ID()); ?></div>
            </a>
        </div>
        <?php
} else {
            ?>
        <div class="item">
            <img class="author_image" src="<?php echo $featured_image; ?>" alt="<?php echo get_the_title(); ?>" />
            <div class="author_name"><?php echo get_the_title(); ?></div>
            <div class="author_function"><?php echo get_field('post_personne_fonction', get_the_ID()); ?></div>
        </div>
        <?php
}

    }
    ?>
    </div>
    <?php
if (intval($posts_per_page) < intval($the_query->found_posts)) {
        ?>
    <div class="box_readmore">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowRight.svg'; ?>"
            alt="<?php echo get_bloginfo('name'); ?>">
        <button type="button" name="btn_plus_de_personnalites">Plus de personnalités</button>
    </div>
    <?php
}
    ?>
</form>
<?php
}
wp_reset_postdata();
$posts_per_page = 4;
$offset = $posts_per_page;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => $posts_per_page,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'personne',
        ),
    ),
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    ?>
<form action="" method="POST" name="personnalites_frm_vmobile" class="personnalites_frm_vmobile">
    <input type="hidden" name="offset" value="<?php echo $offset; ?>">
    <div class="personnalites_author_part">
        <?php
while ($the_query->have_posts()) {
        $the_query->the_post();
        $featured_image = '';
        if (!empty(get_the_post_thumbnail_url(get_the_ID(), 'full'))) {
            $featured_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
        } else {
            $featured_image = get_stylesheet_directory_uri() . "/assets/images/no-image.png";
        }
        $post_personne_url = get_field('post_personne_url', $hp_personne_objet->ID);
        if (!empty($post_personne_url)) {
            ?>
        <div class="item">
            <a href="<?php echo $post_personne_url; ?>" target="_blank">
                <img class="author_image" src="<?php echo $featured_image; ?>" alt="<?php echo get_the_title(); ?>" />
                <div class="author_name"><?php echo get_the_title(); ?></div>
                <div class="author_function"><?php echo get_field('post_personne_fonction', get_the_ID()); ?></div>
            </a>
        </div>
        <?php
} else {
            ?>
        <div class="item">
            <img class="author_image" src="<?php echo $featured_image; ?>" alt="<?php echo get_the_title(); ?>" />
            <div class="author_name"><?php echo get_the_title(); ?></div>
            <div class="author_function"><?php echo get_field('post_personne_fonction', get_the_ID()); ?></div>
        </div>
        <?php
}
    }
    ?>
    </div>
    <?php
if (intval($posts_per_page) < intval($the_query->found_posts)) {
        ?>
    <div class="box_readmore">
        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowRight.svg'; ?>"
            alt="<?php echo get_bloginfo('name'); ?>">
        <button type="button" name="personnalites_author_part_vmobile">Plus de personnalités</button>
    </div>
    <?php
}
    ?>
</form>
<?php
}
wp_reset_postdata();
?>