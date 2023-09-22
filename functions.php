<?php
function add_my_scripts() {

//オリジナルJavaScriptを</body>前に読み込み
wp_enqueue_script('prism',get_theme_file_uri( '/js/prism.js' ),
array(),'',true);
wp_enqueue_script('slick',get_theme_file_uri( '/js/slick.min.js' ),
array(),'',true);
wp_enqueue_script('myscript',get_theme_file_uri( '/js/script.js' ),
array(),'',true);
}
add_action('wp_enqueue_scripts', 'add_my_scripts');

function my_theme_setup() {
    //アイキャッチ画像を有効化
    add_theme_support('post-thumbnails');
  
    //heade内にフィードリンクを出力
    add_theme_support('automatic-feed-links');

    //自動でtitleタグ挿入
    add_theme_support( 'title-tag' );
  
    //html5形式で出力
    add_theme_support( 'html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'script',
      'style',
  ) );

    // 固定ページで「抜粋」を有効化
    add_post_type_support('page', 'excerpt');

    // カテゴリーとタグのmeta descriptionからpタグを除去
    remove_filter('term_description','wpautop');
}
add_action( 'after_setup_theme', 'my_theme_setup');


// ウィジェットの有効化
function theme_widgets_init(){
  register_sidebar(array(
      'name'=>'ソーシャルボタン',
      'id'=>'share-arear',
  ));
}
add_action('widgets_init','theme_widgets_init');


function motoki_comment_field_custom( $fields ) {
  $comment_field = '<p class="comment-form-comment"><label for="comment">コメント内容<span class="required">※</span></label><textarea id="comment" name="comment" cols="45" rows="8" maxlength="65525" required="" placeholder="内容をご記入ください"></textarea></p>';
  unset( $fields['comment'] );
  $fields['comment'] = $comment_field;
  $fields['author'] = '<p class="comment-form-author"><label for="author">お名前</label><input id="author" name="author" type="text" value="" size="30" maxlength="245" autocomplete="name" placeholder="ハンドルネームでも可"></p>';
  $fields['url'] = '';
  $fields['email'] = ''; 
  return $fields;
}
add_filter( 'comment_form_fields', 'motoki_comment_field_custom');