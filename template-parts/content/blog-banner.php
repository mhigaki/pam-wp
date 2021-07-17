<div class="blog-banner"> 
        <div class="container"> 
          <div class="row"> 
            <div class="col-lg-12"> 
              <h2><?php wp_title( '' ); ?></h2> 
              <?php $breadcrumbs = PG_Helper::getBreadcrumbs( 'categories', true, 'Home'); ?><?php if( !empty( $breadcrumbs ) ) : ?><ul class="breadcrumbs" cms-breadcrumbs-home cms-breadcrumbs-separator="span" cms-breadcrumbs-last-item=".active" cms-breadcrumbs-last-item-name=".active"> 
                <li><?php for( $breadcrumbs_i = 0; $breadcrumbs_i < count( $breadcrumbs ) - 1; $breadcrumbs_i++) : ?><?php $breadcrumb = $breadcrumbs[ $breadcrumbs_i ]; ?><a href="<?php echo esc_url( $breadcrumb[ 'link' ] ); ?>"><?php echo $breadcrumb[ 'name' ]; ?></a><?php if( $breadcrumbs_i < count( $breadcrumbs ) - 1 ) : ?><span>/</span><?php endif; ?><?php endfor; ?></li>                 
                <?php $breadcrumb = $breadcrumbs[ count( $breadcrumbs ) - 1 ]; ?><li class="active"><?php echo $breadcrumb[ 'name' ]; ?></li>                 
              </ul><?php endif; ?>               
            </div>             
          </div>           
        </div>         
      </div>