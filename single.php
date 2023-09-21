<?php get_header(); ?>

<main>
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">     
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>
<?php if (have_posts() ): ?><!-- もし、記事が1件以上あったら-->
  <?php while (have_posts()):the_post(); ?>
  <!-- 記事の表示条件で繰り返す（※個別投稿ページの場合は、1回）--> 
<article  <?php post_class("article"); ?> > <!-- 特別なclassを付随させる -->
  <div class="article-header">
    <h1><a href="<?php the_permalink(); ?>">
      <?php the_title(); ?> <!-- 記事のタイトル -->
    </a></h1>
    <div class="post-info">
      <p class="category-tag"><?php the_category( ',' ); ?></p> <!-- カテゴリー -->
      <p class="post-time">
         <time datetime="<?php the_time('Y-m-j'); ?>"><?php the_time('Y年n月j日(D)'); ?></time> <!-- 記事の投稿日 -->
         <span class="update">最終更新日：<time datetime="<?php the_modified_date('Y-m-j') ?>"><?php the_modified_date('Y年n月j日(D)') ?></time></span> <!-- 記事の最終更新日 -->
      </p>
    </div>
  </div>
  <!-- .article-header end -->
<div class="contents">
   <div class="document">
    <?php the_content( ); ?> <!-- 記事の内容 -->
   </div>
<div class="tag">
   <?php the_tags('<ul><li class="tagbox">','</li><li class="tagbox">','</li></ul>'); ?> 
   <!-- 記事のタグを<ul><li>で表示 -->
</div>

<!-- ソーシャルボタン -->
<ul class="social-button">
<?php dynamic_sidebar('share-arear'); ?>
</ul>

</article>
<?php endwhile; ?> <!-- 繰り返し終了 -->
<?php endif; ?> <!-- if文終了。-->  

    <!-- 前後のページナビゲーションを表示する -->
  <div class="nav-links nextpage">
    <span class="nav-next"><?php next_post_link('%link', '新しい記事'); ?></span>
    <span class="nav-previous"><?php previous_post_link('%link', '前の記事'); ?></span> 
  </div>
    
    <!-- コメント開始 -->
<section class="comment-area">
  <?php comments_template(); ?>
</section>
<!-- コメント終了 -->
</div>
<!-- .contents end -->
    <section class="reading">
        <h2><span><img src="<?php echo esc_url(get_theme_file_uri('images/readingicon.png')); ?>" alt=""></span>あわせて読みたい</h2>
        <?php
            $categ = get_the_category($post->ID);
            $catID = array();
            foreach($categ as $cat){
                array_push($catID, $cat -> cat_ID);
            }
            $args = array(
                'post__not_in' => array($post->ID),
                'category__in' => $catID,
                'posts_per_page' => 3,
                'orderby' => 'rand'
            );
            $the_query = new WP_Query($args);
            if($the_query -> have_posts()) :?>
        <div class="reading-innner">
        <?php while($the_query -> have_posts()) : $the_query -> the_post(); ?>
	    <div class="article">
            <div class="img-box">
                <a href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()): the_post_thumbnail('thumbnail');
                    else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/images/thumbnail-default.jpg" alt="<?php the_title(); ?>">
                    <?php endif; ?>
                </a>
            </div>
            <p class="post-time"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time></p>
			<h2><a href="<?php the_permalink(); ?>"><?php echo wp_trim_words( get_the_title(), 26, '…' ); ?></a></h2>
            <div class="content">
                <p class="post"><?php echo wp_trim_words( get_the_content(), 70, '' ); ?></p>
            </div>
	    </div>
        <?php endwhile; ?>
        </div>
        <?php endif; wp_reset_postdata(); ?>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>

