<?php
// Template Name:page-yuyue
get_header(); ?>
<style type="text/css">
	html,body{
		min-width:0;
	}
	.header_container2{
		display: none;
	}
	.header_span1{
		cursor: default!important;
	}
	.archive_left{
		float:none;
		margin: 30px auto
	
	}
	.header_main-navigation{
		overflow:hidden;
	}
	.archive_main{
		background: #FFF;
	}
	.ea-bootstrap .step.form-group{
		margin-bottom:30px;
	}
	.ea-bootstrap div.form-group{
		margin-bottom:30px;
	}
	.ea-bootstrap .step{
		margin-bottom:30px;
	}
</style>
<div class="page-header">
	<div class="container">
		<h1 class="page-header_title">在线预约</h1>
		
	</div>
</div>
<div class="archive_main">
		<!-- Left -->
		<div class="archive_left">
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>
				<article class="blog_article1">
					<div class="blog_content1"> 
						
						
						<!-- <div class="blog_pdiv"> -->
							<?php the_content(); ?>
						<!-- </div> -->
						
					</div>
				</article>
				<?php endwhile; ?>
				
			<?php endif; ?>
			
			<div class="clearfix"></div>
		</div>
		<!-- end -->

		
				
		<!-- end -->
</div>

<?php get_footer(); ?>
