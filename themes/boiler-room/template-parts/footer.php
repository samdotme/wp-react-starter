<footer>
  <div class="footer">
    <?php
        $menu_params = array(
          'theme_location'  => 'footer-menu',
          'menu'            => 'Footer Menu',
          'depth'           => 0,
          'items_wrap'      => '<ul class="footer__menu">%3$s</ul>'
        );

        wp_nav_menu($menu_params);
         ?>
       </div>
    <p>&copy; <?php echo date("Y"); ?></p>
  </div>
</footer>
<?php wp_footer() ?>
</body>
</html>
