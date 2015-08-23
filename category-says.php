<?php if (!is_pjax()){include('header.php');};?>
<h2>想起些什么要记下的……</h2><hr>
<?php
if ( have_posts() ) :?>
  <?php
    /*
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
      // 控制只显示10篇文章，如果将10改成-1将显示所有文章
        'showposts' => -1,
        'category__in'   => array(13),
        'paged' => $paged
    );
query_posts($args);*/
while ( have_posts() ) : 
	the_post();
	if (get_post_meta($post->ID, "no_p_tag", $single = true)){
	remove_filter('the_content', 'wpautop');} 
?>
<article id="post-<?php the_ID(); ?>">
<?php the_content(); ?>
<blockquote class="pull-right"><?php the_title(); ?><small><?php the_time('Y年m月d日 l H:i '); ?>
<?php if ( current_user_can('level_10') ) : ?>
<?php edit_post_link('编辑'); ?>
<?php endif; ?>
</small></blockquote>
</article>
<hr>
<?php endwhile;/*wp_reset_query();*/ ?>
<?php endif; ?>
<ul class="pagination"><?php pagenav(); ?></ul>
<script type="text/javascript">
   $(document).ready(function(){
   $(".wp-audio-shortcode").css("visibility","visible");
});
</script>
<?php if (!is_pjax()){include('footer.php');};?>