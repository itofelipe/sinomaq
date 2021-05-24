<?php get_header(); ?>
<section class="title-prod title-prod-constru">
	<h2>MÁQUINAS DE CONSTRUÇÃO</h2>
</section>

<?php include('templates/menu-prod.php');?>

<section class="section-prods">
		<div class="container prods">
				<?php
                $args = array(
                'post_type' => 'constru',
                'posts_per_page' => 30
                );
                $attorney = new WP_Query( $args );
                while ( $attorney->have_posts() ) : $attorney->the_post();
                ?>
					<?php if ( has_post_thumbnail() ) { ?>					

						<?php 

							$image_id =  get_post_thumbnail_id( get_the_ID() );
							$large_image = wp_get_attachment_image_src( $image_id ,'large');  										

						?>
					<?php } ?>
				<div class="col-md-4 text-center">
						<img src="<?php echo esc_url($large_image[0]); ?>" class="img-responsive">

						<div class="prod-title">
							<h4><?php the_title(); ?></h4>
							<div class="botao-prod">
								<div class="col-md-5"><hr></div>
								<a class="col-md-2" target="_blank" href="https://api.whatsapp.com/send?phone=5541991988808&amp;text=Olá%20eu%20gostei%20de%20um%20produto%20de%20construcao"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
								<div class="col-md-5"><hr></div>
							</div>
						</div>
				</div>
				<?php endwhile; ?>
		</div>
</section>

<?php get_footer(); ?>