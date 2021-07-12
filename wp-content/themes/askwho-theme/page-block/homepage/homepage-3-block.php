<div class="askwho_block">
    <div class="banner_parat">
        <img src="<?php echo get_template_directory_uri() . "/assets/images/banner.jpg"; ?>"
            alt="<?php echo get_bloginfo("name") ?>">
    </div>
    <div class="actulites">
        <div class="ask_who_label">L'actualité</div>
        <div class="ask_who_label">AskWho.</div>
        <div class="rubat"></div>
    </div>
    <div class="featured_post_ask_who">
        <div class="owl_carousel_featured_post owl-carousel owl-theme owl-loaded">
            <?php
for ($i = 1; $i <= 8; $i++) {
    ?>
            <div class="item">
                <a href="javascript:void(0);" class="author_image">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/post.png"; ?>"
                        alt="<?php echo get_bloginfo("name"); ?>" />
                </a>
                <h4 class="post_date">12.05.2021</h4>
                <h3 class="post_title">
                    <a href="javascript:void(0);">Donec euismod massa porta interdum purus in ullamcorper quam</a>
                </h3>
            </div>
            <?php
}
?>
        </div>
        <a class="readmore" href="javascript:void(0);">
            <span class="child_label">En voir plus</span>
        </a>
    </div>
</div>