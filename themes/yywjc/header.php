<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/bs/css/bootstrap.min.css">
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/js/swiper-3.3.1.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/js/jquery.fancybox.min.css">
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/layer/layer.js"></script>

	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/js/animate.min.css">
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/animate.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/yywjc.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/datepicker/jquery-ui-timepicker-addon.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/js/datepicker/datepicker.css">
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/jquery.ui.core.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/datepicker/jquery.ui.datepicker.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/datepicker/jquery.datepicker-zh-CN.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/datepicker/jquery-ui-timepicker-addon.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/js/datepicker/jquery-ui-timepicker-zh-CN.js"></script>
<!-- 	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/bs/js/bootstrap.min.js"></script> -->

	<script type="text/javascript">
        var ajaxurl = '<?php echo admin_url('admin-ajax.php')?>';
    </script>
	<?php wp_head(); ?>
</head>

<body>
<!-- 加载动画 -->
<!-- <div id="page-preloader">
	<div class="page-preloader-spin"></div>
</div> -->
<!-- 结束 -->

<div class="top_container">
	<div class="container" style="padding:0px 15px;padding-right:0px;">
		<div class="top">
			<div class="top_left">
				<div class="widget" onclick="location='<?php echo get_permalink(60); ?>'" style="cursor:pointer"> 
					<div class="textwidget"><strong>上海明潭眼科欢迎您！</strong></div>
				</div>
			</div>
			<div class="top_right">
				<!--<span class="icon-box_subtitle" style="margin-right:30px">您好，
                    <a
                        <?if(!is_user_logged_in()){?>
                        href="javascript:void(0);" onclick="window.wsocial_dialog_login_show();"
                        <?}?>
                        style="color: #e57373;">
                        <?if(is_user_logged_in()){global $current_user;echo $current_user->display_name;}else{?>
                            请登录
                      <?}?>
                    </a>&nbsp;&nbsp;
                    <? if(is_user_logged_in()){?>
                        <a href="<?php echo wp_logout_url(get_home_url()); ?>">退出</a>
                        |&nbsp;&nbsp;
                    <a href="javascript:" onclick="get_reserve_list()">我的预约</a>&nbsp;&nbsp;
                      <?php $current_user = wp_get_current_user(); if($current_user->ID == 12) {  ?>
						|&nbsp;&nbsp;
						<a href="javascript:" onclick="location='<?php echo get_permalink(559); ?>'">预约管理</a>&nbsp;&nbsp;
						<?php } ?>
					<?}?>
|</span>-->
				<div class="widget" onclick="location='<?php echo get_permalink(60); ?>'" style="cursor:pointer">
					<div class="icon-box">
						<i class="glyphicon glyphicon-home"></i>
						<p class="icon-box_subtitle">地址：上海市杨浦区江浦路2178号</p>
					</div>
				</div>  
			</div> 
		</div>
	</div>

</div>


<header class="header_container">
	<div class="container" style="padding:0px 15px;padding-right:0px;">
		<div class="header">
			<a class="header_logo" href="<?php bloginfo('home');?>">
				<img src="<?php bloginfo('template_directory');?>/images/logo-MingTan.png">
			</a>
		    <?php
				wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_class'     => 'main-navigation',
				'container_class'=>'header_main-navigation'
			 ) );
			?>
			<a class="btn btn-secondary btn-featured" href="http://www.mtyk120.com/yuyue/" >立即预约</a>
		</div>
	</div>
	<div class="bg_c"></div>
</header>


<header class="header_container2">
	<div class="container" style="padding:0px 15px;padding-right:0px;">
		<div class="header">
			<a class="header_logo" href="<?php bloginfo('home');?>">
				<img src="<?php bloginfo('template_directory');?>/images/logo-MingTan.png">
			</a>
		    <?php
				wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_class'     => 'main-navigation',
				'container_class'=>'header_main-navigation'
			 ) );
			?>
			<!--<a class="btn btn-secondary btn-featured" onclick="login_button();">立即预约</a>-->
		</div>
	</div>
</header>
	
<header  class="navbar navbar-default header_container3 navbar-static-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">明谭眼科</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      	<?php
					wp_nav_menu( array(
						'theme_location' => 'top',
						'menu_class'     => 'main-navigation',
						'container_class'=>'header_main-navigation'
					 ) );
			?>     
    </div>
  </div>
<script>
	$(document).ready(function(){
		var wh = $(window).width();
		if(wh<769){
			$('.menu-item-has-children>a').attr('data-href',$('.menu-item-has-children>a').attr('href')).removeAttr("href");
		}
		$(document).on('click','.navbar-toggle',function(){
			var navin = $(this).closest('.navbar-header').siblings('.navbar-collapse');
			if(navin.hasClass('in')){
				$(this).closest('.navbar-header').siblings('.navbar-collapse').removeClass('in');
			}else{
				$(this).closest('.navbar-header').siblings('.navbar-collapse').addClass('in');
			}		
		})
		document.body.addEventListener('touchstart', function () { });
	})	
