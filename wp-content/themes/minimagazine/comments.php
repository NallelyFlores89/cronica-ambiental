<?php

/**
 * The template for displaying Comments.
 * @package minimagazine
 */



/*

 * If the current post is protected by a password and

 * the visitor has not yet entered the password we will

 * return early without loading the comments.

 */

if ( post_password_required() )

	return;

?>



	<div id="comments" class="comments-area">


	<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?

		if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :

	?>

		<p class="no-comments"><?php _e( 'Comments are closed.', 'minimagazine' ); ?></p>

	<?php
		else:
			$comments_args = array(

				// change the title of send button 

				'label_submit'=>'Comentar',

				'comment_notes_before' => '',

				// remove "Text or HTML to be displayed after the set of comment fields"

				'comment_notes_after' => '',
				
				'title_reply' => '<header><h2>'.__('Deja un comentario','minimagazine').'</h2></header>',

				// redefine your own textarea (the comment body)


				'fields' => array(
				
				'author' => '<div class="inputBlock">' . '<label for="author">' . __( 'nombre', 'minimagazine' ) . '</label><input  id="author" name="author" type="text" placeholder="" /> ' . '</div> ',
								
				'email' => '<div class="inputBlock">'.'<label for="email">' . __( 'correo electrónico', 'minimagazine' ) . '</label><input id="email" name="email" type="text" placeholder="" />' . '</div> ',
				
			
				'url' => '<div class="inputBlock">'.'<label for="url"><span>' . __( 'página web', 'minimagazine' ) . '</label><input id="url" name="url" type="text" placeholder="" />'. '</div>',


				// 'comment_field' => '<div class="inputBlock"><label for="comment">comentario:</label><textarea id="comment" name="comment"></textarea></div>',

			),

		);
	?>
		<section id="commentForm">
		
		<?php
		comment_form($comments_args);
		?>
		</section>
	<?php
		endif;
	?>
	

	<?php if ( have_comments() ) : ?>

				<section class="comments">
					<?php
						wp_list_comments('callback=cwp_comment');
					?>
				</section><!-- end .comments -->


		<div class="navigation">

			<?php 

			  paginate_comments_links( array('prev_text' => 'prev', 'next_text' => 'next')); 

			?>

		</div>



	<?php endif; // have_comments() ?>



	

</div><!-- #comments -->

