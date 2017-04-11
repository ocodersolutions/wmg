<?php 
/* Template Name: Registration */ 
get_header(); 
?>

<style type="text/css">
p {
    color: #444;
    font-size: 16px;
}
</style>

<?php
// var_dump($_POST);

if(array_key_exists('registration-button', $_POST)){

	// $user_id = wp_create_user( 'test611@gmail.com', 'test611@gmail.com', 'test611@gmail.com' );

	$userdata = array(
	    'user_login'  =>  $_POST['email_address'],
	    'user_pass'   =>  $_POST['email_address'],
	    'user_email'   =>  $_POST['email_address'],
	    'display_name'   =>  $_POST['fullname'],
	);
	$user_id = wp_insert_user( $userdata );

	// add_user_meta( $user_id, $meta_key, $meta_value, $unique );
	add_user_meta($user_id, 'chinese_name', $_POST['fullname'], false);
	add_user_meta($user_id, 'nric_passport_id_no', $_POST['nric_passport_id_no'], false);
	add_user_meta($user_id, 'date_of_birth', $_POST['date_of_birth'], false);
	add_user_meta($user_id, 'gender', $_POST['gender'], false);
	add_user_meta($user_id, 'nationality', $_POST['nationality'], false);

	if (!function_exists('wp_generate_attachment_metadata')){
        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
    }
    if ($_FILES) {
        foreach ($_FILES as $file => $array) {
            if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
                return "upload error : " . $_FILES[$file]['error'];
            }
            $attach_id = media_handle_upload( $file, $new_post );
        }   
    }
    if ($attach_id > 0){
        //and if you want to set that image as Post  then use:
        add_user_meta($user_id, 'avatar', $attach_id, false);
    }

	// $my_cptpost_args = array(
	// 	'post_title'	=> $_POST['fullname'],
	// 	'post_content'  => '',
	// 	'post_status'   => "publish",
	// 	'post_type' 	=> "medical_data_records",
	// );

	// // insert the post into the database

	// $cpt_id = wp_insert_post( $my_cptpost_args, $wp_error);

	// add_post_meta($cpt_id, 'chinese_name', $_POST['fullname'], false);
	// add_post_meta($cpt_id, 'nric_passport_id_no', $_POST['nric_passport_id_no'], false);
	// add_post_meta($cpt_id, 'date_of_birth', $_POST['date_of_birth'], false);
	// add_post_meta($cpt_id, 'gender', $_POST['gender'], false);
	// add_post_meta($cpt_id, 'nationality', $_POST['nationality'], false);

	// if (!function_exists('wp_generate_attachment_metadata')){
 //        require_once(ABSPATH . "wp-admin" . '/includes/image.php');
 //        require_once(ABSPATH . "wp-admin" . '/includes/file.php');
 //        require_once(ABSPATH . "wp-admin" . '/includes/media.php');
 //    }
 //    if ($_FILES) {
 //        foreach ($_FILES as $file => $array) {
 //            if ($_FILES[$file]['error'] !== UPLOAD_ERR_OK) {
 //                return "upload error : " . $_FILES[$file]['error'];
 //            }
 //            $attach_id = media_handle_upload( $file, $new_post );
 //        }   
 //    }
 //    if ($attach_id > 0){
 //        //and if you want to set that image as Post  then use:
 //        add_post_meta($cpt_id, 'avatar', $attach_id, false);
 //    }

	var_dump($user_id); die;
}

?>

