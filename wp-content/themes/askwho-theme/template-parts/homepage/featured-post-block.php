<div class="featured_post">
    <?php
for ($i = 1; $i <= 4; $i++) {
    ?>
    <div class="item">
        <a href="javascript:void(0);" class="author_image">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/post.jpg'; ?>"
                alt="<?php echo get_bloginfo("name"); ?>" />
        </a>
        <div class="post_date">26.04.2021</div>
        <div class="post_title">
            <a href="javascript:void(0);">
                Ut lacinia nisl dolor interdum et malesuada
            </a>
        </div>
    </div>
    <?php
}
?>
</div>