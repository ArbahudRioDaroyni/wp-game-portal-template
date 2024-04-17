<?php
function comment_list($comment, $args, $depth) {
  if ( 'div' === $args['style'] ) {
    $tag       = 'div';
    $add_below = 'comment';
  } else {
    $tag       = 'li';
    $add_below = 'div-comment';
  }

  $args['avatar-args'] = [
    'url'           => get_avatar_url($comment, null),
    'scheme'        => null,
    'class'         => 'rounded-circle avatar-img'
    // 'force_display' => false,
    // 'extra_attr'    => 'width="35"',
  ]; ?>

  <<?php echo $tag . ' '; comment_class( empty( $args['has_children'] ) ? 'nk-comment list-unstyled ml-0 children' : 'nk-comment list-unstyled ml-0 parent' ); ?> id="comment-<?php comment_ID() ?>">
    <div id="div-comment-<?php comment_ID() ?>" class="nk-comment-meta ">
      <?= get_avatar( $comment, null, null, get_comment_author(), $args['avatar-args'] ); ?>
      by 
      <span class="vcard"><a rel="nofollow" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>" class="fn"><?= get_comment_author() ?></a></span>
      pada
      <a rel="nofollow" class="ml-2" href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
        /* translators: 1: date, 2: time */
        printf(
          __('%1$s at %2$s'), 
          get_comment_date(),  
          get_comment_time() 
        ); ?>
      </a>
      <?php comment_reply_link( 
          array_merge( 
            $args, 
            array( 
              'add_below' => $add_below, 
              'depth'     => $depth, 
              'max_depth' => $args['max_depth'],
              'reply_text' => 'Reply'
            ) 
          )
      ); ?>
    </div>
    <div class="nk-comment-text">
      <?php echo hideTextInComment(get_comment_text()); ?>
      <?php if ( $comment->comment_approved == '0' ) { ?>
        <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
      } ?>
    </div>
  
  <?php
}

function reply_link_class($class){
  $class = str_replace("class='comment-reply-link'", "class='comment-reply-link nk-btn nk-btn-rounded nk-btn-color-dark-3 float-right'", $class);
  return $class;
}
add_filter('comment_reply_link', 'reply_link_class');

