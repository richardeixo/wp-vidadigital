<?php
$args = array(
    'post_type'=> 'slidemobile',
    'order'    => 'ASC',
	'numberposts' => 7
    );

$the_query = new WP_Query( $args );
?>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

  <div class="carousel-inner">
  <?php
	  $c_slide = 0;
	foreach ($the_query->posts as $key => $post) {
	  if($c_slide == 0){?>
    <div class="carousel-item active">
        <a href="<?php echo get_post_meta($post->ID, 'link_slide', true);?>">
            <img src="<?=get_the_post_thumbnail_url($post->ID) ?>" class="d-block w-100" alt="...">
        </a>
    </div>
	<?php
            }else{?>
	<div class="carousel-item">
        <a href="<?php echo get_post_meta($post->ID, 'link_slide', true);?>">
            <img src="<?=get_the_post_thumbnail_url($post->ID) ?>" class="d-block w-100" alt="...">
        </a>
    </div>
	<?php		}
				$c_slide++;
			}
          	?>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
