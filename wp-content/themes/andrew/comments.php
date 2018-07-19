<div id="comments">
<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<?php if($comments) : ?>
	<ol>
	<?php foreach($comments as $comment) : ?>
		<li id="comment-<?php comment_ID(); ?>" class="comment rounded <?php if (2 == $comment->user_id) echo "authcomment"?>">
			<?php if ($comment->comment_approved == '0') : ?>
				<p class="approval">Your comment is awaiting approval</p>
			<?php endif; ?>
			<?php //comment starts here ?>
			<div class="comment-wrapper">
				<div class="comment-author">
					<?php echo get_avatar(get_comment_author_email(), '64'); ?>
					<p class="comment-user"><?php comment_author_link(); ?> <em>says</em>:<br />
					<a href="" class="comment-perma"><?php comment_date(); echo ' at '; comment_time(); ?></a></p>
				</div>
				<div class="comment-text">
					<p><?php comment_text(); ?></p>
				</div>
			</div>
			<?php //comment ends here ?>
		</li>
	<?php endforeach; ?>
	</ol>
<?php else : ?>
	<p>No comments</p>
<?php endif; ?>

<?php if(comments_open()) : ?>
	<?php if(get_option('comment_registration') && !$user_ID) : ?>
	<?php else : ?>
		<?php if($user_ID) : ?>
		<?php else : ?>
		<?php endif; ?>
	<?php endif; ?>
<?php else : ?>
<?php endif; ?>
</div>