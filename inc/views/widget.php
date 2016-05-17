<?php
/**
 * Represents the view for the `Trending Posts` widget.
 *
 * @package   Trending_Posts
 * @author    Template Monster
 * @license   GPL-3.0+
 * @copyright 2012 - 2016, Template Monster
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
} ?>

<div class="trending-posts__item">
	<figure class="trending-posts__image">
		<?php echo $image; ?>
	</figure>
	<div class="trending-posts__header">
		<?php echo '<h5 class="trending-posts-title">' .  $title . '</h5>' ?>
	</div>
	<div class="trending-posts__content">
		<?php echo $excerpt; ?>
		<div class="trending-posts-meta">
			<?php echo $date; ?>
			<?php echo $author; ?>
			<?php echo $comments; ?>
			<?php echo $category; ?>
			<?php echo $tag; ?>
			<?php echo $view; ?>
			<?php echo $rating; ?>
		</div>
	</div>
	<?php echo $button; ?>
</div>
