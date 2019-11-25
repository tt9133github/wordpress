<?php get_header(); ?>
<div class="page-header">
	<div class="container">
		<h1 class="page-header_title">搜索结果</h1>
	</div>
</div>
<div class="container" style="padding:60px 0px;">
	<div class="row">
	<!-- Left -->
		<div class="archive_left">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
			<article class="blog_article">
				<?php  if(catch_blog_image()){?>
					<img src="<?php echo catch_blog_image();?>" class="div_img">
				<?php };?>
				<div class="blog_content">
					
					<div style="margin-bottom:5px">
						<span class="header_span2">分类名称：<?php $cats = get_the_category(); echo '<a href="'.get_category_link($cats[0]->term_id ).'">'.$cats[0]->cat_name.'</a>'; ?></span>
						<span class="header_span2">|&nbsp;&nbsp;作者：<?php the_author(); ?></span>
						<span class="header_span2">|&nbsp;&nbsp;时间：<?php the_date(); ?></span>
					</div>
					

					<a href="<?php the_permalink(); ?>" class="title_href"><span class="header_span1"><?php the_title(); ?></span></a>
						

					<div class="blog_pdiv">
						<?php if(has_excerpt()) 
							{the_excerpt(); } else { 
								echo mb_strimwidth(strip_tags(apply_filters('the_content', $post->post_content)), 0, 250,"......");  
							} 
						?>
					</div>
					<a href="<?php the_permalink(); ?>">完整阅读&gt;&gt;</a>
				</div>
			</article>
			
			<?php endwhile; ?>
				
			<?php endif; ?>

			<div class="page_navi"><?php par_pagenavi(9); ?></div>
			<div class="clearfix"></div>
		</div>
		<!-- end -->

		<!-- Right -->
		<?php get_sidebar(); ?>
		
		<!-- end -->
	</div>	
</div>

	


<?php get_footer(); ?>
