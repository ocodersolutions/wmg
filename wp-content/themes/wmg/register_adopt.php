<?php 
/* Template Name: Register Adopt */ 

get_header(); 


if(array_key_exists('register-adopt-button', $_POST)){
	$my_cptpost_args = array(
		'post_title'	=> $_POST['title'],
		'post_content'  => '',
		'post_status'   => "publish",
		'post_type' 	=> "adoption_list",
	);

	// insert the post into the database

	$cpt_id = wp_insert_post( $my_cptpost_args, $wp_error);

	add_post_meta($cpt_id, 'address', $_POST['address'], false);
	add_post_meta($cpt_id, 'phone', $_POST['phone'], false);
	add_post_meta($cpt_id, 'email', $_POST['email'], false);

	$_POST = array();

	var_dump($cpt_id);
}

?>

<div class="main-content">
	<section class="io_pt ho_pb">
        <div class="container">
        	<form method="POST">
        		<div class="row">
        			<div class="col-sm-6">
					  	<div class="form-group">
						    <label >Fullname:</label>
						    <input type="text" class="form-control" name="title" required>
					  	</div>
					</div>
        			<div class="col-sm-6">
					  	<div class="form-group">
						    <label >Address:</label>
						    <input type="text" class="form-control" name="address" required>
					  	</div>
					</div>
					<div class="col-sm-12">
						<hr>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >Phone:</label>
						    <input type="text" class="form-control" name="phone" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >Email:</label>
						    <input type="email" class="form-control" name="email" required>
					  	</div>
					</div>
					<div class="col-sm-12">
						<hr>
					</div>
					<div class="col-sm-6">
			  			<button type="submit" name="register-adopt-button" class="btn btn-default">Submit</button>
			  		</div>
			  	</div>
			</form>
        </div>
    </section>
</div>

<?php get_footer(); ?>