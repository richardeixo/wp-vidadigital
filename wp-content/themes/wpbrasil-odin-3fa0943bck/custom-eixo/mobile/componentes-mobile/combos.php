<?php
$args = array(
    'post_type'=> 'combos',
    'order'    => 'ASC',
	'numberposts' => 3
    );

$the_query = new WP_Query( $args );
?>

<div class="container">
    <div class="rowcombo">
	<?php
	foreach ($the_query->posts as $key => $post) { ?>
        <div class="col-md-4">

            <div class="combo-unico">
                <div class="cabecalho-combo">
                    <div class="dcabecalho">
                        <img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/balao.png">
                        <h2><?= $post->post_title;?></h2>
                    </div>
                    <div class="bgimgcabecalho"></div>
                </div>
                <div class="imgbg-combo" style="background-image: url(<?=get_the_post_thumbnail_url($post->ID) ?>);"></div>
                <div class="rodape-combo">
                    <p><?=  $post->post_content ?></p>
                    <a href="<?php echo get_post_meta($post->ID, 'link_combo', true); ?>"><button>Saiba mais</button></a>
                </div>
            </div>

        </div>
		<?php }?>

    </div>
</div>








