<?
// set variables for use in the footer

?>

</div>
<footer id="colophon" class="site-footer" role="contentinfo">
   <? get_sidebar ('main'); ?>
</footer>
<div class="site-sub-footer">
   <div class="copyright">Copyright <?= date ('Y') ?> - <? bloginfo ('name'); ?></div>
   <div class="links">
   </div>
</div>
</div>

<? wp_footer(); ?>
</body>
</html>