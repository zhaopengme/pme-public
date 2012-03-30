		<?php get_header();?>
		<div id="container" class="container">
			<div class="row">
				<div id="content" class="span9">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<div id="post-<?php the_id();?>">
						<div class="row">
							<div class="span8">
								<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
							</div>
							<div class="span1 pull-left">
								<span class="badge comments-nums"><?php comments_popup_link('0','1','%');?></span>
							</div>
						</div>
						<div class="well">
							<?php the_content(); ?>
                    
							<?php wp_link_pages(); ?>
						</div>
						<div class="row">
							<div class="span7">
								<i class="icon-time"></i> <?php the_time(get_option('date_format'));?> <i class="icon-user"></i> <?php the_author();?> <?php the_tags('<i class="icon-tags"></i>',', ','');?>
							</div>
							<div class="span2 pull-left">
								
							</div>
						</div>
						<hr />
					</div>
					<?php endwhile; else: ?>
					<?php endif; ?>
					
					
					<div class="comments">
						<?php comments_template(); ?>
					</div>
										
				</div><!--#content /--->
				<?php get_sidebar();?>
			</div>
<?php get_footer();?>