<?php get_header(); ?>
<style type="text/css">
	.header_span1{
		cursor: default!important;
	}
	.archive_left ul li{
		margin-left: 50px;
		list-style: disc;
	}
	.archive_left ul li>p{
		text-indent: 0;
		margin: 0px;
		display: inline;
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
				
				case '设备介绍1':
				
				case '设备介绍2':
				?>
					<h1 class="page-header_title">设备介绍</h1>
					<span class="page-header_content">明潭眼科/<?php echo '<a href="'.get_category_link($cats[0]->parent ).'">'.get_cat_name($cats[0]->category_parent).'</a>'; ?></span>
				<?php
					break;
				case '荣誉展示':
				?>
					<h1 class="page-header_title">荣誉展示</h1>
					<span class="page-header_content">明潭眼科/荣誉展示</span>
				<?php
					break;
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
				<article class="blog_article1">
					<div class="blog_content1"> 
						<span class="header_span1"><?php the_title(); ?></span>
						<div style="margin-bottom:5px">
							<span class="header_span2">分类名称：<?php $category = get_the_category(); echo '<a href="'.get_category_link($parentCat->term_id).'">'.get_cat_name($cats[0]->category_parent).'</a>'; ?></span>
							<span class="header_span2">|&nbsp;&nbsp;时间：<?php the_date(); ?></span>
						</div>
						
						<!-- <div class="blog_pdiv"> -->
							<?php the_content(); ?>
						<!-- </div> -->
						
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
