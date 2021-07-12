<?php
get_header();
?>
<section class="child_page" style="background:#a6e0d4" id="section_1" attr_bg="#a6e0d4">
    <form class="container_ask_who" name="frm_category" method="POST" action="">
        <h1 class="ask_who_title">Blog</h1>
        <div class="actulites">
            <div class="ask_who_label">L'actualité</div>
            <div class="ask_who_label">AskWho.</div>
            <div class="rubat"></div>
        </div>
        <div class="author_list">
            <?php
for ($i = 1; $i <= 12; $i++) {
    ?>
            <div class="author_item">
                <a href="javascript:void(0);">
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
        <div class="box_readmore">
            <button class="readmore" name="btn_readmore" type="button">
                <span class="child_label">Plus d'articles</span>
            </button>
        </div>
    </form>
</section>
<?php
get_footer();