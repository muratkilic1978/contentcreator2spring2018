<?php 
 get_header();

# If condition - checking if we have any blogposts inside wordpress
if ( have_posts() ) :
    # We are looping through our blogposts until have_posts is true
    while ( have_posts() ) : the_post();
?>
    <!-- Below we will get the title for each blog-post -->
<h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a>  </h2>
    <!-- Below we will get the content for each blog-post  -->
    <p><?php the_excerpt(); // the_content(); ?></p>


<?php endwhile;
# Terminating the while-loop

# If the If-statement on line 4 is false we will continue with this else-statement on line 16
else:
    echo '<p>No content found!</p>';

endif;
# Terminating the if-statement

get_footer();
?>




