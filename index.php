<?php 
// get theme header.
get_header();

// determine if we have posts remaining to be displayed.
if ( have_posts() ) :

    // while we have posts we loop through them.
    while ( have_posts() ) : 
    
        the_post(); // advance onto the next post, and set the global $post variable

        // display the title and the content of current post.
        echo '<h1>' . get_the_title() . '</h1>';
        the_content();
        
    endwhile;

endif;

// get theme footer.
get_footer();

?>