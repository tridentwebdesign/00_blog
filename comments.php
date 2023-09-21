<div id="comments" class="comments">
  <?php if( have_comments() ): //コメントがあったらコメントリストを表示する ?>
  <h3 class="widget_title">コメント</h3>
  <ol class="commets-list">
    <?php wp_list_comments( 'avatar_size=80' ); ?>
  </ol>
<?php endif; ?>
  <?php $args = array( 
    'title_reply' => 'コメントする',
    'comment_notes_before' => '<p>記事は楽しんでいただけましたでしょうか。気になることがありましたら、コメントにお知らせください。</p>',
    'comment_notes_after' => '<p>※は必須項目となっています。</p>',
    'label_submit' => 'コメントする'
  ); 
  comment_form( $args ); ?> 
</div>
