<?php

//allow Featured Images in Posts/Pages
add_theme_support( 'post-thumbnails' );

//Disable WP Core editor settings from adding <p> and <br> into the_content();
remove_filter( 'the_content', 'wpautop' );


//Disable Emoji from WP Core
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

function scripts_styles() {

    //Deregister Scripts/Styles from WP Core
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );

    //Register Scripts/Styles
    wp_register_style( 'global-style', get_template_directory_uri() . '/css/global.css');
    wp_register_style('font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');

    //Enqueue Scripts/Styles
    wp_enqueue_script('jquery'); // default jQuery
    wp_enqueue_script('mapbox', 'https://api.tiles.mapbox.com/mapbox.js/v2.2.0/mapbox.js');

    wp_enqueue_style('global-style');
    wp_enqueue_style('font-awesome-style');


}
add_action( 'wp_enqueue_scripts', 'scripts_styles');


//Media Dei Shortcodes
function media_dei_resource_item_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'title' => 'Heading Goes Here',
            'url' => 'URL Goes Here',
            'paragraph' => 'Text Goes Here'
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables

    return '<h2 class="resource-heading"><a href="' . $url . '">' . $title . '</a></h2><p class="resource-paragraph">' . $paragraph . '</p>';
}
add_shortcode('resource_item', 'media_dei_resource_item_shortcode');

function media_dei_announcement_image_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'url' => 'URL of Image from Media Library Goes Here'
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables
    
    return '<div class="announcement-image" role="img"><figure><img src="' . $url . '"></figure></div>';
}
add_shortcode('announcement_image', 'media_dei_announcement_image_shortcode');

function media_dei_staff_circles_3_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'staff_photo_left' => 'URL of Image from Media Library Goes Here',
            'staff_photo_center' => 'URL of Image from Media Library Goes Here',
            'staff_photo_right' => 'URL of Image from Media Library Goes Here',

            'staff_name_left' => 'Name Goes Here',
            'staff_name_center' => 'Name Goes Here',
            'staff_name_right' => 'Name Goes Here',

            'staff_title_left' => 'Title Goes Here',
            'staff_title_center' => 'Title Goes Here',
            'staff_title_right' => 'Title Goes Here',

            'staff_bio_left' => 'Bio Paragraph Goes Here',
            'staff_bio_center' => 'Bio Paragraph Goes Here',
            'staff_bio_right' => 'Bio Paragraph Goes Here'
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables
    
    return '
        <input class="radioButton" id="bio1-left" type="radio" name="bio1">
        <input class="radioButton" id="bio1-center" type="radio" name="bio1">
        <input class="radioButton" id="bio1-right" type="radio" name="bio1">
        
        <div class="wrapper">
          <div class="grid-1-3">
            <div class="person">
              <label class="zoom fa fa-search" for="bio1-left"></label>
              <figure><img src="' . $staff_photo_left . '"></figure>
              <p>' . $staff_name_left . '</p>
              <p>' . $staff_title_left . '</p>
              <div class="arrow bio1-left"></div>
            </div>
          </div>
          
          <div class="grid-1-3">
            <div class="person">
              <label class="zoom fa fa-search" for="bio1-center"></label>
              <figure><img src="' . $staff_photo_center . '"></figure>
              <p>' . $staff_name_center . '</p>
              <p>' . $staff_title_center . '</p>
              <div class="arrow bio1-center"></div>
            </div>
          </div>
          
          <div class="grid-1-3">
            <div class="person">
              <label class="zoom fa fa-search" for="bio1-right"></label>
              <figure><img src="' . $staff_photo_right . '"></figure>
              <p>' . $staff_name_right . '</p>
              <p>' . $staff_title_right . '</p>
              <div class="arrow bio1-right"></div>
            </div>
          </div>
        </div>

        <div class="modal-info m1">
          <div class="bio1">
            <p>' . $staff_name_left . '</p>
            <p class="p capital">' . $staff_bio_left . '</p>
          </div>
          <div class="bio1">
            <p>' . $staff_name_center . '</p>
            <p class="p capital">' . $staff_bio_center . '</p>
          </div>
          <div class="bio1">
            <p>' . $staff_name_right . '</p>
            <p class="p capital">' . $staff_bio_right . '</p>
          </div>
          <div class="close fa fa-times"></div>
        </div>
    ';
}
add_shortcode('staff_circles_3', 'media_dei_staff_circles_3_shortcode');

