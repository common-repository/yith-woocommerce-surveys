<?php
/**
 * Plugin Name: YITH WooCommerce Surveys
 * Plugin URI:  http://yithemes.com/themes/plugins/yith-woocommerce-surveys/
 * Description: YITH WooCommerce Surveys allow to add a survey to your checkout to learn more about your customers' habits!
 * Version: 1.0.10
 * Author: YITHEMES
 * Author URI: http://yithemes.com/
 * Text Domain: yith-woocommerce-surveys
 * Domain Path: /languages/
 * WC requires at least: 3.0.0
 * WC tested up to: 3.4.2
 * @author Your Inspiration Themes
 * @package YITH WooCommerce Surveys
 * @version 1.0.10
 */

/*
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.gnu.org/licenses/gpl-3.0.txt
*/
if( !defined( 'ABSPATH' ) ){
    exit;
}
if ( ! function_exists( 'is_plugin_active' ) ) {
    require_once( ABSPATH . 'wp-admin/includes/plugin.php' );
}


function yith_wc_surveys_install_woocommerce_admin_notice() {
    ?>
    <div class="error">
        <p><?php _e( 'YITH WooCommerce Surveys is enabled but not effective. It requires WooCommerce in order to work.', 'yith-woocommerce-surveys' ); ?></p>
    </div>
<?php
}

function yith_wc_surveys_install_free_admin_notice() {
    ?>
    <div class="error">
        <p><?php _e( 'You can\'t activate the free version of YITH WooCommerce Surveys while you are using the premium one.', 'yith-woocommerce-surveys' ); ?></p>
    </div>
<?php
}

if ( !function_exists( 'yith_plugin_registration_hook' ) ) {
    require_once 'plugin-fw/yit-plugin-registration-hook.php';
}
register_activation_hook( __FILE__, 'yith_plugin_registration_hook' );


if ( !defined( 'YITH_WC_SURVEYS_VERSION' ) ) {
    define( 'YITH_WC_SURVEYS_VERSION', '1.0.10' );
}

if ( !defined( 'YITH_WC_SURVEYS_FREE_INIT' ) ) {
    define( 'YITH_WC_SURVEYS_FREE_INIT', plugin_basename( __FILE__ ) );
}

if ( !defined( 'YITH_WC_SURVEYS_FILE' ) ) {
    define( 'YITH_WC_SURVEYS_FILE', __FILE__ );
}

if ( !defined( 'YITH_WC_SURVEYS_DIR' ) ) {
    define( 'YITH_WC_SURVEYS_DIR', plugin_dir_path( __FILE__ ) );
}

if ( !defined( 'YITH_WC_SURVEYS_URL' ) ) {
    define( 'YITH_WC_SURVEYS_URL', plugins_url( '/', __FILE__ ) );
}

if ( !defined( 'YITH_WC_SURVEYS_ASSETS_URL' ) ) {
    define( 'YITH_WC_SURVEYS_ASSETS_URL', YITH_WC_SURVEYS_URL . 'assets/' );
}

if ( !defined( 'YITH_WC_SURVEYS_ASSETS_PATH' ) ) {
    define( 'YITH_WC_SURVEYS_ASSETS_PATH', YITH_WC_SURVEYS_DIR . 'assets/' );
}

if ( !defined( 'YITH_WC_SURVEYS_TEMPLATE_PATH' ) ) {
    define( 'YITH_WC_SURVEYS_TEMPLATE_PATH', YITH_WC_SURVEYS_DIR . 'templates/' );
}

if ( !defined( 'YITH_WC_SURVEYS_INC' ) ) {
    define( 'YITH_WC_SURVEYS_INC', YITH_WC_SURVEYS_DIR . '/includes/' );
}
if( !defined('YITH_WC_SURVEYS_SLUG' ) ){
    define( 'YITH_WC_SURVEYS_SLUG', 'yith-woocommerce-surveys' );
}

/* Plugin Framework Version Check */
if( ! function_exists( 'yit_maybe_plugin_fw_loader' ) && file_exists( YITH_WC_SURVEYS_DIR . 'plugin-fw/init.php' ) ) {
    require_once( YITH_WC_SURVEYS_DIR . 'plugin-fw/init.php' );
}

yit_maybe_plugin_fw_loader(YITH_WC_SURVEYS_DIR);

if ( ! function_exists( 'yith_surveys_init' ) ) {
    /**
     * Unique access to instance of YITH_Surveys class
     *
     * @return YITH_WooCommerce_Name_Your_Price
     * @since 1.0.0
     */
    function yith_surveys_init() {

        load_plugin_textdomain( 'yith-woocommerce-surveys', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );

        // Load required classes and functions
        require_once( YITH_WC_SURVEYS_INC.'post-type/class.yith-surveys-post-type.php' );
        require_once( YITH_WC_SURVEYS_INC.'functions.yith-surveys-function.php' );
        require_once( YITH_WC_SURVEYS_INC.'classes/class.yith-wc-surveys.php' );
        require_once( YITH_WC_SURVEYS_INC.'classes/class.yith-wc-surveys-admin.php' );
        require_once( YITH_WC_SURVEYS_INC.'classes/class.yith-wc-surveys-frontend.php' );



        global $YWC_Surveys;
        $YWC_Surveys = YITH_WC_Surveys::get_instance();
    }
}

add_action( 'ywcsurveys_init', 'yith_surveys_init' );

if( !function_exists( 'yith_surveys_install' ) ){

    function yith_surveys_install(){

        if( !function_exists( 'WC' ) ){
            add_action( 'admin_notices', 'yith_wc_surveys_install_woocommerce_admin_notice' );
        }elseif( defined( 'YITH_WC_SURVEYS_PREMIUM' ) && YITH_WC_SURVEYS_PREMIUM ){
            add_action( 'admin_notices', 'yith_wc_surveys_install_free_admin_notice' );
            deactivate_plugins( plugin_basename( __FILE__ ) );
        }else
            do_action( 'ywcsurveys_init' );
    }
}

add_action( 'plugins_loaded', 'yith_surveys_install' ,11 );