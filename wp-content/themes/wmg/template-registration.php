<?php 
/* Template Name: Registration */ 
get_header(); 
?>

<style type="text/css">
p {
    color: #444;
    font-size: 16px;
}
#registration_form_verify {
	display: none;
}
#registration_form_verify .form-control {
	border: 0;
	box-shadow: none;
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
	add_user_meta($user_id, 'race', $_POST['race'], false);
	add_user_meta($user_id, 'occupation', $_POST['occupation'], false);
	add_user_meta($user_id, 'mobile_tel', $_POST['mobile_tel'], false);
	add_user_meta($user_id, 'residential_address', $_POST['residential_address'], false);
	add_user_meta($user_id, 'doctors_name', $_POST['doctors_name'], false);
	add_user_meta($user_id, 'contact_no', $_POST['contact_no'], false);
	add_user_meta($user_id, 'clinic_name', $_POST['clinic_name'], false);
	add_user_meta($user_id, 'clinic_address', $_POST['clinic_address'], false);
	add_user_meta($user_id, 'next-of-kin_no_1_name', $_POST['next-of-kin_no_1_name'], false);
	add_user_meta($user_id, 'next-of-kin_no_1_relationship', $_POST['next-of-kin_no_1_relationship'], false);
	add_user_meta($user_id, 'next-of-kin_no_1_contact_1', $_POST['next-of-kin_no_1_contact_1'], false);
	add_user_meta($user_id, 'next-of-kin_no_1_contact_2', $_POST['next-of-kin_no_1_contact_2'], false);
	add_user_meta($user_id, 'next-of-kin_no_1_email', $_POST['next-of-kin_no_1_email'], false);
	add_user_meta($user_id, 'next-of-kin_no_2_name', $_POST['next-of-kin_no_2_name'], false);
	add_user_meta($user_id, 'next-of-kin_no_2_relationship', $_POST['next-of-kin_no_2_relationship'], false);
	add_user_meta($user_id, 'next-of-kin_no_2_contact_1', $_POST['next-of-kin_no_2_contact_1'], false);
	add_user_meta($user_id, 'next-of-kin_no_2_contact_2', $_POST['next-of-kin_no_2_contact_2'], false);
	add_user_meta($user_id, 'next-of-kin_no_2_email', $_POST['next-of-kin_no_2_email'], false);
	add_user_meta($user_id, 'insurance_policy_no', $_POST['insurance_policy_no'], false);
	add_user_meta($user_id, 'countries_frequently_visited', $_POST['countries_frequently_visited'], false);
	add_user_meta($user_id, 'blood_group', $_POST['blood_group'], false);
	add_user_meta($user_id, 'drug_and_or_food_allergies', $_POST['drug_and_or_food_allergies'], false);
	add_user_meta($user_id, 'current_medications', $_POST['current_medications'], false);
	add_user_meta($user_id, 'chronic_illnesses', $_POST['chronic_illnesses'], false);
	add_user_meta($user_id, 'previous_surgeries', $_POST['previous_surgeries'], false);
	add_user_meta($user_id, 'any_history_of_alcohol_use_or_substance_abuse', $_POST['any_history_of_alcohol_use_or_substance_abuse'], false);
	add_user_meta($user_id, 'current_immunization_record', $_POST['current_immunization_record'], false);
	add_user_meta($user_id, 'any_other_details_notes', $_POST['any_other_details_notes'], false);

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
        	<form method="POST" enctype="multipart/form-data" id="registration_form">
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
						    <input type="text" class="form-control" name="chinese_name" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >3. NRIC / PASSPORT / ID NO</label>
						    <input type="text" class="form-control" name="nric_passport_id_no" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >4. DATE OF BIRTH</label>
						    <input type="text" class="form-control" name="date_of_birth" id="datepicker" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >5. GENDER ( PLEASE SELECT )</label>
						    <br/>
						    <label class="radio-inline"><input type="radio" name="gender" value="Male" required>Male</label>
							<label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >6. NATIONALITY</label>
						    <input type="text" class="form-control" name="nationality" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >7. RACE</label>
						    <input type="text" class="form-control" name="race" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >8. OCCUPATION</label>
						    <input type="text" class="form-control" name="occupation" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >9. MOBILE / TEL. NO</label>
						    <input type="text" class="form-control" name="mobile_tel" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >10. EMAIL ADDRESS</label>
						    <input type="text" class="form-control" name="email_address" required>
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >11. Residential address</label>
						    <textarea name="residential_address" rows="5" class="form-control" required></textarea>
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
						    <input type="text" class="form-control" name="doctors_name" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO</label>
						    <input type="text" class="form-control" name="contact_no" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CLINIC NAME</label>
						    <input type="text" class="form-control" name="clinic_name" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CLINIC ADDRESS</label>
						    <input type="text" class="form-control" name="clinic_address" required>
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
						    <input type="text" class="form-control" name="next-of-kin_no_1_name" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >RELATIONSHIP</label>
						    <input type="text" class="form-control" name="next-of-kin_no_1_relationship" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO . 1</label>
						    <input type="text" class="form-control" name="next-of-kin_no_1_contact_1" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO . 2</label>
						    <input type="text" class="form-control" name="next-of-kin_no_1_contact_2" required>
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >Email Address</label>
						    <input type="text" class="form-control" name="next-of-kin_no_1_email" required>
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
						    <input type="text" class="form-control" name="next-of-kin_no_2_name" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >RELATIONSHIP</label>
						    <input type="text" class="form-control" name="next-of-kin_no_2_relationship" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO . 1</label>
						    <input type="text" class="form-control" name="next-of-kin_no_2_contact_1" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >CONTACT NO . 2</label>
						    <input type="text" class="form-control" name="next-of-kin_no_2_contact_2" required>
					  	</div>
					</div>
					<div class="col-sm-12">
					  	<div class="form-group">
						    <label >Email Address</label>
						    <input type="text" class="form-control" name="next-of-kin_no_2_email" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >15. INSURANCE POLICY NO. ( OPTIONAL )</label>
						    <input type="text" class="form-control" name="insurance_policy_no" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >16. COUNTRIES FREQUENTLY VISITED</label>
						    <input type="text" class="form-control" name="countries_frequently_visited" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >17. BLOOD GROUP</label>
						    <input type="text" class="form-control" name="blood_group" required>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >18. DRUG AND/OR FOOD ALLERGIES ( STATE ALL, IF ANY )</label>
						    <input type="text" class="form-control" name="drug_and_or_food_allergies" required>
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
						    <textarea name="current_medications" rows="5" class="form-control" required></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >B. CHRONIC ILLNESSES ( IF ANY )</label>
						    <textarea name="chronic_illnesses" rows="5" class="form-control" required></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >C. PREVIOUS SURGERIES ( STATE ALL, IF ANY )</label>
						    <textarea name="previous_surgeries" rows="5" class="form-control" required></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >D. ANY HISTORY OF ALCOHOL USE OR SUBSTANCE ABUSE</label>
						    <textarea name="any_history_of_alcohol_use_or_substance_abuse" rows="5" class="form-control" required></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >E. CURRENT IMMUNIZATION RECORD ( IF AVAILABLE )</label>
						    <textarea name="current_immunization_record" rows="5" class="form-control" required></textarea>
					  	</div>
					</div>
					<div class="col-sm-6">
					  	<div class="form-group">
						    <label >20. ANY OTHER DETAILS / NOTES</label>
						    <textarea name="any_other_details_notes" rows="5" class="form-control" required></textarea>
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
			  	</div>
			</form>
			<div class="row" id="registration_form_verify">
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>1. FULL NAME [ AS IN PASSPORT/NRIC ] :</label>
					    <label class="form-control" data-verify="fullname"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>2. CHINESE NAME ( IF APPLICABLE ) :</label>
					    <label class="form-control" data-verify="chinese_name"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>3. NRIC / PASSPORT / ID NO:</label>
					    <label class="form-control" data-verify="nric_passport_id_no"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>4. DATE OF BIRTH:</label>
					    <label class="form-control" data-verify="date_of_birth"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>5. GENDER ( PLEASE SELECT ) :</label>
					    <label class="form-control" data-verify="gender"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>6. NATIONALITY:</label>
					    <label class="form-control" data-verify="nationality"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>7. RACE:</label>
					    <label class="form-control" data-verify="race"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>8. OCCUPATION:</label>
					    <label class="form-control" data-verify="occupation"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>9. MOBILE / TEL. NO:</label>
					    <label class="form-control" data-verify="mobile_tel"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>10. EMAIL ADDRESS:</label>
					    <label class="form-control" data-verify="email_address"></label>
				  	</div>
				</div>
				<div class="col-sm-12">
				  	<div class="form-group">
					    <label>11. Residential address:</label>
					    <label class="form-control" data-verify="residential_address"></label>
				  	</div>
				</div>
				<div class="col-sm-12">
				  	<div class="form-group">
					    <label>12. Family Doctor</label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>DOCTOR'S NAME:</label>
					    <label class="form-control" data-verify="doctors_name"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>CONTACT NO:</label>
					    <label class="form-control" data-verify="contact_no"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>CLINIC NAME:</label>
					    <label class="form-control" data-verify="clinic_name"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>CLINIC ADDRESS:</label>
					    <label class="form-control" data-verify="clinic_address"></label>
				  	</div>
				</div>
				<div class="col-sm-12">
				  	<div class="form-group">
					    <label>13. Next-of-Kin No. 1</label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>NAME:</label>
					    <label class="form-control" data-verify="next-of-kin_no_1_name"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>RELATIONSHIP:</label>
					    <label class="form-control" data-verify="next-of-kin_no_1_relationship"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>CONTACT NO . 1:</label>
					    <label class="form-control" data-verify="next-of-kin_no_1_contact_1"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>CONTACT NO . 2:</label>
					    <label class="form-control" data-verify="next-of-kin_no_1_contact_2"></label>
				  	</div>
				</div>
				<div class="col-sm-12">
				  	<div class="form-group">
					    <label>Email Address:</label>
					    <label class="form-control" data-verify="next-of-kin_no_1_email"></label>
				  	</div>
				</div>
				<div class="col-sm-12">
				  	<div class="form-group">
					    <label>14. Next-of-Kin No. 2</label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>NAME:</label>
					    <label class="form-control" data-verify="next-of-kin_no_2_name"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>RELATIONSHIP:</label>
					    <label class="form-control" data-verify="next-of-kin_no_2_relationship"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>CONTACT NO . 1:</label>
					    <label class="form-control" data-verify="next-of-kin_no_2_contact_1"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>CONTACT NO . 2:</label>
					    <label class="form-control" data-verify="next-of-kin_no_2_contact_2"></label>
				  	</div>
				</div>
				<div class="col-sm-12">
				  	<div class="form-group">
					    <label>Email Address:</label>
					    <label class="form-control" data-verify="next-of-kin_no_2_email"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>15. INSURANCE POLICY NO. ( OPTIONAL ):</label>
					    <label class="form-control" data-verify="insurance_policy_no"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>16. COUNTRIES FREQUENTLY VISITED:</label>
					    <label class="form-control" data-verify="countries_frequently_visited"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>17. BLOOD GROUP:</label>
					    <label class="form-control" data-verify="blood_group"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>18. DRUG AND/OR FOOD ALLERGIES ( STATE ALL, IF ANY ):</label>
					    <label class="form-control" data-verify="drug_and_or_food_allergies"></label>
				  	</div>
				</div>
				<div class="col-sm-12">
				  	<div class="form-group">
					    <label>19. Current Health Condition</label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>A. CURRENT MEDICATIONS:</label>
					    <label class="form-control" data-verify="current_medications"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>B. CHRONIC ILLNESSES ( IF ANY ):</label>
					    <label class="form-control" data-verify="chronic_illnesses"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>C. PREVIOUS SURGERIES ( STATE ALL, IF ANY ):</label>
					    <label class="form-control" data-verify="previous_surgeries"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>D. ANY HISTORY OF ALCOHOL USE OR SUBSTANCE ABUSE:</label>
					    <label class="form-control" data-verify="any_history_of_alcohol_use_or_substance_abuse"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>E. CURRENT IMMUNIZATION RECORD ( IF AVAILABLE ):</label>
					    <label class="form-control" data-verify="current_immunization_record"></label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>20. ANY OTHER DETAILS / NOTES:</label>
					    <label class="form-control" data-verify="any_other_details_notes"></label>
				  	</div>
				</div>
				<div class="col-sm-12">
				  	<hr>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <label>UPLOAD YOUR PHOTO:</label>
					    <label class="form-control has_img" data-verify="avatar">
					    	<img src="">
					    </label>
				  	</div>
				</div>
				<div class="col-sm-6">
				  	<div class="form-group">
					    <span class="btn btn-default" id="verify_button">Verify</button>
				  	</div>
				  	<div class="form-group">
					    <span class="btn btn-default" id="back_button">Back</button>
				  	</div>
				</div>
			</div>
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


<script type="text/javascript">
	var check = 0;
	$("#registration_form").submit(function(e){
		if(check == 0) {
		    e.preventDefault();
	    }
	    
	    $(this).slideUp(1000);
	    $("html, body").animate({ scrollTop: 0 }, 1000);
	    $("#registration_form_verify").slideDown(1000);
	    // var data_form = $(this).serialize();
	    var data_form = $(this).serializeArray();
	    console.log(data_form);
	    for(var i = 0; i < data_form.length; i++) {
	      var data_element = $("#registration_form_verify label[data-verify='"+data_form[i].name+"']");
	      
	      if(data_element.hasClass("has_img")) {
	      	data_element.find("img").attr("src",data_form[i].value);
	      }
	      else {
	      	data_element.html(data_form[i].value);
	      }
	    }
	    

	    return false;
	});

	$("#verify_button").click(function(){
		// check = 1;
		$("#registration_form").submit();
	});

	$("#back_button").click(function(){
		$("#registration_form").slideDown(1000);
		$("html, body").animate({ scrollTop: 0 }, 1000);
		$("#registration_form_verify").slideUp(1000);
	});


    $( function() {
		$( "#datepicker" ).datepicker();
	} );
</script>         