<?php
//Give Plugin Modifications


/**
 * Custom Form Fields
 * 
 * @param $form_id
 */
function give_myprefix_custom_form_fields( $form_id ) {

    //Only display for a specific form;
    //Remove "If" statement to display on all forms
    if ( $form_id == '31' ) {
        ?>
        <p id="give-address-line1-wrap" class="form-row form-row-wide">
            <input type="text" class="give-input required" name="give_address-line1" id="give-address-line1" placeholder="Street Address"></input>
        </p>
        <p id="give-address-line2-wrap" class="form-row form-row-first">
            <input type="text" class="give-input required" name="give_address-line2" id="give-address-line2" placeholder="Apartment, Suite, Unit, Ect"></input>
        </p>
        <p id="give-city-wrap" class="form-row form-row-last">
            <input type="text" class="give-input required" name="give_city" id="give-city" placeholder="City"></input>
        </p>
        <p id="give-state-wrap" class="form-row form-row-first">
            <input type="text" class="give-input required" name="give_state" id="give-state" placeholder="State/Province"></input>
        </p>
        <p id="give-zip-wrap" class="form-row form-row-last">
            <input type="text" class="give-input required" name="give_zip" id="give-zip" placeholder="Zip/Postal Code"></input>
        </p>
        <p id="give-country-wrap" class="form-row form-row-first">
            <input type="text" class="give-input required" name="give_country" id="give-country" placeholder="Country"></input>
        </p>
        <p id="give-phone-wrap" class="form-row form-row-last">
            <input type="tel" class="give-input" name="give_phone" id="give-phone" placeholder="Phone"></input>
        </p>
    <?php
    }//endif
}

add_action( 'give_purchase_form_after_email', 'give_myprefix_custom_form_fields', 10, 1 );











/**
 * Validate Custom Field
 *
 * @description check for errors without custom fields
 *
 * @param $valid_data
 * @param $data
 */
function give_myprefix_validate_custom_fields( $valid_data, $data ) {

    //Check that we're validating the proper form
    //Remove if this is a global field
    if ( $data['give-form-id'] !== '31' ) {
        return;
    }

    //Check d
    if ( empty( $data['give_address-line1'] ) ) {
        give_set_error( 'give_address-line1', __( 'Please complete the form if you wish to join the Prayer Book Society.', 'give' ) );
    }
    if ( empty( $data['give_address-line2'] ) ) {
        give_set_error( 'give_address-line2', __( 'Please complete the form if you wish to join the Prayer Book Society.', 'give' ) );
    }
    if ( empty( $data['give_city'] ) ) {
        give_set_error( 'give_city', __( 'Please complete the form if you wish to join the Prayer Book Society.', 'give' ) );
    }
    if ( empty( $data['give_state'] ) ) {
        give_set_error( 'give_state', __( 'Please complete the form if you wish to join the Prayer Book Society.', 'give' ) );
    }
    if ( empty( $data['give_zip'] ) ) {
        give_set_error( 'give_zip', __( 'Please complete the form if you wish to join the Prayer Book Society.', 'give' ) );
    }
    if ( empty( $data['give_country'] ) ) {
        give_set_error( 'give_country', __( 'Please complete the form if you wish to join the Prayer Book Society.', 'give' ) );
    }
    if ( empty( $data['give_phone'] ) ) {
        give_set_error( 'give_phone', __( 'Please complete the form if you wish to join the Prayer Book Society.', 'give' ) );
    }
}

add_action( 'give_checkout_error_checks', 'give_myprefix_validate_custom_fields', 10, 2 );














/**
 * Add Field to Payment Meta
 *
 * @description store the custom field data in the payment meta
 *
 * @param $payment_meta
 *
 * @return mixed
 */
