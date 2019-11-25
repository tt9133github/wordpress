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
	.carousel-inner>.item>img {
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
		background-image:url(<?php bloginfo('template_directory');?>/images/jingjiang01_1200x450.jpg);
	}
	.hospital_content_item_imgb2{
		background-image:url(<?php bloginfo('template_directory');?>/images/jingjiang02_1200x450.jpg);
	}
	.hospital_content_item_imgb3{
		background-image:url(<?php bloginfo('template_directory');?>/images/jingjiang03_1200x450_01.jpg);
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
	<div class="container" >
		<h1 class="page-header_title">靖江分院&专家</h1>
		<span class="page-header_content">明潭眼科/分院&专家/靖江分院&专家</span>
	</div>
</div>

<div class="container hospital_main">
	<div class="hospital_content">
		<h3>靖江分院介绍</h3>
		<div class="hospital_content_item">
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6">	
				<p style="text-indent:0;">
				 <strong>一楼</strong><br>
				1.门诊部设有检察室，验光室，配镜镜室，分区化检查，给予患者安静舒适的检查环境。<br/>
				2.进口设备，专业人员一对一检查，确保检查的准确性。<br/>
				3.上海专家定期坐诊检查。<br/>
				4.建立健康体检档案，定期跟踪随访，预防近视。<br/>
				5.蔡司成长乐，中天实力宝台灯，正姿护眼笔，近视预防用品一应齐全。<br/>
				6.斜视非手术治疗的检查，斜弱视小孩的福音。<br/>
				7.医学验光，科学配镜，正确评估视觉功能和屈光状态。<br/>
				8.专门的眼镜柜台，更好的为儿童及青少年选择一付舒适眼镜。<br/>
				9.检查流程透明化，收费项目公开，细心为患者解答检查项目及疑问。<br/>
				</p>
			</div>
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6">
				<div class="text-center-img" >	
<!-- 					<div class="hospital_content_item_background  hospital_content_item_imgb1">	</div>			 -->
					
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangA (1).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangA (2).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>

		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangA (3).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			
		</div>

	</div>
					
				</div>
			</div>
			
		</div>

		<div class="hospital_content_item">
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6">
<!-- 				<div class="hospital_content_item_background  hospital_content_item_imgb2">	</div>			 -->
				
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangB (1).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangB (2).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>

		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangB (3).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			
		</div>

	</div>
				
			</div>
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6">	
				<p style="text-indent:0;padding-top:20px;">
					<strong>二楼</strong><br>
					1.检查、治疗独立诊室，互不干扰，确保各项目的有序运行。<br/>
					2.各治疗室空间大小适宜，确保治疗环境不嘈杂。<br/>
					3.设备优良，专业人员一对一治疗服务。<br/>
					4.治疗过程透明化，家长在等候区可以全程观看。<br/>
					5.配备空气净化器，全天运行，确保治疗室环境得到有效改善。<br/>
					6.特有的奖惩制度，提高小朋友治疗的积极性与配合度。<br/>
					7.良好的服务态度，努力做到小患者与家长都满意。<br/>
				</p>
			</div>
			
			
		</div>

        	<!-- 结束 -->
		<div class="hospital_content_item">
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6">	
				<p style="text-indent:0;padding-top:20px;">
					<strong>三楼</strong><br>
					1.整个楼层呈现开放式设计，分区服务。一体化诊疗，上海专家医生定期坐诊验配。<br/>
					2.进口设备，专业人员一对一检查服务，确保检查准确有效性。<br/>
					3.镜片品牌齐全，分类有秩。严格按照国家标准要求，及时消毒并定期换新镜片。<br/>
					4.我院独具的试戴周期有效提高验配成功率，获得家长一致好评。<br/>
					5.安利净水系统，独立专区冲洗镜片，各区各用。<br/>
					6.背景墙上展示护理流程板块，高清投影仪循环播放角膜塑形镜相关专业知识及介绍。<br/>
					7.绿色植物有效净化环境空气，为患者带来良好就诊环境。<br/>
					8.验配流程全程透明化，收费项目公开，耐心解答患者家长疑问，无忧验配。<br/>
					9.完善的宣教及服务体系，定期跟踪随访，及时了解患者戴镜情况。<br/>
				</p>
				</div>
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6">
				<div class="text-center-img" >	
<!-- 					<div class="hospital_content_item_background  hospital_content_item_imgb3">	</div>	 -->
					
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangC (1).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangC (2).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>

		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangC (3).jpg" alt="..." class="hospital_content_item_background">
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
		<h3>靖江分院介绍</h3>
		<div class="hospital_content_item">
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6 col-xs-12">
				<div class="text-center-img" >						
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
							<div class="carousel-inner" role="listbox">    		
								<div class="item  active">
									<img src="<?php bloginfo('template_directory');?>/images/introJingjiangA (1).jpg" alt="..." class="hospital_content_item_background">
									<div class="carousel-caption">
									</div>
								</div>
								<div class="item">
									<img src="<?php bloginfo('template_directory');?>/images/introJingjiangA (2).jpg" alt="..." class="hospital_content_item_background">
									<div class="carousel-caption">
									</div>
								</div>

								<div class="item">
									<img src="<?php bloginfo('template_directory');?>/images/introJingjiangA (3).jpg" alt="..." class="hospital_content_item_background">
									<div class="carousel-caption">
									</div>
								</div>

							</div>

						</div>
					
				</div>
			</div>
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6 col-xs-12">	
				<p style="text-indent:0;">
				 <strong>一楼</strong><br>
				1.门诊部设有检察室，验光室，配镜镜室，分区化检查，给予患者安静舒适的检查环境。<br/>
				2.进口设备，专业人员一对一检查，确保检查的准确性。<br/>
				3.上海专家定期坐诊检查。<br/>
				4.建立健康体检档案，定期跟踪随访，预防近视。<br/>
				5.蔡司成长乐，中天实力宝台灯，正姿护眼笔，近视预防用品一应齐全。<br/>
				6.斜视非手术治疗的检查，斜弱视小孩的福音。<br/>
				7.医学验光，科学配镜，正确评估视觉功能和屈光状态。<br/>
				8.专门的眼镜柜台，更好的为儿童及青少年选择一付舒适眼镜。<br/>
				9.检查流程透明化，收费项目公开，细心为患者解答检查项目及疑问。<br/>
				</p>
			</div>
		</div>

		<div class="hospital_content_item">
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6 col-xs-12">
<!-- 				<div class="hospital_content_item_background  hospital_content_item_imgb2">	</div>			 -->
				
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangB (1).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangB (2).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>

		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangB (3).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			
		</div>

	</div>
				
			</div>
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6 col-xs-12">	
				<p style="text-indent:0;padding-top:20px;">
					<strong>二楼</strong><br>
					1.检查、治疗独立诊室，互不干扰，确保各项目的有序运行。<br/>
					2.各治疗室空间大小适宜，确保治疗环境不嘈杂。<br/>
					3.设备优良，专业人员一对一治疗服务。<br/>
					4.治疗过程透明化，家长在等候区可以全程观看。<br/>
					5.配备空气净化器，全天运行，确保治疗室环境得到有效改善。<br/>
					6.特有的奖惩制度，提高小朋友治疗的积极性与配合度。<br/>
					7.良好的服务态度，努力做到小患者与家长都满意。<br/>
				</p>
			</div>
			
			
		</div>

        	<!-- 结束 -->
		<div class="hospital_content_item">
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6 col-xs-12">	
				<p style="text-indent:0;padding-top:20px;">
					<strong>三楼</strong><br>
					1.整个楼层呈现开放式设计，分区服务。一体化诊疗，上海专家医生定期坐诊验配。<br/>
					2.进口设备，专业人员一对一检查服务，确保检查准确有效性。<br/>
					3.镜片品牌齐全，分类有秩。严格按照国家标准要求，及时消毒并定期换新镜片。<br/>
					4.我院独具的试戴周期有效提高验配成功率，获得家长一致好评。<br/>
					5.安利净水系统，独立专区冲洗镜片，各区各用。<br/>
					6.背景墙上展示护理流程板块，高清投影仪循环播放角膜塑形镜相关专业知识及介绍。<br/>
					7.绿色植物有效净化环境空气，为患者带来良好就诊环境。<br/>
					8.验配流程全程透明化，收费项目公开，耐心解答患者家长疑问，无忧验配。<br/>
					9.完善的宣教及服务体系，定期跟踪随访，及时了解患者戴镜情况。<br/>
				</p>
				</div>
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6 col-xs-12">
				<div class="text-center-img" >	
<!-- 					<div class="hospital_content_item_background  hospital_content_item_imgb3">	</div>	 -->
					
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangC (1).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangC (2).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>

		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introJingjiangC (3).jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			
		</div>

	</div>
					
				</div>
			</div>
			
		</div>
		<a href="<?php the_permalink(60); ?>" style='color: #e57373;font-size: 16px;font-weight: 600;display: inline-block;padding-left:20px;'>来院路线&gt;&gt;</a>
	</div>
</div>

<div class="hospital_content2">
	<div class="page-header">
		<div class="container">
			<h1 class="page-header_title">专家介绍</h1>
			<span class="page-header_content">我们致力于高质量的健康服务，我们致力于高质量的健康服务。</span>
		</div>
	</div>


	<div class="container">
		<div class="hospital_expert">
			<img src="<?php bloginfo('template_directory');?>/images/imgProfessor1.jpg" onclick="location='<?php echo get_permalink(126); ?>'">
			<div class="expert_center">
				<h3 onclick="location='<?php echo get_permalink(126); ?>'">赵竑彦院长</h3>
				<span>儿童斜弱视、角膜塑形镜</span>
				<button>预约请致电：0523-81160196</button>
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

		<!--<div class="hospital_expert">
			<img src="<?php bloginfo('template_directory');?>/images/imgProfessor.jpg" onclick="location='<?php echo get_permalink(181); ?>'">
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
				我们致力于高质量的力于高质量的健康服务。
				我们致力于高质量的健康服务我们致力于高质……<span>查看更多>></span>
			</p>
		</div>

		<div class="hospital_expert">
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