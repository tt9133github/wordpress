<?php 
// Template Name:page-shanghai
get_header();?>
<style>
	.hospital_content_item_background{
		 width: 450px;
		height: 450px;
		background-repeat: no-repeat;
		border-radius: 50%;
		background-size: cover;
		border: 8px solid #fff;
    	box-shadow: 2px 2px 0 rgba(0,0,0,.05);
		-webkit-transition: all .2s ease 0s;
		-o-transition: all .3s ease 0s;
		transition: all .3s ease 0s;
		animation:fade-in 0.3s
	}
	.carousel-inner>.item>img{
		 width: 400px;
		height: 400px;
		background-repeat: no-repeat;
		border-radius: 50%;
		background-size: cover;
	}
	@keyframes fade-in {  
		0% {opacity: 0;transform:translatey(-100%);transform:scale(0);}
		30% {opacity: 0.3;transform:translatey(-80%);transform:scale(0.3);}
		60% {opacity: 0.6;transform:translatey(-5%);transform:scale(0.6);}
		80% {opacity: 0.8;transform:translatey(-3%);transform:scale(0.8);}
		100% {opacity: 1;transform:translatey(0%);transform:scale(1);}
	} 
	@-webkit-keyframes fade-in {
    0% {opacity: 0;transform:translatey(-100%);transform:scale(0);}  
    30% {opacity: 0.3;transform:translatey(-80%);transform:scale(0.3);}
	60% {opacity: 0.6;transform:translatey(-50%);transform:scale(0.6);}
	80% {opacity: 0.8;transform:translatey(-30%);transform:scale(0.8);}
    100% {opacity: 1;transform:translatey(0);transform:scale(1);}  
	}
	.hospital_content_item_img{
		-webkit-transition: all .2s ease 0s;
		-o-transition: all .2s ease 0s;
		transition: all .2s ease 0s;
	}
	.hospital_content_item_background:before{
		opacity: 0;
		height: 0;
		width: 0;
		left: 50%;
		top: 50%;
		background: #fff;
		border-radius: 50%;
		content: "";
		position: absolute;
		-webkit-transition: all .5s ease 0s;
		-o-transition: all .5s ease 0s;
		transition: all .5s ease 0s;
		z-index: 0;
	}
	.hospital_content_item_imgb1{
		background-image:url(<?php bloginfo('template_directory');?>/images/imgHospital.jpg);
	}
	.hospital_content_item{
		overflow:hidden;
		margin-bottom:50px;
	}
	.text-center-img{
		    width: 450px;
			height: 450px;
			margin: 0 auto;
	}
	.hospital_content1{
			display:none;
		}
 	@media (min-width:769px){
			.hospital_main.container{
				width:1000px;
			}
	} 
	@media (max-width:767px){
			.container{
				width:100%;
			}
		
		.hospital_content{
			display:none;
		}
		.hospital_content1{
			display:block;
		}
		.hospital_main{
			padding:10px 0px;
		}
		.page-header{
			padding:80px 0px 20px;
		}
	}
	.hospital_content1 .text-center-img{
		width:100%;
	}
	@media (width:768px){
		.carousel-inner>.item>img{
			width:100%;
			height:350px;
		}
		.text-center-img{
			width:100%;
			height:auto;
		}
		.hospital_expert{
			text-align:center;
		}
		.page-header{
			margin-top:20px;
		}
	}
</style>


<div class="page-header">
	<div class="container">
		<h1 class="page-header_title">常熟分院&专家</h1>
		<span class="page-header_content">明潭眼科/分院&专家/常熟分院&专家</span>
	</div>
</div>

<div class="container hospital_main">	
	<div class="hospital_content">
		<h3>常熟分院介绍</h3>
		<div class="hospital_content_item">
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6">			
				<p>常熟眀潭眼科门诊部</p>
				<p>			
		常熟眀潭眼科门诊部成立于2009年，是上海眀潭眼科在常熟设立的分院，是常熟市首家以治疗青少年儿童斜视，弱视，近视为主的医疗机构，本院拥有先进的儿童斜弱视，近视检查和治疗设备，如日本产角膜地形图，眼压计，电脑验光仪，角膜测厚仪，眼轴测量仪，综合验光仪，同视机等。有拥有25年临床经验的眼科副主任医师  李凤芝  常年坐诊，李医生在儿童斜弱视，近视的诊断和治疗方面积累了丰富的临床经验，尤其擅长近视患者角膜塑形镜和RGP的验配。上海儿童视光专家  赵竑彦院长 定期来院出诊。建院十年来，本着科学 严谨 诚实 守信的办院宗旨，真诚服务于广大患者，得到了常熟市主管部门和广大患者的认可和信赖，目前在常熟市及周边地区拥有患者上万例。
				</p> 
		</div>
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6">
				<div class="text-center-img" >	
<!-- 					<div class="hospital_content_item_background  hospital_content_item_imgb1">					
					</div>		 -->
					
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introChangshu (1).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introChangshu (2).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>

		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introChangshu (3).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introChangshu (4).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			
		</div>

	</div>
					
					
					
					
				</div>
			</div>
		</div>			
				
		<a href="<?php the_permalink(60); ?>" style='color: #e57373;font-size: 16px;font-weight: 600;margin-top: 35px;display: inline-block;'>来院路线&gt;&gt;</a>
	</div>
	
	<div class="hospital_content1">
		<h3>常熟分院介绍</h3>
		<div class="hospital_content_item">

			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6">
				<div class="text-center-img" >	
