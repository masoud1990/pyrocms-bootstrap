					<?php if (isset($category->title)): ?>
					<h1 class="archive_title h2"><span><?php echo lang('blog_category_label'); ?>:</span> <?php echo $category->title; ?></h1>
					<?php endif; ?>
					
					<?php include 'loop.php'; ?>