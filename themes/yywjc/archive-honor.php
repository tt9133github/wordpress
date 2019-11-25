<?php 
// Template Name:page-honor
get_header();?>
<style>
	.carousel-inner .item.active img{
		width:700px;
		height:500px;
	}
	@media (min-width:769px){
		.honor-show{
			margin-top:60px;
		}
	}
	@media (width:768px){
		#carousel-example-generic{
			display:none;
		}
		.page-header{
			margin-top:40px;
		}
		.col-sm-6{
			width:50%;
		}
	}
	@media (max-width:767px){
		#carousel-example-generic{
			display:none;
		}
		.row{
			margin:0px;
		}
		.page-header{
			    padding: 90px 0 20px;
		}
		.col-xs-12{
			width:100%;
		}
	}
</style>


<div class="page-header">
	<div class="container">
		<h1 class="page-header_title">荣誉展示</h1>
		<span class="page-header_content">明潭眼科/院内展示/荣誉展示</span>
	</div>
</div>

<div class="container honor_content">

	<!-- 轮播图 -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
  			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
    		<div class="item">
				<?php  if(catch_blog_image()){?>
					<img src="<?php echo catch_blog_image();?>" >
					
				<?php }else{;?>

				<img src="<?php bloginfo('template_directory');?>/images/imgHonor-01.jpg" alt="...">
		  		<?php };?>
      			

				<div class="lunbo_content honor_lunbo">
					<h4 onclick="location='<?php the_permalink(); ?>'"><?php the_title(); ?></h4>
					<p style="margin-bottom:25px;" onclick="location='<?php the_permalink(); ?>'"><?php if(has_excerpt()) 
						{the_excerpt(); } else { 
							echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"......");  
						} 
					?></p>


					<!-- 按钮 -->
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="" aria-hidden="true"><</span>
					    <span class="sr-only">Previous</span>
			  		</a>
			  		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="" aria-hidden="true">></span>
					    <span class="sr-only">Next</span>
			  		</a>
					<!-- 结束 -->

				</div>

      			
    		</div>
    		<?php endwhile; ?>
				
			<?php endif; ?>
  		</div>
	</div>
	<!-- 结束 -->




	<div class="row honor-show" >
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor01.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor01.jpg"></a>
					<div class="honor_text">
						<span>2009年</span>
						<h4>诚信建设单位</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>诚信建设单位</span>
		</div>

		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor02.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor02.jpg"></a>
					<div class="honor_text">
						<span>2012年</span>
						<h4>服务质量信得过单位</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>服务质量信得过单位</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor03.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor03.jpg"></a>
					<div class="honor_text">
						<span>2015年</span>
						<h4>年度考核二等奖</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>年度考核二等奖</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor04.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor04.jpg"></a>
					<div class="honor_text">
						<span>2013年</span>
						<h4>年度考核二等奖</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>年度考核二等奖</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor05.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor05.jpg"></a>
					<div class="honor_text">
						<span>2016年</span>
						<h4>年度考核一等奖</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>年度考核一等奖</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor06.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor06.jpg"></a>
					<div class="honor_text">
						<span>2010年</span>
						<h4>诚信服务&nbsp;联盟企业</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>诚信服务&nbsp;联盟企业</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor07.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor07.jpg"></a>
					<div class="honor_text">
						<span>2013年</span>
						<h4>服务质量信得过单位</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>服务质量信得过单位</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor08.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor08.jpg"></a>
					<div class="honor_text">
						<span>2013年</span>
						<h4>年度考核二等奖</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>年度考核二等奖</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor09.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor09.jpg"></a>
					<div class="honor_text">
						<span>2014年</span>
						<h4>精神文明十佳</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>精神文明十佳</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor10.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor10.jpg"></a>
					<div class="honor_text">
						<span>2006年</span>
						<h4>诚信建设单位</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>诚信建设单位</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor11.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor11.jpg"></a>
					<div class="honor_text">
						<span>2014年</span>
						<h4>年度考核二等奖</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>年度考核二等奖</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgHonor12.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor12.jpg"></a>
					<div class="honor_text">
						<span>2009年</span>
						<h4>服务质量信得过单位</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>服务质量信得过单位</span>
		</div>


		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor13.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor13.jpg"></a>
					<div class="honor_text">
						<span>2010年</span>
						<h4>服务质量信得过单位</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>服务质量信得过单位</span>
		</div>



		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor14.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor14.jpg"></a>
					<div class="honor_text">
						<span>2010年</span>
						<h4>捐赠证书</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>捐赠证书</span>
		</div>



		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="honor_main">
				<img src="<?php bloginfo('template_directory');?>/images/honor/imgS-Honor15.jpg">
				
				<div class="honor_hide">
					<a data-fancybox="gallery" href="<?php bloginfo('template_directory');?>/images/honor/imgHonor15.jpg"></a>
					<div class="honor_text">
						<span>2008年</span>
						<h4>捐赠证书</h4>
						<img src="<?php bloginfo('template_directory');?>/images/ico-honor-pic.png">
					</div>
				</div>
			</div>
			<span>捐赠证书</span>
		</div>
		
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('.carousel').carousel({
     	pause: true,
        interval: false
    })
});
$('.carousel-inner .item').eq(0).addClass('active');
</script>
<?php get_footer(); ?>