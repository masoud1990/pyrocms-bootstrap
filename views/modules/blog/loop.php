				<?php if ( ! empty($blog) ): ?>
					<?php foreach ($blog as $post) : ?>

					<article id="post-<?php echo $post->id; ?>" class="clearfix" role="article">
						
						<header>
						
							<!-- <a href="<?php //the_permalink() ?>" title="<?php //the_title_attribute(); ?>"><?php //the_post_thumbnail( 'wpbs-featured' ); ?></a> -->
							
							<div class="page-header"><h1 class="h2"><?php echo anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, $post->title); ?></h1></div>
							
							<p class="meta"><?php echo lang('blog_posted_label'); ?> <time datetime="<?php echo format_date($post->created_on); ?>" pubdate><?php echo date('F j, Y', $post->created_on); ?></time> <?php echo strtolower(lang('blog_written_by_label') ); ?> <?php echo anchor('/users/profile/'.$post->author_id, $post->display_name); ?> <span class="amp">&</span> filed under <?php echo anchor('blog/category/'.$post->category_slug, $post->category_title); ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<p><?php echo $post->intro; echo '&nbsp;&nbsp;' . anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, lang('blog_read_more_label'), array('class' => 'more-link'));?></p>
						</section> <!-- end article section -->
						
						<?php if($post->keywords) : ?>
						<footer>

							<p class="tags">
							<span class="tags-title"><?php echo lang('blog_tagged_label'); ?>:</span> 
							<?php foreach (explode(',', $post->keywords) as $keyword) : ?>
								<?php echo $keyword; ?> 
							<?php endforeach; ?>
							</p>
							
						</footer> <!-- end article footer -->
						<?php endif; ?>
					
					</article> <!-- end article -->
					
					<?php endforeach; ?>
					
					<?php //if (function_exists('page_navi')) { // if expirimental feature is active ?>
						
						<?php //page_navi(); // use the page navi function ?>
						
					<?php //} else { // if it is disabled, display regular wp prev & next links ?>
						<nav class="wp-prev-next">
							<?php echo $pagination['links']; ?>
							<!-- <ul class="clearfix"> -->
								<!-- <li class="prev-link"><?php //next_posts_link(_e('&laquo; Older Entries', "bonestheme")) ?></li> -->
								<!-- <li class="next-link"><?php //previous_posts_link(_e('Newer Entries &raquo;', "bonestheme")) ?></li> -->
							<!-- </ul> -->
						</nav>	
					
					<?php //else : ?>
					
					<!-- <article id="post-not-found">
					    <header>
					    	<h1>post-not-found<?php //_e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p>post-not-found<?php //_e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article> -->
					
					
					<?php else: ?>
					<article id="post-not-found">
					    <header>
					    	<h1><?php echo lang('blog_currently_no_posts');?></h1>
					    </header>
					    <section class="post_content">
					    	<p>We cannot find the page you are looking for, please click <?php echo anchor('here'); ?>"> to go to the homepage</p>
					    </section>
					    <footer>
					    </footer>
					</article>
					<?php endif; ?>
			
				<!-- </div> --> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
		<!--	</div>  end #content -->

<?php //get_footer(); ?>