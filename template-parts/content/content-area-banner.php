<div class="banner" id="banner"> 
      <?php
    $sliders_query_args = array(
      'post_type' => 'sliders',
      'posts_per_page' => 3,
      'order' => 'ASC',
      'orderby' => 'rand'
    )
  ?><?php $sliders_query = new WP_Query( $sliders_query_args ); ?><?php if ( $sliders_query->have_posts() ) : ?><div id="bannerCarousole" class="carousel slide" data-ride="carousel"> 
        <div class="carousel-inner"> 
          <?php $sliders_query_item_number = 0; ?><?php while ( $sliders_query->have_posts() ) : $sliders_query->the_post(); ?><div class="carousel-item banner-max-height<?php if( $sliders_query_item_number == 0) echo ' active'; ?> <?php echo join( ' ', get_post_class( '' ) ) ?>" id="post-<?php the_ID(); ?>"> 
            <?php echo PG_Image::getPostImage( null, 'large', array(
                'class' => 'd-block w-100',
                'alt' => __( 'Banner', 'pam' )
            ), null, null ) ?> 
            <div class="carousel-caption banner-slider-inner d-flex h-100 text-center"> 
              <div class="carousel-content container"> 
                <div class="text-center"> 
                  <h3 class="text-uppercase" data-animation="animated fadeInDown delay-05s"><?php the_title(); ?></h3> 
                  <p data-animation="animated fadeInUp delay-10s"><?php the_content(); ?></p> 
                  <?php if ( get_field( 'url_da_pagina' ) ) : ?><a class="btn btn-white" href="<?php echo get_field( 'url_da_pagina' ); ?>" rel="nofollow noreferrer noopener"><?php _e( 'Saiba Mais', 'pam' ); ?></a><?php endif; ?> 
                </div>                 
              </div>               
            </div>             
          </div><?php $sliders_query_item_number++; ?><?php endwhile; ?><?php wp_reset_postdata(); ?>           
                     
                     
        </div>         
        <a class="carousel-control-prev" href="#bannerCarousole" role="button" data-slide="prev"> <span class="slider-mover-left" aria-hidden="true"> <i class="fa fa-angle-left"></i> </span> </a>
        <a class="carousel-control-next" href="#bannerCarousole" role="button" data-slide="next"> <span class="slider-mover-right" aria-hidden="true"> <i class="fa fa-angle-right"></i> </span> </a> 
      </div><?php endif; ?>       
      <!-- Search Section start -->       
      <div class="search-section search-area-3 d-none d-xl-block d-lg-block" id="search-area-3"> 
        <div class="container"> 
          <div class="search-section-area ssa"> 
            <div class="search-area-inner"> 
              <div class="search-contents"> 
                <form method="GET"> 
                  <div class="row"> 
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
                      <div class="form-group"> 
                        <select class="selectpicker search-fields" name="area"> 
                          <option><?php _e( 'Area', 'pam' ); ?></option>                           
                          <option><?php _e( '3000', 'pam' ); ?></option>                           
                          <option><?php _e( '2600', 'pam' ); ?></option>                           
                          <option><?php _e( '2200', 'pam' ); ?></option>                           
                          <option><?php _e( '1800', 'pam' ); ?></option>                           
                        </select>                         
                      </div>                       
                    </div>                     
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
                      <div class="form-group"> 
                        <select class="selectpicker search-fields" name="property-status"> 
                          <option><?php _e( 'Property Status', 'pam' ); ?></option>                           
                          <option><?php _e( 'For Sale', 'pam' ); ?></option>                           
                          <option><?php _e( 'For Rent', 'pam' ); ?></option>                           
                        </select>                         
                      </div>                       
                    </div>                     
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
                      <div class="form-group"> 
                        <select class="selectpicker search-fields" name="property-types"> 
                          <option><?php _e( 'Property Types', 'pam' ); ?></option>                           
                          <option><?php _e( 'Apartments', 'pam' ); ?></option>                           
                          <option><?php _e( 'Houses', 'pam' ); ?></option>                           
                          <option><?php _e( 'Commercial', 'pam' ); ?></option>                           
                          <option><?php _e( 'Garages', 'pam' ); ?></option>                           
                        </select>                         
                      </div>                       
                    </div>                     
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
                      <div class="form-group"> 
                        <select class="selectpicker search-fields" name="location"> 
                          <option><?php _e( 'Location', 'pam' ); ?></option>                           
                          <option><?php _e( 'United States', 'pam' ); ?></option>                           
                          <option><?php _e( 'United Kingdom', 'pam' ); ?></option>                           
                          <option><?php _e( 'American Samoa', 'pam' ); ?></option>                           
                          <option><?php _e( 'Belgium', 'pam' ); ?></option>                           
                        </select>                         
                      </div>                       
                    </div>                     
                  </div>                   
                  <div class="row"> 
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
                      <div class="form-group"> 
                        <select class="selectpicker search-fields" name="max-area"> 
                          <option><?php _e( 'Max Area (Sq Ff)', 'pam' ); ?></option>                           
                          <option><?php _e( '2400', 'pam' ); ?></option>                           
                          <option><?php _e( '2800', 'pam' ); ?></option>                           
                          <option><?php _e( '3200', 'pam' ); ?></option>                           
                          <option><?php _e( '3600', 'pam' ); ?></option>                           
                          <option><?php _e( '4000', 'pam' ); ?></option>                           
                        </select>                         
                      </div>                       
                    </div>                     
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
                      <div class="form-group"> 
                        <select class="selectpicker search-fields" name="min-area"> 
                          <option><?php _e( 'Min Area (Sq Ff)', 'pam' ); ?></option>                           
                          <option><?php _e( '2400', 'pam' ); ?></option>                           
                          <option><?php _e( '2800', 'pam' ); ?></option>                           
                          <option><?php _e( '3200', 'pam' ); ?></option>                           
                          <option><?php _e( '3600', 'pam' ); ?></option>                           
                          <option><?php _e( '4000', 'pam' ); ?></option>                           
                        </select>                         
                      </div>                       
                    </div>                     
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
                      <div class="range-slider"> 
                        <div data-min="0" data-max="150000" data-unit="USD" data-min-name="min_price" data-max-name="max_price" class="range-slider-ui ui-slider" aria-disabled="false"></div>                         
                        <div class="clearfix"></div>                         
                      </div>                       
                    </div>                     
                    <div class="col-lg-3 col-md-6 col-sm-6 col-6"> 
                      <div class="form-group"> 
                        <button class="search-button"><?php _e( 'Search', 'pam' ); ?></button>                         
                      </div>                       
                    </div>                     
                  </div>                   
                </form>                 
              </div>               
            </div>             
          </div>           
        </div>         
      </div>       
      <!-- Search Section end -->       
    </div>