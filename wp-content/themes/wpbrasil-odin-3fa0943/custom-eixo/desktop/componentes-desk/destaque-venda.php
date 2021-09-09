<?php
$args = array(
    'post_type'=> 'lojawhite',
    'order'    => 'ASC',
	'numberposts' => 2
    );

$the_query = new WP_Query( $args );
?>

<div class="container">
    <div class="row">
	<?php
	foreach ($the_query->posts as $key => $post) { ?>
        <div class="col-md-6">
            <div class="conteudo-destaquevenda">
                <img src="<?=get_the_post_thumbnail_url($post->ID) ?>" alt="" class="celular">
                <div class="textoscelular">
                    <div class="titulocelular">
                        <span class="marcacelular">
                        <?php echo get_post_meta($post->ID, 'marca_destaque', true); ?>
                        </span>
                        <p class="modelocelular">
						<?php echo get_post_meta($post->ID, 'modelo_destaque', true); ?>
                        </p>
                    </div>
                    <div class="conteudoprecos">
                        <img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/Bag_light.png" alt="" class="sacola">
                        <div class="apenaspreco">
                            <span class="apenas">Apenas</span>
                            <p><?php echo get_post_meta($post->ID, 'valor_total_destaque', true); ?></p>
                            <div class="divparcela">
                                <span class="parcelamento">
									<?php echo get_post_meta($post->ID, 'valor_parcela_destaque', true); ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?php echo get_post_meta($post->ID, 'link_compra_destaque', true); ?>"><button>Quero!</button></a>
            </div>
        </div>
		<?php
		}?>

    </div>
</div>
