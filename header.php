<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <?php if( is_home() || is_front_page() ): ?>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php elseif( is_category() ): ?>
    <meta name="description" content="<?php echo category_description(); ?>">
    <?php elseif( is_tag() ): ?>
    <meta name="description" content="<?php echo tag_description(); ?>">
    <?php elseif( is_singular() ): ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>">
    <?php endif; ?>

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <?php get_template_part('ogp') ?>

    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/ress.min.css" />
    <!-- リセットCSSを設定 -->
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url(get_theme_file_uri()); ?>/css/style.css" />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <!-- jQueryを使うのであれば、最初に読み込む -->
    <!-- コメントの返信時に位置を調整 -->
    <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" ); ?>
    <?php wp_head(); ?>
</head>

<body <?php body_class("original_class"); ?>>
    <?php wp_body_open(); ?>
    <header>
        <nav class="gnav">
            <ul>
                <li><a href="<?php echo get_page_link(2174); ?>">このブログについて</a></li>
                <li>カテゴリー</li>
            </ul>
        </nav>
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('/images/logo.svg')); ?>" alt="ウェブDeBLOG"> </a></h1>
        <p class="leadtext">トライデントコンピュータ専門学校 Webデザイン学科の最新情報を紹介しています。<br>
            学生へのインタビュー記事から学生作品の解説、Webデザイン・マークアップ・プログラミングの授業風景、プロジェクト発表会、<br class="no-newline">
            名古屋のWeb制作会社情報、イベント参加レポートやWeb制作の技術解説などWeb制作に関連する記事を掲載しています。<br class="no-newline">
            トライデントコンピュータ専門学校は、いま話題の名古屋駅からユニモール地下街を歩いて3分です。
        </p>
    </header>