<div class="main-content">
	<section class="io_pt ho_pb">
        <div class="container">
        	<form method="POST" enctype="multipart/form-data">
        		<div class="row">
        			<div class="col-sm-6">
					  	<div class="form-group">
						    <label for="exampleInputEmail1">1. FULL NAME [ AS IN PASSPORT/NRIC ]</label>
						    <input type="text" class="form-control" name="fullname" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >2. CHINESE NAME ( IF APPLICABLE ) :</label>
						    <input type="text" class="form-control" name="chinese_name">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >3. NRIC / PASSPORT / ID NO</label>
						    <input type="text" class="form-control" name="nric_passport_id_no">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >4. DATE OF BIRTH</label>
						    <input type="text" class="form-control" name="date_of_birth">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >5. GENDER ( PLEASE SELECT )</label>
						    <br/>
						    <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
							<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >6. NATIONALITY</label>
						    <input type="text" class="form-control" name="nationality">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >7. RACE</label>
						    <input type="text" class="form-control" name="race">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >8. OCCUPATION</label>
						    <input type="text" class="form-control" name="occupation">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >9. MOBILE / TEL. NO</label>
						    <input type="text" class="form-control" name="mobile_tel">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >10. EMAIL ADDRESS</label>
						    <input type="text" class="form-control" name="email_address">
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >11. Residential address</label>
						    <textarea name="residential_address" rows="5" class="form-control"></textarea>
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >12. Family Doctor</label>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >DOCTOR'S NAME</label>
						    <input type="text" class="form-control" name="doctors_name">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO</label>
						    <input type="text" class="form-control" name="contact_no">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CLINIC NAME</label>
						    <input type="text" class="form-control" name="clinic_name">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CLINIC ADDRESS</label>
						    <input type="text" class="form-control" name="clinic_address">
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >13. Next-of-Kin No. 1</label>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >NAME</label>
						    <input type="text" class="form-control" name="next-of-kin_no_1_name">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >RELATIONSHIP</label>
						    <input type="text" class="form-control" name="next-of-kin_no_1_relationship">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO . 1</label>
						    <input type="text" class="form-control" name="next-of-kin_no_1_contact_1">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO . 2</label>
						    <input type="text" class="form-control" name="next-of-kin_no_1_contact_2">
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >Email Address</label>
						    <input type="text" class="form-control" name="next-of-kin_no_1_email">
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >14. Next-of-Kin No. 2</label>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >NAME</label>
						    <input type="text" class="form-control" name="next-of-kin_no_2_name">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >RELATIONSHIP</label>
						    <input type="text" class="form-control" name="next-of-kin_no_2_relationship">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO . 1</label>
						    <input type="text" class="form-control" name="next-of-kin_no_2_contact_1">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO . 2</label>
						    <input type="text" class="form-control" name="next-of-kin_no_2_contact_2">
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >Email Address</label>
						    <input type="text" class="form-control" name="next-of-kin_no_2_email">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >15. INSURANCE POLICY NO. ( OPTIONAL )</label>
						    <input type="text" class="form-control" name="insurance_policy_no">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >16. COUNTRIES FREQUENTLY VISITED</label>
						    <input type="text" class="form-control" name="countries_frequently_visited">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >17. BLOOD GROUP</label>
						    <input type="text" class="form-control" name="blood_group">
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >18. DRUG AND/OR FOOD ALLERGIES ( STATE ALL, IF ANY )</label>
						    <input type="text" class="form-control" name="drug_and_or_food_allergies">
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >19. Current Health Condition</label>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >A. CURRENT MEDICATIONS</label>
						    <textarea name="current_medications" rows="5" class="form-control"></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >B. CHRONIC ILLNESSES ( IF ANY )</label>
						    <textarea name="chronic_illnesses" rows="5" class="form-control"></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >C. PREVIOUS SURGERIES ( STATE ALL, IF ANY )</label>
						    <textarea name="previous_surgeries" rows="5" class="form-control"></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >D. ANY HISTORY OF ALCOHOL USE OR SUBSTANCE ABUSE</label>
						    <textarea name="any_history_of_alcohol_use_or_substance_abuse	" rows="5" class="form-control"></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >E. CURRENT IMMUNIZATION RECORD ( IF AVAILABLE )</label>
						    <textarea name="current_immunization_record" rows="5" class="form-control"></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >20. ANY OTHER DETAILS / NOTES</label>
						    <textarea name="any_other_details_notes" rows="5" class="form-control"></textarea>
					  	</div>
					</div>
					<div class="col-sm-12">
						<hr>
					</div>
					<div class="col-sm-12">
						<p>23. You hereby consent to Worldwide Medical Group Pte Ltd collecting and retain the data provided in this form and/or by your appointed participating medical practitioner. Our retention of such data is governed by the Singapore Personal Data Protection Act 2012 and our prevailing privacy policy which will be provided to you upon request or can be accessed at www.worldwidemedicalgroup.com.sg.</p>
						<p>24. You consent to us using, and disclosing to our service providers, the data provided in paragraph 1 to 8 above for the purposes of processing and administration of our membership records, and to contact you via the contact information provided by you, for such purposes.</p>
						<p>25. You also consent to us disclosing the data provided in this form and/or your appointed medical practitioner to: ( a ) your appointed participating medical practitioners (or their assisting allied health professionals); and ( b ) for the purposes of rendering emergency medical treatment to you, any other of our participat ing medical practitioners (or their assisting allied health professionals) who is given your personal identification number by yourself or any third party whom is able to provide the said participating medical practitioners (or their assisting allied health professionals) with your personal identification number.</p>
						<p>26. You are entitled to instruct Worldwide Medical Group Pte Ltd to remove your records at any time. In such event, Worldwide Medical Group Pte Ltd shall cease to be in a position to provide its services to you and you shall not be entitled to any refund of any fees paid.</p>
						<p>27. You are entitled to correct and/or update the data provided in paragraphs 1 to 16 above at any time.</p>
						<p>28. You are entitled to correct and/or update the data provided in paragraphs 17 to 20 preferably with the confirmation of your appointed participating medical practitioner.</p>
						<p>29. You are entitled to correct any data provided by your appointed participating medical practitioner only with the consent of that participating medical practitioner. You are, however, entitled to include in the data either the alternative opinion of another participating medical practitioner and/or your comments as to why you disagree with such data.</p>
						<p>30. You are encouraged to keep your medical records up to date with us at all times.</p>
						<p>31. Worldwide Medical Group Pte Ltd's sole obligation is to store your data, and make it available in accordance with our terms of service and service level obligations. Worldwide Medical Group Pte Ltd assumes no liability for the accuracy of the information provided by you and/or a participating medical practitioner and/or any injury or damages arising from such inaccuracies).</p>
					</div>
					<div class="col-sm-12">
						<hr>
					</div>
					<div class="col-sm-6">
					 	<div class="form-group">
						    <label for="exampleInputFile">UPLOAD YOUR PHOTO</label>
						    <input type="file" name="avatar">
					    	<p class="help-block"></p>
					  	</div>
					</div>
					<div class="col-sm-6">
			  			<button type="submit" name="registration-button" class="btn btn-default">Submit</button>
			  		</div>
			</form>
        </div>
    </section>
</div>




<!-- <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="HAUPN9ASJ296S">
<input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
<input type="hidden" value="2" name="rm">
<input type="hidden" name="return" value="http://www.wmg.sg/reg-new/?order_id=4567245" />
<input type="hidden" name="item_name" value="<?php echo md5($_SESSION['rand_session']); ?>" />
</form> -->




<?php get_footer(); ?>