<!-- 					<div class="hospital_content_item_background  hospital_content_item_imgb1">					
					</div>		 -->
					
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introChangshu (1).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introChangshu (2).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>

		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introChangshu (3).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introChangshu (4).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			
		</div>

	</div>	
				</div>
			</div>
						<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6">			
				<p>常熟眀潭眼科门诊部</p>
				<p>			
		常熟眀潭眼科门诊部成立于2009年，是上海眀潭眼科在常熟设立的分院，是常熟市首家以治疗青少年儿童斜视，弱视，近视为主的医疗机构，本院拥有先进的儿童斜弱视，近视检查和治疗设备，如日本产角膜地形图，眼压计，电脑验光仪，角膜测厚仪，眼轴测量仪，综合验光仪，同视机等。有拥有25年临床经验的眼科副主任医师  李凤芝  常年坐诊，李医生在儿童斜弱视，近视的诊断和治疗方面积累了丰富的临床经验，尤其擅长近视患者角膜塑形镜和RGP的验配。上海儿童视光专家  赵竑彦院长 定期来院出诊。建院十年来，本着科学 严谨 诚实 守信的办院宗旨，真诚服务于广大患者，得到了常熟市主管部门和广大患者的认可和信赖，目前在常熟市及周边地区拥有患者上万例。
				</p> 
		</div>
		</div>			
				
		<a href="<?php the_permalink(60); ?>" style='color: #e57373;font-size: 16px;font-weight: 600;display: inline-block; padding-left: 20px;'>来院路线&gt;&gt;</a>
	</div>	
	
</div>

<div class="hospital_content2">
	<div class="page-header">
		<div class="container">
			<h1 class="page-header_title">专家介绍</h1>
<!-- 			<span class="page-header_content">我们致力于高质量的健康服务，我们致力于高质量的健康服务。</span> -->
		</div>
	</div>


	<div class="container">
		<div class="hospital_expert">
			<img src="<?php bloginfo('template_directory');?>/images/imgProfessor1.jpg" onclick="location='<?php echo get_permalink(126); ?>'">
			<div class="expert_center">
				<h3 onclick="location='<?php echo get_permalink(126); ?>'">赵竑彦院长</h3>
				<span>儿童斜弱视、角膜塑形镜</span>
				<button>预约请致电：0512-52700768</button>
<!-- 				<button
						<?if(!is_user_logged_in()){?>
							onclick="window.wsocial_dialog_login_show();"
						<?}else{?>
							onclick="patients_setting();"
						<?}?>
				>立即预约</button> -->
			</div>
			<p onclick="location='<?php echo get_permalink(126); ?>'">
				1992年毕业于白求恩医科大学临床医学系，研究生学历，中华医学眼科分会会员，我国儿童、青少年斜、弱视和近视防控专家，上海明潭眼科医院院长，专家科研部主任。二十多年的小儿视光临床工作经验……<span>查看更多>></span>
			</p>
		</div>

<!-- 		<div class="hospital_expert">
			<img src="<?php bloginfo('template_directory');?>/images/imgProfessorLiFengzhi.jpg" onclick="location='<?php echo get_permalink(698); ?>'">
			<div class="expert_center">
				<h3 onclick="location='<?php echo get_permalink(); ?>'">李凤芝：常熟分院院长</h3>
				<span>斜视，弱视，近视及配镜</span>
				<button>预约请致电：0512-52700768</button>
<!-- 				<button
						<?if(!is_user_logged_in()){?>
							onclick="window.wsocial_dialog_login_show();"
						<?}else{?>
							onclick="patients_setting();"
						<?}?>
				>立即预约</button> -->
<!-- 			</div>
			<p onclick="location='<?php echo get_permalink(698); ?>'">
				1992年毕业于白求恩医科大学临床医学系，本科学历，学士学位，副主任医师。擅长儿童斜视，弱视，近视的治疗和近视患者角膜塑形镜和RGP的验配。对各种疑难、复杂及高度数角膜塑形镜验配积累了丰富的经验......<span>查看更多>></span>
			</p>
		</div> --> 

		<!--<div class="hospital_expert">
			<img src="<?php bloginfo('template_directory');?>/images/imgProfessor.jpg" onclick="location='<?php echo get_permalink(183); ?>'">
			<div class="expert_center">
				<h3 onclick="location='<?php echo get_permalink(); ?>'">主治医师：张医生</h3>
				<span>擅长领域</span>
				<button
						<?if(!is_user_logged_in()){?>
							onclick="window.wsocial_dialog_login_show();"
						<?}else{?>
							onclick="patients_setting();"
						<?}?>
				>立即预约</button>
			</div>
			<p onclick="location='<?php echo get_permalink(); ?>'">
				我们致力于高质量的健康服务，我们致力于高质量的健康服务。
				我们致力于高质量的健康服务，我们致力于高质量的健康服务。
				我们致力于高质量的健康服务，我们致力于高质量的健康服务。
				我们致力于高质量的健康服务我们致质……<span>查看更多>></span>
			</p>
		</div>-->

		
	</div>
	
</div>



<?php get_footer(); ?>              