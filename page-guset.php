<?php
/**
* Template Name: 公开
* @package Golmic
* @since pjax
*/
if (!is_pjax()){
	include('header-guest.php');
};
the_post();
remove_filter('the_content', 'wpautop');

?>
<article class="wow fadeInUpBig" data-wow-delay="0.2s">
<h2><?php the_title(); ?>
<?php if ( current_user_can('level_10') ) : ?>
	<small><?php edit_post_link('编辑'); ?></small>
<?php endif; ?>
</h2>
<?php the_content(); ?>
</article>
<br><br><br>
<div class="pay">
	<p>如果想请我喝杯咖啡</p>
	<img src="http://lujq.me/download/zfb-m.png"><img src="http://lujq.me/download/wxpay.png">
	<p>&uarr;&nbsp;支付宝扫码打赏&nbsp;&nbsp;&uarr;&nbsp;&nbsp;微信扫码打赏&nbsp;&uarr;</p>
</div>
<br><br>
<?php if (!is_pjax()){include('footer.php');};?>