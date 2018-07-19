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
	<?php if ('open' == $post-> comment_status) : //If comments are allowed,then ?>
	<?php comments_popup_link('No Comments', '1 Comment', '% Comments'); ?>
	<?php else : // otherwise; ?>
	<?php endif; ?>
</p>
</div>

<?php endwhile; ?>
<div class="post">
	<div class="alignleft"><?php next_posts_link('&laquo; Older Entries') ?></div>
	<div class="alignright"><?php previous_posts_link('Newer Entries &raquo;') ?></div>
</div>

<?php else : ?>

<?php endif; ?>

</div>

<?php get_footer(); ?>
