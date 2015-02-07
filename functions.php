<?php
/*
Author: Christian Poplawski
Keep shit simple!
*/

//  Hide admin bar
show_admin_bar(false);

//  Add support for post formats
add_theme_support( 'post-formats', array('image', 'video', 'audio'));

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