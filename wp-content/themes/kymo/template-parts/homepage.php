<?php
/*
/*!
Theme Name: KYMO Online
Theme URI: http://underscores.me/
Author: pram-it
Author URI: https://www.pram-it.com/
Description: Custom theme for KYMO Online
Version: 1.0.0
Tested up to: 5.4
Requires PHP: 5.6
License: GNU General Public License v2 or later
License URI: LICENSE
Text Domain: kymo
*/

get_header(); // Include the header
?>
<div id="primary" class="content-area">
   <main id="main" class="site-main">
   <?php
      // Start the Loop to display page content
      if ( have_posts() ) :
         while ( have_posts() ) : the_post();
            the_content(); // Display the content of the page
         endwhile;
      endif;
      ?> 

   </main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer(); // Include the footer
?>