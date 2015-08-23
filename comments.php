<?php
if ( post_password_required() )
	return;
?>
<div id="comments">
	<?php if ( have_comments() ) : ?>
		<h3><?php	printf( _n( '1 条评论', '%1$s 条评论'),get_comments_number());
			?></h3>
		<ol>
			<?php wp_list_comments(array('style' => 'ol')); ?>
		</ol>
		<?php
		if ( ! comments_open() && get_comments_number() ) : ?>
		<p class="nocomments"><?php _e( 'Comments are closed.' , 'twentytwelve' ); ?></p>
		<?php endif; ?>

	<?php endif; ?>
	<?php
	$defaults = array(
        'fields'               => apply_filters( 'comment_form_default_fields', $fields ),
        'comment_field'        => '<textarea name="comment" rows="3"></textarea>',
        'must_log_in'          => '',
        'logged_in_as'         => '',
        'comment_notes_before' => '',
        'comment_notes_after'  => '提交评论后若看不到请Ctrl+F5.',
        'id_form'              => '',
        'id_submit'            => 'submit',
        'title_reply'          => '发表评论',
        'title_reply_to'       => __( 'Leave a Reply to %s' ),
        'cancel_reply_link'    => __( 'Cancel reply' ),
        'label_submit'         => '提交评论',
    );
	comment_form($defaults); ?>
</div>