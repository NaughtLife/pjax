<?php if (!is_pjax()){include('header.php');};?>
<title><?php wp_title( '|', true, 'right' ); echo"Golmic";?></title>
<p>分类目录</p>
<?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" class="wow fadeInLeft" data-wow-delay="0.1s">
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><small> <?php the_time('Y 年 m 月 d 日 l H:i '); ?>


<?php if ( current_user_can('level_10') ) : ?>
<?php edit_post_link('编辑'); ?>
<?php endif; ?>

</small></h2>

<?php the_excerpt(); ?>
</article>
            <?php endwhile; ?>
            <?php endif; ?>
 <ul class="pagination"><?php pagenav(); ?></ul>
 <script type="text/javascript">
   $(document).ready(function(){
   	$(".wp-audio-shortcode").css("visibility","visible");
   });
</script>
<?php if (!is_pjax()){include('footer.php');};?>