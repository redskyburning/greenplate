<?php
/*
Template Name: Homepage
*/

get_header();
?>


    <div id="content" class="col-full">
		<div id="main" class="fullwidth">

			<div id="knockout-logo">
				<img src="<?php bloginfo('template_directory'); ?>/images/text-horizontal-white.svg" />
			</div>


			<?php if( have_rows('image_carousel') ): ?>

				<div id="homepage-gallery" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">

						<?php $i = 0; while ( have_rows('program') ) : the_row(); ?>

							<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" class="<?php echo $i == 0 ? 'active' : ''; ?>"></li>

						<?php $i++; endwhile; ?>

					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">

						<?php $i = 0; while ( have_rows('program') ) : the_row(); ?>

							<div class="item <?php echo $i == 0 ? 'active' : ''; ?>">
								<img class="gallery-image" src="<?php the_sub_field('image') ?>"">
							</div>

						<?php $i++; endwhile; ?>

					</div>
				</div>

			<?php endif; ?>

            <?php if (have_posts()) : $count = 0; ?>
            <?php while (have_posts()) : the_post(); $count++; ?>

	            <div class="homepage-content">

		            <?php the_content(); ?>
	            </div>

			<?php endwhile; else: ?>
				<div class="post">
                	<p><?php _e('Sorry, no posts matched your criteria.', 'woothemes') ?></p>
                </div><!-- /.post -->
            <?php endif; ?>
        
		</div><!-- /#main -->
		
    </div><!-- /#content -->
		
<?php get_footer(); ?>