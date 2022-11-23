<?php
    /* get_headers(); */
    wp_head();
?>
<?php
    wp_nav_menu([
        'theme_location' => 'primary',
        'menu_class' => '',

    ]); 
?>

<?php if (have_posts()) : ?>
  <?php while (have_posts()) {
    the_post();
    the_content(); 
    the_title();
}
?>
 <?php endif; ?>