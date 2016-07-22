<?php

//allow Featured Images in Posts/Pages
add_theme_support( 'post-thumbnails' );

//Disable Emoji from WP Core
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//stop WP core from adding <p> and <br> tags to shortcode from WYSIWYG editor filter (wpautop)
function shortcode_empty_paragraph_fix($content)
{   
  $array = array (
    '<p>[' => '[', 
    ']</p>' => ']', 
    ']<br />' => ']'
  );

  $content = strtr($content, $array);

  return $content;
}
add_filter('the_content', 'shortcode_empty_paragraph_fix');

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

function media_dei_resource_item_url_shortcode($atts, $content){
  $GLOBALS['resourceUrl'];
  $GLOBALS['resourceUrl']=$content;
}
add_shortcode('resource_item_url', 'media_dei_resource_item_url_shortcode');





function media_dei_resource_item_title_shortcode($atts, $content){
  $return_string='<h2 class="resource-heading"><a href="' . $GLOBALS['resourceUrl'] . '">' . $content . '</a></h2>';
  return $return_string;
}
add_shortcode('resource_item_title', 'media_dei_resource_item_title_shortcode');




function media_dei_resource_item_text_shortcode($atts, $content){
  $return_string='<p class="resource-paragraph">' . $content . '</p>';
  return $return_string;
}
add_shortcode('resource_item_text', 'media_dei_resource_item_text_shortcode');




function media_dei_announcement_image_shortcode($atts, $content){
    $return_string='<div class="announcement-image" role="img"><figure>' . $content . '</figure></div>';
    return $return_string;
}
add_shortcode('announcement_image', 'media_dei_announcement_image_shortcode');




function media_dei_staff_circles_3_shortcode($atts, $content){
  $GLOBALS['staffCounter'] = 0;
  $GLOBALS['bioCounter'] = 0;
  $GLOBALS['nameLeft'];
  $GLOBALS['nameCenter'];
  $GLOBALS['nameRight'];
  $return_string='
    <input class="radioButton" id="bio1-left" type="radio" name="bio1">
    <input class="radioButton" id="bio1-center" type="radio" name="bio1">
    <input class="radioButton" id="bio1-right" type="radio" name="bio1">
    
    <div class="wrapper">' . do_shortcode($content) . '</div>';
  return $return_string;
}
add_shortcode('staff_circles_3', 'media_dei_staff_circles_3_shortcode');



function media_dei_staff_circles_2_shortcode($atts, $content){
  $GLOBALS['staffCounter'] = 3;
  $return_string='
    <input class="radioButton" id="bio2-left" type="radio" name="bio2">
    <input class="radioButton" id="bio2-right" type="radio" name="bio2">
  
    <div class="wrapper">' . do_shortcode($content) . '</div>';
  return $return_string;
}
add_shortcode('staff_circles_2', 'media_dei_staff_circles_2_shortcode');




function media_dei_person_shortcode($atts, $content){
  $arrowPosition;
  $GLOBALS['staffCounter']++;
  if($GLOBALS['staffCounter'] > 5){
    return;
  }
  if($GLOBALS['staffCounter']===1 || $GLOBALS['staffCounter']===4){
    $position = 'left';
  }
  elseif($GLOBALS['staffCounter']===2){
    $position = 'center';
  }
  elseif($GLOBALS['staffCounter']===3 || $GLOBALS['staffCounter']===5){
    $position = 'right';
  }
  if($GLOBALS['staffCounter'] < 4){
    $return_string='
      <div class="grid-1-3">
        <div class="person">
          <label class="zoom fa fa-search" for="bio1-'. $position .'"></label>'
          . do_shortcode($content) .
          '<div class="arrow bio1-' . $position .'"></div>
        </div>
      </div>';
  }
  elseif($GLOBALS['staffCounter'] > 3){
    $return_string='
      <div class="grid-1-2">
        <div class="person">
          <label class="zoom fa fa-search" for="bio2-'. $position .'"></label>'
          . do_shortcode($content) .
          '<div class="arrow bio2-' . $position .'"></div>
        </div>
      </div>';
  }
  return $return_string;
}
add_shortcode('person', 'media_dei_person_shortcode');





function media_dei_person_photo_shortcode($atts, $content){
  $return_string='<figure>' . $content . '</figure>';
  return $return_string;
}
add_shortcode('photo', 'media_dei_person_photo_shortcode');