</script>
</header>

<!-- 回到顶部 -->
<ul class="return_top">
	<li class="return_top_li">
		<span>回到顶部</span>
		<i class="glyphicon glyphicon-menu-up"></i>
	</li>
<!--	<li>-->
<!--		<span>在线咨询</span>-->
<!--		<img src="--><?php //bloginfo('template_directory');?><!--/images/ico-onLine.png">-->
<!--	</li>-->
	<li class="return_top_qr">
		<!-- <span>公众号</span> -->
		<img src="<?php bloginfo('template_directory');?>/images/ico-QR.png">
	</li>
	<li>
		<span>QQ</span>
		<img src="<?php bloginfo('template_directory');?>/images/ico-QQ.png">
	</li>
	<li>
		<a href="/yuyue"><img src="<?php bloginfo('template_directory');?>/images/ico-appoint.png"></a>
		
		<span>在线预约</span>
		
	</li>
</ul>
<!-- 结束 -->


<div class="layer_form_div" style="display:none">
	<form class="layer_form">
		<h1>预约-登录</h1>
		<span><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;<span>请输入正确手机号</span></span>
		<div class="form-group clearfix">
			<label for="inputTel" class="control-label">手机号</label>
		    <input type="text" class="form-control" id="inputTel" placeholder="输入手机号" value="" oninput="myFunction()">
		</div>
		<div class="form-group clearfix">
			<label for="inputY" class="control-label">验证码</label>
		    <input type="text" class="form-control" id="inputY" placeholder="输入验证码">
		    <button class="inputY_button" >发送验证码</button>
		</div>
		<input class="login_button" onclick="loginTel()" type="button" value="登录">
	</form>
</div>


<div class="layer_form_info" style="display:none">
	<div class="layer_form_info_main clearfix">
		<h1>预约-填写患者信息</h1>
		<div class="clearfix">
			<form class="layer_form1" action="<?php echo admin_url('admin-ajax.php')?>" onsubmit="add_patient(this);return false;">
                <input type="hidden" name="action" value="add_patient">
				<span><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;请输入姓名</span>
				<div class="form-group clearfix">
					<label class="control-label">预约姓名</label>
				    <input type="text" class="form-control" placeholder="姓名" value="" id="p_name" name="p_name">
				</div>
				<div class="form-group clearfix">
					<label class="control-label">性别</label>
				    <select class="form-control" id='gender' name="gender">
				    	<option value="男">男</option>
				    	<option value="女">女</option>
				    </select>
				</div>

				<div class="form-group clearfix">
					<label class="control-label">年龄</label>
				    <input type="text" class="form-control" placeholder="年龄" value="" id="age" name="age">
				</div>
				<div class="form-group clearfix">
					<label class="control-label">联系电话</label>
				    <input type="text" class="form-control" placeholder="输入手机号" value="" id="p_phone" name="p_phone">
				</div>

				<div class="form-group clearfix">
					<label class="control-label">联系地址</label>
				    <input type="text" class="form-control" placeholder="联系地址" value="" id='address' name="address">
				</div>
				<input class="login_button1 add_info"  type="submit" value="+添加患者信息">
			</form>
			<form class="layer_form2 clearfix u-fancy-scrollbar" id="patient-list">
<!--				<div class="radio-custom" data-pid="">-->
<!--					<input type="radio" value="张晓晓" name="username" id="uname1" checked>-->
<!--					<label for="uname1" class="control-label form2_label">-->
<!--				    	<strong>张晓晓晓</strong><span>女&nbsp;&nbsp;12岁&nbsp;&nbsp;15236548745</span><br>-->
<!--				    	<span style='padding-left:65px;'>上海市上海市</span>-->
<!--				    	<i class="glyphicon glyphicon-trash"></i>-->
<!--				    </label>-->
<!--				</div>-->
			</form>
		</div>
		<input class="login_button" onclick="next_reserving()" type="button" value="下一步">
	</div>
</div>

