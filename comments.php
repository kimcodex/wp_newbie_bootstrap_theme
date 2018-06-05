<div class="comments">
	<?php $args = array(
		'walker'            => null,
		'max_depth'         => 2,
		'style'             => 'ul',
		'callback'          => null,
		'end-callback'      => null,
		'type'              => 'all',
		'reply_text'        => 'Reply',
		'page'              => '',
		'per_page'          => '',
		'avatar_size'       => 50,
		'reverse_top_level' => null,
		'reverse_children'  => '',
		'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
		'short_ping'        => false,   // @since 3.6
	    'echo'              => true     // boolean, default is true
	); ?>
	<?php wp_list_comments( $args,$comments); 

		$aria_req = ( $req ? " aria-required='true'" : '' );

		$fields =  array(

		  'author' =>
		    '<p class="comment-form-author"><input id="author" class="form-control" name="author" placeholder="Name" type="text" autocomplete="off" value="' . esc_attr( $commenter['comment_author'] ) .
		    '" size="30"' . $aria_req . ' /></p>',
		  'email' =>
		       '<p class="comment-form-email"><input id="email" class="form-control" name="email" placeholder="Email(Optional)" type="text" autocomplete="off" value="' . esc_attr(  $commenter['comment_author_email'] ) .
		       '" size="30"' . $aria_req . ' /></p>'
		);

		$comments_args = array(
	        
	        'title_reply_before' => '<h5 class="card-header">',
	        'title_reply'=>'Leave a Comment:',
	        'title_reply_to'    => __( 'Reply to %s' ),
	        'cancel_reply_link' => __( 'Cancel' ),
	        'title_reply_after' => '</h5>',
	       	'comment_notes_before' => '',
	        'comment_field' => '<p class="comment-form-comment"><textarea id="comment" class="form-control" name="comment" rows="5" placeholder="Comment here..." aria-required="true"></textarea></p>',
	        // 'comment_notes_after' => '</div>',
	        'fields' => apply_filters( 'comment_form_default_fields', $fields ),
	        'label_submit'=>'Submit',
	        'class_submit' => 'btn btn-primary',
		); 		

	?>

	<div class="card my-4">	
		<?php  comment_form($comments_args); ?>
	</div>


</div>

