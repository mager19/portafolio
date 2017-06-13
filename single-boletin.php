<?php
/*
Template Name: single-boletin
*/

get_template_part('/template-parts/header', 'boletin');?>
	<section class="newsletter newsletter--into">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="home">
						<?php 
							$url = home_url('/newsletter');
				 		?>	
						<a href="<?php echo $url; ?>">
							<img src="<?php  echo get_template_directory_uri(); ?>/img/home.png" alt="home mager newsletter"><br>Regresar al inicio
						</a>
					</div>
				</div>	
			</div>
		</div>
		<?php 
			while ( have_posts() ) : the_post(); ?>
				<div class="container">
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<?php the_content(); ?>
						</div>
					</div>
				</div>			
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>		
	</section>


<?php 
	get_template_part('/template-parts/footer', 'item__portafolio');?>