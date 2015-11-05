<?
get_header ();
?>

   <div id="primary" class="content-area">
      <div id="content" class="site-content" role="main">

         <?
         while (have_posts ()) : the_post (); ?>

            <article id="post-<? the_ID (); ?>" <? post_class (); ?>>
               <header class="entry-header">
                  <h1 class="entry-title"><? the_title (); ?></h1>
               </header>

               <div class="entry-content">
                  <? the_content (); ?>
               </div>
            </article>
         <?  endwhile; ?>

      </div>
   </div>

<?
get_footer ();
?>