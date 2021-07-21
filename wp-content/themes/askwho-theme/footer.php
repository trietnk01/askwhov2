<?php
$show_ic_scrollDown = true;
if (is_page('contact')) {
    $show_ic_scrollDown = false;
}
if (intval(get_queried_object_id()) === 0) {
    $show_ic_scrollDown = false;
}
if (boolval($show_ic_scrollDown) === true) {
    ?>
<div class="box_footer">
    <div class="askwho_container">
        <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Logo_AskWho.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>" class="logo">
        </a>
    </div>
</div>
<?php
}
?>
<?php wp_footer();?>
</body>

</html>
<?php ob_end_flush();?>