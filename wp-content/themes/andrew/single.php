<?php get_header(); ?>

<div id="content">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
	<div class="post <?php the_ID(); ?>">
	<h2 class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <?php the_time('m.d.Y') ?></h2>
	<div class="post-entry">
		<?php the_content("Continue reading..."); ?>
	</div>
	<p class="divide">
		<?php comments_number('No Comments', '1 Comment', '% Comments'); ?>
	</p>
	</div>

	<?php endwhile; ?>
	<?php else : ?>


	<?php endif; ?>

</div>

<?php comments_template(); ?>

<?php get_footer(); ?>