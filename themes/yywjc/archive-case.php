<?php 
// Template Name:page-case
get_header();?>



<div class="page-header">
	<div class="container">
		<h1 class="page-header_title">诊疗项目</h1>
		<span class="page-header_content">明潭眼科/诊疗项目</span>
	</div>
</div>

<div class="container">

	<?php if(have_posts()) : ?>
		<?php while(have_posts()) : the_post(); ?>
  	<div class="case_main">
  		<?php  if(catch_blog_image()){?>
			<div class="img_div"><img src="<?php echo catch_blog_image();?>"></div>
		<?php }else{;?>

		<img src="<?php bloginfo('template_directory');?>/images/imgHospital.jpg">
  		<?php };?>
  		<div class="case_content">
	  		<div class="case_left" onclick="location='<?php the_permalink(); ?>'">
	  			<h3><?php the_title(); ?></h3>
	  			<p>
	  				<?php if(has_excerpt()) 
						{the_excerpt(); } else { 
							echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 200,"......");  
						} 
					?>
	  			</p>
	  		</div>
	  		<div class="case_right">
				<button
						<?if(!is_user_logged_in()){?>
							onclick="window.wsocial_dialog_login_show();"
						<?}else{?>
							onclick="patients_setting();"
						<?}?>
				>立即预约</button>
	  			<!-- <a href="<?php the_permalink(); ?>">查看详细>></a> -->
	  		</div>
  			
  		</div>
  	</div>
	<?php endwhile; ?>
				
	<?php endif; ?>


</div>



<?php get_footer(); ?>              