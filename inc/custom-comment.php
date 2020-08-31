<?php
//using callback to change just html utput on a comment
//html5 comment
  function customComment($comment, $args, $depth) {
    //checks if were using a div or ol|ul for our output
    $tag = ('div' === $args['style']) ? 'div' : 'li';
?>


<<?php echo $tag; ?> id="comment-<?php comment_ID(); ?>" <?php comment_class($args['has_children'] ? 'parent' : '', $comment); ?>>
  <article id="div-comment-<?php comment_ID(); ?>" class="comment-body">
    <footer class="comment-meta">

        <?php if (0 != $args['avatar_size']) echo get_avatar($comment, $args['avatar_size']); ?>

        <div class="comment-meta__author">
          <?php printf(__('%s <span>Kommenteerib:</span>') , sprintf('%s', get_comment_author_link($comment))); ?>
        </div>

        <div class="comment-metadata">
          <time datetime="<?php comment_time('c'); ?>">
            <?php 
              /* translators: 1: comment date, 2: comment time */
              printf(__('%1$s') , get_comment_date('', $comment));
            ?>
          </time>
        
        <?php edit_comment_link(__('Edit') , '<span class="edit-link">', '</span>'); ?>
        </div><!-- .comment-metadata -->
        
      
      <?php if ('0' == $comment->comment_approved): ?>
      <p class="comment-awaiting-moderation"><?php _e('Sinu komentaari kontrollib moderaator.'); ?></p>

      <?php endif; ?>
    </footer><!-- .comment-meta -->

    <div class="comment-content">
      <?php comment_text(); ?>
    </div><!-- .comment-content -->

  </article><!-- .comment-body -->
<?php } ?>