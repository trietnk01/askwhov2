<?php
get_header();

if (have_posts()) {
    while (have_posts()) {
        the_post();
        $page_color = get_field('p_df_couleur_de_larriere_plan', get_the_ID());
        ?>
<section class="child_page" style="background:<?php echo $page_color; ?>" id="section_1"
    attr_bg="<?php echo $page_color; ?>">
    <div class="container_ask_who">
        <div class="box_single">
            <div class="box_col">
                <h1 class="single_title"><?php echo get_the_title(); ?></h1>
                <div class="single_description">
                    <?php the_content();?>
                </div>
            </div>
            <div class="box_col">

            </div>
        </div>
    </div>
</section>
<?php
}
    ?>
<?php
wp_reset_postdata();
}
get_footer();