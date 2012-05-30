<!--<pre><?php //print_r($page); ?></pre>-->
<?php $chunks = $page->chunks;
if ($chunks[0]->slug == 'hero-unit') { ?>
    <header>

        <div class="hero-unit">

    <?php echo $chunks[0]->body;array_shift($chunks) ?>

        </div>

    </header>
<?php } ?>

<div id="main" class="<?php echo $page->layout->theme_layout == 'full_page'?'12':'8'?> clearfix" role="main">



    <article id="<?php echo $page->id; ?>" class="clearfix" role="article" itemscope itemtype="http://schema.org/BlogPosting">

        <header>

            <div class="page-header"><h1 class="page-title" itemprop="headline"><?php echo $page->title; ?></h1></div>

        </header> <!-- end article header -->

        <section class="post_content clearfix" itemprop="articleBody">
<?php foreach ($chunks as $chunk) {
    echo $chunk->body;
} ?>

        </section> <!-- end article section -->

    </article> <!-- end article -->

<?php $com = count_comments($page->id, null, true); if ($page->comments_enabled || $com >= 1): ?>
    <h3 id="comments"><?php echo $com==0?'No':$com; echo ' Response'; echo $com>1||$com==0?'s':''; ?> to &#8220<?php echo $page->title; ?>&#8221;</h3>
    <?php echo display_comments($page->id); ?>
<?php endif; ?>



</div> <!-- end #main -->
