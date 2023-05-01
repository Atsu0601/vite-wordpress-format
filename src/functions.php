<?php
/* アイキャッチ画像 */
add_theme_support('post-thumbnails');


// 管理画面　WP ロゴ削除
function hide_admin_logo()
{
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('wp-logo');
}
add_action('wp_before_admin_bar_render', 'hide_admin_logo');


//JS cssのversionを隠す
function remove_cssjs_ver($src)
{
  if (strpos($src, '?ver='))
    $src = remove_query_arg('ver', $src);
  return $src;
}
add_filter('script_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('style_loader_src', 'remove_cssjs_ver', 10, 2);
add_filter('wp_get_attachment_image_attributes', 'my_get_attachment_image_attributes', 10, 2);
function my_get_attachment_image_attributes($attr, $attachment)
{
  $attr['alt'] = $attr['title'] = '';
  return $attr;
}


//ビジュアルエディタ
add_editor_style(array('css/editor-style.css'));