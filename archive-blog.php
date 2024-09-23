<?php
get_header(); // Include header

// Check if there are any posts to display
if ( have_posts() ) : ?>
   <header class="page-header">
      <h1 class="page-title"><?php post_type_archive_title(); ?></h1>
   </header>

   <div class="post-archive">
      <?php
      // Loop through the posts
      while ( have_posts() ) : the_post(); ?>
         <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="entry-meta">
               <span class="post-date"><?php echo get_the_date(); ?></span>
               <span class="post-author"><?php the_author_posts_link(); ?></span>
            </div>
            <div class="entry-summary">
               <?php the_excerpt(); // Display post excerpt ?>
            </div>
         </article>
      <?php endwhile; ?>
   </div>

   <div class="pagination">
      <?php
      // Pagination links
      the_posts_pagination(array(
         'prev_text' => __('« Previous', 'your-theme'),
         'next_text' => __('Next »', 'your-theme'),
      ));
      ?>
   </div>

<?php else : ?>
   <p><?php _e('No posts found.', 'your-theme'); ?></p>
<?php endif;

get_footer(); // Include footer
