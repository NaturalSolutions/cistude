

<div class="contentWrapper">

<?php

	// login form inspiration : http://www.hongkiat.com/blog/wordpress-custom-loginpage/
	if(! is_user_logged_in()) : ?>

		<!-- Display drupal message error (https://v4-alpha.getbootstrap.com/components/alerts/) -->
		<div class="alert alert-warning" role="alert">
		  <strong>Attention</strong> Vous devez vous connecter pour saisir une observation
		</div>


		<?php
		$args = array(
			'redirect' => 'http://192.168.0.114/cistude-dev/formulaire-de-saisie/',
			'form_id' => 'loginform-custom',
			//'label_username' => __( 'Username custom text' ),
			//'label_password' => __( 'Password custom text' ),
			//'label_remember' => __( 'Remember Me custom text' ),
			'label_log_in' => __( 'Se connecter' ),
			'remember' => true
		);

		// display login form with args
		wp_login_form( $args );

		// display resgister link
		wp_register('Ou inscrivez-vous ici : ', '');
		?>

	<?php else: ?>

		<!-- custom form inspiration : https://www.inkthemes.com/how-you-can-easily-create-customized-form-in-wordpress/ -->
		<form name="customer_details" method="POST" onsubmit="return form_validation()" action="<?php echo get_site_url(); ?>/wp-content/themes/nsobspheno/customer-details.php">

			Your Name: <input type="text" id="customer_name" name="customer_name" /><br />
			Your Email: <input type="text" id="customer_email" name="customer_email" /><br />
			Sex: <input type="radio" name="customer_sex" value="male">Male <input type="radio" name="customer_sex" value="female">Female<br />
			Your Age: <input type="text" id="customer_age" name="customer_age" /><br />
			<input type="submit" value="Submit"/>

		</form>

	<?php endif; ?>


</div> <!-- fin contentWrapper -->

<script type="text/javascript">

	// Script to validate form
	/*
	function form_validation() {
		//Check the Customer Name for blank submission
		var customer_name = document.forms["customer_details"]["customer_name"].value;
		if (customer_name == "" || customer_name == null) {
			alert("Name field must be filled.");
			return false;
		}

		//Check the Customer Email for invalid format
		var customer_email = document.forms["customer_details"]["customer_email"].value;
		var at_position = customer_email.indexOf("@");
		var dot_position = customer_email.lastIndexOf(".");
		if (at_position<1 || dot_position<at_position+2 || dot_position+2>=customer_email.length) {
			alert("Given email address is not valid.");
			return false;
		}
	}
	*/

</script>


