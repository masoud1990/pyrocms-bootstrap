<!--<pre><?php //print_r($theme); ?></pre>-->
<!--<pre><?php //print_r($current_user); ?></pre>-->
<?php if ($comments): ?>


<!--    <nav id="comment-nav">
        <ul class="clearfix">
            <li><?php //previous_comments_link( __("Older comments","bonestheme") )   ?></li>
            <li><?php //next_comments_link( __("Newer comments","bonestheme") )   ?></li>
        </ul>
    </nav>-->

    <ol class="commentlist">
        <?php
        foreach ($comments as $item):
            $now = time();
            $array_ago = explode(',', timespan($item->created_on, $now));
            if (count($array_ago) == 2) : $time_ago = $array_ago[1].' ago';
            elseif (count($array_ago) == 1) : $time_ago = $array_ago[0].' ago';
            else : $time_ago = date('F j, Y', $item->created_on);
            endif;
            ?>
            <li class="comment even thread-even depth-1">
                <article id="comment-<?php echo $item->id; ?>" class="clearfix">
                    <div class="comment-author vcard row-fluid clearfix">
                        <div class="avatar span2"><?php echo gravatar($item->email, 75); ?></div>
                        <div class="span10 comment-text">
                            <h4>
                                <?php if ($item->user_id): ?>
                                    <?php echo anchor($item->website ? $item->website : 'user/' . $item->user_id, $this->ion_auth->get_user($item->user_id)->display_name, array('class' => 'url')); ?>
                                <?php else: ?>
                                    <?php echo $item->website ? anchor($item->website, $item->name, array('class' => 'url')) : $item->name; ?>
                                <?php endif; ?>
                            </h4>				<!--	<span class="edit-comment btn btn-small btn-info"><i class="icon-white icon-pencil"></i><a class="comment-edit-link" href="http://localhost/wordpress/wp-admin/comment.php?action=editcomment&amp;c=1" title="Edit comment">Edit</a></span>                    -->

                            <?php if (Settings::get('comment_markdown') AND $item->parsed > ''): ?>
                                <?php echo $item->parsed; ?>
                            <?php else: ?>
                                <p><?php echo nl2br($item->comment); ?></p>
                            <?php endif; ?>

                            <time datetime="<?php echo format_date($item->created_on); ?>"><?php  echo anchor(current_url() . '#comment-' . $item->id, $time_ago); ?></time>
        <?php //echo anchor(current_url() . '#respond', 'Reply', array('class' => 'comment-reply-link', 'onclick' => 'return addComment.moveForm("comment-1", "1", "respond", "1")')); ?>
                        </div>
                    </div>
                </article>
                <!-- </li> is added by wordpress automatically -->
            </li>
    <?php endforeach; ?>
    </ol>

    <?php endif;  ?>



<!--    <nav id="comment-nav">
        <ul class="clearfix">
            <li><?php //previous_comments_link( __("Older comments","bonestheme") )   ?></li>
            <li><?php //next_comments_link( __("Newer comments","bonestheme") )   ?></li>
        </ul>
    </nav>-->

    <?php //else : // this is displayed if there are no comments so far  ?>

    <?php //if ( //comments_open() ) :  ?>
    <!-- If comments are open, but there are no comments. -->

    <?php //else : // comments are closed 
    ?>

    <?php
    //$suppress_comments_message = of_get_option('suppress_comments_message');
    if (isset($page)) : $parent = $page;$parent->type = 'page';
    elseif(isset($post)) : $parent = $post;$parent->type = 'post';
    endif;
    ?>

    <?php if(!$parent->comments_enabled) :   ?>

    <!-- If comments are closed. -->
    <p class="alert alert-info">Comments are closed.</p>


    <?php else:   ?>


    <?php //if ( comments_open() ) :   ?>

    <section id="respond" class="respond-form">

        <h3 id="comment-form-title"><?php echo lang('comments.your_comment'); ?></h3>

<!--        <div id="cancel-comment-reply">
            <p class="small"><?php echo 'Cancel';   ?></p>
        </div>-->

    <?php if ($theme->options->comments_req_logon == 'yes' && !current_user ) :   ?>
        <div class="help">
            <p><?php echo 'You must be'; ?> <?php echo anchor('users/login', 'logged in'); ?> <?php echo 'to post a comment'; ?>.</p>
        </div>
    <?php else : ?>

        <form action="<?php echo site_url('comments/create/'.$parent->type.'/'.$parent->id); ?>" method="post" class="form-vertical" id="commentform">

    <?php if ( $current_user ) :   ?>

            <p class="comments-logged-in-as"><?php echo 'Logged in as'; ?> <?php echo anchor('user/'.$current_user->user_id, $current_user->display_name);  ?>. <?php echo anchor('user/logout', 'Log out &raquo;', array('title' => 'Log out of this account')); ?></p>

    <?php else :   ?>

            <ul id="comment-form-elements" class="clearfix">

                <li>
                    <div class="control-group">
                        <label for="author"><?php echo 'Name (required)';   ?> </label>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-user"></i></span>
                            <input type="text" name="name" id="author" value="<?php echo $comment['name'] ?>" placeholder="<?php echo 'Your name...'  ?>" tabindex="1" <?php echo "aria-required='true'";   ?> />
                        </div>
                    </div>
                </li>

                <li>
                    <div class="control-group">
                        <label for="email"><?php echo 'Mail (required)'  ?></label>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-envelope"></i></span>
                            <input type="email" name="email" id="email" value="<?php echo $comment['email'] ?>" placeholder="<?php echo 'Your Email'; ?>" tabindex="2" <?php echo "aria-required='true'";   ?> />
                            <span class="help-inline">(<?php echo "will not be published";   ?>)</span>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="control-group">
                        <label for="url"><?php echo 'Website';   ?></label>
                        <div class="input-prepend">
                            <span class="add-on"><i class="icon-home"></i></span>
                            <input type="url" name="url" id="url" value="<?php echo $comment['website'] ?>" placeholder="<?php echo 'Your Website';  ?>" tabindex="3" />
                        </div>
                    </div>
                </li>

            </ul>

    <?php endif;   ?>

            <div class="clearfix">
                <div class="input">
                    <textarea name="comment" id="comment" placeholder="<?php echo 'Your Comment Here…'; ?>" tabindex="4"></textarea>
                </div>
            </div>

            <div class="form-actions">
                <input class="btn btn-primary" name="submit" type="submit" id="submit" tabindex="5" value="<?php echo 'Submit Comment';  ?>" />
    <?php //comment_id_fields();   ?>
            </div>

            <?php
            //comment_form();
            //do_action('comment_form()', $post->ID); 
            ?>

        </form>

    <?php endif; // If registration required and not logged in   ?>
    </section>

<?php endif; // if you delete this the sky will fall on your head  ?>
    <pre>
<?php $this->load->model('theme_m');
            $this->theme_m->_theme = 'bootstrap';
            $use_bootswatch = $this->theme_m->get_option(array('slug' => 'use_bootswatch'));
            print_r($use_bootswatch); 
            echo $use_bootswatch->value; ?>
            </pre>