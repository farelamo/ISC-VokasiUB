<?php
/**
 * Template for Blog Five
 *
 * @package appon
 */

?>
<!-- wraper_blog_main -->
<div class="wraper_blog_main style-five">
	<div class="container">
		<!-- row -->
		<div class="row">
			<?php if ( 'nosidebar' === appon_global_var( 'blog-layout', '', false ) ) { ?>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<?php } else { ?>
				<?php if ( 'leftsidebar' === appon_global_var( 'blog-layout', '', false ) ) { ?>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-right">
				<?php } elseif ( 'rightsidebar' === appon_global_var( 'blog-layout', '', false ) ) { ?>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-left">
				<?php } else { ?>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
				<?php } ?>
			<?php } ?>
					<!-- blog_main -->
					<div class="blog_main">
						<?php
						if ( have_posts() ) :
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content-five', get_post_format() );
							endwhile;
						else :
							get_template_part( 'template-parts/content', 'none' );
						endif;
						?>
						<?php appon_pagination(); ?>
					</div>
					<!-- blog_main -->
				</div>
				<?php if ( 'nosidebar' === appon_global_var( 'blog-layout', '', false ) ) { ?>
				<?php } else { ?>
					<?php if ( 'leftsidebar' === appon_global_var( 'blog-layout', '', false ) ) { ?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left">
					<?php } elseif ( 'rightsidebar' === appon_global_var( 'blog-layout', '', false ) ) { ?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-right">
					<?php } else { ?>
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<?php } ?>
						<?php get_sidebar(); ?>
					</div>
				<?php } ?>
			</div>
			<!-- row -->
		</div>
	</div>
	<!-- wraper_blog_main -->
