<?php
add_action( 'after_setup_theme', register_nav_menu( 'primary', 'Primary Menu' ));
function is_pjax(){
	return array_key_exists('HTTP_X_PJAX', $_SERVER) && $_SERVER['HTTP_X_PJAX'];
};
function pagenav(){
	global $paged, $wp_query;
	$range = 5;
	if (!$max_page) {$max_page = $wp_query->max_num_pages;}
	if($max_page > 1){
		if(!$paged){$paged = 1;}
		if($paged != 1){echo "<li><a href='" . get_pagenum_link(1) . "'> &laquo; </a></li>";
			echo "<li>";previous_posts_link('‹');echo"</li>";}
		if($max_page <= $range){
    		for($i = 1; $i <= $max_page; $i++){
    			echo "<li";if($i==$paged)echo" class='active'";echo">
    			<a href='" . get_pagenum_link($i) ."'>".$i."</a></li>";}
    	}
    	elseif($paged > $max_page-ceil($range/2)){
			for($i = $max_page+1-$range; $i <= $max_page; $i++){
    			echo "<li";if($i==$paged)echo" class='active'";echo">
    			<a href='" . get_pagenum_link($i) ."'>".$i."</a></li>";}
    	}
        elseif($paged <= ceil($range/2)){
            for($i = 1; $i <= $range; $i++){
                echo "<li";if($i==$paged)echo" class='active'";echo">
                <a href='" . get_pagenum_link($i) ."'>".$i."</a></li>";}
        }
    	else{
    		for($i = $paged+1-ceil($range/2); $i <= $paged-1+ceil($range/2); $i++){
    			echo "<li";if($i==$paged)echo" class='active'";echo">
    			<a href='" . get_pagenum_link($i) ."'>".$i."</a></li>";}
    	}
		if($paged != $max_page){
			echo "<li>";next_posts_link('›');echo"</li>";
    		echo "<li><a href='" . get_pagenum_link($max_page) . "'>&raquo;</a></li>";
    	}
    }
};
?>