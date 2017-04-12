<?php get_header(); ?>

<style type="text/css">
	.page-about-us h4 {
		padding: 0 15px;
		color: #262b2e;
	    position: relative;
	    text-align: center;
	    margin: 50px 0;
	}
	.page-about-us h4:before {
		content:"";
		position: absolute;
	    left: 0;
	    top: 8px;
	    border-top: 1px solid #0ca2e0;
	    width: 45%;
	}
	.page-about-us h4:after {
		content:"";
		position: absolute;
	    right: 0;
	    top: 8px;
	    border-top: 1px solid #0ca2e0;
	    width: 45%;
	}
	.img_wrapper {
		margin-top: 5px;
	}
	.page_about_us_content h2 {
		margin: 0 0 10px 0;
		font-size: 25px;
		color: #262b2e;
	}
	.page_about_us_content p {
		text-align: justify;
	    color: #676b6d;
	    font-size: 15px;
	}
	.page_about_us_content p a {
		text-decoration: none;
		color: #676b6d;
	}
	@media (min-width: 768px) and (max-width: 991px) {
		.page-about-us h4:before, .page-about-us h4:after {
			width: 44%;
		}
	}
	@media (max-width: 767px) {
		.page-about-us h4:before, .page-about-us h4:after {
			width: 38%;
		}
	}

</style>

<main role="main main-content">
	<!-- section -->
	<section>

		<!-- <h1><?php the_title(); ?></h1> -->

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container page-about-us">
				<div class="row">
					<div class="col-sm-12">
						<h4>About Us</h4>
						<div class="row">
							<?php the_content(); ?>
						</div>
						
						

						<!-- <?php the_content(); ?> -->

						<?php comments_template( '', true ); // Remove if you don't want comments ?>

						<br class="clear">

						<!-- <?php edit_post_link(); ?> -->
					</div>
				</div>
			</div>
		</article>
		<!-- /article -->

	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>
