		<?php get_header();?>
		<div id="container" class="container">
			<div class="row">
				<div id="content" class="span9">
					<p>Search Results</p>
					<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post();?>
					<div id="post-<?php the_id();?>">
						<div class="row">
							<div class="span8">
								<h2><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
							</div>
							<div class="span1 pull-left">
								<span class="badge comments-nums"><?php comments_popup_link('0','1','%');?></span>
							</div>
						</div>
						<blockquote>
							<?php echo mb_strimwidth(strip_tags(apply_filters('the_content',$post->post_content)),0,365,"...");?>
						</blockquote>
						<div class="row">
							<div class="span7">
								<i class="icon-time"></i> <?php the_time(get_option('date_format'));?> <i class="icon-user"></i> <?php the_author();?> <?php the_tags('<i class="icon-tags"></i>',', ','');?>
							</div>
							<div class="span2 pull-left">
								<a class="btn" href="<?php the_permalink();?>"><i class="icon-info-sign"></i> 阅读全文</a>
							</div>
						</div>
						<hr />
					</div>
					<?php endwhile;?>
					<?php else : ?>
						<p>No Results</p>
					<?php endif; ?>
					
					<div class="navigation">
						<?php pagination($query_string);?>
					</div>
					
				</div><!--#content /--->
				<?php get_sidebar();?>
			</div>
<?php get_footer();?>