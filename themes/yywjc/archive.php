<?php
if ( is_category(1) ) {
	include(TEMPLATEPATH . '/archive-intro.php');
}else if ( is_category(12) ) {
	include(TEMPLATEPATH . '/archive-case.php');
}else if ( is_category(13) ) {
	include(TEMPLATEPATH . '/archive-honor.php');
}else{
?>
<?php get_header(); ?>
<style>
		@media (max-width:768px){
			.page-header{
					margin-top: 0px;
			}
		}
	@media (max-width:768px){
		#carousel-example-generic{
			display:none;
		}
		.row{
			margin:0px;
		}
		.page-header{
			    padding: 90px 0 20px;
		}
		.archive_left{
			width:100%;
		}
		.div_img{
			width:100%;
			height:100%;
		}
		.blog_content{
			padding:35px 15px;
		}
		.blog_article{
			padding:10px;
		}
		.archive_right{
			display:none;
		}
	}

</style>

<div class="page-header">
	<div class="container">
		
		<?php $cats = get_the_category();
			switch ($cats[0]->cat_name) {
				case '诊疗项目':
				?>
					<h1 class="page-header_title"><?php echo $cats[0]->cat_name; ?></h1>
					<span class="page-header_content">明潭眼科/<?php echo '<a href="'.get_category_link($cats[0]->term_id ).'">'.$cats[0]->cat_name.'</a>'; ?></span>
				<?php
					break;
				case '公益活动':
				?>
					<h1 class="page-header_title"><?php echo $cats[0]->cat_name; ?></h1>
					<span class="page-header_content">明潭眼科/院内展示/公益活动</span>
				<?php
					break;
				case '设备介绍':
				?>
					<h1 class="page-header_title"><?php echo $cats[0]->cat_name; ?></h1>
					<span class="page-header_content">明潭眼科/<?php echo '<a href="'.get_category_link($cats[0]->term_id ).'">'.$cats[0]->cat_name.'</a>'; ?>/<?php the_title(); ?></span>
				<?php
				default:
					?>
					<h1 class="page-header_title">科普知识</h1>
					<span class="page-header_content">明潭眼科/科普知识</span>
				<?php
					break;
			}
			
		?>
	</div>
</div>


<div class="container archive_main">
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

<?php get_footer(); }?>

