<?php
$args = array(
    'post_type'=> 'unidade',
    'order'    => 'ASC'
    );

$the_query = new WP_Query( $args );
?>
<div class="todasunidades">


<?php
	foreach ($the_query->posts as $key => $post) { ?>
		<div class="unidade-single">
			<div class="bgunisingle"  style="background-image: url(<?=get_the_post_thumbnail_url($post->ID) ?>);">

			</div>
			<div class="content-unitxt">
				<div class="textounidade">
					<h3><?= $post->post_title;?></h3>
					<p><?=  $post->post_content ?></p>
				</div>
				<div class="btnsuni">
					<a href="https://api.whatsapp.com/send?phone=55<?php echo get_post_meta($post->ID, 'unidade_wzap', true); ?>">
						<img src="http://eixodigital.online/vidadigital/wp-content/uploads/2021/09/Group-240.png">
					</a>
					<a href="<?php echo get_post_meta($post->ID, 'unidade_mapa', true); ?>">
						<img src="http://eixodigital.online/vidadigital/wp-content/uploads/2021/09/Group-241.png">
					</a>
				</div>
			</div>
		</div>
<?php
	}?>
</div>
