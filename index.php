<?php if (!is_pjax()){
	include('header.php');
};
if (have_posts()){
	if (is_user_logged_in()){
		query_posts($query_string .'&cat=(-11,-13)');
	}//去除 跑步 和 碎语  分类的文章
	else{
		query_posts($query_string .'&cat=(14)');
	}//只显示 公开 分类中的文章
while ( have_posts() ) : the_post();  ?>
<article id="post-<?php the_ID(); ?>" class="wow fadeInRight" data-wow-delay="0.1s">
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
	<small> <?php the_time('Y 年 m 月 d 日 l H:i '); ?>
	<?php if ( current_user_can('level_10') ) : ?>
	<?php edit_post_link('编辑'); ?>
	<?php endif; ?>
	</small></h2>
	<?php the_excerpt(); ?>
</article>
<?php endwhile; ?>
<ul class="pagination">
	<?php pagenav(); ?>
</ul>
<?php };?>
<?php if (!is_pjax()){include('footer.php');};?>