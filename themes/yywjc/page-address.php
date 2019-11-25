<?php 
// Template Name:page-address
get_header();?>

<style>

</style>

<div class="page-header">
	<div class="container">
		<h1 class="page-header_title">来院路线</h1>
		<span class="page-header_content">明潭眼科/来院路线</span>
	</div>
</div>

<div class="container">
	<div class="address_main">
		<a href="javascript:" class="address_text"><i class="glyphicon glyphicon-search"></i></a>
		<div class="address_img">
			<img src="<?php bloginfo('template_directory');?>/images/mapImg-Shanghai.jpg">
		</div>
		<div class="address_shadow">
			<div class="address_title">
				<h4>上海总院</h4>
				<span>上海市杨浦区江浦路2178号</span>
			</div>

			<div class="person-profile_icon-list">
				<div class="icon-list_item">
					<i class="glyphicon glyphicon-earphone" style="color:#fff;"></i>
					<div class="icon-list_text">021-55961876</div>
				</div>
				<div class="icon-list_item">
					<i class="glyphicon glyphicon-envelope" style="color:#fff;"></i>
					<div class="icon-list_text">mingtan120@163.com</div>
				</div>
			</div>
			<a href="<?php echo get_permalink(8); ?>" class="address_href">查看详细介绍</a>
		</div>
		<div class="address_map">
			<iframe width='100%' height='100%' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://yuntu.amap.com/share/ZrYnEb'></iframe>
			<span>收起>></span>
		</div>
	</div>

	<div class="address_main">
		<a href="javascript:" class="address_text address_right"><i class="glyphicon glyphicon-search"></i></a>
		<div class="address_img">
			<img src="<?php bloginfo('template_directory');?>/images/mapImg-Changshu.jpg">
		</div>
		<div class="address_shadow">
			<div class="address_title">
				<h4>常熟分院</h4>
				<span>常熟市锁澜南路77号</span>
			</div>

			<div class="person-profile_icon-list">
				<div class="icon-list_item">
					<i class="glyphicon glyphicon-earphone" style="color:#fff;"></i>
					<div class="icon-list_text">0512-52700768</div>
				</div>
				<div class="icon-list_item">
					<i class="glyphicon glyphicon-envelope" style="color:#fff;"></i>
					<div class="icon-list_text">mingtan120@163.com</div>
				</div>
			</div>
			<a href="<?php echo get_permalink(17); ?>" class="address_href">查看详细介绍</a>
		</div>
		<div class="address_map address_right_map">
			<iframe width='100%' height='100%' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://yuntu.amap.com/share/6jaIf2'></iframe>
			<span><<收起</span>
		</div>
	</div>

	<div class="address_main">
		<a href="javascript:" class="address_text"><i class="glyphicon glyphicon-search"></i></a>
		<div class="address_img">
			<img src="<?php bloginfo('template_directory');?>/images/mapImg-Jingjiang.jpg">
		</div>
		<div class="address_shadow">
			<div class="address_title">
				<h4>靖江分院</h4>
				<span>靖江市江阳路227号</span>
			</div>

			<div class="person-profile_icon-list">
				<div class="icon-list_item">
					<i class="glyphicon glyphicon-earphone" style="color:#fff;"></i>
					<div class="icon-list_text">0523-81160196</div>
				</div>
				<div class="icon-list_item">
					<i class="glyphicon glyphicon-envelope" style="color:#fff;"></i>
					<div class="icon-list_text">mingtan120@163.com</div>
				</div>
			</div>
			<a href="<?php echo get_permalink(19); ?>" class="address_href">查看详细介绍</a>
		</div>
		<div class="address_map">
			<iframe width='100%' height='100%' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://yuntu.amap.com/share/YzIrqq'></iframe>
			<span class="droup-none">收起>></span>
		</div>
	</div>
</div>
<script type="text/javascript">
	$('.address_text').click(function(){
		$(this).nextAll('.address_map').css('left','0px');
	})

	$('.address_map span').click(function(){
		$(this).parent('.address_map').css('left','1200px');
	})
	$('.address_map span').on('touchstart',function(){
		console.log(1111);
		$(this).closest('.address_map').css('left','1200px');
	})
// 	$('.address_map span').touch(function(){
// 		console.log(22222);
// 		$(this).parent('.address_map').css('left','1200px');
// 	})
	
	$('.address_right').click(function(){
		$(this).nextAll('.address_map').css('left','0px');
	})

	$('.address_right_map span').click(function(){
		$(this).parent('.address_map').css('left','-1200px');
	})
</script>
<?php get_footer(); ?> 