<?php 
// Template Name:page-intro
get_header();?>
<style>
	@media (min-width:769px){
		.honor-show{
			margin-top:30px;
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
		<h1 class="page-header_title">设备介绍</h1>
		<?php $cats = get_the_category();?>
		<span class="page-header_content">明潭眼科/院内展示/<?php echo '<a href="'.get_category_link($parentCat->term_id).'">'.get_cat_name($cats[0]->category_parent).'</a>'; ?></span>
	</div>
</div>

<div class="container honor_content">

	<!-- 轮播图 -->
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  		<!-- Wrapper for slides -->
  		<div class="carousel-inner" role="listbox">
  			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post();

				 	foreach((get_the_category()) as $category){
				 		$catid=$category->cat_ID;
				 	}
					if( $catid == 14){
				?>


    		<div class="item clearfix" style="height:500px;overflow:hidden">

				<?php  if(catch_blog_image()){?>
					<img src="<?php echo catch_blog_image();?>" style="float:right">
					
				<?php }else{;?>

				<img src="<?php bloginfo('template_directory');?>/images/equipment-eg.01.jpg" alt="..." style="float:right">
		  		<?php };?>
      			

				<div class="lunbo_content">
<!-- 					<h4 onclick="location='<?php the_permalink(); ?>'"><?php the_title(); ?></h4>
							<p style="margin-bottom:25px;" onclick="location='<?php the_permalink(); ?>'"><?php if(has_excerpt()) 
						{the_excerpt(); } else { 
							echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300,"......");  
						} 
					?></p>
-->
					<h4><?php the_title(); ?></h4>
					<p style="margin-bottom:25px;"><?php if(has_excerpt()) 
						{the_excerpt(); } else { 
							echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 300,"......");  
						} 
					?></p>
				
					<!-- <a href="<?php the_permalink(); ?>" class="detail_a">查看详情>></a> -->


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
    		<?php }endwhile; ?>
				
			<?php endif; ;?>
  		</div>
	</div>
	<!-- 结束 -->


	<div class="row honor-show" >
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); 
				foreach((get_the_category()) as $category){
				 		$catid=$category->cat_ID;
				 	}
					if( $catid == 15){
			?>
		<div class="col-xs-12 col-sm-6 col-md-4">
			<div class="intro_main">
				<a href="<?php the_permalink(); ?>"></a>
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
								echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"......");  
							} 
						?></p>
					<!-- <a href="<?php the_permalink(); ?>">查看详情>></a> -->
				</div>
			</div>
		</div>
	<?php }endwhile; ?>
			
	<?php endif;?>


		
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