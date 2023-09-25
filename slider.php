<section class="slider">
<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 9,
  );
  $the_query = new WP_Query($args);
?>
<?php if ($the_query->have_posts()): ?>
<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
    <!-- ここに投稿がある場合の記述 -->
    <article class="box-link" data-link="<?php the_permalink(); ?>">
        <div class="slider_box">
        <?php if(has_post_thumbnail()): ?><!-- もしアイキャッチ画像があるのであれば、 -->
                        <?php the_post_thumbnail( 'medium' ); ?>
                    <?php else: ?><!--アイキャッチ画像がない場合は、デフォルトの画像を表示-->
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/thumbnail-default.jpg" alt="デフォルトのアイキャッチ画像" /></p>
                    <?php endif; ?>
        </div>
        <h2><?php echo wp_trim_words( get_the_title(), 26, '…' ); ?></h2>
    </article>
    <?php endwhile; ?>
<?php else: ?>
  <!-- ここに投稿がない場合の記述 -->
<?php endif; wp_reset_postdata(); ?>  
</section>