function media_dei_staff_circles_2_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'staff_photo_left' => 'URL of Image from Media Library Goes Here',
            'staff_photo_right' => 'URL of Image from Media Library Goes Here',

            'staff_name_left' => 'Name Goes Here',
            'staff_name_right' => 'Name Goes Here',

            'staff_title_left' => 'Title Goes Here',
            'staff_title_right' => 'Title Goes Here',

            'staff_bio_left' => 'Bio Paragraph Goes Here',
            'staff_bio_right' => 'Bio Paragraph Goes Here'
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables
    
    return '
        <input class="radioButton" id="bio2-left" type="radio" name="bio2">
        <input class="radioButton" id="bio2-right" type="radio" name="bio2">

        <div class="wrapper">
          <div class="grid-1-2">
            <div class="person">
              <label class="zoom fa fa-search" for="bio2-left"></label>
              <figure><img src="' . $staff_photo_left . '"></figure>
              <p>' . $staff_name_left . '</p>
              <p>' . $staff_title_left . '</p>
              <div class="arrow bio2-left"></div>
            </div>
          </div>
          
          <div class="grid-1-2">
            <div class="person">
              <label class="zoom fa fa-search" for="bio2-right"></label>
              <figure><img src="' . $staff_photo_right . '"></figure>
              <p>' . $staff_name_right . '</p>
              <p>' . $staff_title_right . '</p>
              <div class="arrow bio2-right"></div>
            </div>
          </div>
        </div>

        <div class="modal-info m2">
          <div class="bio2">
            <p>' . $staff_name_left . '</p>
            <p class="p capital">' . $staff_bio_left . '</p>
          </div>
          <div class="bio2">
            <p>' . $staff_name_right . '</p>
            <p class="p capital">' . $staff_bio_right . '</p>
          </div>
          <div class="close fa fa-times"></div>
        </div>
    ';
}
add_shortcode('staff_circles_2', 'media_dei_staff_circles_2_shortcode');

function media_dei_additional_staff_member_open_shortcode($atts, $content){           
    return '
        <h2 class="more-staff">Other Board Members</h2>
            <div class="more-staff">';
    }
add_shortcode('additional_staff_member_open', 'media_dei_additional_staff_member_open_shortcode');

function media_dei_additional_staff_member_close_shortcode($atts, $content){           
    return '</div>';
    }
add_shortcode('additional_staff_member_close', 'media_dei_additional_staff_member_close_shortcode');



function media_dei_additional_staff_member_row_shortcode($atts, $content){
    $atts = shortcode_atts(
        array(
            'name_left' => '',
            'title_left' => '',
            'name_right' => '',
            'title_right' => ''
        ), $atts
    );

    extract($atts);//convert indexed values from array into variables
    
    return '
        <div>
            <div class="name">' . $name_left . '</div>
            <div class="desc">' . $title_left . '</div>
        </div>
        <div>
            <div class="name">' . $name_right . '</div>
            <div class="desc">' . $title_right . '</div>
        </div>';
    }
add_shortcode('additional_staff_member_row', 'media_dei_additional_staff_member_row_shortcode');
//End Media Dei Shortcodes













function filter_ptags_on_images($content)
{
    // strip <p> from post images
    // regular expression: <p> (whitespace) <a (stuff)>(stuff)</a> (whitespace) </p>
    // replace with <div> and inner contents
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '<div class="img">\1\2\3</div>', $content);
}
// we want it to be run after the autop stuff... 10 is default.
add_filter('the_content', 'filter_ptags_on_images');


/* Recommended implementation of <title> from WP folks 
function theme_slug_setup() {
   add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'theme_slug_setup' );
*/

/**
 * Set title based on current view.
 *
 * @since Twenty Twelve 1.0
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */

/*
function extra_wp_title( $title, $sep ) {
    global $paged, $page;

    if ( is_feed() )
        return $title;

    // Add the site name.
    $title .= get_bloginfo( 'name' );

    // Add the site description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
        $title = "$title $sep $site_description";

    // Add a page number if necessary.
    if ( $paged >= 2 || $page >= 2 )
        $title = "$title $sep " . sprintf( __( 'Page %s', 'standrewshamble' ), max( $paged, $page ) );

    return $title;
}
add_filter( 'wp_title', 'extra_wp_title', 10, 2 );
*/







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








?>