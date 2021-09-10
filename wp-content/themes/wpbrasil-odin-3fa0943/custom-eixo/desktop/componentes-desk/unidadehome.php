<?php
$args = array(
    'post_type'=> 'unidade',
    'order'    => 'ASC',
	'numberposts' => 10
    );

$the_query = new WP_Query( $args );
?>

<div class="container-fluid univer">
	<div class="container inver">
		<div class="row">

			<div class="col-md-7 prebmg">
				<div class="bigimg">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/Mask-Group.png">
				</div>
				<div class="col-smallimg">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/VIDA-DIGITAL-park-shopping1.png">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/VIDA-DIGITAL-Santo-ANtonio.png">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/VIDA-DIGITAL-Tag-Shopping.png">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/Brasilia-Shopping.png">
				</div>
			</div>

			<div class="col-md-5 parteunidade">
				<div class="listaunidades">
					<h2>Unidades</h2>
					<div class="unidadesingle">
						<img src="http://eixodigital.online/vidadigital/wp-content/uploads/2021/09/Group-200-1-1.png">
						<a href="http://eixodigital.online/vidadigital/contato/"><?= $post->post_title;?></a>
					</div>
				</div>
				<a href="http://eixodigital.online/vidadigital/contato/" class="lkviewunidade"><button>Ver todas</button></a>
			</div>

		</div>
	</div>
</div>
