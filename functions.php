<?php
/*
Author: Christian Poplawski
Keep shit simple!
*/

//  Hide admin bar
show_admin_bar(false);

// register custom post type 'daily_link'
add_action( 'init', 'create_daily_link' );
function create_daily_link() {
    register_post_type( 'daily_link',
      array(
        'labels' => array( 'name' => __( 'Daily Link' ) ),
        'public' => true
    )
  );
}

add_post_type_support( 'daily_link');


//  Add support for post formats
add_theme_support( 'post-formats', array('image', 'video', 'audio', 'daily_link'));

//  Check the format. Function borrowed from @timomeh
function get_article_format($format) {
  switch($format) {
    case 'image':
    case 'video':
    case 'audio':
      $format = "media";
      break;
    case 'linked_list':
        $format = 'linked-list';
        break;
    default:
      $format = $format;
  }
  get_template_part('article', $format);
}
?>
