<?php
/**
 * The footer template
 *
 * Contains the closing of <div id="main"> and all content after.
 *
 * @package Starter_Theme
 */
?>

    </div><!-- #main -->

</div><!-- #page -->

<footer id="colophon" role="contentinfo">
<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
    <div id="copyright">
        &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?><br>
        <a href="http://addinadanielle.com" rel="nofollow">Theme Development by AD</a>
    </div>
</footer><!-- #colophon -->

<?php wp_footer(); ?> 
</body>
</html>