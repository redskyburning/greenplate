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

			<?php
				$images = array(
					'IMAG1099.jpg',
					'photo1-cassandra.jpg',
					'IMAG1211.jpg',
				);

				$images = array_diff(scandir(getcwd() . '/wp-content/themes/bueno/gallery_images'), array('..', '.'));
				sort($images);
			?>

			<div id="homepage-gallery" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">

					<?php foreach($images as $i => $image): ?>

						<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" class="<?php echo $i == 0 ? 'active' : ''; ?>"></li>

					<?php endforeach; ?>

				</ol>

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">

					<?php foreach($images as $i => $image): ?>

						<div class="item <?php echo $i == 0 ? 'active' : ''; ?>">
							<!--<div class="gallery-image" style="background-image:url('<?php /*bloginfo('template_directory'); echo "/gallery_images/$image"; */?>');">&nbsp;</div>-->
							<img class="gallery-image" src="<?php bloginfo('template_directory'); echo "/gallery_images/$image"; ?>">
						</div>

					<?php endforeach; ?>

				</div>

				<!-- Controls -->
				<!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>-->
			</div>

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