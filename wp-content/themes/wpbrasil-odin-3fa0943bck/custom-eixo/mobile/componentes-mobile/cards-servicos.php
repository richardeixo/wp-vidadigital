<?php
$args = array(
    'post_type'=> 'servicos',
    'order'    => 'ASC',
	'numberposts' => 3
    );

$the_query = new WP_Query( $args );
?>

<div class="container servicoscontent">
  <div class="row">
    <div class="col-md-12">
      <h2>Selecione o serviço</h2>
    </div>
  </div>
  <div class="row">
  <?php
	foreach ($the_query->posts as $key => $post) { ?>
    <div class="col-md-4">
      <div class="contentservico">
        <div class="imgbgservico" style="background-image: url(<?=get_the_post_thumbnail_url($post->ID) ?>);">

        </div>
        <div class="boxtxtservico">
          <div class="cabecalhoserv">
            <img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/wifi-1.png" alt="">
            <h3><?= $post->post_title;?></h3>
          </div>
          <p>
		  <?=  $post->post_content ?>
          </p>
          <a href="<?php echo get_post_meta($post->ID, 'link_servico', true); ?>"><button>Contratar</button></a>
        </div>
      </div>
    </div>
	<?php }?>


  </div>
</div>