function the_comment_form( $args = array('format' => 'html5'), $post_id = null ) {
    if ( null === $post_id ) {
        $post_id = get_the_ID();
    }
 
    // Exit the function when comments for the post are closed.
    if ( ! comments_open( $post_id ) ) {
        /**
         * Fires after the comment form if comments are closed.
         *
         * @since 3.0.0
         */
        do_action( 'comment_form_comments_closed' );
 
        return;
    }
 
    $commenter     = wp_get_current_commenter();
    $user          = wp_get_current_user();
    $user_identity = $user->exists() ? $user->display_name : '';
 
    $args = wp_parse_args( $args );
    if ( ! isset( $args['format'] ) ) {
        $args['format'] = current_theme_supports( 'html5', 'comment-form' ) ? 'html5' : 'xhtml';
    }
 
    $req      = get_option( 'require_name_email' );
    $html_req = ( $req ? " required='required'" : '' );
    $html5    = 'html5' === $args['format'];
 
    $fields = array(
        'author' => sprintf(
            '<div class="col-md-4">%s</div>',
            sprintf(
                '<input id="author" class="form-control" name="author" type="text" value="%s" placeholder="Name *" size="30" maxlength="245"%s />',
                esc_attr( $commenter['comment_author'] ),
                $html_req
            )
        ),
        'email'  => sprintf(
            '<div class="col-md-4">%s</div>',
            sprintf(
                '<input id="email" class="form-control" name="email" %s value="%s" placeholder="Email *" size="30" maxlength="100" aria-describedby="email-notes"%s />',
                ( $html5 ? 'type="email"' : 'type="text"' ),
                esc_attr( $commenter['comment_author_email'] ),
                $html_req
            )
        ),
        'url'    => sprintf(
            '<div class="col-md-4">%s</div>',
            sprintf(
                '<input id="url" class="form-control" name="url" %s value="%s" placeholder="URL Website / WA / Telp" size="30" maxlength="200" />',
                ( $html5 ? 'type="url"' : 'type="text"' ),
                esc_attr( $commenter['comment_author_url'] )
            )
        ),
    );
    
    if ( has_action( 'set_comment_cookies', 'wp_set_comment_cookies' ) && get_option( 'show_comments_cookies_opt_in' ) ) {
        $consent = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
 
        $fields['cookies'] = sprintf(
            '<p class="comment-form-cookies-consent custom-control custom-checkbox col-md-12" style="margin-left: 22px">%s %s</p>',
            sprintf(
                '<input id="wp-comment-cookies-consent" class="custom-control-input" name="wp-comment-cookies-consent" type="checkbox" value="yes"%s />',
                $consent
            ),
            sprintf(
                '<label class="custom-control-label lead" for="wp-comment-cookies-consent">%s</label>',
                __( 'Save my name, email, and website in this browser for the next time I comment.' )
            )
        );
 
        // Ensure that the passed fields include cookies consent.
        if ( isset( $args['fields'] ) && ! isset( $args['fields']['cookies'] ) ) {
            $args['fields']['cookies'] = $fields['cookies'];
        }
    }
 
    $required_text = sprintf(
        /* translators: %s: Asterisk symbol (*). */
        ' ' . __( 'Required fields are marked %s' ),
        '<span class="required">*</span>'
    );
 
    /**
     * Filters the default comment form fields.
     *
     * @since 3.0.0
     *
     * @param string[] $fields Array of the default comment fields.
     */
    $fields = apply_filters( 'comment_form_default_fields', $fields );
 
    $defaults = array(
        'fields'               => $fields,
        'comment_field'        => sprintf(
            '<div class="col-md-12">%s</div>',
            '<textarea id="comment" class="form-control" name="comment" placeholder="Masukkan Komentar atau Masukan Anda, atau Bisa Request Artikel untuk Kami Terbitkan" cols="45" rows="8" maxlength="65525" required="required"></textarea>'
        ),
        'must_log_in'          => sprintf(
            '<p class="must-log-in">%s</p>',
            sprintf(
                /* translators: %s: Login URL. */
                __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                /** This filter is documented in wp-includes/link-template.php */
                wp_login_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
            )
        ),
        'logged_in_as'         => sprintf(
            '<p class="logged-in-as">%s</p>',
            sprintf(
                /* translators: 1: Edit user link, 2: Accessibility text, 3: User name, 4: Logout URL. */
                __( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>' ),
                get_edit_user_link(),
                /* translators: %s: User name. */
                esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.' ), $user_identity ) ),
                $user_identity,
                /** This filter is documented in wp-includes/link-template.php */
                wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
            )
        ),
        'comment_notes_before' => sprintf(
            '<div class="col-md-12 comment-notes">%s%s</div>',
                sprintf(
                    '<span id="email-notes">%s</span>',
            __( 'Your email address will not be published.' )
            ),
            ( $req ? $required_text : '' )
        ),
        'comment_notes_after'  => '',
        'action'               => site_url( '/wp-comments-post.php' ),
        'id_form'              => 'commentform',
        'id_submit'            => 'submit',
        'class_form'           => 'nk-form',
        'class_submit'         => 'nk-btn nk-btn-outline nk-btn-color-main-1',
        'name_submit'          => 'submit',
        'title_reply'          => '<span><span class="text-main-1">'.__( 'Tinggalkan' ).'</span>'.__( ' Balasan' ).'</span>',
        /* translators: %s: Author of the comment being replied to. */
        'title_reply_to'       => __( 'Leave a Reply to %s' ),
        'title_reply_before'   => '<h3 id="reply-title" class="comment-reply-title nk-decorated-h-2">',
        'title_reply_after'    => '</h3>',
        'cancel_reply_before'  => '<small>',
        'cancel_reply_after'   => '</small>',
        'cancel_reply_link'    => __( 'Cancel reply' ),
        'label_submit'         => __( 'Post Comment' ),
        'submit_button'        => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
        'submit_field'         => '<p class="form-submit col-md-12">%1$s %2$s</p>',
        'format'               => 'xhtml',
    );
 
    /**
     * Filters the comment form default arguments.
     *
     * Use {@see 'comment_form_default_fields'} to filter the comment fields.
     *
     * @since 3.0.0
     *
     * @param array $defaults The default comment form arguments.
     */
    $args = wp_parse_args( $args, apply_filters( 'comment_form_defaults', $defaults ) );
 
    // Ensure that the filtered args contain all required default values.
    $args = array_merge( $defaults, $args );
 
    // Remove aria-describedby from the email field if there's no associated description.
    if ( false === strpos( $args['comment_notes_before'], 'id="email-notes"' ) ) {
        $args['fields']['email'] = str_replace(
            ' aria-describedby="email-notes"',
            '',
            $args['fields']['email']
        );
    }
 
    /**
     * Fires before the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_before' );
    ?>
    <div id="respond" class="comment-respond">
        <?php
        echo $args['title_reply_before'];
 
        comment_form_title( $args['title_reply'], $args['title_reply_to'] );
 
        echo $args['cancel_reply_before'];
 
        cancel_comment_reply_link( $args['cancel_reply_link'] );
 
        echo $args['cancel_reply_after'];
 
        echo $args['title_reply_after'];
 
        if ( get_option( 'comment_registration' ) && ! is_user_logged_in() ) :
 
            echo $args['must_log_in'];
            /**
             * Fires after the HTML-formatted 'must log in after' message in the comment form.
             *
             * @since 3.0.0
             */
            do_action( 'comment_form_must_log_in_after' );
 
        else :
 
            printf(
                '<div class="nk-reply">
                <form action="%s" method="post" id="%s" class="%s"%s>
                <div class="row sm-gap vertical-gap">',
                esc_url( $args['action'] ),
                esc_attr( $args['id_form'] ),
                esc_attr( $args['class_form'] ),
                ( $html5 ? '' : '' )
            );
 
            /**
             * Fires at the top of the comment form, inside the form tag.
             *
             * @since 3.0.0
             */
            do_action( 'comment_form_top' );
 
            if ( is_user_logged_in() ) :
 
                /**
                 * Filters the 'logged in' message for the comment form for display.
                 *
                 * @since 3.0.0
                 *
                 * @param string $args_logged_in The logged-in-as HTML-formatted message.
                 * @param array  $commenter      An array containing the comment author's
                 *                               username, email, and URL.
                 * @param string $user_identity  If the commenter is a registered user,
                 *                               the display name, blank otherwise.
                 */
                echo apply_filters( 'comment_form_logged_in', $args['logged_in_as'], $commenter, $user_identity );
 
                /**
                 * Fires after the is_user_logged_in() check in the comment form.
                 *
                 * @since 3.0.0
                 *
                 * @param array  $commenter     An array containing the comment author's
                 *                              username, email, and URL.
                 * @param string $user_identity If the commenter is a registered user,
                 *                              the display name, blank otherwise.
                 */
                do_action( 'comment_form_logged_in_after', $commenter, $user_identity );
 
            else :
 
                echo $args['comment_notes_before'];
 
            endif;
 
            // Prepare an array of all fields, including the textarea.
            $comment_fields = array( 'comment' => $args['comment_field'] ) + (array) $args['fields'];
 
            /**
             * Filters the comment form fields, including the textarea.
             *
             * @since 4.4.0
             *
             * @param array $comment_fields The comment fields.
             */
            $comment_fields = apply_filters( 'comment_form_fields', $comment_fields );
 
            // Get an array of field names, excluding the textarea
            $comment_field_keys = array_diff( array_keys( $comment_fields ), array( 'comment' ) );
 
            // Get the first and the last field name, excluding the textarea
            $first_field = reset( $comment_field_keys );
            $last_field  = end( $comment_field_keys );
 
            foreach ( $comment_fields as $name => $field ) {
 
                if ( 'comment' === $name ) {
 
                    /**
                     * Filters the content of the comment textarea field for display.
                     *
                     * @since 3.0.0
                     *
                     * @param string $args_comment_field The content of the comment textarea field.
                     */
                    echo apply_filters( 'comment_form_field_comment', $field );
 
                    echo $args['comment_notes_after'];
 
                } elseif ( ! is_user_logged_in() ) {
 
                    if ( $first_field === $name ) {
                        /**
                         * Fires before the comment fields in the comment form, excluding the textarea.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_before_fields' );
                    }
 
                    /**
                     * Filters a comment form field for display.
                     *
                     * The dynamic portion of the filter hook, `$name`, refers to the name
                     * of the comment form field. Such as 'author', 'email', or 'url'.
                     *
                     * @since 3.0.0
                     *
                     * @param string $field The HTML-formatted output of the comment form field.
                     */
                    echo apply_filters( "comment_form_field_{$name}", $field ) . "\n";
 
                    if ( $last_field === $name ) {
                        /**
                         * Fires after the comment fields in the comment form, excluding the textarea.
                         *
                         * @since 3.0.0
                         */
                        do_action( 'comment_form_after_fields' );
                    }
                }
            }
 
            $submit_button = sprintf(
                $args['submit_button'],
                esc_attr( $args['name_submit'] ),
                esc_attr( $args['id_submit'] ),
                esc_attr( $args['class_submit'] ),
                esc_attr( $args['label_submit'] )
            );
 
            /**
             * Filters the submit button for the comment form to display.
             *
             * @since 4.2.0
             *
             * @param string $submit_button HTML markup for the submit button.
             * @param array  $args          Arguments passed to comment_form().
             */
            $submit_button = apply_filters( 'comment_form_submit_button', $submit_button, $args );
 
            $submit_field = sprintf(
                $args['submit_field'],
                $submit_button,
                get_comment_id_fields( $post_id )
            );
 
            /**
             * Filters the submit field for the comment form to display.
             *
             * The submit field includes the submit button, hidden fields for the
             * comment form, and any wrapper markup.
             *
             * @since 4.2.0
             *
             * @param string $submit_field HTML markup for the submit field.
             * @param array  $args         Arguments passed to comment_form().
             */
            echo apply_filters( 'comment_form_submit_field', $submit_field, $args );
 
            /**
             * Fires at the bottom of the comment form, inside the closing </form> tag.
             *
             * @since 1.5.0
             *
             * @param int $post_id The post ID.
             */
            do_action( 'comment_form', $post_id );
 
            echo '</div></form></div>';
 
        endif;
        ?>
    </div><!-- #respond -->
    <?php
 
    /**
     * Fires after the comment form.
     *
     * @since 3.0.0
     */
    do_action( 'comment_form_after' );
}