<section class="yellow_box" id="section_5" attr_bg="#f0e97c" style="background-color:#f0e97c">
    <div class="container_ask_who">
        <h2 class="yellow_title"><?php echo get_field('hp_5_titre'); ?></h2>
        <?php
$hp_5_extrait_liste = get_field('hp_5_extrait_liste');
if (is_array($hp_5_extrait_liste)) {
    if (count($hp_5_extrait_liste) > 0) {
        ?>
        <div class="content_bottom">
            <?php
foreach ($hp_5_extrait_liste as $key => $val) {
            ?>
            <div class="ask_who_col_30">
                <h3 class="ask_who_title"><?php echo $val['hp_5_extrait_titre']; ?></h3>
                <div class="ask_who_content">
                    <?php echo $val['hp_5_extrait_contenu']; ?>
                </div>
            </div>
            <?php
}
        ?>
        </div>
        <?php
}
}
?>
    </div>
</section>