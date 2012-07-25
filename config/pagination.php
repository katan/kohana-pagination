<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Added "route_name" key in current_page
 * Route name to get routing correctly
 * 
 * @example
 * 
 * bootstrap:
 * 
 * Route::set('pagination', '<controller>(/<action>)/page(/<page>)',
         array(
               'page' => '\d+'
         )
);
 * 
 * config pagination:
 * 
 * 'current_page'      => array('source' => 'route', 'key' => 'page', 'route_name' => 'pagination'),
 * 
 *  @since 3.2
 */
return array(

          // Application defaults
          'default' => array(
                    'current_page'      => array('source' => 'route', 'key' => 'page', 'route_name' => 'pagination'), // source: "query_string" or "route"
                    'total_items'       => 0,
                    'items_per_page'    => 10,
                    'view'              => 'pagination/basic',
                    'auto_hide'         => TRUE,
                    'first_page_in_url' => FALSE,
          ),

);