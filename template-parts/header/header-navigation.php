<nav class="navbar navbar-expand-lg navbar-dark zenethwp-bg-default">
  <div class="container">
    <?php get_template_part( 'template-parts/header/header', 'branding' ); ?>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#primary-menu-wrap" aria-controls="primary-menu-wrap" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
      wp_nav_menu( array(
  			'theme_location'  => 'menu-1',
  			'menu_id'         => 'primary-menu',
  			'container'       => 'div',
  			'container_class' => 'collapse navbar-collapse',
  			'container_id'    => 'primary-menu-wrap',
  			'menu_class'      => 'navbar-nav ml-auto',
              'fallback_cb'     => '__return_false',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 2,
              'walker'          => new Zeneth_WalkerNav()
  		) );
    ?>
  </div>
</nav>
