<div class="box_footer">
    <div class="askwho_container">
        <a href="<?php echo site_url(); ?>">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Logo_AskWho.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>" class="logo">
        </a>
    </div>
</div>
<?php wp_footer();?>
</body>

</html>
<?php ob_end_flush();?>