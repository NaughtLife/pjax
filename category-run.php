<?php if (!is_pjax()){include('header.php');};?>
<h2>跑步记录</h2><hr>
<style>
  td{
    text-align: center;
  }
  tbody td{
    font-family: polya;
  }
  tbody td:hover{
    background-color: #f5f5f5;
  }
  p{
    font-family: polya;
  }
</style>
<?php
if ( have_posts() ) :
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$args = array(
    	'showposts' => -1,
    	'category__in'   => array(13),
    	'paged' => $paged,
      'order' => 'ASC',
	);
	query_posts($args);
	echo "<div class='table-responsive'><table class='table'><tr><td>周日</td><td>周一</td><td>周二</td><td>周三</td><td>周四</td><td>周五</td><td>周六</td></tr><tr><td></td><td></td><td>Dec.16<br>1600</td><td>17<br>零</td><td>18<br>1000</td><td>19<br>1800</td><td>20<br>1600</td></tr><tr><td>21<br>2000</td><td>22<br>2200</td><td>23<br>1800</td><td>24<br>1000</td><td>25<br>1200</td><td>26<br>2000</td><td>27<br>1200</td></tr><tr><td>28<br>3000</td><td>29<br>2000</td><td>30<br>1200</td><td>31<br>400</td><td>Jan.1<br>零</td><td>2<br>1200</td>";
	$joe = 6;//循环开始的第一天是周几
	$lastmonth = 0;
	$lastday = 0;
	while (have_posts()) :
  		the_post();
  		echo "<td>";
  		if ($lastday != 0 && get_the_time('z') != $lastday + 1) {
  			echo "</td>";
  			for ($i = 2; $i < get_the_time('z') - $lastday; $i++) { 
  				echo "<td>@</td>";
  				$joe += 1;
  				if ($joe % 7 ==0){
    				echo "</tr><tr>";
  				}
  			}
  			echo "<td>";
  		}
		if (get_the_time('m') != $lastmonth){
  	    	echo date('M.j',get_the_time('U'));
  		}
  		else{
  	  		echo get_the_time('j');
  		}
  		$lastmonth = get_the_time('m');
  		$lastday = get_the_time('z');
  		echo "<br>".get_the_content()."</td>";
  		$joe += 1;
  		if ($joe % 7 ==0){
    		echo "</tr><tr>";
  		}
	endwhile;wp_reset_query();
endif; ?>
</tr></table></div>
<p>为了锻炼身体或者别的，每天坚持跑步，也就只有这些能证明我还是有点意志的。我讨厌有风的日子，因为风吹着跑步时很不爽，风大的时候会少跑一些。</p>
<?php if (!is_pjax()){include('footer.php');};?>