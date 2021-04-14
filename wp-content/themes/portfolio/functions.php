<?php

// アイキャッチ画像の設定
add_theme_support('post-thumbnails');

//概要（抜粋）の文字数調整
function my_excerpt_length($length) {
	return 70;
}
add_filter('excerpt_length', 'my_excerpt_length');

//概要（抜粋）の省略文字
function my_excerpt_more($more) {
	return '　　【続きを読む・・】';
}
add_filter('excerpt_more', 'my_excerpt_more');

// 見出しデザイン調整
function custom_editor_settings( $initArray ){
 $initArray['block_formats'] = "見出し1=h2; 見出し2=h3; 見出し3=h4; 見出し4=h5; 見出し5=h6;";
 return $initArray;
}
add_filter( 'tiny_mce_before_init', 'custom_editor_settings' );

 ?>
