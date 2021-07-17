<div class="main-header"> 
      <div class="container"> 
        <nav class="navbar navbar-expand-lg navbar-light"> 
          <a class="navbar-brand logo" href="index-2.html"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/logos/logo-site.svg" class="style-svg"> </a> 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span> 
          </button>           
          <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
            <?php wp_nav_menu( array(
            'menu' => 'primary',
            'menu_class' => 'navbar-nav ml-auto',
            'container' => '',
            'depth' => '2',
            'theme_location' => 'primary',
            'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
            'walker' => new wp_bootstrap4_navwalker()
        ) ); ?>             
          </div>           
        </nav>         
      </div>       
    </div>