<div class="layer_form_information" style="display:none">
	<form class="layer_form3" action="<?php echo admin_url('admin-ajax.php')?>" onsubmit="reserving_now(this);return false;">
		<input type="hidden" name="action" value="reserving_now">
		<h1>预约-填写详情</h1>
		<span><i class="glyphicon glyphicon-exclamation-sign"></i>&nbsp;请选择预约类型</span>
		<div class="form3_content model-select-box">
			<i class="glyphicon glyphicon-menu-down"></i>
			<div class="model-select-text" id="model-select-text">
			</div>
			<ul class="model-select-option" id="select-patient">
			</ul>
		</div>
		<div class="form-group clearfix">
			<label class="control-label">预约号</label>
		    <input type="text" class="form-control" name="rnum" id="reserve_number" readonly value="" style="border-bottom-style:dashed">
		</div>

		<div class="form-group clearfix">
			<label for="inputTel" class="control-label">预约科室</label>
		    <select class="form-control" id="select-office" name="oid" onchange="office_change(this)">
		    </select>
		</div>

		<div class="form-group clearfix">
			<label class="control-label">预约医生</label>
		    <select class="form-control" id="select-doctor" name="did">
		    </select>
		</div>
		<div class="form-group clearfix">
			<label class="control-label">预约时间</label>
		     <input type="text" class="form-control datetime-picker" name="rtime" id="reserving-time" placeholder="时间" value="">
		</div>
		<input class="login_button"   id="reserving_now_submit_button" type="submit" value="预约" style="margin-top:40px;">
	</form>
</div>
<div class="layer_list" style="display:none">
	<div class="layer_table">
		<h1>预约列表</h1>
		<table class="table table-hover u-fancy-scrollbar">
			<thead>
		        <tr>
			      	<th width="220px">时间</th>
			      	<th width="100px">患者信息</th>
					<th width="100px">预约号</th>
			      	<th width="120px">科室</th>
			      	<th width="90px">医生</th>
			      	<th width="90px">取消</th>
			    </tr>
	      	</thead>
	    </table>
		<div class="layer_table_cont u-fancy-scrollbar">
			<table class="table table-hover">
		      	<tbody id="reserve-list">
	      		</tbody>
			</table>
		</div>
<!--		<input class="list_button" onclick="list_table()" type="button" value="预约">-->
	</div>
</div>
<script type="text/javascript">
(function() {
    setTimeout(function() {
        var preloader = document.getElementById('page-preloader');
        if (preloader != null && preloader != undefined) {
            preloader.className += ' preloader-loaded';
        }
    }, window.pagePreloaderHideTime || 1000);
})();
$(document).ready(function() {
    //监听滚动条的变化
    $(window).scroll(function() {
        if($(window).scrollTop()<160){
        	$('.header_container2').removeClass('is-shown');
        }
    });
	$('.date-picker').datepicker(/*{minDate:0}*/);
	$('.datetime-picker').datetimepicker(
			{
				timeFormat: 'HH:mm',
				showSecond:true,
				showTime:false,
				showButtonPanel:false,
				oneLine:true
			})
});

var agent = navigator.userAgent;
if (/.*Firefox.*/.test(agent)) {
    document.addEventListener("DOMMouseScroll", function(e) {
        e = e || window.event;
        var detail = e.detail;
        if (detail > 0) {
            // console.log("鼠标向下滚动");
            $('.header_container2').removeClass('is-shown');
        } else {
            // console.warn("鼠标向上滚动");
            $(window).scrollTop()>160 ? $('.header_container2').addClass('is-shown') : $('.header_container2').removeClass('is-shown');
        }
    });
} else {
    document.onmousewheel = function(e) {
        e = e || window.event;
        var wheelDelta = e.wheelDelta;
        if (wheelDelta > 0) {
            // console.log("鼠标向上滚动");
            
            $(window).scrollTop()>160 ? $('.header_container2').addClass('is-shown') : $('.header_container2').removeClass('is-shown');
        } else {
            // console.warn("鼠标向下滚动");
            $('.header_container2').removeClass('is-shown');
        }
    }
}

$('.return_top_li').click(function(){
	$("html,body").animate({scrollTop:0}, 500);
}); 
// 添加患者

// 结束
// 列表删除
$('.delete_list').click(function(){
	
	layer.confirm('确定删除该预约？', {
	  	btn: ['彻底删除'], //按钮
	  	btnAlign: 'c',
	  	title:false,

	}, function(){
		
	  	layer.msg('删除成功', {icon: 1,time: 1000});
	});
})
// 结束

// 详情下拉框
i=0;
$('.model-select-box').click(function(){
	if(i%2==0){
		$(this).find('.model-select-option').show();
		$(this).find('.glyphicon').addClass('glyphicon-menu-up').removeClass('glyphicon-menu-down');
	}else{
		$(this).find('.model-select-option').hide();
		$(this).find('.glyphicon').addClass('glyphicon-menu-down').removeClass('glyphicon-menu-up');
	}
	i++;
});

//$('.model-select-box li').click(function(){
//	var infoCont = $(this).html();
//	console.log(infoCont);
//	console.log($('#model-select-text'));
//	$('#model-select-text').html(infoCont);
//})


</script>