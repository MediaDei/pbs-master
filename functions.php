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
            <input type="text" class="give-input required" name="give_address-line1" id="give-address-line1" placeholder="Street Address"></p>
        </p>
        <p id="give-address-line2-wrap" class="form-row form-row-wide">
            <input type="text" class="give-input required" name="give_address-line2" id="give-address-line2" placeholder="Apartment, Suite, Unit, Building, Floor, Ect"></p>
        </p>
        <p id="give-city-wrap">
            <input type="text" class="give-input required" name="give_city" id="give-city" placeholder="City"></p>
        </p>
        <p id="give-state-wrap">
            <input type="text" class="give-input required" name="give_state" id="give-state" placeholder="State/Province"></p>
        </p>
        <p id="give-zip-wrap">
            <input type="text" class="give-input required" name="give_zip" id="give-zip" placeholder="Zip/Postal Code"></p>
        </p>
        <p id="give-country-wrap">
            <input type="text" class="give-input required" name="give_country" id="give-country" placeholder="Country"></p>
        </p>
        <p id="give-phone-wrap">
            <input type="tel" class="give-input" name="give_phone" id="give-phone" placeholder="Phone"></p>
        </p>
    <?php
    }//endif
}

add_action( 'give_purchase_form_after_email', 'give_myprefix_custom_form_fields', 10, 1 );


























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




/**
 * Set title based on current view.
 *
 * @since Twenty Twelve 1.0
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string Filtered title.
 */
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




?>