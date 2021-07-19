<?php
get_header();
?>
<div class="box_section agence_page error_page">
    <div>
        <h1>404</h1>
        <div class="wp_tutorial_cols contact_box">
            <div class="contact_notice">
                OOOPS ! Il semble bien que cette page n’existe pas.
                Veuillez cliquer sur le lien suivant pour être redirigé vers la page d’accueil du site.
            </div>
            <div class="box_readmore">
                <div>
                    <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/ic_arrowRight.svg'; ?>"
                        alt="<?php echo get_bloginfo('name') ?>">
                </div>
                <div>
                    <a href="<?php echo site_url(); ?>">Accueil</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();