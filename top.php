<div id='head' class="row">
    <?php if ( current_user_can( 'level_10') ) :?>
    <nav id="primary-navigation" class="primary-navigation">
        <li>
            <a href="<?php bloginfo('url'); ?>/wp-admin/" target='_blank'>后台</a>
        </li>
        <li>
            <a href="<?php bloginfo('url'); ?>/wp-admin/post-new.php" target='_blank'>新文章</a>
        </li>
        <li>
            <a href="<?php bloginfo('url'); ?>/wp-admin/users.php" target='_blank'>用户</a>
        </li>
        <li>
            <a href="<?php bloginfo('url'); ?>/wp-admin/user-new.php" target='_blank'>新用户</a>
        </li>
        <li>
            <a href="<?php bloginfo('url'); ?>/wp-admin/admin.php?page=snippets" target='_blank'>函数</a>
        </li>
    </nav>
    <?php endif; ?>
    <div class="wow shake">
        <h1>
        <a href="http://lujq.me/">Golmic</a>
        <?php if (is_user_logged_in()){
        echo '<small>'.get_bloginfo('description').'</small>';
        }
        else{ echo '<small>游客仅能浏览部分文章,请<a href="http://lujq.me/login">登录</a>后浏览博客全部内容</small>';};?>
    </h1></div>
    <?php if (is_user_logged_in()):?>
    <nav class="col-lg-10 col-lg-offset-1 navbar navbar-default wow tada" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">导航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php bloginfo('url'); ?>">首页</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if (current_user_can( 'level_10')){?>
                    <li><a href="<?php bloginfo('url');?>/category/public/">公开</a></li>
                    <?php }?>
                    <li><a href="<?php bloginfo('url');?>/category/diary/">日记</a></li>
                    <li><a href="<?php bloginfo('url');?>/category/consider/">思考</a></li>
                    <li><a href="<?php bloginfo('url');?>/category/excerpts/">摘抄</a></li>
                    <li><a href="<?php bloginfo('url');?>/category/love/">爱情</a></li>
                    <li><a href="<?php bloginfo('url');?>/category/says/">碎语</a></li>
                    <li><a href="<?php bloginfo('url');?>/category/run/">跑步</a></li>
                    <li><a href="<?php bloginfo('url');?>/%e7%95%99%e8%a8%80%e6%9d%bf/">留言板</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="<?php bloginfo('url'); ?>/wp-admin/profile.php">个人资料</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php endif; ?>
</div>