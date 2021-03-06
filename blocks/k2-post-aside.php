<header class="entry-header">
	<?php k2_entry_meta('aside-above'); ?>
	<?php /* K2 Hook */ do_action('template_entry_head'); ?>
</header><!-- .entry-header -->

<div class="entry-content">
	<?php if ( has_post_thumbnail() ): ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( array( 75, 75 ), array( 'class' => 'alignleft' ) ); ?></a>
	<?php endif; ?>
	<?php the_content( sprintf( __('Continue reading &#8216;%s&#8217;', 'k2'), get_the_title() ) ); ?>
</div><!-- .entry-content -->

<footer class="entry-footer">
	<?php k2_entry_meta('aside-below'); ?>
	<?php /* K2 Hook */ do_action('template_entry_foot'); ?>
</footer><!-- .entry-footer -->
