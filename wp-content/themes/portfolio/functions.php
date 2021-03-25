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


 ?>
