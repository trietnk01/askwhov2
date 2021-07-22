<?php
get_header();
?>
<div class="box_section page_error">
    <div class="askwho_container">
        <h1 class="page_name">404</h1>
        <div class="contact_notice">
            OOOPS ! Il semble bien que cette page n’existe pas.
            Veuillez cliquer sur le lien suivant pour être redirigé vers la page d’accueil du site.
        </div>
        <div class="box_readmore">
            <div class="askwho_icon">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowRight.svg'; ?>"
                    alt="<?php echo get_bloginfo('name') ?>">
            </div>
            <div class="askwho_lbl">
                <a href="<?php echo site_url(); ?>">Accueil</a>
            </div>
        </div>
        <div class="error_logo">
            <a href="<?php echo site_url(); ?>">
                <img src="<?php echo get_field('op_logo', 'option'); ?>" alt="<?php echo get_bloginfo('name'); ?>"
                    class="logo">
            </a>
        </div>
    </div>
</div>
<?php
get_footer();