function media_dei_person_name_shortcode($atts, $content){ 
  $return_string='<p>' . $content . '</p>';
  if($GLOBALS['staffCounter']===1){
    $GLOBALS['nameLeft']=$content;
  }
  elseif($GLOBALS['staffCounter']===2){
    $GLOBALS['nameCenter']=$content;
  }
  elseif($GLOBALS['staffCounter']===3){
    $GLOBALS['nameRight']=$content;
  }
  elseif($GLOBALS['staffCounter']===4){
    $GLOBALS['nameLeft']=$content;
  }
  elseif($GLOBALS['staffCounter']===5){
    $GLOBALS['nameRight']=$content;
  }
  return $return_string;
}
add_shortcode('name', 'media_dei_person_name_shortcode');





function media_dei_person_title_shortcode($atts, $content){
  $return_string='<p>' . $content . '</p>';
  return $return_string;
}
add_shortcode('title', 'media_dei_person_title_shortcode');  





function media_dei_modal_bios_shortcode($atts, $content){
  //$GLOBALS['bioCounter'] = 0;
  if($GLOBALS['staffCounter'] < 4){
    $return_string='<div class="modal-info m1">' . do_shortcode($content) . '</div>';
  }
  elseif($GLOBALS['staffCounter'] > 3){
    $return_string='<div class="modal-info m2">' . do_shortcode($content) . '</div>';
  }
  return $return_string;
}
add_shortcode('modal_bios', 'media_dei_modal_bios_shortcode');





function media_dei_person_bio_shortcode($atts, $content){
  $GLOBALS['bioCounter']++;
  $name;
  if($GLOBALS['bioCounter']===1){
    $name=$GLOBALS['nameLeft'];
  }
  elseif($GLOBALS['bioCounter']===2){
    $name=$GLOBALS['nameCenter'];
  }
  elseif($GLOBALS['bioCounter']===3){
    $name=$GLOBALS['nameRight'];
  }
  elseif($GLOBALS['bioCounter']===4){
    $name=$GLOBALS['nameLeft'];
  }
  elseif($GLOBALS['bioCounter']===5){
    $name=$GLOBALS['nameRight'];
  }
  elseif($GLOBALS['bioCounter']===6){
    return;
  }
  if($GLOBALS['bioCounter'] < 4){
    $return_string='<div class="bio1">
                      <p>' . $name . '</p>
                      <p class="p capital">' . $content . '</p>
                    </div>';
  }
  elseif($GLOBALS['bioCounter'] > 3){
    $return_string='<div class="bio2">
                      <p>' . $name . '</p>
                      <p class="p capital">' . $content . '</p>
                    </div>';
  }
  return $return_string;
}
add_shortcode('bio', 'media_dei_person_bio_shortcode');





function media_dei_additional_staff_members_shortcode($atts, $content){           
    $return_string='
        <h2 class="more-staff">Other Board Members</h2>
            <div class="more-staff">' . do_shortcode($content) . '</div>';
    return $return_string;
    }
add_shortcode('additional_staff_members', 'media_dei_additional_staff_members_shortcode');



function media_dei_additional_staff_member_name_shortcode($atts, $content){    
    $return_string='
      <div class="name">' . $content . '</div>';
    return $return_string;
}
add_shortcode('additional_staff_name', 'media_dei_additional_staff_member_name_shortcode');




function media_dei_additional_staff_member_title_shortcode($atts, $content){    
    $return_string='
      <div class="desc">' . $content . '</div>';
    return $return_string;
}
add_shortcode('additional_staff_title', 'media_dei_additional_staff_member_title_shortcode');
//End Media Dei Shortcodes




//Register Custom Document Category - Newsletter
function media_dei_custom_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Categories', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Media Dei Document Categories', 'text_domain' ),
        'all_items'                  => __( 'All Categories', 'text_domain' ),
        'parent_item'                => __( 'Parent Category', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Category:', 'text_domain' ),
        'new_item_name'              => __( 'New Category', 'text_domain' ),
        'add_new_item'               => __( 'Add New Category', 'text_domain' ),
        'edit_item'                  => __( 'Edit Category', 'text_domain' ),
        'update_item'                => __( 'Update Category', 'text_domain' ),
        'view_item'                  => __( 'View Category', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate Categories with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Categories', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Categories', 'text_domain' ),
        'search_items'               => __( 'Search Categories', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No Categories', 'text_domain' ),
        'items_list'                 => __( 'Categories list', 'text_domain' ),
        'items_list_navigation'      => __( 'Categories list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'Category', array( 'document' ), $args );

}
add_action( 'init', 'media_dei_custom_taxonomy', 0 );



//enable categories and tags for media library attachments
function media_dei_add_categories_for_attachments() {     register_taxonomy_for_object_type( 'category', 'attachment' ); 
}
add_action( 'init' , 'media_dei_add_categories_for_attachments' );

function add_tags_for_attachments() {     register_taxonomy_for_object_type( 'post_tag', 'attachment' ); 
} 
add_action( 'init' , 'media_dei_add_tags_for_attachments' );










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