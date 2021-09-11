<?php
$args = array(
    'post_type'=> 'unidade',
    'order'    => 'ASC',
	'numberposts' => 10
    );

$the_query = new WP_Query( $args );
?>
<div class="row limitalinha">
	<h2>Unidades</h2>
</div>
<div class="container-fluid univer">
	<div class="container inver">
		<div class="row">

			<div class="col-md-12 prebmg">

				<div class="col-smallimg">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/VIDA-DIGITAL-park-shopping1.png">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/VIDA-DIGITAL-Santo-ANtonio.png">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/VIDA-DIGITAL-Tag-Shopping.png">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/Brasilia-Shopping.png">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/Tag-Shopping2-1.png">
					<img src="http://localhost/wp-vidadigital/wp-content/uploads/2021/09/VIDA-DIGITAL-park-shopping1.png">
					<a href="#" class="lkviewunidade"><button>Ver todas</button></a>
				</div>
			</div>



		</div>
	</div>
</div>
