<?php
/**
 * Template part for displaying blog-posts preview in index.php
 * not 100% if i used the correct termialogy
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 *
 */
?>





<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <a href="<?php the_permalink(); ?>">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </a>
  </header>


  <div class="entry-date">
    <?php $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?>
  </div>


	<?php _s_post_thumbnail(); ?>


	<div class="entry-content">
    <?php the_excerpt(); ?>
    <!-- TODO add php word-length checker for explicit excerpts,
     40 words -->
  </div>


  <div class="archive-read-more">
    <a href="<?php the_permalink(); ?>">
      Loe edasi
    </a>
  </div>


  <!-- //change to ( have_comments() ) :  or Alar version-->
  <?php if (get_comments_number() > 0) { ?>
    <div class="comments__bubble comments__bubble--custom">
      <a href="<?php the_permalink(); ?>#comments">
        <?php echo 'Komentaare on ' . get_comments_number(); ?>
      </a>
    </div>

  <?php } else if (get_comments_number() <= 0) { ?>
    <div class="comments__bubble comments__bubble--custom">
      <a href="<?php the_permalink(); ?>#comments">
        Kirjuta komentaar
      </a>
    </div>
  <?php } ?>

</article>