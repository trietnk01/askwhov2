<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => 'et-bien-plus-encore',
        ),
    ),
);
$the_query = new WP_Query($args);
if ($the_query->have_posts()) {
    ?>
<div class="grid">
    <?php
while ($the_query->have_posts()) {
        $the_query->the_post();
        ?>
    <div class="grid-item">
        <h3 class="title"><?php echo get_the_title(); ?></h3>
        <div class="list">
            <?php the_content();?>
        </div>
    </div>
    <?php
}
    ?>
</div>
<?php
}
wp_reset_postdata();