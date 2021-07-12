<?php
/* Template name: page-personnalites */
get_header();
?>
<section class="child_page" style="background:#8ec9e9" id="section_1" attr_bg="#8ec9e9">
    <div class="container_ask_who">
        <h1 class="ask_who_title">Personnalités</h1>
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
        <div class="author_list">
            <?php
for ($i = 1; $i <= 12; $i++) {
    ?>
            <div class="author_item">
                <a href="javascript:void(0);">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/author.png"; ?>"
                        alt="<?php echo get_bloginfo("name"); ?>">
                </a>
                <h3 class="author_name">Prénom NOM</h3>
                <h4 class="author_function">Fonction</h4>
            </div>
            <?php
}
?>
        </div>
    </div>
</section>
<?php
get_footer();