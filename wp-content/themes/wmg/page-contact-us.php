<?php get_header(); ?>

<style type="text/css">
	.page-contact-us h2 {
		padding: 0 15px;
		color: #262b2e;
	    position: relative;
	    text-align: center;
	    margin: 20px 0;
	    font-size: 36px;
	}
	.tag_after_title {
		color: #676b6d;
	    font-size: 15px;
	}
	.wpcf7-form {
		margin-top: 20px;
	}
	.wpcf7-form p label {
		color: #676b6d;
	    font-size: 15px;
	    font-weight: normal;
	    width: 100%;
	}
	.wpcf7-form input[type=text], .wpcf7-form input[type=email], .wpcf7-form textarea {
		width: 100%;
	    border-radius: 2px;
	    padding: 10px;
	    border: 1px solid #ccc;
	    font-size: 15px;
	    box-sizing: border-box;
	    color: #b8bcbe;
	    background-color: #fcfcfc;
	}
	.wpcf7-form input[type=text]:focus, .wpcf7-form input[type=email]:focus, .wpcf7-form textarea:focus {
	    background: #fff;
	    color: #7b8083;
	    outline: -webkit-focus-ring-color auto 5px;
	}
	.wpcf7-form input[type=submit] {
		margin-left: 100%;
	    transform: translateX(-100%);
	    -webkit-box-shadow: 0 1px 6px rgba(0,0,0,0.12);
	    box-shadow: 0 1px 6px rgba(0,0,0,0.12);
	    -webkit-transition: -webkit-box-shadow 0.2s ease-out, background-color 0.2s ease;
	    transition: box-shadow 0.2s ease-out, background-color 0.2s ease;
	    color: #ffffff;
	    background-color: #0ca2e0;
	    background: linear-gradient(30deg,#0ca2e0 0%,#27dde8 100%);
	    padding: 14px;
	    font-size: 15px;
	    border-radius: 2px;
	    border: 0;
	    font-weight: 600;
	}
	.wpcf7-form input[type=submit]:hover {
		background: linear-gradient(30deg,#1cd9ea 0%,#0ca2e0 100%);
		-webkit-box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
	    box-shadow: 0 5px 11px 0 rgba(0,0,0,0.18), 0 4px 15px 0 rgba(0,0,0,0.15);
	}

</style>

<main role="main main-content">
	<!-- section -->
	<section>

		<!-- <h1><?php the_title(); ?></h1> -->

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<div class="container page-contact-us">
				<div class="row">
					<div class="col-sm-12">
						<h2>Send Us a Message</h2>
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
