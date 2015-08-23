<?php
if (!is_pjax()){
	include('header.php');
};
the_post();
?>
<article id="post-<?php the_ID(); ?>" class="wow fadeInUpBig" data-wow-delay="0.2s">
	<h2><?php the_title(); ?>
	<?php if ( current_user_can('level_10') ) : ?>
	<small><?php edit_post_link('编辑'); ?></small>
	<?php endif; ?>
	</h2>
	<h6><?php the_time('Y 年 m 月 d 日 l H:i '); ?></h6>
	<?php the_content(); ?>
</article>
<br>
<br>
<div class="pay">
	<p>如果想请我喝杯咖啡</p>
	<img src="http://lujq.me/download/zfb-m.png"><img src="http://lujq.me/download/wxpay.png">
	<p>&uarr;&nbsp;支付宝扫码打赏&nbsp;&nbsp;&uarr;&nbsp;&nbsp;微信扫码打赏&nbsp;&uarr;</p>
</div>
<br>
<br>
<?php if (is_user_logged_in()){comments_template();};?>
<ul class="pagination">
	<?php pagenav(); ?>
</ul>
<script type="text/javascript">
$(document).ready(function() {
    $(".wp-audio-shortcode").css("visibility", "visible");
    $('pre code').each(function(i, block) {
        hljs.highlightBlock(block);
    });
});
</script>

<?php if (!is_pjax()){include('footer.php');};?>