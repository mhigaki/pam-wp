<div class="blog-banner"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-lg-12"> 
              <h2><?php echo single_cat_title(); ?></h2> 
              <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, 'Home'); ?><?php if( !empty( $breadcrumbs ) ) : ?><ul class="breadcrumbs" cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item=".active" cms-breadcrumbs-last-item-name=".active" cms-breadcrumbs-home cms-breadcrumbs-item="^.menu | .menu-item"> 
                <li> 
                  <a href="index-2.html"><?php _e( 'Home', 'pam' ); ?></a> 
                </li>                 
                <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?><li class="active"><?php echo $breadcrumb[ 'name' ]; ?></li>                 
              <ul><?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?><?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?><li><a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a></li><?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?><span>/</span><?php endif; ?><?php endfor; ?></ul></ul><?php endif; ?>               
            </div>             
          </div>           
        </div>         
      </div>