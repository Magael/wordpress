<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content/content-page' );

	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; // End of the loop.



get_footer();
?>


<img class="image" src="<?php echo get_field('bandeau')['image_g']['url']; ?>">
<h1 class="title"><?php the_field('bandeau_titre_g') ?></h1>


<h3 class="sous-titre"><?php the_field('bandeau_survol_g_titre') ?></h3>
<p class="textarea"><?= get_field('bandeau')['survol_g']['texte_g'] ?></p>



<?php 
  $group = get_field('bandeau')['bouton'];

  if($group['title']) :

  $url = $group['url'];
  $target = 'target="_blank" rel="noopener"';

  if( $group['choice'] == 'pagelink' ) {
      $url = $group['page_link'];
      $target = '';
  } ?>

  <a class="lien" href="<?php echo $url ?>" <?php echo $target; ?> >
      <div class="icon-container">
        <img class="icon" href="<?php echo get_field('bandeau')['image_g']['url'] ?>">
      </div>
      <p><?php echo $group['title']; ?></p>
  </a>

  <?php endif; ?>

<img class="image" src="<?php echo get_field('bandeau')['image_d']['url']; ?>">
<h1 class="title"><?php the_field('bandeau_titre_d') ?></h1>


<h3 class="sous-titre"><?php the_field('bandeau_survol_d_titre') ?></h3>
<p class="textarea"><?= get_field('bandeau')['survol_d']['texte_d'] ?></p>



<?php 
  $group = get_field('bandeau')['bouton'];

  if($group['title']) :

  $url = $group['url'];
  $target = 'target="_blank" rel="noopener"';

  if( $group['choice'] == 'pagelink' ) {
      $url = $group['page_link'];
      $target = '';
  } ?>

  <a class="lien" href="<?php echo $url ?>" <?php echo $target; ?> >
      <div class="icon-container">
        <img class="icon" href="<?php echo get_field('bandeau')['image_d']['url'] ?>">
      </div>
      <p><?php echo $group['title']; ?></p>
  </a>

  <?php endif; ?>

