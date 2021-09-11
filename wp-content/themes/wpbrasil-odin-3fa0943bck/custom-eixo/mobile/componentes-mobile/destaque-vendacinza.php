<?php
$args = array(
    'post_type'=> 'lojacinza',
    'order'    => 'ASC',
	'numberposts' => 6
    );

$the_query = new WP_Query( $args );
?>

<div class="container">
    <div class="row mxcolrow">



	<div id="carouselExampleControlscinza" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
	<?php
	foreach ($the_query->posts as $key => $post) { ?>
      <div class="carousel-item active">
        <div class="mxacol">
            <div class="conteudo-destaquevendacinza">
				<div class="organizacinza">
					<img src="<?=get_the_post_thumbnail_url($post->ID) ?>" alt="" class="celularcinza">
					<div class="textoscelularcinza">
						<div class="titulocelularcinza">
							<span class="marcacelularcinza">
							<?php echo get_post_meta($post->ID, 'marca_partecinza', true); ?>
							</span>
							<p class="modelocelularcinza">
							<?php echo get_post_meta($post->ID, 'modelo_partecinza', true); ?>
							</p>
						</div>
						<div class="conteudoprecoscinza">
							<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/Bag_light.png" alt="" class="sacolacinza">
							<div class="apenasprecocinza">
								<span class="apenascinza">Apenas</span>
								<p><?php echo get_post_meta($post->ID, 'valor_total_partecinza', true); ?></p>
								<div class="divparcelacinza">
									<span class="parcelamentocinza">
									<?php echo get_post_meta($post->ID, 'valor_parcela_partecinza', true); ?>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
                <a href="<?php echo get_post_meta($post->ID, 'link_compra_partecinza', true); ?>"><button>Quero!</button></a>
            </div>
        </div>
      </div>
		<?php }?>



    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlscinza" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlscinza" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



    </div>
</div>
