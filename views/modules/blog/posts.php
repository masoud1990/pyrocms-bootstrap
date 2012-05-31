				<div id="main" class="span8 clearfix" role="main">

					<?php if ( ! empty($blog) ): ?>
					<?php foreach ($blog as $post) : ?>

					<article id="post-<?php echo $post->id; ?>" class="clearfix" role="article">
						
						<header>
						
							<!-- <a href="<?php //the_permalink() ?>" title="<?php //the_title_attribute(); ?>"><?php //the_post_thumbnail( 'wpbs-featured' ); ?></a> -->
							
							<div class="page-header"><h1 class="h2"><?php echo anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, $post->title); ?></h1></div>
							
							<p class="meta">{{ lang:blog_posted_label }}<?php //lang('blog_posted_label'); ?> <time datetime="<?php echo format_date($post->created_on); ?>" pubdate><?php echo date('F j, Y', $post->created_on); ?></time> <?php strtolower(lang('blog.blog_written_by_label') /*lang('blog_written_by_label')*/); ?> <?php echo anchor('/users/profile/'.$post->author_id, $post->display_name); ?> <span class="amp">&</span> filed under <?php echo $post->category_title; ?>.</p>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix">
							<?php echo $post->intro; anchor('blog/' .date('Y/m', $post->created_on) .'/'. $post->slug, lang('blog_read_more_label'), array('class' => 'more-link'));?>
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="tags"><?php //the_tags('<span class="tags-title">' . //__("Tags","bonestheme") . ':</span> ', ' ', ''); ?>
							<span class="tags-title"><?php echo lang('blog_tagged_label'); ?>:</span> 
							<?php if($post->keywords) : ?><?php echo $post->keywords; ?>  <?php endif; ?>
							</p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php //comments_template(); ?>
					
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
					<?php //} ?>		
					
					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1>post-not-found<?php //_e("Not Found", "bonestheme"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p>post-not-found<?php //_e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>
					
					<?php endif; ?>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
		<!--	</div>  end #content -->

<?php //get_footer(); ?>