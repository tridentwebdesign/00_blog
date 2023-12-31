<?php get_header(); ?>

<main>
        <?php get_template_part('slider') ?>
        <h2 class="archive-title"><?php the_archive_title(); ?></h2>
        <div class="posts">
            <?php if (have_posts()) : //もし1件以上記事があったら 
            ?>
                <?php while (have_posts()) : //記事がある間は繰り返す
                    the_post(); //次の記事のデータをセットする
                ?>
                    <!--1記事め開始-->
                    <article id="post-<?php the_ID(); ?>" <?php post_class("post-box box-link"); ?> data-link="<?php the_permalink(); ?>">
                        <div class="img-box">
                            <p class="category-tag"><?php the_category(','); ?></p>
                            <?php if(has_post_thumbnail()): ?><!-- もしアイキャッチ画像があるのであれば、 -->
                                <?php the_post_thumbnail('thumbnail'); ?>
                            <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                            <?php endif; ?>
                        </div>
                        <p class="post-time">
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                            <span class="update">最終更新日：<time datetime="<?php the_modified_date('Y-m-d'); ?>"><?php the_modified_date('Y年m月d日'); ?></time></span>
                        </p>
                        <h2 class="post-title"><?php echo wp_trim_words( get_the_title(), 26, '…' ); ?></h2>
                        <div class="post">
                            <?php echo wp_trim_words( get_the_content(), 70, '[続く]' ); ?>
                        </div>
                    </article>
                    <!--1記事め終了-->
                <?php endwhile; //ループ終了
                ?>


            <?php else : //もし、表示すべき記事がなかったら 
            ?>
                <p>まだ記事はありません。</p>
            <?php endif; //条件分岐終了 
            ?>
        </div>
        
        <!--ページネーション開始-->
         <?php the_posts_pagination(); ?>
        <!--ページネーション終了-->

    </main>
    <?php get_footer(); ?>