function give_myprefix_store_custom_fields( $payment_meta ) {

    $payment_meta['address-line1'] = isset( $_POST['give_address-line1'] ) ? implode( "n", array_map( 'sanitize_text_field', explode( "n", $_POST['give_address-line1'] ) ) ) : '';

    $payment_meta['address-line2'] = isset( $_POST['give_address-line2'] ) ? implode( "n", array_map( 'sanitize_text_field', explode( "n", $_POST['give_address-line2'] ) ) ) : '';

    $payment_meta['city'] = isset( $_POST['give_city'] ) ? implode( "n", array_map( 'sanitize_text_field', explode( "n", $_POST['give_city'] ) ) ) : '';

    $payment_meta['state'] = isset( $_POST['give_state'] ) ? implode( "n", array_map( 'sanitize_text_field', explode( "n", $_POST['give_state'] ) ) ) : '';

    $payment_meta['zip'] = isset( $_POST['give_zip'] ) ? implode( "n", array_map( 'sanitize_text_field', explode( "n", $_POST['give_zip'] ) ) ) : '';

    $payment_meta['country'] = isset( $_POST['give_country'] ) ? implode( "n", array_map( 'sanitize_text_field', explode( "n", $_POST['give_country'] ) ) ) : '';

    $payment_meta['phone'] = isset( $_POST['give_phone'] ) ? implode( "n", array_map( 'sanitize_text_field', explode( "n", $_POST['give_phone'] ) ) ) : '';

    return $payment_meta;
}

add_filter( 'give_payment_meta', 'give_myprefix_store_custom_fields' );















/**
 * Show Data in Transaction Details
 *
 * @description show the custom field(s) on the transaction page
 *
 * @param $payment_meta
 * @param $user_info
 */
function give_myprefix_purchase_details( $payment_meta, $user_info ) {

    //uncomment below to see payment_meta array
    //  echo "<pre>";
    //  var_dump($payment_meta);
    //  echo "</pre>";

    //Bounce out if no data for this transaction
    if ( ! isset( $payment_meta['address-line1'] ) ) {
        return;
    }

    ?>
    <div class="address-line1-data">
        <label><?php echo __( 'Address Line 1:', 'give' ); ?></label>
        <?php echo wpautop( $payment_meta['address-line1'] ); ?>
    </div>

    <div class="address-line2-data">
        <label><?php echo __( 'Address Line 2:', 'give' ); ?></label>
        <?php echo wpautop( $payment_meta['address-line2'] ); ?>
    </div>

    <div class="city-data">
        <label><?php echo __( 'City:', 'give' ); ?></label>
        <?php echo wpautop( $payment_meta['city'] ); ?>
    </div>

    <div class="state-data">
        <label><?php echo __( 'State:', 'give' ); ?></label>
        <?php echo wpautop( $payment_meta['state'] ); ?>
    </div>

    <div class="country-data">
        <label><?php echo __( 'Country:', 'give' ); ?></label>
        <?php echo wpautop( $payment_meta['country'] ); ?>
    </div>

    <div class="zip-data">
        <label><?php echo __( 'Zip/Postal Code:', 'give' ); ?></label>
        <?php echo wpautop( $payment_meta['zip'] ); ?>
    </div>
    <div class="phone-data">
        <label><?php echo __( 'Phone:', 'give' ); ?></label>
        <?php echo wpautop( $payment_meta['phone'] ); ?>
    </div>

<?php
}

add_action( 'give_payment_personal_details_list', 'give_myprefix_purchase_details', 10, 2 );
//end Give Plugin modifications




// REMOVE Defaults
// ---GoogleFonts OpenSans font, add default jquery
function scripts_styles() {
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );
    wp_enqueue_script('jquery'); // default jQuery
}
add_action( 'wp_enqueue_scripts', 'scripts_styles');

// ---Auto-loaded emoji scripts
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


function filter_ptags_on_images($content)
{
    // strip <p> from post images
    // regular expression: <p> (whitespace) <a (stuff)>(stuff)</a> (whitespace) </p>
    // replace with <div> and inner contents
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '<div class="img">\1\2\3</div>', $content);
}
// we want it to be run after the autop stuff... 10 is default.
add_filter('the_content', 'filter_ptags_on_images');


/* Recommended implementation of <title> from WP folks */
function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );





?>