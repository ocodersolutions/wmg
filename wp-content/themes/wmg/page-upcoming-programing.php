<?php get_header(); ?>

<style type="text/css">
	.page-coming-soon h4 {
		padding: 0 15px;
		color: #262b2e;
	    position: relative;
	    text-align: center;
	    margin: 50px 0;
	}
	.page-coming-soon h4:before {
		content:"";
		position: absolute;
	    left: 0;
	    top: 8px;
	    border-top: 1px solid #0ca2e0;
	    width: 43%;
	}
	.page-coming-soon h4:after {
		content:"";
		position: absolute;
	    right: 0;
	    top: 8px;
	    border-top: 1px solid #0ca2e0;
	    width: 43%;
	}
	@media(min-width: 992px) and (max-width: 1199px) {
		.page-coming-soon h4:before, .page-coming-soon h4:after {
			width: 41%;
		}
	}
	@media(min-width: 768px) and (max-width: 991px) {
		.page-coming-soon h4:before, .page-coming-soon h4:after {
			width: 39%;
		}
	}
	@media(min-width: 485px) and (max-width: 767px) {
		.page-coming-soon h4:before, .page-coming-soon h4:after {
			width: 34%;
		}
	}
	@media(min-width: 380px) and (max-width: 484px) {
		.page-coming-soon h4:before, .page-coming-soon h4:after {
			width: 30%;
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
			<div class="container page-coming-soon">
				<div class="row">
					<div class="col-sm-12">
						<h4>COMING SOON</h4>
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

<script type="text/javascript">
	$(document).ready(function () {
		$(".medical_data_records").show("slide", { direction: "left" }, 1000);
		$(".medical_tourism").show("slide", { direction: "down" }, 1000);
		$(".membership_benifits").show("slide", { direction: "right" }, 1000);
		// $(".medical_data_records").animate({left:200, opacity:"show"}, 1500);
    });
</script>