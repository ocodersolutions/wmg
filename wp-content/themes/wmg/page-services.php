<?php get_header(); ?>

<style type="text/css">
	.page-services h4 {
		padding: 0 15px;
		color: #262b2e;
	    position: relative;
	    text-align: center;
	    margin: 50px 0;
	}
	.page-services h4:before {
		content:"";
		position: absolute;
	    left: 0;
	    top: 8px;
	    border-top: 1px solid #0ca2e0;
	    width: 41%;
	}
	.page-services h4:after {
		content:"";
		position: absolute;
	    right: 0;
	    top: 8px;
	    border-top: 1px solid #0ca2e0;
	    width: 41%;
	}
	.membership_services_block {
		background-color: rgba(170,170,170,0.1);
	    padding: 25px;
	    color: #676b6d;
	    min-height: 890px;
	    display: none;
	}
	.membership_services_block_img {
		margin-bottom: 25px;
	}
	.ms_block_title {
		text-align: center;
	    font-size: 18px;
	    font-weight: 600;
	    margin-bottom: 10px;
	}
	.teaser_sub_head_services {
		text-align: center;
	    font-style: italic;
	    font-size: 15px;
	    margin-bottom: 60px;
	    display: block;
	}
	.medical_tourism .teaser_sub_head_services {
	    margin-bottom: 35px;
	}
	.membership_benifits .teaser_sub_head_services {
		margin-bottom: 10px;
	}
	.membership_services_block p {
		font-size: 15px;
	    line-height: 26px;
	    color: #676b6d;
	    text-align: justify;
	}
	@media(min-width: 992px) and (max-width: 1199px) {
		.page-services h4:before, .page-services h4:after {
			width: 39%;
		}
		.membership_services_block {
			min-height: 925px;
		}
	}
	@media(min-width: 768px) and (max-width: 991px) {
		.page-services h4:before, .page-services h4:after {
			width: 36%;
		}
		.medical_tourism .ms_block_title {
			margin-bottom: 35px;
		}
		.membership_services_block {
			min-height: 1239px;
		}
	}
	@media(min-width: 485px) and (max-width: 767px) {
		.page-services h4:before, .page-services h4:after {
			width: 30%;
		}
	}
	@media(min-width: 380px) and (max-width: 484px) {
		.page-services h4:before, .page-services h4:after {
			width: 24%;
		}
	}
	@media(max-width: 767px) {
		.membership_services_block {
			min-height: auto;
			margin-bottom: 20px
		}
		.membership_services_block_img img {
			margin: 0 auto;
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
			<div class="container page-services">
				<div class="row">
					<div class="col-sm-12">
						<h4>Membership Services</h4>
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