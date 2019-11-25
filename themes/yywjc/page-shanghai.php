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
	.carousel-inner>.item>img{
		 width: 400px;
		height: 400px;
		background-repeat: no-repeat;
		border-radius: 50%;
		background-size: cover;
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
		background-image:url(<?php bloginfo('template_directory');?>/images/09_1200x450.jpg);
	}
	.hospital_content_item_imgb2{
		background-image:url(<?php bloginfo('template_directory');?>/images/03_1200x450.jpg);
	}
	.hospital_content_item_imgb3{
		background-image:url(<?php bloginfo('template_directory');?>/images/01_1200x450.jpg);
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
		<h1 class="page-header_title">上海总院&专家</h1>
		<span class="page-header_content">明潭眼科/分院&专家/上海总院&专家</span>
	</div>
</div>
<div class="container hospital_main">
	<div class="hospital_content">
		<h3>上海明潭眼科介绍</h3>
		<div class="hospital_content_item">
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6 col-xs-12">										
				<p style="text-indent:0;">
					<strong>一楼门诊</strong><br>
				1、格局整齐划一，简单明了，色调搭配突显轻松就诊氛围。<br>
				2、金色眼镜柜台体现了都市时尚气息。镜架品种齐全，适合任何年龄人群，遵循“医学验光，科学配镜”原则。<br>
				3、进口检查仪器，专业技术人员一对一详细检查服务。<br>
				4、有儿童视光专家常年坐诊，制定个性化的斜弱视康复治疗方案。<br>
				5、预约就诊，叫号检查，诊疗有序。<br>
				6、免费爱眼咨询，预约专家门诊。<br>
				</p>	
				</div>
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6 col-xs-12">
				<div class="text-center-img" >		
<!--  					<div class="hospital_content_item_background  hospital_content_item_imgb1">					
					</div>  -->
											<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiA01.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiA02.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiA03.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiA04.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/08_1200x450.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
		</div>

	</div>
					
										
				</div>
			</div>
		</div>		
	<!-- 结束 -->
		<div class="hospital_content_item">
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6 col-xs-12">
<!-- 				<div class="hospital_content_item_background  hospital_content_item_imgb2">					
				</div>			 -->
				
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiB01.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiB02.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>

		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiB03.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiB04.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			
		</div>

	</div>
				
				
				
			</div>
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6 col-xs-12">	
				<p style="text-indent:0;padding-top:20px">
					<strong>二楼斜弱视康复训练中心</strong><br>
				1、全楼层是孩子们喜欢的粉色系，卡通贴纸装饰显得温馨与童真。<br>
				2、一对一的服务模式，使孩子十几分钟的治疗均为有效治疗。<br>
				3、宽敞的等候空间。<br>
				4、家长在外等候时能通过显示屏幕，时时观察到孩子治疗的全过程，又不干扰治疗环境。<br>
				5、斜弱视医用专业治疗仪器。<br>
				</p>
			</div>
			
		</div>
			
		<div class="hospital_content_item">
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6 col-xs-12">	
				<p style="text-indent:0;padding-top:20px;">
					<strong>三楼角膜塑形镜验配中心</strong><br>
				1、全层敞开式诊疗布局，宽敞明亮。<br>
				2、进口设备先进、专业、齐全。<br>
				3、布局设计人性化，有专门检查区，试戴区，宣教区，互不干扰。<br>
				4、背景墙上张贴角膜塑形镜相关专业知识简介，护理流程及验配流程使患者家长一目了然。<br>
				5、安利净水系统冲洗镜片，与洗手池分开设计。<br>
				6、多处盆栽的摆放使室内环境增添自然生机。<br>
				7、全程陪同，一对一服务，每项检查结果详细汇报，让家长了解孩子的戴镜情况。<br>
				8、多种镜片品牌，充足的试戴片，使每个患者能找到适合自己参数的镜片。

				</p>
			</div>
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6 col-xs-12">
				<div class="text-center-img" >	
<!-- 					<div class="hospital_content_item_background  hospital_content_item_imgb3">					
					</div> -->
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiC01.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiC02.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>


			
		</div>

	</div>
					
					
					
				</div>
			</div>
		<a href="<?php the_permalink(60); ?>" style='color: #e57373;font-size: 16px;font-weight: 600;margin-top: 35px;display: inline-block;'>来院路线&gt;&gt;</a>
	</div>
</div>

	
	
	
		<div class="hospital_content1">
		<h3>上海明潭眼科介绍</h3>
		<div class="hospital_content_item">
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6 col-xs-12">
				<div class="text-center-img" >		
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
								<div class="carousel-inner" role="listbox">    		
									<div class="item  active">
										<img src="<?php bloginfo('template_directory');?>/images/introShanghaiA01.jpg" alt="..." class="hospital_content_item_background">
										<div class="carousel-caption">
										</div>
									</div>
									<div class="item">
										<img src="<?php bloginfo('template_directory');?>/images/introShanghaiA02.jpg" alt="..." class="hospital_content_item_background">
										<div class="carousel-caption">
										</div>
									</div>
									<div class="item">
										<img src="<?php bloginfo('template_directory');?>/images/introShanghaiA03.jpg" alt="..." class="hospital_content_item_background">
										<div class="carousel-caption">
										</div>
									</div>
									<div class="item">
										<img src="<?php bloginfo('template_directory');?>/images/introShanghaiA04.jpg" alt="..." class="hospital_content_item_background">
										<div class="carousel-caption">
										</div>
									</div>
									<div class="item">
										<img src="<?php bloginfo('template_directory');?>/images/08_1200x450.jpg" alt="..." class="hospital_content_item_background">
										<div class="carousel-caption">
										</div>
									</div>
								</div>
					</div>
					
										
				</div>
			</div>
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6 col-xs-12">										
				<p style="text-indent:0;">
						<strong>一楼门诊</strong><br>
					1、格局整齐划一，简单明了，色调搭配突显轻松就诊氛围。<br>
					2、金色眼镜柜台体现了都市时尚气息。镜架品种齐全，适合任何年龄人群，遵循“医学验光，科学配镜”原则。<br>
					3、进口检查仪器，专业技术人员一对一详细检查服务。<br>
					4、有儿童视光专家常年坐诊，制定个性化的斜弱视康复治疗方案。<br>
					5、预约就诊，叫号检查，诊疗有序。<br>
					6、免费爱眼咨询，预约专家门诊。<br>
					</p>	
				</div>
		</div>		
	<!-- 结束 -->
		<div class="hospital_content_item">
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6 col-xs-12">
<!-- 				<div class="hospital_content_item_background  hospital_content_item_imgb2">					
				</div>			 -->
				
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiB01.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiB02.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>

		    <div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiB03.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiB04.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			
		</div>

	</div>
				
				
				
			</div>
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6 col-xs-12">	
				<p style="text-indent:0;padding-top:20px">
					<strong>二楼斜弱视康复训练中心</strong><br>
				1、全楼层是孩子们喜欢的粉色系，卡通贴纸装饰显得温馨与童真。<br>
				2、一对一的服务模式，使孩子十几分钟的治疗均为有效治疗。<br>
				3、宽敞的等候空间。<br>
				4、家长在外等候时能通过显示屏幕，时时观察到孩子治疗的全过程，又不干扰治疗环境。<br>
				5、斜弱视医用专业治疗仪器。<br>
				</p>
			</div>
			
		</div>
			
		<div class="hospital_content_item">
			<div class="hospital_content_item_word col-sm-6 col-md-6 col-lg-6 col-xs-12">	
				<p style="text-indent:0;padding-top:20px;">
					<strong>三楼角膜塑形镜验配中心</strong><br>
				1、全层敞开式诊疗布局，宽敞明亮。<br>
				2、进口设备先进、专业、齐全。<br>
				3、布局设计人性化，有专门检查区，试戴区，宣教区，互不干扰。<br>
				4、背景墙上张贴角膜塑形镜相关专业知识简介，护理流程及验配流程使患者家长一目了然。<br>
				5、安利净水系统冲洗镜片，与洗手池分开设计。<br>
				6、多处盆栽的摆放使室内环境增添自然生机。<br>
				7、全程陪同，一对一服务，每项检查结果详细汇报，让家长了解孩子的戴镜情况。<br>
				8、多种镜片品牌，充足的试戴片，使每个患者能找到适合自己参数的镜片。

				</p>
			</div>
			<div class="hospital_content_item_img col-sm-6 col-md-6 col-lg-6 col-xs-12">
				<div class="text-center-img" >	
<!-- 					<div class="hospital_content_item_background  hospital_content_item_imgb3">					
					</div> -->
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" > 
  		<div class="carousel-inner" role="listbox">    		
		    <div class="item  active">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiC01.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>
			<div class="item">
		      	<img src="<?php bloginfo('template_directory');?>/images/introShanghaiC02.jpg" alt="..." class="hospital_content_item_background">
		      	<div class="carousel-caption">
		      	</div>
		    </div>


			
		</div>

	</div>
					
					
					
				</div>
			</div>
		<a href="<?php the_permalink(60); ?>" style='color: #e57373;font-size: 16px;font-weight: 600;display: inline-block;padding-left:20px;'>来院路线&gt;&gt;</a>
	</div>
</div>
</div>
	
	
	
</div>
<div class="hospital_content2">
	<div class="page-header">
		<div class="container">
			<h1 class="page-header_title">专家介绍</h1>
			<span class="page-header_content">我们致力于高质量的健康服务。</span>
		</div>
	</div>


	<div class="container">
		<div class="hospital_expert">
			<img src="<?php bloginfo('template_directory');?>/images/imgProfessor1.jpg" onclick="location='<?php echo get_permalink(126); ?>'">
			<div class="expert_center">
				<h3 onclick="location='<?php echo get_permalink(126); ?>'">赵竑彦院长</h3>
				<span>儿童斜弱视、角膜塑形镜</span>
				<!--<button
						<?if(!is_user_logged_in()){?>
							onclick="window.wsocial_dialog_login_show();"
						<?}else{?>
							onclick="patients_setting();"
						<?}?>
				>立即预约</button>-->
				<button>预约致电 021-55961876</button>
			</div>
			<p onclick="location='<?php echo get_permalink(126); ?>'">
				1992年毕业于白求恩医科大学临床医学系，研究生学历，中华医学眼科分会会员，我国儿童、青少年斜、弱视和近视防控专家，上海明潭眼科医院院长，专家科研部主任。二十多年的小儿视光临床工作经验……<span>查看更多>></span>
			</p>
		</div>

		<div class="hospital_expert">
			<img src="<?php bloginfo('template_directory');?>/images/imgProfessorWang.jpg" onclick="location='<?php echo get_permalink(181); ?>'">
			<div class="expert_center">
				<h3 onclick="location='<?php echo get_permalink(181); ?>'">王素羽</h3>
				<span>角膜塑形镜</span>
				<!--<button
						<?if(!is_user_logged_in()){?>
							onclick="window.wsocial_dialog_login_show();"
						<?}else{?>
							onclick="patients_setting();"
						<?}?>
				>立即预约</button>-->
				<button>预约致电 021-55961876</button>
			</div>
			<p onclick="location='<?php echo get_permalink(181); ?>'">
				2002年毕业于长春中医药大学中西医结合临床医学系，获得中西医结合本科学士学位；2008年获得研究生学位。
				现任明潭眼科副院长，角膜塑形镜验配中心主任，
				专家科研组成员，国际角膜塑形学亚洲分会会员……<span>查看更多>></span>
			</p>
		</div>

		<div class="hospital_expert">
			<img src="<?php bloginfo('template_directory');?>/images/imgProfessorZhu.jpg" onclick="location='<?php echo get_permalink(183); ?>'">
			<div class="expert_center">
				<h3 onclick="location='<?php echo get_permalink(183); ?>'">祝慧慧：儿童视光中心主任</h3>
				<span>儿童斜弱视、配镜</span>
				<!--<button
						<?if(!is_user_logged_in()){?>
							onclick="window.wsocial_dialog_login_show();"
						<?}else{?>
							onclick="patients_setting();"
						<?}?>
				>立即预约</button>-->
				<button>预约致电 021-55961876</button>
			</div>
			<p onclick="location='<?php echo get_permalink(183); ?>'">
				2005年毕业于浙江省绍兴市文理学院临床医学专业，本科学历，高级技师，中级职称，视光部主任，专家科研邵成员。擅长小儿检影验光及疑难医学验光配镜，主诊小儿斜弱视、先天性白内障的检查及康复治疗。参与了……<span>查看更多>></span>
			</p>
		</div>

		<div class="hospital_expert">
			<img src="<?php bloginfo('template_directory');?>/images/imgProfessorFu.jpg" onclick="location='<?php echo get_permalink(183); ?>'">
			<div class="expert_center">
				<h3 onclick="location='<?php echo get_permalink(414); ?>'">付凤娇：角膜塑形镜中心副主任</h3>
				<span>角膜塑形镜</span>
				<!--<button
						<?if(!is_user_logged_in()){?>
							onclick="window.wsocial_dialog_login_show();"
						<?}else{?>
							onclick="patients_setting();"
						<?}?>
				>立即预约</button>-->
				<button>预约致电 021-55961876</button>
			</div>
			<p onclick="location='<?php echo get_permalink(414); ?>'">
				2008年毕业于山东省德州医学院视光学专业，同年入职我院，高级技师，中级职称，熟悉验光，制镜，斜弱视诊疗，主要从事角膜接触镜验配，临床工作十余年，积累了丰富的验配经验，对高度散光，不对称角膜条件的……<span>查看更多>></span>
			</p>
		</div>

		
	</div>
	
</div>



<?php get_footer(); ?>              