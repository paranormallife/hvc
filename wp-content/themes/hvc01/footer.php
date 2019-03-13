<!-- FOOTER.PHP ++++++++++++++++++++++ -->

    <div id="footer-map">
        <a href="<?php echo get_option('map_link'); ?>">
            <?php echo get_option('map_blurb'); ?>
        </a>
    </div>

    <footer>
        <div class="footer-menu">
            <?php $navmenu = array(
                'theme_location'  => 'nav1',
                'container'       => 'false',
                'echo'            => true,
                'fallback_cb'     => 'false',
                'items_wrap'      => /* Don't wrap in a UL */ '%3$s',
                'depth'           => 1
            ); ?>
            <ul>
                <?php wp_nav_menu( $navmenu ); ?>        
            </ul>
        </div>
        <div class="footer-copyright">
            <div>&copy; <?php echo date('Y '); bloginfo('name'); ?></div>
            <div><a href="https://asubtleweb.com" target="_blank">A subtle website.</a></div>
        </div>
    </footer>

<?php /* Include this so the admin bar is visible. */ wp_footer(); ?>

</body>
</html>