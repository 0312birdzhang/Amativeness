<footer id="colophon" role="contentinfo">
	<div class="container">
		<SPAN id=span_dt_dt></SPAN>
		<SCRIPT language=javascript>
			function show_date_time(){
			window.setTimeout("show_date_time()", 1000);
			BirthDay=new Date("2/9/2014 11:30:00");//这个日期是可以修改的
			today=new Date();
			timeold=(today.getTime()-BirthDay.getTime());
			sectimeold=timeold/1000
			secondsold=Math.floor(sectimeold);
			msPerDay=24*60*60*1000
			e_daysold=timeold/msPerDay
			daysold=Math.floor(e_daysold);
			e_hrsold=(e_daysold-daysold)*24;
			hrsold=Math.floor(e_hrsold);
			e_minsold=(e_hrsold-hrsold)*60;
			minsold=Math.floor((e_hrsold-hrsold)*60);
			seconds=Math.floor((e_minsold-minsold)*60);
			span_dt_dt.innerHTML="博客已运行"+daysold+"天"+hrsold+"小时"+minsold+"分"+seconds+"秒";
			}
			show_date_time();
		</SCRIPT>
		<p>托管于<a href="http://sae.sina.com.cn/" target="_blank">SAE</a>.<a href="http://www.google.com/analytics/" target="_blank">Google Analytics </a><a href="http://tongji.baidu.com/" target="_blank">百度统计</a>提供网站统计服务.</p>
		<p>&copy; 2015 <a href="<?php echo home_url(); ?>/"><?php bloginfo('name'); ?></a>. 由 <a href="http://wordpress.org" target="_blank">Wordpress</a> 强力驱动. Theme By <a href="https://github.com/DIYgod/Amativeness" target="_blank">Amativeness</a>. 去你妈的备案</p>
    	</div>
</footer><!-- #colophon -->
</div><!-- #page -->
<script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
<?php wp_footer(); ?>

	<!--.积分特效-->
	<script>
	jQuery(document).ready(function($) {
	$("html,body").click(function(e){
		if(weather.state) var n=weather.c[Math.round(Math.random()*3)];//随机数
		var $i=$("<b/>").text("+"+n);//添加到页面的元素
		var x=e.pageX,y=e.pageY;//鼠标点击的位置
		$i.css({
			"z-index":99999,
			"top":y-20,
			"left":x,
			"position":"absolute",
			"color":"#E94F06"
		});
		$("body").append($i);
		$i.animate(
			{"top":y-180,"opacity":0},
			2000,
			function(){$i.remove();}
		);
		e.stopPropagation();
	});
	});
	</script>
	<!--.end积分特效-->

	<!--.浮动小人-->
	<div class="wppet">
		<script type="text/javascript">
			<?php if(is_home()) echo 'var isindex=true;var title="";';else echo 'var isindex=false;var title="',  get_the_title(),'";'; ?>
			<?php if((($display_name = wp_get_current_user()->display_name) != null)) echo 'var visitor="',$display_name,'";'; else if(isset($_COOKIE['comment_author_'.COOKIEHASH])) echo 'var visitor="',$_COOKIE['comment_author_'.COOKIEHASH],'";';else echo 'var visitor="游客";';echo "\n"; ?>
		</script>
		<script type="text/javascript" src="http://www.birdzhang.xyz/spig.js"></script>
		<style>
			.spig {display:block;width:140px;height:132px;position:absolute;bottom: 300px;left:160px;z-index:9999;}
			#message{color :#191919;border: 1px solid #c4c4c4;background:#ddd;-moz-border-radius:5px;-webkit-border-radius:5px;border-radius:5px;min-height:1em;padding:5px;top:-45px;position:absolute;text-align:center;width:auto !important;z-index:10000;-moz-box-shadow:0 0 15px #eeeeee;-webkit-box-shadow:0 0 15px #eeeeee;border-color:#eeeeee;box-shadow:0 0 15px #eeeeee;outline:none;}
			.mumu{width:104px;height:132px;cursor: move;background:url(http://www.birdzhang.xyz/spig.png) no-repeat;}
		</style>
		<div id="spig" class="spig">
		    <div id="message">加载中……</div>
		    <div id="mumu" class="mumu"></div>
		</div>
	</div>
	<!--.end浮动小人-->

	<!--.加载状态-->
	<script type="text/javascript">
		$(window).load(function() {
		$("#circle").fadeOut(500);
		$("#circle1").fadeOut(700);
		});
	</script>
	<!--.end加载状态-->

</body>
</html>
