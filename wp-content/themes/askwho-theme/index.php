<?php
get_header();
?>
<section class="boxheader" id="section_1" attr_bg="#f0e97c" style="background-color:#f0e97c">
    <div class="logoBox">
        <div class="logoAskWho">
            <img class="logo" src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Logo_AskWho.svg'; ?>"
                alt="<?php echo get_bloginfo('name'); ?>">
        </div>
        <h1 class="agence">
            L'agence qui vous conseille et programme les meilleurs intervenants pour vos événements
        </h1>
    </div>
</section>
<section class="uncarnet" id="section_2" attr_bg="#8ec9e9" style="background-color:#8ec9e9">
    <div class="dutex">
        <h2 class="uncarnet_addresses">
            Un carnet d'addresses complet de plus de 9000 contacts.
        </h2>
        <div class="humaine">
            <div class="box_content">
                Agence à taille humaine, ASKWHO met à votre disposition un réseau fiable, un accès rapide et
                privilíegié à ses talents pour servir vos événements. Séminaries, conférences, enregistrement de
                podcasts, lancement de produits, inauguration de lieux, services surmesure à domicile, forment
                I's expertise ASKWHO
            </div>
        </div>
        <div class="owl_carousel_author owl-carousel owl-theme owl-loaded">
            <?php
for ($i = 1; $i <= 8; $i++) {
    ?>
            <div class="item">
                <a href="javascript:void(0);" class="author_image">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/author.png"; ?>"
                        alt="<?php echo get_bloginfo("name"); ?>" />
                </a>
                <h3 class="author_name">Prénom NOM</h3>
                <h4 class="author_function">Fonction</h4>
            </div>
            <?php
}
?>
        </div>
        <a class="readmore" href="javascript:void(0);">
            <span class="child_label">En voir plus</span>
        </a>
    </div>
</section>
<section class="askwho_block" id="section_3" attr_bg="#a6e0d4" style="background-color:#a6e0d4">
    <div class="banner_parat">
        <img class="banner_content_bottom"
            src="<?php echo get_template_directory_uri() . "/assets/images/banner.jpg"; ?>"
            alt="<?php echo get_bloginfo("name") ?>">
        <div class="actulites">
            <div class="ask_who_label">L'actualité</div>
            <div class="ask_who_label">AskWho.</div>
            <div class="rubat"></div>
        </div>
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
</section>
<section class="boss_box" id="section_4" attr_bg="#ecc3b3" style="background-color:#ecc3b3">
    <div class="container_ask_who">
        <div class="ask_who_col_left">
            <h5 class="ask_who_title">Demander à qui? La personne qu'il vous faut est</h5>
            <h6 class="ask_who_author">Aris Kaprielian.</h6>
            <div class="ask_who_description">
                A I' écoute votre besoin, I' efficacité et la rapidité d'Aris permettent de cibler la personne qu'll
                vous faut dans des délais record. Fort d'une expertise dans le placement de personalités sur les
                plateaux de télévision de grandes chaines, Aris a assuré la programmation de très mombreuses émissions
                et de débats télévisés pour CNEWS, BFW TV, RMC Info, LCI, Europe 1, i>Télé
            </div>
            <a class="readmore" href="javascript:void(0);">
                <span class="child_label">En voir plus</span>
            </a>
        </div>
        <div class="ask_who_col_right">
            <img class="ask_who_avatar" src="<?php echo get_template_directory_uri() . "/assets/images/boss.png"; ?>"
                alt="<?php echo get_bloginfo('name'); ?>">
        </div>
    </div>
</section>
<section class="yellow_box" id="section_5" attr_bg="#f0e97c" style="background-color:#f0e97c">
    <div class="container_ask_who">
        <h4 class="yellow_title">Pourquoi faire appel à AskWho pour vos événements ?</h4>
        <div class="content_bottom">
            <?php
for ($i = 1; $i <= 3; $i++) {
    ?>
            <div class="ask_who_col_30">
                <h3 class="ask_who_title">Expérience</h3>
                <div class="ask_who_content">
                    Nullam non ereat at nulla lacinia ultrices. Pellentesque vitae libero tellus. Pellentesque nisi ex,
                    dignissim eget lorem ut, porta mattis metus. Donec euismod massa porta, interdum purus in,
                    ullamcorper quam. Ut lacinia nisl dolor. Interdum et malesuada fames ac ante ipsum primis in
                    faucibus.
                </div>
            </div>
            <?php
}
?>
        </div>
    </div>
</section>
<?php
get_footer();