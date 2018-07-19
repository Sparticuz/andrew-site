<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="post <?php the_ID(); ?>">
	<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <?php the_time('m.d.Y') ?></h2>
	<div class="post-entry">
		<?php the_excerpt(); ?>
	</div>
	<p class="divide">
		<?php if ('open' == $post-> comment_status) : //If comments are allowed,then ?>
		<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
		<?php else : // comments are closed ?>
		<?php endif; ?>
	</p>
	</div>

<?php endwhile; ?>

<?php else : ?>

<?php endif; ?>

	<div class="post" style="text-align: center;">
	<?php posts_nav_link(' &#183; ', 'Back', 'Next'); ?>
	</div>

</div>

<?php get_footer(); ?>
