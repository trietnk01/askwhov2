<?php
$term = get_term_by('slug', 'personne', 'category', object, '');
$terms = get_terms(
    array(
        'taxonomy' => 'category',
        'parent' => $term->term_id,
    )
);
if (is_array($terms)) {
    if (count($terms) > 0) {
        ?>
<div class="grid">
    <?php
foreach ($terms as $key => $val) {
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'category',
                        'field' => 'slug',
                        'terms' => $val->slug,
                    ),
                ),
            );
            ?>
    <div class="grid-item">
        <h3 class="title"><?php echo $val->name; ?></h3>
        <div class="list">
            <?php
$the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    ?>
            <div class="item">
                <div class="author_name"><?php echo get_the_title(); ?></div>
                <div class="author_function"><?php echo get_field('post_personne_fonction', get_the_ID()); ?></div>
            </div>
            <?php
}
                wp_reset_postdata();
            }
            ?>
        </div>
    </div>
    <?php
}
        ?>
</div>
<?php

    }
}