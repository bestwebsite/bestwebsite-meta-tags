<?php
/**
 * Removes all plugin data from postmeta and options tables on uninstall.
 * 
 * 
 */ 


defined('WP_UNINSTALL_PLUGIN') || die();


global $wpdb;

$tables_to_clean = [
    $wpdb->prefix.'postmeta' => 'meta_key',
    $wpdb->prefix.'termmeta' => 'meta_key',
    $wpdb->prefix.'usermeta' => 'meta_key',
    $wpdb->prefix.'options' => 'option_name'
];

require_once dirname(__FILE__) . '/includes/bestwebsite-meta-tag-list.php';

if (!empty($bestwebsite_meta_tag_list) && is_array($bestwebsite_meta_tag_list)){

    foreach( $bestwebsite_meta_tag_list as $k => $v ){

        foreach( $v['fields'] as $field ){

            foreach ( $tables_to_clean as $table => $key ){

                $wpdb->delete( $table, array( $key => $field['variable'] ) );
                $wpdb->delete( $table, array( $key => 'bestwebsite_frontpage_' . $field['variable'] ) );

            }

        }    

    }

}

delete_option( 'bestwebsite_plugin_version' );
