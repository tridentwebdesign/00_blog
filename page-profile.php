<?php get_header(); ?>

<main>
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
<div class="contents">
   <div class="document">
    <?php the_content( ); ?> <!-- 記事の内容 -->
   </div>
<div class="tag">
   <?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?> 
   <!-- 記事のタグを<ul><li>で表示 -->
</div>
</article>
<?php endwhile; ?> <!-- 繰り返し終了 -->
<?php endif; ?> <!-- if文終了。-->  
    <?php the_post_navigation(); ?> <!--　前後のページナビゲーションを表示する -->
    <div class="nextpage">
        <span>次の記事</span>
    </div>

    <!-- コメント開始 -->
<section class="comment-area">
  <?php comments_template(); ?>
</section>
<!-- コメント終了 -->

    <section class="reading">
        <h2><span><img src="images/readingicon.png" alt=""></span>あわせて読みたい</h2>
        <div class="reading-innner">
            <div class="article">
                <div class="img-box">
                    <img src="images/dog.png" alt="学生作品">
                    <p class="category-tag">学生作品</p>
                </div>
                <p class="post-time">
                    <time datetime="2023-08-10">2023年8月10日</time>
                </p>
                <h2>学生ポートフォリオ2023</h2>
                <div class="content">
                    <p class="post">夏休みのような長期休暇は、普段なかなか調べられないことや学習などに時 間を費やしたいところです。最近では、JavaScriptのフ…</p>
                </div>
            </div>
            <div class="article">
                <div class="img-box">
                    <img src="images/camp.png" alt="学生生活">
                    <p class="category-tag">学生生活</p>
                </div>
                <p class="post-time">
                    <time datetime="2023-08-10">2023年8月10日</time>
                </p>
                <h2>2022年度合同Web制作合宿</h2>
                <div class="content">
                    <p class="post">夏休みのような長期休暇は、普段なかなか調べられないことや学習などに時 間を費やしたいところです。最近では、JavaScriptのフ…</p>
                </div>
            </div>
            <div class="article">
                <div class="img-box">
                    <img src="images/academy.png" alt="学生生活">
                    <p class="category-tag">Webサイト紹介</p>
                </div>
                <p class="post-time">
                    <time datetime="2023-08-10">2023年8月10日</time>
                </p>
                <h2>2023 アカデミー賞受賞作品のWebサイト</h2>
                <div class="content">
                    <p class="post">夏休みのような長期休暇は、普段なかなか調べられないことや学習などに時 間を費やしたいところです。最近では、JavaScriptのフ…</p>
                </div>
            </div>
        </div>
    </section>
    <?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>

