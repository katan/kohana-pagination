Kohana 3.2 Pagination
---

This is hacked up to support Kohana 3.2 so there are a few things to note:

- Fixed problem when used route for pagination


## Route example

Bootstrap

    Route::set('pagination', '<controller>(/<action>)/page(/<page>)',
             array(
                   'page' => '\d+'
             )
    );


Config file

    'default' => array(
              'current_page'      => array('source' => 'query_string', 'key' => 'page'), // source: "query_string" or "route"
              'total_items'       => 0,
              'items_per_page'    => 10,
              'view'              => 'pagination/basic',
              'auto_hide'         => TRUE,
              'first_page_in_url' => FALSE,
    )