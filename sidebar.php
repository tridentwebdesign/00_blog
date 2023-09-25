<aside>
    <section class="category-tips">
        <h2>カテゴリー</h2>
        <ul>
    <?php
    $args = array(
        'title_li' => '',
        'depth'=> 1,
        'show_count' => 1,
    );
    wp_list_categories($args);
    ?>
</ul>
    </section>
    <div class="grid-zone">
        <section class="pamphlet">
            <h2>資料請求（パンフレット）</h2>
            <div class="aside-img-box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/pamphlet.png" alt="パンフレットバナー">
            </div>
        </section>
        <section class="month-archive">
            <h2>月別アーカイブ</h2>
            <ul>
            <?php 
            wp_get_archives( array( 
                'type' => 'monthly',
                'limit' => '',
                'show_post_count' => true,
            )); ?>
            </ul>
        </section>
        <section class="xtimetine">
            <h2>X（Twitter）</h2>
            <a class="twitter-timeline" data-lang="ja" href="https://twitter.com/TSIT_web_01?ref_src=twsrc%5Etfw" data-height="650px">Tweets by TSIT_web_01</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </section>
        <section class="school">
            <h2>トライデントコンピュータ専門学校</h2>
            <p>トライデントコンピュータ専門学校は、ゲーム、CG、Web、CAD、IT、情報、セキュリティ分野の業界で求められる人材を育成し、全国トップクラスの業界就職率を誇ります。</p>
            <p class="profile-name"><?php the_author_meta("display_name"); ?></p>
            <p><?php the_author_meta("description"); ?></p>
            <?php echo get_avatar(get_the_author_meta('ID'), 160); ?>
            <div class="aside-img-box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/trident_logo.svg" alt="トライデントコンピュータ専門学校">
            </div>
        </section>
        <section class="webdesign">
            <h2>Webデザイン学科</h2>
            <p>2009年から東海地域をはじめ、全国にWebデザイナー・エンジニアなどWebサイト制作者を輩出。基礎からプロになるために必要な技術・知識を学習しています。</p>
            <div class="sns-icons">
                <ul>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/X.svg" alt="X"></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/instagram.svg" alt="Instagram"></li>
                    <li><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/youtube.svg" alt="YouTube"></li>
                </ul>
            </div>
        </section>
        <section class="experience">
            <h2>体験入学</h2>
            <div class="aside-img-box">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/banner.png" alt="体験入学申し込み">
            </div>
        </section>
    </div>
</aside>