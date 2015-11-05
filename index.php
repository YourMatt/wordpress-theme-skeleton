<?
get_header ();
?>

   <div id="primary" class="content-area">
      <div id="content" class="site-content" role="main">
         <?php if (have_posts ()) : ?>

            <? while (have_posts ()) : the_post (); ?>
               <? get_template_part ('content', get_post_format ()); ?>
            <? endwhile; ?>

         <? else : ?>
            <? get_template_part ('content', 'none'); ?>
         <? endif; ?>

      </div>
   </div>

<?
get_sidebar ();
get_footer ();
?>