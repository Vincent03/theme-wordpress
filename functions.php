<?php if ( function_exists('register_sidebar') ) register_sidebar( array(
       'name'          => __( 'Sidebar', 'Wordpress' ),
       'id'            => 'sidebar-1',
       'description'   => __( 'Ajoutez un Widget ici pour qu\'il puisse apparaître dans votre sidebar.', 'Wordpress' ),
       'before_widget' => '<section id="%1$s" class="widget %2$s">',
       'after_widget'  => '</section>',
       'before_title'  => '<h2 class="widget-title">',
       'after_title'   => '</h2>',
   ) ); ?>
