<?php
$per_auteure_liste = get_field('per_auteure_liste');
if (is_array($per_auteure_liste)) {
    if (count($per_auteure_liste) > 0) {
        ?>
<div class="personnalites_author_part">
    <?php
foreach ($per_auteure_liste as $key => $val) {
            ?>
    <div class="item">
        <img class="author_image" src="<?php echo $val['per_auteure_image']; ?>" alt="author" />
        <div class="author_name"><?php echo $val['per_auteure_nom']; ?></div>
        <div class="author_function"><?php echo $val['per_auteure_fonction']; ?></div>
    </div>
    <?php
}
        ?>
</div>
<?php
}
}
?>