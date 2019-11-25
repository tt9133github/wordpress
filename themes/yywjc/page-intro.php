<?php 
// Template Name:page-intro
get_header();?>

<style>


</style>

<div class="page-header">
	<div class="container">
		<h1 class="page-header_title">设备介绍</h1>
		<span class="page-header_content">明潭眼科/院内展示/设备介绍</span>
	</div>
</div>

<div class="container honor_content">

	<!-- 轮播图 -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
    		<div class="item active">
      			<img src="<?php bloginfo('template_directory');?>/images/equipment-eg.01.jpg" alt="...">

				<div class="lunbo_content">
					<h4>XX治疗仪</h4>
					<p>我们致力于高质量的健康服务，我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质量的健康服务我们致力于高质量的健康服务。
					我们致力于高质量的健康服务，我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质量的健康服务我们致力于高质量的健康服务。</p>
					<a href="" class="detail_a">查看详情>></a>


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

      			<div class="carousel-caption">
      			</div>
    		</div>
		    <div class="item">
      			<img src="<?php bloginfo('template_directory');?>/images/equipment-eg.01.jpg" alt="...">

				<div class="lunbo_content">
					<h4>XX治疗仪</h4>
					<p>我们致力于高质量的健康服务，我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质量的健康服务我们致力于高质量的健康服务。</p>
					<a href="" class="detail_a">查看详情>></a>


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

      			<div class="carousel-caption">
      			</div>
    		</div>


    		<div class="item">
      			<img src="<?php bloginfo('template_directory');?>/images/equipment-eg.01.jpg" alt="...">

				<div class="lunbo_content">
					<h4>XX治疗仪</h4>
					<p>我们致力于高质量的健康服务，我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质量的健康服务我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质量的健康服务我们致力于高质量的健康服务。</p>
					<a href="" class="detail_a">查看详情>></a>


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

      			<div class="carousel-caption">
      			</div>
    		</div>
  		</div>
	</div>
	<!-- 结束 -->


	<div class="row" style="margin-top:30px;">
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
		<div class="col-sm-4">
			<div class="intro_main">
				<div class="intro_img">
					<?php  if(catch_blog_image()){?>
						<img src="<?php echo catch_blog_image();?>" class="div_img">
					<?php };?>
				</div>

				
				<div class="intro_detail">
					<h4><?php the_title(); ?></h4>
					<p>
						<?php if(has_excerpt()) 
							{the_excerpt(); } else { 
								echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 250,"......");  
							} 
						?></p>
					<a href="<?php the_permalink(); ?>">查看详情>></a>
				</div>
			</div>
		</div>
		<?php endwhile; ?>
				
		<?php endif; ?>

		<div class="col-sm-4">
			<div class="intro_main">
				<div class="intro_img">
					<img src="<?php bloginfo('template_directory');?>/images/equipment-eg.jpg">
				</div>
				<div class="intro_detail">
					<h4>XX仪器</h4>
					<p>我们致力于高质量的健康服务，
					我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质量的健康服务我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质……</p>
					<a href="">查看详情>></a>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="intro_main">
				<div class="intro_img">
					<img src="<?php bloginfo('template_directory');?>/images/equipment-eg.jpg">
				</div>
				<div class="intro_detail">
					<h4>XX仪器</h4>
					<p>我们致力于高质量的健康服务，
					我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质量的健康服务我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质……</p>
					<a href="">查看详情>></a>
				</div>
			</div>
		</div>

		<div class="col-sm-4">
			<div class="intro_main">
				<div class="intro_img">
					<img src="<?php bloginfo('template_directory');?>/images/equipment-eg.jpg">
				</div>
				<div class="intro_detail">
					<h4>XX仪器</h4>
					<p>我们致力于高质量的健康服务，
					我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质量的健康服务我们致力于高质量的健康服务。
					我们致力于高质量的健康服务我们致力于高质……</p>
					<a href="">查看详情>></a>
				</div>
			</div>
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

</script>
<?php get_footer(); ?> 